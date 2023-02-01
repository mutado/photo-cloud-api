<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpeg,gif,heic'],
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'photo' => [
                'description' => 'The photo to upload. This field is required and must be an image.',
                'example' => 'photo',
            ]
        ];
    }
}
