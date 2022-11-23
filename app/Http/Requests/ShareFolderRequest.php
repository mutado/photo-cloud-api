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
}
