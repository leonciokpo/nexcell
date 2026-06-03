<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

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

            $usuario = Usuario::where('email', $googleUser->getEmail())
                ->first();

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

            return redirect('/inicioSesion')
                ->with('error', 'Error al iniciar sesión con Google');
        }
    }
}