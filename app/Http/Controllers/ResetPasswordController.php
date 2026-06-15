<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Usuario;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('backend.usuarios.reset-password', [
            'token' => $token,
            'email' => $request->email // <--- Capturamos el correo de la URL
        ]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only(
                'email',
                'password',
                'password_confirmation',
                'token'
            ),
            function (Usuario $user, string $password) {

                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('inicioSesion')
                ->with('success', 'Contraseña actualizada correctamente')
            : back()->withErrors(['email' => [__($status)]]);
    }
}