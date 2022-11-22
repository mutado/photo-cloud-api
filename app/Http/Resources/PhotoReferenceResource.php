<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\PhotoReference */
class PhotoReferenceResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,

            'folder_id' => $this->folder_id,
            'photo_id' => $this->photo_id,

            'folder' => new FolderResource($this->whenLoaded('folder')),
            'photo' => new OriginalPhotoResource($this->whenLoaded('photo')),
        ];
    }
}
