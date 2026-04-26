<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

    private function getProductos()
{
    return [
    [
        "id" => 1,
        "nombre" => "Iphone 15 Pro Max",
        "precio" => 2176900,
        "imagen" => "images/Celulares/Apple/Gama Alta/iphone15ProMaxTitanio.jpg",
        "descripcion" => "El iPhone más potente con chip A17 Pro."
    ],
    [
        "id" => 2,
        "nombre" => "Samsung S25 Ultra",
        "precio" => 1771900,
        "imagen" => "images/Celulares/Samsung/Gama Alta/s25ultrablack.jpg",
        "descripcion" => "Pantalla AMOLED y cámara de última generación."
    ],
    [
        "id" => 3,
        "nombre" => "Poco F7",
        "precio" => 2316100,
        "imagen" => "images/Celulares/Xiaomi/Gama Alta/pocoF7.jpg",
        "descripcion" => "Potencia extrema a precio competitivo."
    ],
    [
        "id" => 4,
        "nombre" => "Motorola Edge 60 Pro",
        "precio" => 526500,
        "imagen" => "images/Celulares/Motorola/Gama Alta/motoEdge60proCobalto.jpg",
        "descripcion" => "Diseño premium y gran rendimiento."
    ],
    ];
}
    public function smartphones()
{
    
    $productos = $this->getProductos();
    return view('frontend.productos.smartphones', compact('productos'));
}

public function show($id)
{
    
    $productos = $this->getProductos();
    $producto = collect($productos)->firstWhere('id', $id);

    if (!$producto) {
        abort(404);
    }

    return view('frontend.productos.producto', compact('producto'));
}
}
