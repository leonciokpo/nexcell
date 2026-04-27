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
        "imagen" => "images/Celulares/Samsung/Gama_Alta/s25ultrablack.jpg",
        "descripcion" => "Pantalla
        Pantalla Dynamic AMOLED 2X de 6.8 pulgadas
        Resolución Quad HD+ (3200 x 1440)
        Frecuencia adaptativa de hasta 120 Hz
        Brillo máximo de 2600 nits
        Compatibilidad HDR10+

        Procesador
        Snapdragon de última generación
        Arquitectura optimizada para alto rendimiento y gaming

        Cámara
        Cámara principal de 200 MP
        Teleobjetivo con zoom óptico avanzado
        Ultra gran angular de alta definición
        Grabación en 8K

        Batería
        5000 mAh
        Carga rápida e inalámbrica
        Carga inversa

        Sistema
        Android con capa One UI
        Reconocimiento facial y lector de huella ultrasónico
        Resistencia al agua IP68",
        "variantes" => [
            ["color" => "Negro", "imagen" => "images/Celulares/Samsung/Gama_Alta/s25ultrablack.jpg"],
            ["color" => "Blanco", "imagen" => "images/Celulares/Samsung/Gama_Alta/s25ultrawhite.jpg"],
        ],
    ],

    [
        "id" => 3,
        "nombre" => "Poco F7",
        "precio" => 2316100,
        "precio_viejo" => 2700000,
        "descuento" => 15,
        "imagen" => "images/Celulares/Xiaomi/Gama_Alta/pocoF7white.jpg",
        "descripcion" => "Pantalla
        AMOLED de 6.67 pulgadas
        Resolución Full HD+
        Tasa de refresco de 120 Hz

        Procesador
        Chipset de alto rendimiento orientado a gaming
        Excelente gestión térmica

        Cámara
        Cámara principal de 64 MP
        Modo nocturno avanzado
        Grabación en 4K

        Batería
        5000 mAh
        Carga rápida de 67W

        Sistema
        MIUI optimizado para rendimiento
        Altavoces estéreo
        Sensor de huella lateral",
        "variantes" => [
            ["color" => "Negro", "imagen" => "images/Celulares/Xiaomi/Gama_Alta/pocoF7white.jpg"],
            ["color" => "Blanco", "imagen" => "images/Celulares/Xiaomi/Gama_Alta/pocoF7black.jpg"],
        ],
    ],

    [
        "id" => 4,
        "nombre" => "Motorola Edge 60 Pro",
        "precio" => 526500,
        "precio_viejo" => 650000,
        "descuento" => 20,
        "imagen" => "images/Celulares/Motorola/Gama_Alta/motoEdge60proCobalto.jpg",
        "descripcion" => "Pantalla
        OLED curva de 6.7 pulgadas
        Resolución Full HD+
        Frecuencia de 144 Hz

        Procesador
        Snapdragon de gama alta
        Excelente rendimiento multitarea

        Cámara
        Cámara principal de alta resolución
        Estabilización óptica (OIS)
        Modo retrato y nocturno mejorado

        Batería
        4600 mAh
        Carga ultra rápida

        Sistema
        Android casi puro
        Diseño premium con acabado elegante
        Resistencia al agua y polvo",
        "variantes" => [
            ["color" => "Azul", "imagen" => "images/Celulares/Motorola/Gama_Alta/motoEdge60proCobalto.jpg"],
            ["color" => "Celeste", "imagen" => "images/Celulares/Motorola/Gama_Alta/motoEdge60proceleste.jpg"],
        ],
    ],

    // ================= NUEVOS =================

    [
        "id" => 9,
        "nombre" => "Iphone 14",
        "precio" => 1400000,
        "imagen" => "images/Celulares/Apple/Gama_Media/iphone14blue.jpg",
        "descripcion" => "Pantalla
        Super Retina XDR OLED de 6.1 pulgadas
        Resolución de 2532 x 1170 píxeles
        HDR y True Tone

        Procesador
        Chip A15 Bionic
        Excelente rendimiento y eficiencia energética

        Cámara
        Sistema de doble cámara de 12 MP
        Modo noche y Deep Fusion
        Grabación en 4K HDR

        Batería
        Autonomía para todo el día
        Carga rápida e inalámbrica

        Sistema
        iOS optimizado
        Face ID
        Diseño resistente con Ceramic Shield",
        "variantes" => [
            ["color" => "Azul", "imagen" => "images/Celulares/Apple/Gama_Media/iphone14blue.jpg"],
            ["color" => "Morado", "imagen" => "images/Celulares/Apple/Gama_Media/iphone14purple.jpg"],
        ],
    ],

    [
        "id" => 10,
        "nombre" => "Iphone 12",
        "precio" => 950000,
        "imagen" => "images/Celulares/Apple/Gama_Baja/iphone12black.jpg",
        "descripcion" => "Pantalla
        Super Retina XDR OLED de 6.1 pulgadas
        Resolución Full HD+

        Procesador
        Chip A14 Bionic
        Gran rendimiento en apps y juegos

        Cámara
        Doble cámara de 12 MP
        Modo noche
        Grabación 4K

        Batería
        Carga rápida
        Compatible con MagSafe

        Sistema
        iOS fluido y seguro
        Face ID
        Diseño compacto y liviano",
        "variantes" => [
            ["color" => "Negro", "imagen" => "images/Celulares/Apple/Gama_Baja/iphone12black.jpg"],
            ["color" => "Blanco", "imagen" => "images/Celulares/Apple/Gama_Baja/iphone12white.jpg"],
        ],
    ],

    [
        "id" => 11,
        "nombre" => "Motorola Razr 40",
        "precio" => 1200000,
        "precio_viejo" => 1400000,
        "descuento" => 15,
        "imagen" => "images/Celulares/Motorola/Gama_Alta/motoRazr40blue.jpg",
        "descripcion" => "Pantalla
        Pantalla plegable pOLED de 6.9 pulgadas
        Pantalla externa interactiva

        Procesador
        Snapdragon optimizado
        Buen rendimiento en multitarea

        Cámara
        Sistema de doble cámara
        Modo selfie con pantalla externa

        Batería
        4200 mAh
        Carga rápida

        Sistema
        Android limpio
        Diseño plegable compacto
        Ideal para portabilidad",
        "variantes" => [
            ["color" => "Azul", "imagen" => "images/Celulares/Motorola/Gama_Alta/motoRazr40blue.jpg"],
        ],
    ],

    [
        "id" => 12,
        "nombre" => "Motorola G56",
        "precio" => 420000,
        "imagen" => "images/Celulares/Motorola/Gama_Media/g56blue.jpg",
        "descripcion" => "Pantalla
        LCD de 6.5 pulgadas
        Resolución HD+

        Procesador
        Octa-core eficiente
        Rendimiento equilibrado

        Cámara
        Cámara principal de 50 MP
        Modo retrato

        Batería
        5000 mAh
        Gran duración

        Sistema
        Android optimizado
        Sensor de huella lateral
        Equipo ideal para uso diario",
        "variantes" => [
            ["color" => "Azul", "imagen" => "images/Celulares/Motorola/Gama_Media/g56blue.jpg"],
            ["color" => "Negro", "imagen" => "images/Celulares/Motorola/Gama_Media/g56black.jpg"],
        ],
    ],

    [
        "id" => 13,
        "nombre" => "Motorola G84",
        "precio" => 480000,
        "imagen" => "images/Celulares/Motorola/Gama_Media/g84white.jpg",
        "descripcion" => "Pantalla
        OLED de 6.5 pulgadas
        Resolución Full HD+

        Procesador
        Snapdragon de gama media
        Buen rendimiento general

        Cámara
        Cámara principal de alta calidad
        Modo noche mejorado

        Batería
        5000 mAh
        Carga rápida

        Sistema
        Android limpio
        Diseño moderno y liviano",
        "variantes" => [
            ["color" => "Blanco", "imagen" => "images/Celulares/Motorola/Gama_Media/g84white.jpg"],
            ["color" => "Negro", "imagen" => "images/Celulares/Motorola/Gama_Media/g84black.jpg"],
        ],
    ],

    [
        "id" => 14,
        "nombre" => "Samsung Galaxy S26 Ultra",
        "precio" => 2100000,
        "precio_viejo" => 2400000,
        "descuento" => 10,
        "imagen" => "images/Celulares/Samsung/Gama_Alta/s26ultrablack.jpg",
        "descripcion" => "Pantalla
        Dynamic AMOLED 2X de 6.9 pulgadas
        Resolución 2K
        Frecuencia adaptativa de 120 Hz

        Procesador
        Última generación Snapdragon
        Alto rendimiento en IA y gaming

        Cámara
        Sensor principal de 200 MP
        Zoom óptico avanzado
        Grabación 8K

        Batería
        5000 mAh
        Carga rápida e inalámbrica

        Sistema
        Android con One UI
        S-Pen integrado
        Resistencia IP68",
        "variantes" => [
            ["color" => "Negro", "imagen" => "images/Celulares/Samsung/Gama_Alta/s26ultrablack.jpg"],
            ["color" => "Blanco", "imagen" => "images/Celulares/Samsung/Gama_Alta/s26ultrawhite.jpg"],
            ["color" => "Azul", "imagen" => "images/Celulares/Samsung/Gama_Alta/s26ultrablue.jpg"],
        ],
    ],

    [
        "id" => 15,
        "nombre" => "Xiaomi Poco F8 Pro",
        "precio" => 1100000,
        "imagen" => "images/Celulares/Xiaomi/Gama_Alta/pocof8problack.jpg",
        "descripcion" => "Pantalla
        AMOLED de 6.7 pulgadas
        Resolución Full HD+
        120 Hz

        Procesador
        Chipset de alto rendimiento
        Optimizado para gaming

        Cámara
        Sensor principal de alta resolución
        Modo nocturno

        Batería
        5000 mAh
        Carga rápida

        Sistema
        MIUI optimizado
        Altavoces estéreo
        Excelente relación precio/calidad",
        "variantes" => [
            ["color" => "Negro", "imagen" => "images/Celulares/Xiaomi/Gama_Alta/pocof8problack.jpg"],
            ["color" => "Blanco", "imagen" => "images/Celulares/Xiaomi/Gama_Alta/pocof8prowhite.jpg"],
        ],
    ],

    [
        "id" => 16,
        "nombre" => "Xiaomi Redmi Note 14",
        "precio" => 350000,
        "imagen" => "images/Celulares/Xiaomi/Gama_Media/redmi14white.jpg",
        "descripcion" => "Pantalla
        AMOLED de 6.6 pulgadas
        Resolución Full HD+

        Procesador
        MediaTek eficiente
        Buen rendimiento diario

        Cámara
        Cámara principal de 50 MP
        IA para mejoras fotográficas

        Batería
        5000 mAh
        Carga rápida

        Sistema
        MIUI basado en Android
        Equipo ideal para uso cotidiano",
        "variantes" => [
            ["color" => "Blanco", "imagen" => "images/Celulares/Xiaomi/Gama_Media/redmi14white.jpg"],
            ["color" => "Negro", "imagen" => "images/Celulares/Xiaomi/Gama_Media/redmi14black.jpg"],
        ],
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
            "nombre" => "Apple AirPods (3ra generacion)",
            "precio" => 45000,
            "precio_viejo" => 60000,
            "descuento" => 25,
            "imagen" => "images/accesorios/Apple/airpods2Soloss.jpg",
            "descripcion" => "Auriculares inalámbricos Apple...",
            "variantes" => [
                [
                    "color" => "Frente",
                    "imagen" => "images/accesorios/Apple/airpods2Soloss.jpg"
                ],
                [
                    "color" => "Caja",
                    "imagen" => "images/accesorios/Apple/airpodsEstuche.jpg"
                ],
                [
                    "color" => "Estuche",
                    "imagen" => "images/accesorios/Apple/estucheAirpod.jpg"
                ],
            ]
        ],

        [
            "id" => 6,
            "nombre" => "Cargador Samsung 25W",
            "precio" => 18000,
            "precio_viejo" => 25000,
            "descuento" => 15,
            "imagen" => "images/accesorios/Samsung/cargador25W.jpg",
            "descripcion" => "Cargador original Samsung con tecnología Super Fast Charging de 25W.",
            "variantes" => [
                [
                    "color" => "Frente",
                    "imagen" => "images/accesorios/Samsung/cargador25W.jpg"
                ],
                [
                    "color" => "Caja",
                    "imagen" => "images/accesorios/Samsung/Cargador25Ww.jpg"
                ],
                [
                    "color" => "Cable",
                    "imagen" => "images/accesorios/Samsung/cargador25CCable.jpg"
                ],
            ]
        ],

        [
            "id" => 7,
            "nombre" => "Funda de silicona - iPhone 17",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/Apple/fundas/f1.jpg",
            "descripcion" => "Fundas de silicona premium para iPhone 17.",
            "variantes" => [
                [
                    "color" => "Funda 1",
                    "imagen" => "images/accesorios/Apple/fundas/f1.jpg"
                ],
                [
                    "color" => "Funda 2",
                    "imagen" => "images/accesorios/Apple/fundas/f2.jpg"
                ],
                [
                    "color" => "Funda 3",
                    "imagen" => "images/accesorios/Apple/fundas/f3.jpg"
                ],
                [
                    "color" => "Funda 4",
                    "imagen" => "images/accesorios/Apple/fundas/f4.jpg"
                ]
            ]
        ],

        [
            "id" => 8,
            "nombre" => "Auriculares JBL",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/Auriculares/VinchasJBL.jpg",
            "descripcion" => "Auriculares JBL inalámbricos.",
            "variantes" => [
                [
                    "color" => "Negro",
                    "imagen" => "images/accesorios/Auriculares/VinchasJBL.jpg"
                ],
                [
                    "color" => "Blanco",
                    "imagen" => "images/accesorios/Auriculares/VinchasJBL2.jpg"
                ],
                [
                    "color" => "Azul",
                    "imagen" => "images/accesorios/Auriculares/VinchasJBL3.jpg"
                ]
            ]
        ],

        [
            "id" => 17,
            "nombre" => "Auriculares Apple",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/Auriculares/AuricularesVinchas.jpg",
            "descripcion" => "Auriculares Apple premium.",
            "variantes" => [
                [
                    "color" => "Blanco",
                    "imagen" => "images/accesorios/Auriculares/AuricularesVinchas.jpg"
                ],
                [
                    "color" => "Negro",
                    "imagen" => "images/accesorios/Auriculares/AuricularesVinchas2.jpg"
                ],
                [
                    "color" => "Silver",
                    "imagen" => "images/accesorios/Auriculares/AuricularesVinchas3.jpg"
                ]
            ]
        ],

        [
            "id" => 18,
            "nombre" => "Parlante JBL Charge 5",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/Parlantes/jbl.jpg",
            "descripcion" => "Parlante portátil JBL Charge 5.",
            "variantes" => [
                [
                    "color" => "Negro",
                    "imagen" => "images/accesorios/Parlantes/jbl.jpg"
                ],
                [
                    "color" => "Azul",
                    "imagen" => "images/accesorios/Parlantes/jbl2.jpg"
                ]
            ]
        ],

        [
            "id" => 19,
            "nombre" => "Parlante JBL Party Box",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/Parlantes/jblBox.jpg",
            "descripcion" => "Parlante JBL Party Box.",
            "variantes" => [
                [
                    "color" => "Party Box",
                    "imagen" => "images/accesorios/Parlantes/jblBox.jpg"
                ]
            ]
        ],

        [
            "id" => 20,
            "nombre" => "SmartWatch Samsung",
            "precio" => 8500,
            "precio_viejo" => 12000,
            "descuento" => 10,
            "imagen" => "images/accesorios/Samsung/SmartWatch.avif",
            "descripcion" => "SmartWatch Samsung Galaxy.",
            "variantes" => [
                [
                    "color" => "SmartWatch 1",
                    "imagen" => "images/accesorios/Samsung/SmartWatch.avif"
                ],
                [
                    "color" => "SmartWatch 2",
                    "imagen" => "images/accesorios/Samsung/SmartWatch2.avif"
                ],
                [
                    "color" => "SmartWatch 3",
                    "imagen" => "images/accesorios/Samsung/SmartWatch3.avif"
                ]
            ]
        ],

    ];
}

public function nuevos()
{
    $productos = array_merge(
        $this->getProductos(),
        $this->getAccesorios()
    );

    $nuevosIds = [1,2,3,4,5,6,7,8,9,10,11,12,17,18,19,20];

    $productos = collect($productos)->whereIn('id', $nuevosIds);

    return view('frontend.productos.nuevos', compact('productos'));
}

public function accesorios()
{
    $productos = $this->getAccesorios();

    return view('frontend.productos.accesorios', compact('productos'));
}

public function ofertas()
{
    $productos = array_merge(
        $this->getProductos(),
        $this->getAccesorios()
    );

    $ofertas = collect($productos)->filter(function ($producto) {
        return isset($producto['descuento']) && $producto['descuento'] > 0;
    });

    return view('frontend.productos.ofertas', compact('ofertas'));
}
}