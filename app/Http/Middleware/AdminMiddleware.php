<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response{
        if (session('usuario_perfil') != 1) {
        abort(403, 'Acceso no autorizado');
    }

    return $next($request);
    }
}