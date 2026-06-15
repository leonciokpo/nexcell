<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NoAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $rol): Response{
// Rutas que requieren sesión
if (!session('usuario_id') && $rol != 'noadmin') {
return redirect()->route('inicioSesion');
}

// ADMIN
if ($rol == 'admin' && session('perfil_id') != 1) {
    abort(403, 'Acceso no autorizado');
}

// CLIENTE
if ($rol == 'cliente' && session('perfil_id') != 2) {
    abort(403, 'Acceso no autorizado');
}

// BLOQUEAR ADMINS EN LA TIENDA
if ($rol == 'noadmin' && session('perfil_id') == 1) {
    return redirect()->route('admin.dashboard');
}

return $next($request);


}

}