<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;


class ValidateRequestData extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ?? '';

            $rules = [
                'name' => [
                    'required',
                    'string',
                    'min:3',
                    'max:255'
                ],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users,email,{$id},id'
                ],
                'password' => [
                    'required', Rules\Password::defaults(),
                ],
                'birthday'  => [
                    'required',
                    'date'
                ],
                'cpf' => [
                    'required',
                    'string',
                    'unique:users,cpf,{$id},id',
                    'min:11'
                ],
            ];

        return $rules;
    }
}
