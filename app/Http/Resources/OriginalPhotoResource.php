<?php

namespace App\Http\Resources;

use App\Models\OriginalPhoto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/** @mixin OriginalPhoto */
class OriginalPhotoResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $size = getimagesize(storage_path('app/' . $this->path));
        $imageFullPath = Storage::disk('local')->path($this->path);
        $image = Image::make($imageFullPath);
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'path' => route('photos.show', $this->id).'.'.$image->extension,
            'references' => PhotoReferenceResource::collection($this->whenLoaded('photoReferences')),
            'width' => $size[0],
            'height' => $size[1],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
