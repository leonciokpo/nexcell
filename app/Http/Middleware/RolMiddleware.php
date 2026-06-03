<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{
    public function handle(Request $request, Closure $next, $rol): Response
    {
        if (!session('usuario_id')) {
            return redirect()->route('login');
        }

        // ADMIN
        if ($rol == 'admin' && session('perfil_id') != 1) {
            abort(403, 'Acceso no autorizado');
        }

        // CLIENTE
        if ($rol == 'cliente' && !in_array(session('perfil_id'), [1, 2])) {
            abort(403, 'Acceso no autorizado');
        }

        return $next($request);
    }
}