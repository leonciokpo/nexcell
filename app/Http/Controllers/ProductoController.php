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
    "imagen" => "images/Celulares/Apple/Gama_Alta/iphone15ProMaxTitanio.jpg",
    "descripcion" => "Tamaño y peso2
Ancho: 76.7 mm
Alto: 159.9 mm
Grosor: 8.25 mm
Peso: 221 g
Pantalla
Pantalla Super Retina XDR
Pantalla OLED de 6.7 pulgadas (diagonal) sin marco
Resolución de 2796 x 1290 pixeles a 460 ppi
Dynamic Island
Pantalla siempre activa
Tecnología ProMotion con frecuencias de actualización adaptativas de hasta 120 Hz
Pantalla HDR
True Tone
Amplia gama de colores (P3)
Toque con respuesta háptica
Relación de contraste 2,000,000:1 (normal)
Brillo máximo de 1,000 nits (normal); pico de brillo de 1,600 nits (HDR); pico de brillo de 2,000 nits (en exteriores)
Revestimiento oleofóbico resistente a huellas dactilares
Compatibilidad para mostrar varios idiomas y caracteres simultáneamente
La pantalla del iPhone 15 Pro Max tiene esquinas redondeadas que siguen el elegante diseño curvo del teléfono, y las esquinas se encuentran dentro de un rectángulo estándar. Si se mide en forma de rectángulo estándar, la pantalla tiene 6.69 pulgadas en diagonal (el área real de visualización es menor).
Resistencia a las salpicaduras, al agua y al polvo3
Clasificación IP68 (hasta 30 minutos a una profundidad máxima de 6 metros) según la norma IEC 60529",
    "variantes" => [
        [
            "color" => "Blanco",
            "imagen" => "images/Celulares/Apple/Gama_Alta/iphone15ProMaxTitanio.jpg"
        ],
        [
            "color" => "Negro",
            "imagen" => "images/Celulares/Apple/Gama_Alta/iphone15ProMaxBlack.jpg"
        ],
    ],
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