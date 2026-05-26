<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function show($id)
    {
        $producto = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])->findOrFail($id);

        return view('frontend.productos.producto', compact('producto'));
    }

    public function productos(Request $request)
    {
        $query = Producto::with(['marca', 'categoria', 'imagenes']);

        // FILTRO CATEGORÍAS
        if ($request->filled('categorias')) {
            $query->whereHas('categoria', function ($q) use ($request) {
                $q->whereIn('nombre', $request->categorias);
            });
        }

        // FILTRO MARCAS
        if ($request->filled('marcas')) {
            $query->whereHas('marca', function ($q) use ($request) {
                $q->whereIn('nombre', $request->marcas);
            });
        }

        // FILTRO PRECIO MIN
        if ($request->filled('min')) {
            $query->where('precio', '>=', $request->min);
        }

        // FILTRO PRECIO MAX
        if ($request->filled('max')) {
            $query->where('precio', '<=', $request->max);
        }

        $productos = $query->get();

        return view('frontend.productos.productos', compact('productos'));
    }

    public function principal()
    {
        $productos = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])->get();

        // Productos más vendidos
        $masVendidosIds = [1, 2, 3, 4, 5, 8, 18, 20];

        $masVendidos = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])
        ->whereIn('id', $masVendidosIds)
        ->get();

        // Productos con descuento
        $ofertas = Producto::with([
            'marca',
            'categoria',
            'imagenes'
        ])
        ->where('descuento', '>', 0)
        ->get();

        return view('frontend.principal', compact(
            'productos',
            'masVendidos',
            'ofertas'
        ));
    }
    public function filtrar(Request $request)
    {
        $query = Producto::with(['marca', 'categoria', 'imagenes']);

        if ($request->filled('categorias')) {
            $query->whereHas('categoria', function ($q) use ($request) {
                $q->whereIn('nombre', (array) $request->categorias);
            });
        }

        if ($request->filled('marcas')) {
            $query->whereHas('marca', function ($q) use ($request) {
                $q->whereIn('nombre', (array) $request->marcas);
            });
        }

        if ($request->min) {
            $query->where('precio', '>=', $request->min);
        }

        if ($request->max) {
            $query->where('precio', '<=', $request->max);
        }

        // ORDENAMIENTO
        if ($request->sort == 'asc') {
            $query->orderBy('precio', 'asc');
        }

        elseif ($request->sort == 'desc') {
            $query->orderBy('precio', 'desc');
        }

        $productos = $query->get();

        return view('frontend.productos.partials.grid', compact('productos'));
    }
}