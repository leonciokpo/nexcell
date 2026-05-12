<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        Categoria::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->back();
    }
}