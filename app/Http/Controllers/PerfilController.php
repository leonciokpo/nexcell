<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        Perfil::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->back()->with(
            'success',
            'Perfil creado correctamente'
        );
    }
}