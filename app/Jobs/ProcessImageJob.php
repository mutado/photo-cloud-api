<?php

namespace App\Jobs;

use App\Models\OriginalPhoto;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProcessImageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected OriginalPhoto $photo;
    protected array|null $exif;

    public function __construct(OriginalPhoto $photo, array|null $exif)
    {
        $this->photo = $photo;
        $this->exif = $exif;
    }

    public function handle()
    {
        $imageFullPath = Storage::disk('local')->path('originals/' . $this->photo->path);
        $image = Image::make($imageFullPath);
        $location = null;

        // if lat and long are set try to get the address
        if ($this->exif && isset($this->exif['GPSLatitude']) && isset($this->exif['GPSLongitude'])) {
            $coords = $this->convertCoordinatesToNumber($this->exif['GPSLatitude'][0], $this->exif['GPSLatitude'][1], $this->exif['GPSLatitude'][2], $this->exif['GPSLongitude'][0], $this->exif['GPSLongitude'][1], $this->exif['GPSLongitude'][2]);
            $location = [
                'lat' => $coords[0],
                'long' => $coords[1],
            ];
            $response = Http::get('http://api.positionstack.com/v1/reverse?access_key=' . env('POSITIONSTACK_API_KEY') . '&query=' . $coords[0] . ',' . $coords[1]);
            if ($response->successful()) {
                $location['address'] = $response->json()['data'][0]['label'];
                $location['city'] = $response->json()['data'][0]['locality'];
                $location['country'] = $response->json()['data'][0]['country'];
                $location['state'] = $response->json()['data'][0]['region'];
                $location['zip'] = $response->json()['data'][0]['postal_code'];
            }
        }

        $tags = [
            'width' => $image->width(),
            'height' => $image->height(),
            'extension' => $image->extension,
            'mime' => $image->mime,
            'basename' => $image->basename,
            'filename' => $image->filename,
            'location' => $location,
            'size' => $image->filesize(),
        ];

        if ($this->exif) {
            $tags['make'] = $this->exif['Make'] ?? null;
            $tags['model'] = $this->exif['Model'] ?? null;
            $tags['exposure'] = $this->exif['ExposureTime'] ?? null;
            $tags['aperture'] = $this->exif['COMPUTED']['ApertureFNumber'] ?? null;
            $tags['iso'] = $this->exif['ISOSpeedRatings'] ?? null;
            $tags['focal_length'] = $this->exif['FocalLength'] ?? null;
            $tags['shutter_speed'] = $this->exif['ShutterSpeedValue'] ?? null;
            $tags['created_at'] = $this->exif['DateTimeOriginal'] ?? null;
            $tags['lens'] = $this->exif['UndefinedTag:0xA434'] ?? null;
        }

        $this->photo->update([
            'tags' => $tags,
            'city' => $location['city'] ?? null,
            'country' => $location['country'] ?? null,
            'photo_date' => isset($this->exif['DateTimeOriginal']) ? Carbon::createFromFormat('Y:m:d H:i:s', $this->exif['DateTimeOriginal']) : Carbon::now(),
        ]);
    }

    public function convertExifCoordinateUnit($coordinate): float|int
    {
        return explode('/', $coordinate)[0] / explode('/', $coordinate)[1];
    }

    public function convertCoordinatesToNumber($latDeg, $latMin, $latSec, $longDeg, $longMin, $longSec): array
    {
        $latDeg = $this->convertExifCoordinateUnit($latDeg);
        $latSec = $this->convertExifCoordinateUnit($latSec);
        $latMin = $this->convertExifCoordinateUnit($latMin);
        $longDeg = $this->convertExifCoordinateUnit($longDeg);
        $longSec = $this->convertExifCoordinateUnit($longSec);
        $longMin = $this->convertExifCoordinateUnit($longMin);
        $lat = $latDeg + ($latMin / 60) + ($latSec / 3600);
        $long = $longDeg + ($longMin / 60) + ($longSec / 3600);
        return [$lat, $long];
    }
}
