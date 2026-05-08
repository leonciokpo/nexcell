<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;

class ContactoController extends Controller{

    public function procesar(Request $request){
        $nombre=$request->input('nombre');
        $email=$request->input('email');
        $mensaje=$request->input('mensaje');
        return view('frontend.exito',['nombre'=>$nombre, 'email'=>$email, 'mensaje'=>$mensaje]);
    }

    public function store_contact(ContactoRequest $request){
        $datos = $request->validated();

        $nombre = $datos['nombre'];
        $email = $datos['email'];
        $motivo = $datos['motivo'];
        $consulta = $datos['consulta'];

        return redirect()->back()->with('success_message', 'Tu consulta ha sido enviada correctamente.');
    }
}