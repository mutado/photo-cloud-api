<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\SharedFolder */
class SharedFolderResource extends JsonResource
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
            'user_id' => $this->user_id,
            'is_public' => $this->is_public,
            'is_password_protected' => $this->is_password_protected,
            'password' => $this->password,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


            'folder' => new FolderResource($this->whenLoaded('folder')),
            'emails' => SharedFolderEmailResource::collection($this->whenLoaded('emails')),
        ];
    }
}
