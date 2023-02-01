<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoArrayRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'photos' => 'required|array|min:1',
            'photos.*' => 'exists:original_photos,id',
            'value' => 'required|boolean',
        ];
    }
}
