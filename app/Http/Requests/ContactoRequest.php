<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
    $rules = [
        'motivo'   => 'required|string|max:200',
        'consulta' => 'required|string|min:10|max:500',
    ];

    if (!session('usuario_id')) {
        $rules['nombre'] = 'required|max:100';
        $rules['email'] = 'required|email|max:150';
    }

    return $rules;
}

    public function messages(): array{
    return [
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.max' => 'El nombre no debe sobrepasar los 100 caracteres.',

        'email.required' => 'El email es obligatorio.',
        'email.max' => 'El email no debe sobrepasar los 150 caracteres.',
        'email.email' => 'Formato de email inválido.',

        'consulta.required' => 'El mensaje es obligatorio.',
        'consulta.min' => 'Debe tener al menos 10 caracteres.',
        'consulta.max' => 'El mensaje no debe sobrepasar los 500 caracteres.',

        'motivo.required' => 'El motivo es obligatorio.',
        'motivo.max' => 'El motivo no debe sobrepasar los 200 caracteres.',
        ];
    }
}