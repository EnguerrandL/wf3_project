<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return  [
            'nom' => 'required',
            'description' => 'required',
            'prix' =>  'int',
            'categorie_id' =>  'int',
        ];
    }
}
