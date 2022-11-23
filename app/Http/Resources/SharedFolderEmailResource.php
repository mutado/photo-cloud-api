<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\SharedFolderEmail */
class SharedFolderEmailResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'shared_folder_id' => $this->shared_folder_id,

            'shared_folder' => new SharedFolderResource($this->whenLoaded('sharedFolder')),
        ];
    }
}
