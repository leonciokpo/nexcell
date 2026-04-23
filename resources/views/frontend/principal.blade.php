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
        <a href="/categoria/smartphones" class="acceso-card">
            <img src="{{ asset('images/Celulares/Apple/Gama Alta/iphone16proMaxWhite.jpg') }}">
            <div class="overlay">
                <h3>Smartphones</h3>
                <p>Últimos modelos</p>
            </div>
        </a>
    </div>

    <!-- ACCESORIOS -->
    <div class="col-md-6 col-lg-3">
        <a href="/categoria/accesorios" class="acceso-card">
            <img src="{{ asset('images/Celulares/Accesorios/flat-lay.jpg') }}">
            <div class="overlay">
                <h3>Accesorios</h3>
                <p>Todo lo que necesitás</p>
            </div>
        </a>
    </div>

    <!-- OFERTAS -->
    <div class="col-md-6 col-lg-3">
        <a href="/categoria/ofertas" class="acceso-card">
            <img src="{{ asset('images/Celulares/descuento.jpg') }}">
            <div class="overlay">
                <h3>Ofertas</h3>
                <p>Descuentos reales</p>
            </div>
        </a>
    </div>

    <!-- NUEVOS -->
    <div class="col-md-6 col-lg-3">
        <a href="/categoria/nuevos" class="acceso-card">
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
                <h5>🔥 Promos</h5>
                <p>Hasta 30% OFF</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <h5>🚚 Envíos</h5>
                <p>Todo el país</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <h5>💳 Pagos</h5>
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

        <div class="row g-4">

            <!-- PRODUCTO 1 -->
            <div class="col-md-3">
                <a href="#" class="oferta-card">
                    <img src="{{ asset('images/Celulares/Apple/Gama Alta/iphone15ProMaxTitanio.jpg') }}">

                    <div class="info">
                        <p>Iphone 15 Pro Max</p>

                        <div class="precios">
                            <span class="precio-viejo">$2.500.000</span>
                            <span class="descuento">-30%</span>
                        </div>

                        <strong class="precio-nuevo">$2.176.900</strong>
                    </div>
                </a>
            </div>

            <!-- PRODUCTO 2 -->
            <div class="col-md-3">
                <a href="#" class="oferta-card">
                    <img src="{{ asset('images/Celulares/Samsung/Gama Alta/s25ultrablack.jpg') }}">

                    <div class="info">
                        <p>Samsung S25 Ultra</p>

                        <div class="precios">
                            <span class="precio-viejo">$2.100.000</span>
                            <span class="descuento">-20%</span>
                        </div>

                        <strong class="precio-nuevo">$1.771.900</strong>
                    </div>
                </a>
            </div>

            <!-- PRODUCTO 3 -->
            <div class="col-md-3">
                <a href="#" class="oferta-card">
                    <img src="{{ asset('images/Celulares/Xiaomi/Gama Alta/pocoF7.jpg') }}">

                    <div class="info">
                        <p>Poco F7</p>

                        <div class="precios">
                            <span class="precio-viejo">$2.700.000</span>
                            <span class="descuento">-15%</span>
                        </div>

                        <strong class="precio-nuevo">$2.316.100</strong>
                    </div>
                </a>
            </div>

            <!-- PRODUCTO 4 -->
            <div class="col-md-3">
                <a href="#" class="oferta-card">
                    <img src="{{ asset('images/Celulares/Motorola/Gama Alta/motoEdge60proCobalto.jpg') }}">

                    <div class="info">
                        <p>Motorola Edge 60 Pro</p>

                        <div class="precios">
                            <span class="precio-viejo">$650.000</span>
                            <span class="descuento">-20%</span>
                        </div>

                        <strong class="precio-nuevo">$526.500</strong>
                    </div>
                </a>
            </div>

        </div>

    </div>
</div>

<div class="seccion-naranja mt-5">
    <h2 class="mb-4">Nuestros productos mas vendidos</h2>

    <div id="carouselProductosMasVendidos" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-between">

                    <!-- CARD 1 -->
                    <a href="/producto/iphone15" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Apple/Gama Alta/iphone15ProMaxTitanio.jpg') }}">
                        <p>Iphone 15 Pro Max</p>
                        <strong>$2.176.900</strong>
                    </a>

                    <!-- CARD 2 -->
                    <a href="/producto/s25" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Samsung/Gama Alta/s25ultrablack.jpg') }}">
                        <p>Samsung S25</p>
                        <strong>$1.771.900</strong>
                    </a>

                    <!-- CARD 3 -->
                    <a href="/producto/motoG60" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Motorola/Gama Alta/motoEdge60proCobalto.jpg') }}">
                        <p>Motorola G60 Pro</p>
                        <strong>$526.500</strong>
                    </a>

                    <!-- CARD 4 -->
                    <a href="/producto/pocoF7" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Xiaomi/Gama Alta/pocoF7.jpg') }}">
                        <p>Poco F7</p>
                        <strong>$2.316.100</strong>
                    </a>

                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-between">

                    <a href="#" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Motorola/Gama Alta/motoRazr40blue.jpg') }}">
                        <p>Motorola Razr 40</p>
                        <strong>$671.300</strong>
                    </a>

                    <a href="#" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Samsung/Gama Alta/samsungS26ultra.jpg') }}">
                        <p>Samsung S26 Ultra</p>
                        <strong>$671.300</strong>
                    </a>

                    <a href="#" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Xiaomi/Gama Alta/pocoF8proBlack.jpg') }}">
                        <p>Poco F8 Pro</p>
                        <strong>$671.300</strong>
                    </a>

                    <a href="#" class="productosMasVendidos-card card-link">
                        <img src="{{ asset('images/Celulares/Apple/Gama Alta/iphone16proMaxBlack.jpg') }}">
                        <p>Iphone 16 Pro Max</p>
                        <strong>$671.300</strong>
                    </a>

                </div>
            </div>

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

