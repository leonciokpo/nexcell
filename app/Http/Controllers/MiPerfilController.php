<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Http\Requests\MiPerfilRequest;

class MiPerfilController extends Controller
{
    public function index()
    {
        $usuario = Usuario::find(session('usuario_id'));

        return view(
            'backend.usuarios.mi-perfil',
            compact('usuario')
        );
    }

    public function update(MiPerfilRequest $request)
{
    $usuario = Usuario::findOrFail(session('usuario_id'));

    if (
        !Hash::check(
            $request->password_actual,
            $usuario->password
        )
    ) {
        return back()->withErrors([
            'password_actual' => 'La contraseña actual es incorrecta.'
        ]);
    }

    $usuario->update([
        'password' => Hash::make($request->password)
    ]);

    return back()->with(
        'success',
        'Contraseña actualizada correctamente.'
    );
}
}