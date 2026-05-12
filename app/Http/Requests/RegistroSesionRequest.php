<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistroSesionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|min:3|max:50',
            'apellido' => 'required|min:3|max:50',
            'email' => 'required|email|unique:usuarios,email',
            'telefono' => 'nullable|min:8|max:20',
            'password' => 'required|min:8|confirmed'
        ];
    }

    public function messages(): array
    {
        return [

            'nombre.required' => 'El nombre es obligatorio',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres',
            'nombre.max' => 'El nombre no puede superar los 50 caracteres',

            'apellido.required' => 'El apellido es obligatorio',
            'apellido.min' => 'El apellido debe tener al menos 3 caracteres',
            'apellido.max' => 'El apellido no puede superar los 50 caracteres',

            'email.required' => 'El email es obligatorio',
            'email.email' => 'Ingresá un email válido',
            'email.unique' => 'Ese email ya está registrado',

            'telefono.min' => 'El teléfono debe tener al menos 8 caracteres',
            'telefono.max' => 'El teléfono no puede superar los 20 caracteres',

            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ];
    }
}