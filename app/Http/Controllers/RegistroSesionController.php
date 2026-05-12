<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistroSesionRequest;

class RegistroSesionController extends Controller
{
    public function signup(RegistroSesionRequest $request)
    {
        Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password)

        ]);

        return redirect()
            ->route('principal')
            ->with('success', 'Cuenta registrada correctamente');
    }
}