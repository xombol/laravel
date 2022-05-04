<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest {
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'min:5'
            ],
            'email' =>[
                'required',
                'email',
            ],
            'password' => [
                Password::min(5)->letters()->mixedCase()->numbers()
            ]
        ];
    }
}
