<?php

namespace App\Http\Controllers;

use App\Models\Marca;

class MarcaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
        ]);

        Marca::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->back();
    }
}