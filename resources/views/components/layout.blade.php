<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Home'}}</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('estilos/estilo.css') }}?v={{ time() }}"></head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <Header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container-fluid">

            <div class="top-navbar">
    <!-- LOGO A LA IZQUIERDA -->
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" class="logo-navbar">
        <span>Nexcell.</span>
    </a>

    <!-- BOTONES A LA DERECHA -->
    <div class="auth-buttons">
        <a href="#" class="btn btn-login">Iniciar Sesión</a>
        <a href="#" class="btn btn-register">Registrarse</a>
    </div>
</div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContenido">
                <div class="search-container w-100 d-flex justify-content-center mb-2">
                    <div class="search-box">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar productos...">
                    </div>
                </div>
                <ul class="navbar-nav w-100">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Comercializacion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Quienes somos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <Header>

    <main>
        {{ $slot }}
    </main>

<footer class="footer-nexcell">

    <div class="footer-container">

        <!-- LINKS -->
        <div class="footer-col">
            <h4>Navegación</h4>
            <a href="#">Inicio</a>
            <a href="#productos">Productos</a>
            <a href="#">Contacto</a>
            <a href="#">Quiénes Somos</a>
        </div>

        <div class="footer-col">
            <h4>Ayuda</h4>
            <a href="#">Política de Cambio</a>
            <a href="#">Cómo Comprar</a>
            <a href="#">Política de Devolución</a>
        </div>

        <div class="footer-col">
            <h4>Medios de pago</h4>
            <p class="muted">
                Visa • Mastercard • Amex • Cabal • Naranja • Shopping • Débito • Rapipago • PagoFácil
            </p>
        </div>

        <div class="footer-col">
            <h4>Medios de envío</h4>
            <p class="muted">
                Envíos a todo el país
            </p>
        </div>

        <div class="footer-col">
            <h4>Contacto</h4>
            <p class="muted">
                +54 9 3782 40-3095<br>
                +54 9 3782 50-7942<br>
                leofonteina06@gmail.com<br>
                agustin552689@gmail.com
            </p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Nexcell. Todos los derechos reservados.</p>
    </div>

</footer>
</body>
</html>