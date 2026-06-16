<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top {{ session('perfil_id') == 1 ? 'navbar-admin' : '' }}">

        <div class="container-fluid">

            <div class="top-navbar">

                @if(session('perfil_id') == 1)

                    <span class="navbar-brand">
                        <img src="{{ asset('images/logo.png') }}" class="logo-navbar">
                        <span>Nexcell.</span>
                    </span>

                @else

                    <a class="navbar-brand" href="{{ route('principal') }}">
                        <img src="{{ asset('images/logo.png') }}" class="logo-navbar">
                        <span>Nexcell.</span>
                    </a>

                @endif

                <div class="auth-buttons d-none d-lg-flex">

                @if(session('usuario_id'))

    <div class="dropdown">

        <button class="btn btn-login dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
            {{ session('usuario_nombre') }}
        </button>

        <ul class="dropdown-menu dropdown-menu-end">

    <li>
        <a class="dropdown-item" href="{{ route('mi-perfil') }}">
            Mi Perfil
        </a>
    </li>

    @if(session('perfil_id') != 1)
        <li>
            <a class="dropdown-item" href="{{ route('compras.historial') }}">
                Historial de Compras
            </a>
        </li>
    @endif

    @if(session('perfil_id') == 1)
        <li>
            <a class="dropdown-item" href="/admin">
                Panel Admin
            </a>
        </li>
    @endif

</ul>

    </div>

    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf

        <button type="submit" class="btn btn-login">
            Cerrar Sesión
        </button>
    </form>

    @if(session('perfil_id') != 1)
        <button class="btn-cart" id="openCart">
            <i class="bi bi-cart3"></i>
        </button>
    @endif

@else

    <a href="{{ route('inicioSesion') }}" class="btn btn-login">
        Iniciar Sesión
    </a>

    <a href="{{ route('registroSesion') }}" class="btn btn-register">
        Registrarse
    </a>

@endif
    </div>

                </div>

            </div>

            {{-- BOTÓN MOBILE --}}
            @if(!session('usuario_id') || session('perfil_id') != 1)

                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarContenido">
                    <span class="navbar-toggler-icon"></span>
                </button>

            @endif

            {{-- CONTENIDO NAVBAR --}}
            @if(!session('usuario_id') || session('perfil_id') != 1)
            <div class="collapse navbar-collapse" id="navbarContenido">

                {{-- MOBILE AUTH --}}
                <div class="mobile-auth d-lg-none">

                    <div class="auth-box">

                        @if(session('usuario_id'))

                            <p class="mb-2">
                                Hola {{ session('usuario_nombre') }}
                            </p>

                            @if(session('perfil_id') == 1)

                                <a href="/admin" class="btn btn-register mb-2">
                                    Panel Admin
                                </a>

                            @endif

                            <form action="{{ route('logout') }}" method="POST">

                                @csrf
                                <button type="submit" class="btn btn-login">
                                    Cerrar Sesión
                                </button>

                            </form>

                        @else

                            <a href="{{ route('inicioSesion') }}" class="btn btn-login">
                                Iniciar Sesión
                            </a>

                            <a href="{{ route('registroSesion') }}" class="btn btn-register">
                                Registrarse
                            </a>

                        @endif

                    </div>

                   @if(session('perfil_id') != 1)
                        <div class="cart-box">

                            <button class="btn-cart" id="openCartMobile">
                                <i class="bi bi-cart3"></i>
                            </button>

                        </div>
                    @endif

                </div>

               @if(!session('usuario_id') || session('perfil_id') != 1)

                    {{-- BUSCADOR --}}
                    <div class="search-container w-100 d-flex justify-content-start mb-2">

                        <div class="search-box">

                            <form action="{{ route('productos') }}" method="GET" class="search-box">

                                <i class="bi bi-search search-icon"></i>

                                <input
                                    type="text"
                                    name="buscar"
                                    class="search-input"
                                    placeholder="Buscar productos...">

                            </form>

                        </div>

                    </div>

                    {{-- LINKS --}}
                    <ul class="navbar-nav w-100">

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('principal') ? 'active' : '' }}"
                            href="{{ route('principal') }}">
                                Inicio
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('productos') ? 'active' : '' }}"
                            href="{{ route('productos') }}">
                                Productos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}"
                            href="{{ route('contacto') }}">
                                Contacto
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('comercializacion') ? 'active' : '' }}"
                            href="{{ route('comercializacion') }}">
                                Comercialización
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('quienesSomos') ? 'active' : '' }}"
                            href="{{ route('quienesSomos') }}">
                                Quiénes Somos
                            </a>
                        </li>

                        

                    </ul>

                @endif

            </div>
            @endif
        </div>

    </nav>
</header>