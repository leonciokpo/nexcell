@props(['title', 'bodyClass' => ''])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Home' }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo-titulo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo-titulo.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('images/logo-titulo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-titulo.png') }}">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('estilos/estilo.css') }}?v={{ time() }}">
    
</head>

<body class="{{ $bodyClass ?? '' }}">

    <x-navbar />

    <div class="d-flex">

    {{-- SIDEBAR ADMIN --}}
    @if(session('usuario_perfil') == 1 && request()->is('admin*'))

        <div class="bg-dark text-white p-3"
             style="width: 260px; min-height: 100vh;">

            <h4 class="mb-4">
                Panel Admin
            </h4>

            <div class="list-group">

                <a href="/admin"
                   class="list-group-item list-group-item-action">
                    Dashboard
                </a>

                <a href="/admin/usuarios"
                   class="list-group-item list-group-item-action">
                    Usuarios
                </a>

                <a href="/admin/productos"
                   class="list-group-item list-group-item-action">
                    Productos
                </a>

                <a href="/admin/categorias"
                   class="list-group-item list-group-item-action">
                    Categorías
                </a>

                <a href="/consultas"
                   class="list-group-item list-group-item-action">
                    Consultas
                </a>

            </div>

        </div>

    @endif

    {{-- CONTENIDO --}}
    <main class="flex-grow-1 p-4">
        {{ $slot }}
    </main>

</div>
    <x-footer />
    <a href="#" class="whatsapp-float">
        <i class="bi bi-whatsapp"></i>
    </a>

    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '{{ session('success') }}',
            confirmButtonColor: '#ff7a18'
        });
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonColor: '#ff7a18'
        });
    </script>
    @endif

        <!-- OVERLAY -->
    <div class="cart-overlay" id="cartOverlay"></div>

    <!-- SIDEBAR CARRITO -->
    <div class="cart-sidebar" id="cartSidebar">

        <!-- HEADER -->
        <div class="cart-header">
            <h4>Tu carrito</h4>

            <button class="cart-close" id="closeCart">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <!-- PRODUCTOS -->
        <div class="cart-body">

            <!-- ITEM -->
            <div class="cart-item">
                <img src="{{ asset('images/iphone15.jpg') }}" alt="">

                <div class="cart-item-info">
                    <h6>iPhone 15 Pro</h6>
                    <p>$1.250.000</p>
                </div>
            </div>

            <div class="cart-item">
                <img src="{{ asset('images/airpods.jpg') }}" alt="">

                <div class="cart-item-info">
                    <h6>AirPods Pro</h6>
                    <p>$350.000</p>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
        <div class="cart-footer">

            <div class="cart-total">
                <span>Total</span>
                <strong>$1.600.000</strong>
            </div>

            <button class="btn-finalizar">
                Finalizar compra
            </button>

        </div>

    </div>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('estilos/estilo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>