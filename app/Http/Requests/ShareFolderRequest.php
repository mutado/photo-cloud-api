<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShareFolderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'is_public' => ['boolean'],
            'is_password_protected' => ['boolean'],
            'password' => ['string', 'required_if:is_password_protected,true'],
            'emails' => ['array', 'required', 'min:1'],
            'emails.*' => ['required', 'email', 'distinct:ignore_case'],
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'is_public' => [
                'description' => 'Whether the folder is public or not. If the folder is public, it will be accessible by anyone with the link. If the folder is not public, it will be accessible only by the emails provided.',
                'example' => true,
            ],
            'is_password_protected' => [
                'description' => 'Whether the folder is password protected or not. If the folder is password protected, it will be accessible only by the emails provided and the password. If the folder is not password protected, it will be accessible only by the emails provided authorized by email code.',
                'example' => true,
            ],
            'password' => [
                'description' => 'The password to protect the folder with. This field is required if the folder is password protected.',
                'example' => 'password',
            ],
            'emails' => [
                'description' => 'The emails to share the folder with. This field is required and must contain at least one email.',
                'example' => ['test@example.com'],
            ],
            'emails.*' => [
                'description' => 'The email to share the folder with. This field is required and must be a valid email.',
                'example' => 'test@example.com',
            ]
        ];
    }

}
