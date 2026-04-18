
<header>
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

            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">

                <span class="icon-hamburger">☰</span>
                <span class="icon-close">✕</span>

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
                        <a class="nav-link active" href="{{ route('home') }}">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Comercializacion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quienes-somos') }}">Quienes somos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
const toggler = document.querySelector('.custom-toggler');
const menu = document.querySelector('#navbarContenido');

menu.addEventListener('shown.bs.collapse', () => {
    toggler.classList.add('open');
});

menu.addEventListener('hidden.bs.collapse', () => {
    toggler.classList.remove('open');
});
</script>