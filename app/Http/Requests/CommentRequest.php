<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return  [
            'pseudo' => 'required',
            'content' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }
}

