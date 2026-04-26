<x-layout title="{{ $producto['nombre'] }}" bodyClass="fondo-producto">

<div class="container py-5">

    <div class="row align-items-center">

        <!-- IMAGEN -->
        <div class="col-md-6 text-center">
            <img src="{{ asset($producto['imagen']) }}" class="img-fluid producto-img">
        </div>

        <!-- INFO -->
        <div class="col-md-6">

            <h2 class="mb-3">{{ $producto['nombre'] }}</h2>

            <p class="descripcion mb-4">
                {{ $producto['descripcion'] }}
            </p>

            <h3 class="precio mb-4">
                $ {{ number_format($producto['precio'], 0, ',', '.') }}
            </h3>

            <button class="btn-comprar">Agregar al carrito</button>

        </div>

    </div>

</div>

</x-layout>