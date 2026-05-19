<x-layout title="Mi Cuenta">

<div class="cuenta-container">

    <div class="cuenta-card">
        <h2 class="cuenta-title">
            <i class="bi bi-person-circle"></i>
            Mi Cuenta
        </h2>

        <div class="cuenta-info">

            <div class="info-item">
                <span>Nombre</span>
                <strong>{{ $usuario->nombre }} {{ $usuario->apellido }}</strong>
            </div>

            <div class="info-item">
                <span>Email</span>
                <strong>{{ $usuario->email }}</strong>
            </div>

            <div class="info-item">
                <span>Fecha de creación</span>
                <strong>{{ $usuario->created_at->format('d/m/Y') }}</strong>
            </div>

            <div class="info-item">
                <span>Teléfono</span>

                <strong>
                    {{ $usuario->telefono ?? 'No registrado' }}
                </strong>
            </div>

        </div>
    </div>

    {{-- CARDS --}}
    <div class="row g-4 mt-2">

        {{-- CARRITO --}}
        <div class="col-md-6">
            <div class="panel-card">

                <div class="panel-icon">
                    <i class="bi bi-cart3"></i>
                </div>

                <h4>Mi carrito</h4>

                <p>
                    Ver los productos agregados al carrito.
                </p>

                <a href="#" class="btn-panel">
                    Ver carrito
                </a>

            </div>
        </div>

        {{-- PRODUCTOS --}}
        <div class="col-md-6">
            <div class="panel-card">

                <div class="panel-icon">
                    <i class="bi bi-phone"></i>
                </div>

                <h4>Productos</h4>

                <p>
                    Explorar todos los productos disponibles.
                </p>

                <a href="{{ route('smartphones') }}" class="btn-panel">
                    Ver productos
                </a>

            </div>
        </div>

    </div>

</div>

</x-layout>