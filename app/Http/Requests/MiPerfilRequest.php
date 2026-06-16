<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiPerfilRequest extends FormRequest
{
    public function authorize(): bool{
    return true;
}

public function rules(): array{
    return [
        'password_actual' => 'required',
        'password' => 'required|min:8|confirmed',
    ];
}

    public function messages(): array
    {
        return [
            'password_actual.required' => 'Debe ingresar su contraseña actual.',

            'password.required' => 'Debe ingresar una nueva contraseña.',
            'password.min' => 'La nueva contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',
        ];
    }
}