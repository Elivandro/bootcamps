<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;


class ValidateFormsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:50|min:3',
            'email' => 'required|email|unique:users,email,{$id},id',
            'password' => ['required', Rules\Password::defaults()],
            'image' => 'mimes:jpeg,png,jpg',
            // 'cpf' => '',
            // 'birthday' => '',
            // 'phone' => '',
            // 'city' => '',
            // 'state' => '',
            // 'category' => '',
            // 'quantity' => '',
            // 'cost' => '',
            // 'sale' => '',
        ];
    }
}
