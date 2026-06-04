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
            'password' => 'nullable|min:6|confirmed'
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;

        if($request->filled('password')) {

            $usuario->password = Hash::make($request->password);

        }

        $usuario->save();

        // actualizar sesión
        session([
            'usuario_nombre' => $usuario->nombre
        ]);

        return back()->with(
            'success',
            'Perfil actualizado correctamente'
        );
    }
}