<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\ContactoRequest;
use Illuminate\Http\Request;
use App\Models\Usuario;

class ContactoController extends Controller{
    public function procesar(ContactoRequest $request){
    $datos = $request->validated();

    if (session('usuario_id')) {

        $usuario = Usuario::findOrFail(session('usuario_id'));

        $email = $usuario->email;

    } else {

        $email = $datos['email'];

    }

    Contacto::create([
        'nombre'   => $datos['nombre'],
        'email'    => $email,
        'motivo'   => $datos['motivo'],
        'consulta' => $datos['consulta'],
    ]);

    return redirect()->back()->with(
        'success_message',
        'Tu consulta ha sido enviada correctamente.'
    );
}

    // Ver consultas
    public function index()
    {
        $consultas = Contacto::latest()->get();

        return view(
            'backend.admin.vistaConsultas',
            compact('consultas')
        );
    }

    public function toggleLeido($id){
    $consulta = Contacto::findOrFail($id);

    $consulta->leido = !$consulta->leido;

    $consulta->save();

    return back()->with(
        'success',
        'Estado actualizado correctamente'
    );
    }
}