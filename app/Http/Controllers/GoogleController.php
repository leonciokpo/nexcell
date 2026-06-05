<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')
                ->stateless()
                ->user();

            $email = $googleUser->getEmail();

            $usuario = Usuario::where('email', $email)->first();

            // BARRERA DE SEGURIDAD: Si el usuario existe y es ADMIN, rechazamos el login por Google
            if ($usuario && $usuario->perfil_id == 1) {
                return redirect('/inicioSesion')
                    ->with('error', 'Por seguridad, los administradores deben usar correo y contraseña.');
            }
            
            // Si no existe, lo crea
            if (!$usuario) {
                $usuario = Usuario::create([
                    'nombre' => $googleUser->user['given_name'] ?? 'Usuario',
                    'apellido' => $googleUser->user['family_name'] ?? '',
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt(uniqid()),
                    'perfil_id' => 2
                ]);
            }

            // Login Laravel
            Auth::login($usuario);

            // Session personalizada
            session([
                'usuario_id' => $usuario->id,
                'usuario_nombre' => $usuario->nombre,
                'perfil_id' => $usuario->perfil_id
            ]);

            return redirect('/')
                ->with('success', 'Sesión iniciada correctamente');

        } catch (Exception $e) {
            
            // Esto guarda el error técnico exacto en tu archivo log
            Log::error('Error en Login con Google: ' . $e->getMessage());

            return redirect('/inicioSesion')
                ->with('error', 'Error al iniciar sesión con Google');
        } // <--- ACÁ CIERRA EL BLOQUE CATCH
    }
}