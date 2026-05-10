<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function procesar(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $mensaje = $request->input('mensaje');

        return view('frontend.exito', [
            'nombre' => $nombre,
            'email' => $email,
            'mensaje' => $mensaje
        ]);
    }

    public function store_contact(ContactoRequest $request)
    {
        $datos = $request->validated();

        Contacto::create([
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'mensaje' => $datos['mensaje'],
        ]);

        return redirect()->back()->with('success_message', 'Tu consulta ha sido enviada correctamente.');
    }
}