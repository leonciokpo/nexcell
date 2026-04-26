
<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container-fluid">

            <div class="top-navbar">
    <!-- LOGO A LA IZQUIERDA -->
    <a class="navbar-brand" href="{{ route('principal') }}">
        <img src="{{ asset('images/logo.png') }}" class="logo-navbar">
        <span>Nexcell.</span>
    </a>

    <!-- BOTONES A LA DERECHA -->
    <div class="auth-buttons">
    <a href="#" class="btn btn-login">Iniciar Sesión</a>
    <a href="#" class="btn btn-register">Registrarse</a>

    <!-- 🛒 CARRITO -->
    <a href="#" class="btn-cart">
        <i class="bi bi-cart3"></i>
    </a>
</div>
</div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContenido">
                <div class="search-container w-100 d-flex justify-content-start mb-2">
                    <div class="search-box">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar productos...">
                    </div>
                </div>
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('principal') ? 'active' : '' }}" href="{{ route('principal') }}">
                            Inicio
                        </a>
                    </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProductos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarProductos">
                        <li><a class="dropdown-item" href="{{ route('smartphones') }}">Smartphones</a></li>
                        <li><a class="dropdown-item" href="{{ route('accesorios') }}">Accesorios</a></li>
                        <li><a class="dropdown-item" href="#">Ofertas</a></li>
                        <li><a class="dropdown-item" href="#">Nuevos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">
                            Contacto
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('comercializacion') ? 'active' : '' }}" href="{{ route('comercializacion') }}">
                            Comercializacion
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('quienesSomos') ? 'active' : '' }}" href="{{ route('quienesSomos') }}">
                            Quienes somos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>