<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

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

    public function index()
    {
        $categorias = Categoria::withCount('productos')->get();

        return view(
            'backend.admin.vistaCategorias',
            compact('categorias')
        );
    }
}