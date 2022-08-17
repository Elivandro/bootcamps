<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValideImageFormat extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules['image'] = [
                    'file',
                    'mimes:jpeg,png,jpg,gif,svg',
                    'max:2048'
        ];

        return $rules;
    }
}
