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
        if (isset($this->tags->width) && isset($this->tags->height)) {
            $width = $this->tags->width;
            $height = $this->tags->height;
        } else {
            $image = getimagesize(storage_path('app/originals/' . $this->path));
            $width = $image[0];
            $height = $image[1];
        }
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'path' => route('photos.show', $this->id) . '.jpg',
            'references' => PhotoReferenceResource::collection($this->whenLoaded('photoReferences')),
            'favorite' => $this->favorite,
            'hidden' => $this->hidden,
            'tags' => $this->tags,
            'width' => $width,
            'height' => $height,
            'country' => $this->country,
            'city' => $this->city,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'photo_date' => $this->photo_date,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
