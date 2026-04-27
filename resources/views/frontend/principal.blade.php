<x-layout title="Nexcell.">

    <!-- CONTENIDO -->
    <div class="row">
        <section class="col-12">

            <!-- SLIDER -->
            <div id="carouselNexcell" class="carousel slide mb-4" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{ asset('images/slide1.jpeg') }}" class="slider-img">
                        <div class="slider-overlay">
                            <a href="#productos" class="btn btn-naranja">Ver productos</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('images/slide2.jpeg') }}" class="slider-img">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('images/slide3.jpeg') }}" class="slider-img">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselNexcell" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselNexcell" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- HERO -->
            <div class="hero text-center">
                <h1>Bienvenido a Nexcell</h1>
                <p>Tecnología real para tu día a día. En Nexcell, no solo vendemos dispositivos; conectamos tus necesidades con la mejor ingeniería móvil. Desde los últimos smartphones hasta los accesorios que potencian tu productividad, seleccionamos cada producto bajo estándares de rendimiento y durabilidad. Tu próximo salto tecnológico empieza acá.</p>
            </div>

            <!-- PRODUCTOS -->
<div id="productos" class="productos">
    <h2 class="text-center mb-4">Nuestros Productos</h2>

<div class="row g-4 accesos-rapidos">

    <!-- SMARTPHONES -->
    <div class="col-md-6 col-lg-3">
        <a href="{{ route('smartphones') }}" class="acceso-card">
            <img src="{{ asset('images/Celulares/Apple/Gama_Alta/iphone16proMaxWhite.jpg') }}">
            <div class="overlay">
                <h3>Smartphones</h3>
                <p>Últimos modelos</p>
            </div>
        </a>
    </div>

    <!-- ACCESORIOS -->
    <div class="col-md-6 col-lg-3">
        <a href="{{ route('accesorios') }}" class="acceso-card">
            <img src="{{ asset('images/Celulares/Accesorios/flat-lay.jpg') }}">
            <div class="overlay">
                <h3>Accesorios</h3>
                <p>Todo lo que necesitás</p>
            </div>
        </a>
    </div>

    <!-- OFERTAS -->
    <div class="col-md-6 col-lg-3">
        <a href="{{ route('ofertas') }}" class="acceso-card">
            <img src="{{ asset('images/Celulares/descuento.jpg') }}">
            <div class="overlay">
                <h3>Ofertas</h3>
                <p>Descuentos reales</p>
            </div>
        </a>
    </div>

    <!-- NUEVOS -->
    <div class="col-md-6 col-lg-3">
        <a href="{{ route('nuevos') }}" class="acceso-card">
            <img src="{{ asset('images/Celulares/cajaAbierta.jpg') }}">
            <div class="overlay">
                <h3>Nuevos</h3>
                <p>Recién llegados</p>
            </div>
        </a>
    </div>

</div>
</div>

    <!-- 🔥 ASIDE ABAJO -->
    <aside class="row mt-4">

        <div class="col-md-4">
            <div class="card-custom">
                <h5><i class="bi bi-fire icono-card"></i> Promos</h5>
                <p>Hasta 30% OFF</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <h5><i class="bi bi-truck icono-card"></i> Envíos</h5>
                <p>A todo el país</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <h5><i class="bi bi-credit-card icono-card"></i> Pagos</h5>
                <p>Tarjetas y efectivo</p>
            </div>
        </div>

    </aside>

<div class="ofertas-dia mt-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>¡No te pierdas de las ofertas del día!</h2>
            <span class="contador">Termina en: 12hs</span>
        </div>

<div id="carouselOfertas" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        @foreach ($ofertas->chunk(4) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="d-flex justify-content-between">

                    @foreach ($chunk as $producto)
                        <a href="{{ route('producto.show', $producto['id']) }}" class="oferta-card">

                            <img src="{{ asset($producto['imagen']) }}">

                            <div class="info">
                                <p>{{ $producto['nombre'] }}</p>

                                <div class="precios">
                                    <span class="precio-viejo">
                                        $ {{ number_format($producto['precio_viejo'], 0, ',', '.') }}
                                    </span>

                                    <span class="descuento">
                                        -{{ $producto['descuento'] }}%
                                    </span>
                                </div>

                                <strong class="precio-nuevo">
                                    $ {{ number_format($producto['precio'], 0, ',', '.') }}
                                </strong>
                            </div>

                        </a>
                    @endforeach

                </div>
            </div>
        @endforeach

    </div>

    <!-- FLECHAS -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOfertas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselOfertas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

    </div>
</div>

<div class="seccion-naranja mt-5">
    <h2 class="mb-4">Nuestros productos mas vendidos</h2>

    <div id="carouselProductosMasVendidos" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">

            @foreach ($masVendidos->chunk(4) as $chunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="d-flex justify-content-between">

                        @foreach ($chunk as $producto)
                            <a href="{{ route('producto.show', $producto['id']) }}" class="productosMasVendidos-card card-link">

                                <img src="{{ asset($producto['imagen']) }}">
                                <p>{{ $producto['nombre'] }}</p>

                                <strong>
                                    $ {{ number_format($producto['precio'], 0, ',', '.') }}
                                </strong>

                            </a>
                        @endforeach

                    </div>
                </div>
            @endforeach

        </div>

        <!-- FLECHAS -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProductosMasVendidos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselProductosMasVendidos" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</div>

<!-- BANNER -->
<div class="banner-nexcell">
    <img src="{{ asset('images/banner.jpg') }}" alt="Banner Nexcell">
</div>

<!-- MARCAS -->
<div class="marcas-nexcell">
    <div class="container text-center">

        <h2 class="mb-5">Marcas que trabajamos</h2>

        <div class="row justify-content-center align-items-center g-4">

            <div class="col-6 col-md-3">
                <img src="{{ asset('images/marcas/apple.png') }}" class="marca-logo" alt="Apple">
            </div>

            <div class="col-6 col-md-3">
                <img src="{{ asset('images/marcas/samsung.png') }}" class="marca-logo" alt="Samsung">
            </div>

            <div class="col-6 col-md-3">
                <img src="{{ asset('images/marcas/xiaomi.png') }}" class="marca-logo" alt="Xiaomi">
            </div>

            <div class="col-6 col-md-3">
                <img src="{{ asset('images/marcas/motorola.png') }}" class="marca-logo" alt="Motorola">
            </div>

        </div>

    </div>
</div>

<!-- OPINIONES -->
<div class="opiniones-nexcell">
    <div class="container">

        <h2 class="text-center mb-5">Lo que dicen nuestros clientes</h2>

        <div class="row g-4">

            <!-- OPINION 1 -->
            <div class="col-md-4">
                <div class="opinion-card">
                    <p class="texto">"Excelente atención y los productos llegaron rapidísimo. Muy recomendable."</p>

                    <div class="cliente">
                        <div class="cliente-info">
                            <img src="{{ asset('images/clientes/cliente1.jpg') }}" alt="Cliente">
                            <div>
                                <strong>Juan Pérez</strong>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OPINION 2 -->
            <div class="col-md-4">
                <div class="opinion-card">
                    <p class="texto">"Compré un iPhone y todo perfecto. Precio y calidad increíble."</p>

                    <div class="cliente">
                        <div class="cliente-info">
                            <img src="{{ asset('images/clientes/cliente2.jpg') }}" alt="Cliente">
                            <div>
                                <strong>María Gómez</strong>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OPINION 3 -->
            <div class="col-md-4">
                <div class="opinion-card">
                    <p class="texto">"Muy buena experiencia. Me asesoraron antes de comprar."</p>

                    <div class="cliente">
                        <div class="cliente-info">
                            <img src="{{ asset('images/clientes/cliente3.jpg') }}" alt="Cliente">
                            <div>
                                <strong>Lucas Fernández</strong>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- FOOTER -->



</x-layout>

