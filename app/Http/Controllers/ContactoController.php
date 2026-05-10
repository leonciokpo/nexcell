<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function procesar(ContactoRequest $request)
    {
        $datos = $request->validated();

        Contacto::create([
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'motivo' => $datos['motivo'],
            'consulta' => $datos['consulta'],
        ]);

        return redirect()->back()->with(
            'success_message',
            'Tu consulta ha sido enviada correctamente.'
        );
    }
}