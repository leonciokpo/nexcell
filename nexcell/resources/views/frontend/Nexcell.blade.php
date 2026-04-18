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

    <div class="row g-4">

        <!-- SMARTPHONES -->
        <div class="col-md-4">
            <div class="card-custom">

                <div id="carouselSmartphones" class="carousel slide product-carousel" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/minislide1.jpeg') }}" class="card-img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/minislide2.jpeg') }}" class="card-img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/minislide3.jpeg') }}" class="card-img">
                        </div>
                    </div>

                    <!-- FLECHAS -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSmartphones" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSmartphones" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

                <h4>Smartphones</h4>
                <p>Los últimos modelos</p>
            </div>
        </div>

        <!-- ACCESORIOS -->
        <div class="col-md-4">
            <div class="card-custom">

                <div id="carouselAccesorios" class="carousel slide product-carousel" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slide2.jpeg') }}" class="card-img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/minislide2.jpeg') }}" class="card-img">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAccesorios" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAccesorios" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

                <h4>Accesorios</h4>
            </div>
        </div>

        <!-- OFERTAS -->
        <div class="col-md-4">
            <div class="card-custom">

                <div id="carouselOfertas" class="carousel slide product-carousel" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slide3.jpeg') }}" class="card-img">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/minislide3.jpeg') }}" class="card-img">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOfertas" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselOfertas" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

                <h4>Ofertas</h4>
            </div>
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

<!-- FOOTER -->


<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    const carousel = document.querySelector('#carouselNexcell');
    new bootstrap.Carousel(carousel, {
        interval: 4000,
        ride: 'carousel'
    });
</script>

<script>
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if(window.scrollY > 50){
            navbar.classList.add('navbar-scroll');
        } else {
            navbar.classList.remove('navbar-scroll');
        }
    });
</script>

<script>
    document.querySelector('.search-icon').addEventListener('click', () => {
        alert('Click detectado');
    });
</script>
</x-layout>