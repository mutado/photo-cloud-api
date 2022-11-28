<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSharedFolderEmailRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'unique:shared_folder_emails,email,NULL,shared_folder_id,shared_folder_id,' . $this->route('shared')?->id],
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'email' => [
                'description' => 'The email to share the folder with. This field is required and must be a valid email.',
                'example' => 'test@example.com',
            ]
        ];
    }
}
