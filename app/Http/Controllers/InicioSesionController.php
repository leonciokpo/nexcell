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

            session([
                'usuario_id' => $usuario->id,
                'usuario_nombre' => $usuario->nombre,
                'perfil_id' => $usuario->perfil_id,
            ]);

            if($usuario->perfil_id == 1) {
                return redirect('/admin');
            }

            return redirect()
                ->route('principal')
                ->with('success', 'Inicio de sesión exitoso');
        }

        return back()
            ->withInput()
            ->with('error', 'Email o contraseña incorrectos');
    }
}