<?php

namespace App\Http\Resources;

use App\Models\OriginalPhoto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'path' => route('original-photos.download', $this->id),
            'references' => PhotoReferenceResource::collection($this->whenLoaded('photoReferences')),
            'width' => $size[0],
            'height' => $size[1],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
