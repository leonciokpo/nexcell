<x-layout title="Smartphones" bodyClass="fondo-productos">

<div class="container py-5">

    <h2 class="text-center mb-5 titulo-seccion">Smartphones</h2>

    <div class="row g-4">

        @foreach ($productos as $producto)
        <div class="col-lg-3 col-md-6">
            <div class="producto-card">

                <img src="{{ asset($producto['imagen']) }}" alt="producto">

                <h5>{{ $producto['nombre'] }}</h5>

                <p class="precio">
                    $ {{ number_format($producto['precio'], 0, ',', '.') }}
                </p>

                <a href="{{ route('producto.show', $producto['id']) }}" class="btn-comprar">
                    Ver producto
                </a>
            </div>
        </div>
        @endforeach

    </div>

</div>

</x-layout>