<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmarCompraRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [

            // Dirección
            'codigo_postal' => 'required|max:20',
            'calle'         => 'required|max:100',
            'numero'        => 'required|max:20',
            'barrio'        => 'nullable|max:100',
            'ciudad'        => 'required|max:100',
            'provincia'     => 'required|max:100',

            // Pago
            'metodo_pago'   => 'required|in:efectivo,tarjeta',

            // Tarjeta (obligatorios si se elige tarjeta)
            'numero_tarjeta' => 'required_if:metodo_pago,tarjeta|nullable|digits_between:13,19',
                'titular'        => 'required_if:metodo_pago,tarjeta|nullable|max:100',
                'cvv'            => 'required_if:metodo_pago,tarjeta|nullable|digits_between:3,4',
                'dni'            => 'required_if:metodo_pago,tarjeta|nullable|digits_between:7,8',
                'telefono'       => 'required_if:metodo_pago,tarjeta|nullable|min:8|max:20',
                'vencimiento' => 'required_if:metodo_pago,tarjeta|nullable|date_format:m/y',
        ];
    }

    public function messages(): array
    {
        return [

            // Dirección
            'codigo_postal.required' => 'El código postal es obligatorio',
            'calle.required'         => 'La calle es obligatoria',
            'numero.required'        => 'El número es obligatorio',
            'ciudad.required'        => 'La ciudad es obligatoria',
            'provincia.required'     => 'La provincia es obligatoria',

            // Pago
            'metodo_pago.required' => 'Debe seleccionar un método de pago',
            'metodo_pago.in'       => 'El método de pago seleccionado no es válido',

            // Tarjeta
            'numero_tarjeta.required_if' => 'Debe ingresar el número de tarjeta',
            'numero_tarjeta.digits_between' => 'La tarjeta debe tener entre 13 y 19 dígitos',

            'titular.required_if' => 'Debe ingresar el nombre del titular',

            'vencimiento.required_if' => 'Debe ingresar la fecha de vencimiento',

            'cvv.required_if' => 'Debe ingresar el código de seguridad',
            'cvv.digits_between' => 'El CVV debe tener 3 o 4 dígitos',

            'dni.required_if' => 'Debe ingresar el DNI del titular',
            'dni.digits_between' => 'El DNI debe tener 7 u 8 dígitos',

            'telefono.required_if' => 'Debe ingresar un teléfono de contacto',
            'telefono.min' => 'El teléfono debe tener al menos 8 caracteres',
            'telefono.max' => 'El teléfono no puede superar los 20 caracteres',

            'vencimiento.regex' => 'La fecha debe tener formato MM/AA',
        ];
    }
}