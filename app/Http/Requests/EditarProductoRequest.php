<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarProductoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'nombre' => 'required|min:3|max:255',

            'descripcion' => 'required|min:10',

            'precio' => 'required|numeric|min:1',

            'descuento' => 'nullable|numeric|min:0|max:100',

            'stock' => 'required|integer|min:0',

            'destacado' => 'required|boolean',

            'marca_id' => 'required|exists:marcas,id',

            'categoria_id' => 'required|exists:categorias,id',

            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ];
    }

    public function messages(): array
    {
        return [

            // NOMBRE
            'nombre.required' => 'El nombre del producto es obligatorio',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres',
            'nombre.max' => 'El nombre no puede superar los 255 caracteres',

            // DESCRIPCION
            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.min' => 'La descripción debe tener al menos 10 caracteres',

            // PRECIO
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser numérico',
            'precio.min' => 'El precio debe ser mayor a 0',

            // DESCUENTO
            'descuento.numeric' => 'El descuento debe ser numérico',
            'descuento.min' => 'El descuento no puede ser menor a 0',
            'descuento.max' => 'El descuento no puede superar el 100%',

            // STOCK
            'stock.required' => 'El stock es obligatorio',
            'stock.integer' => 'El stock debe ser un número entero',
            'stock.min' => 'El stock no puede ser negativo',

            // DESTACADO
            'destacado.required' => 'Debes indicar si el producto es destacado',

            // MARCA
            'marca_id.required' => 'Debes seleccionar una marca',
            'marca_id.exists' => 'La marca seleccionada no existe',

            // CATEGORIA
            'categoria_id.required' => 'Debes seleccionar una categoría',
            'categoria_id.exists' => 'La categoría seleccionada no existe',

            // IMAGEN
            'imagen.image' => 'El archivo debe ser una imagen',
            'imagen.mimes' => 'La imagen debe ser JPG, JPEG, PNG o WEBP',
            'imagen.max' => 'La imagen no puede superar los 2MB',
        ];
    }
}