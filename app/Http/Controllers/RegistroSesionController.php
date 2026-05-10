<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroSesionRequest;

class RegistroSesionController extends Controller
{
    public function signup(RegistroSesionRequest $request)
    {
        $nombre = $request->nombre;
        $email = $request->email;

        // MÁS ADELANTE:
        // Acá iría la creación real del usuario

        return redirect()
            ->route('principal')
            ->with('success', 'Cuenta registrada correctamente');
    }
}