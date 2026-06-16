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
    @php
        $mostrarSidebar =
            session('perfil_id') == 1 &&
            request()->is('admin*') &&
            !request()->routeIs('admin.dashboard');
    @endphp
    {{-- SIDEBAR ADMIN --}}
    @if($mostrarSidebar)
        <div class="admin-sidebar">

            {{-- HEADER --}}
            <div class="admin-sidebar-header">

                <div class="admin-sidebar-logo">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>

                <div>
                    <h4>Panel Admin</h4>
                    <span>Nexcell System</span>
                </div>

            </div>

            {{-- MENU --}}
            <div class="admin-sidebar-menu">

                <a href="/admin"
                class="admin-sidebar-link {{ request()->is('admin') ? 'active' : '' }}">

                    <i class="bi bi-grid-1x2-fill"></i>
                    Dashboard

                </a>

                <a href="/admin/usuarios"
                class="admin-sidebar-link {{ request()->is('admin/usuarios*') ? 'active' : '' }}">

                    <i class="bi bi-people-fill"></i>
                    Usuarios

                </a>

                <a href="/admin/productos"
                class="admin-sidebar-link {{ request()->is('admin/productos*') ? 'active' : '' }}">

                    <i class="bi bi-box-seam-fill"></i>
                    Productos

                </a>

                <a href="/admin/consultas"
                class="admin-sidebar-link {{ request()->is('admin/consultas*') ? 'active' : '' }}">

                    <i class="bi bi-chat-dots-fill"></i>
                    Consultas

                </a>

                <a href="/admin/ventas"
                class="admin-sidebar-link {{ request()->is('admin/ventas*') ? 'active' : '' }}">

                    <i class="bi bi-receipt"></i>
                    Ventas

                </a>
            </div>

        </div>
    @endif

    {{-- CONTENIDO --}}
    <main class="flex-grow-1 {{ $mostrarSidebar ? 'admin-main' : '' }}">
        {{ $slot }}
    </main>

</div>
    <x-footer />
    @if (session('perfil_id') != 1)
        <a href="#" class="whatsapp-float">
        <i class="bi bi-whatsapp"></i>
        </a>
    @endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    @php
        $carrito = null;
        $items = collect();

        if(auth()->check()) {
            $carrito = \App\Models\VentaCabecera::where('usuario_id', auth()->id())
                        ->where('estado', 'carrito')
                        ->first();

            if($carrito) {
                $items = $carrito->detalles()->with('producto.imagenes')->get();
            }
        }
    @endphp

    @if($items->count() > 0)

        @foreach($items as $item)

            <div class="cart-item">

                <img
                    src="{{ asset($item->producto->imagenes->first()->ruta ?? 'images/default.png') }}"
                    alt="{{ $item->producto->nombre }}"
                >

                <div class="cart-item-info">

                    <h6>{{ $item->producto->nombre }}</h6>

                    <p>
                        {{ $item->cantidad }} x
                        ${{ number_format($item->precio_unitario, 0, ',', '.') }}
                    </p>

                    <strong>
                        ${{ number_format($item->subtotal, 0, ',', '.') }}
                    </strong>

                </div>

                <form method="POST"
                      action="{{ route('carrito.eliminar', $item->id) }}">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-delete-mini">
                        <i class="bi bi-trash"></i>
                    </button>

                </form>

            </div>

        @endforeach

    @else

        <div class="cart-empty">
            <p>Tu carrito está vacío</p>
        </div>

    @endif

</div>

        <!-- FOOTER -->
        <div class="cart-footer">

            <div class="cart-total">
                <span>Total</span>

                <strong>
                    ${{ number_format($carrito->total ?? 0, 0, ',', '.') }}
                </strong>
            </div>

            @if($items->count() > 0)

                <a href="{{ route('compra.confirmada') }}" class="btn-finalizar">
                    Finalizar compra
                </a>

            @endif

        </div>

    </div>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('estilos/estilo.js') }}"></script>
</body>
</html>