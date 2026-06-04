<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

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

    public function update(Request $request)
{
    $usuario = Usuario::find(session('usuario_id'));

    $request->validate([
        'nombre' => 'required|max:255',
        'email' => 'required|email',

        'password_actual' => 'nullable',
        'password' => 'nullable|min:6|confirmed'
    ]);

    $usuario->nombre = $request->nombre;
    $usuario->email = $request->email;

    // SI quiere cambiar contraseña
    if($request->filled('password')) {

        // verificar contraseña actual
        if(
            !Hash::check(
                $request->password_actual,
                $usuario->password
            )
        ) {

            return back()->with(
                'error',
                'La contraseña actual es incorrecta'
            );

        }

        // guardar nueva contraseña
        $usuario->password = Hash::make(
            $request->password
        );
    }

    $usuario->save();

    session([
        'usuario_nombre' => $usuario->nombre
    ]);

    return back()->with(
        'success',
        'Perfil actualizado correctamente'
    );
}
}