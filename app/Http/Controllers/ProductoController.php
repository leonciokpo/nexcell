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
        "precio_viejo" => 2500000,
        "descuento" => 30,
        "imagen" => "images/Celulares/Apple/Gama Alta/iphone15ProMaxTitanio.jpg",
        "descripcion" => "El iPhone más potente con chip A17 Pro."
    ],
    [
        "id" => 2,
        "nombre" => "Samsung S25 Ultra",
        "precio" => 1771900,
        "precio_viejo" => 2100000,
        "descuento" => 20,
        "imagen" => "images/Celulares/Samsung/Gama Alta/s25ultrablack.jpg",
        "descripcion" => "Pantalla AMOLED y cámara de última generación."
    ],
    [
        "id" => 3,
        "nombre" => "Poco F7",
        "precio" => 2316100,
        "precio_viejo" => 2700000,
        "descuento" => 15,
        "imagen" => "images/Celulares/Xiaomi/Gama Alta/pocoF7.jpg",
        "descripcion" => "Potencia extrema a precio competitivo."
    ],
    [
        "id" => 4,
        "nombre" => "Motorola Edge 60 Pro",
        "precio" => 526500,
        "precio_viejo" => 650000,
        "descuento" => 20,
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
    $productos = array_merge(
        $this->getProductos(),
        $this->getAccesorios()
    );

    $producto = collect($productos)->firstWhere('id', $id);

    if (!$producto) {
        abort(404);
    }

    return view('frontend.productos.producto', compact('producto'));
}

public function principal()
{
    $productos = $this->getProductos();

    $masVendidosIds = [1, 2, 3, 4];
    $masVendidos = collect($productos)->whereIn('id', $masVendidosIds);

    // 👇 ACA CREÁS LAS OFERTAS
    $ofertas = collect($productos)->filter(function ($producto) {
        return isset($producto['descuento']) && $producto['descuento'] > 0;
    });

    return view('frontend.principal', compact('productos', 'masVendidos', 'ofertas'));
}

private function getAccesorios()
{
    return [

        [
            "id" => 5,
            "nombre" => "Auriculares JBL Tune 520BT",
            "precio" => 45000,
            "precio_viejo" => 60000,
            "descuento" => 25,
            "imagen" => "images/accesorios/Samsung/jbl.jpg",
            "descripcion" => "Auriculares inalámbricos con gran sonido."
        ],

        [
            "id" => 6,
            "nombre" => "Cargador Samsung 25W",
            "precio" => 18000,
            "precio_viejo" => 25000,
            "descuento" => 15,
            "imagen" => "images/accesorios/cargadorSamsung.jpg",
            "descripcion" => "Carga rápida original Samsung."
        ],

        [
            "id" => 7,
            "nombre" => "Cable USB-C Xiaomi",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/usbC.jpg",
            "descripcion" => "Cable USB tipo C de alta velocidad."
        ],

        [
            "id" => 8,
            "nombre" => "Power Bank 10000mAh",
            "precio" => 32000,
            "precio_viejo" => 40000,
            "descuento" => 20,
            "imagen" => "images/accesorios/powerbank.jpg",
            "descripcion" => "Batería portátil para todo tipo de dispositivos."
        ]

    ];
}

public function accesorios()
{
    $productos = $this->getAccesorios();

    return view('frontend.productos.accesorios', compact('productos'));
}
}