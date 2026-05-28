<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->buscar;

        $administradores = Usuario::withTrashed()
            ->where('perfil_id', 1)
            ->when($buscar, function ($query) use ($buscar) {

                $query->where(function ($q) use ($buscar) {

                    $q->where('nombre', 'like', "%{$buscar}%")
                      ->orWhere('email', 'like', "%{$buscar}%");

                });

            })
            ->get();

        $clientes = Usuario::withTrashed()
            ->where('perfil_id', 2)
            ->when($buscar, function ($query) use ($buscar) {

                $query->where(function ($q) use ($buscar) {

                    $q->where('nombre', 'like', "%{$buscar}%")
                      ->orWhere('email', 'like', "%{$buscar}%");

                });

            })
            ->get();

        return view(
            'backend.admin.vistaUsuarios',
            compact('administradores', 'clientes')
        );
    }

    public function cambiarRol(Request $request, $id)
    {
        if(session('perfil_id') != 1) {
            abort(403);
        }

        $request->validate([
            'perfil_id' => 'required|in:1,2'
        ]);

        $usuario = Usuario::withTrashed()->findOrFail($id);

        if(
            $usuario->id == session('usuario_id')
            && $request->perfil_id == 2
        ){
            return back()->with(
                'error',
                'No puedes quitarte tu propio rol de administrador'
            );
        }

        $usuario->perfil_id = $request->perfil_id;

        $usuario->save();

        return back()->with(
            'success',
            'Rol actualizado correctamente'
        );
    }

    public function destroy($id)
    {
        if(session('perfil_id') != 1) {
            abort(403);
        }

        $usuario = Usuario::withTrashed()->findOrFail($id);

        if($usuario->id == session('usuario_id')) {

            return back()->with(
                'error',
                'No puedes eliminar tu propia cuenta'
            );
        }

        if(
            $usuario->perfil_id == 1
            && Usuario::where('perfil_id', 1)->count() <= 1
        ){
            return back()->with(
                'error',
                'No puedes eliminar el último administrador'
            );
        }

        // SI ESTÁ ELIMINADO → RESTAURAR
        if($usuario->trashed()) {

            $usuario->restore();

            return back()->with(
                'success',
                'Usuario activado correctamente'
            );
        }

        // SI ESTÁ ACTIVO → DESACTIVAR
        $usuario->delete();

        return back()->with(
            'success',
            'Usuario desactivado correctamente'
        );
    }
}