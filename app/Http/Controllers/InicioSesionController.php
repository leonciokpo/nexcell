<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InicioSesionRequest;

class InicioSesionController extends Controller
{
    public function login(InicioSesionRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        // DEMO LOGIN
        // Más adelante acá iría Auth::attempt()

        if($email === 'admin@nexcell.com' && $password === '12345678'){
            
            return redirect()
                ->route('principal')
                ->with('success', 'Inicio de sesión exitoso');
        }

        return back()
            ->withInput()
            ->with('error', 'Email o contraseña incorrectos');
    }
}
