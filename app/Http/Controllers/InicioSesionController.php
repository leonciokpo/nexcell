<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\InicioSesionRequest;

class InicioSesionController extends Controller
{
    public function login(InicioSesionRequest $request)
    {
           $usuario = Usuario::where('email', $request->email)->first();

        if($usuario && Hash::check($request->password, $usuario->password)) {

            return redirect()
                ->route('principal')
                ->with('success', 'Inicio de sesión exitoso');
        }

        return back()
            ->withInput()
            ->with('error', 'Email o contraseña incorrectos');
    }
}