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
        return [
            'nombre'=>'required|string|max:100',
            'email'=>'required|email|max:150',
            'mensaje'=>'required|string|min:10|max:500',
        ];
    }

    public function messages(): array
    {
        return[
            'nombre.required'=>'El nombre es obligatorio.',
            'nombre.max'=>'El nombre no debe sobrepasar los 100 caracteres.',
            'email.required'=>'El email es obligatorio.',
            'email.max'=>'El email no debe sobrepasar los 100 caracteres.',
            'mensaje.required'=>'El mensaje es obligatorio.',
            'email.email'=>'Formato de email inválido.',
            'mensaje.min'=>'Debe tener al menos 10 caracteres.',
            'mensaje.max'=>'El mensaje no debe sobrepasar los 500 caracteres.',
        ];
    }
}
