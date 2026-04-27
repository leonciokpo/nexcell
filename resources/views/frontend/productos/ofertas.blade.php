<x-layout title="Ofertas">

<div class="container py-5">

    <h2 class="text-center mb-5 titulo-seccion">🔥 Ofertas del día</h2>
    @if($ofertas->isEmpty())
        <p class="text-center">No hay ofertas disponibles en este momento.</p>
    @endif
    <div class="row g-4">

        @foreach ($ofertas as $producto)
        <div class="col-lg-3 col-md-6">

            <a href="{{ route('producto.show', $producto['id']) }}" class="card-link">

                <div class="producto-card">

                    <img src="{{ asset($producto['imagen']) }}" alt="producto">

                    <h5>{{ $producto['nombre'] }}</h5>

                    <p class="precio">

                        <span class="precio-viejo">
                            $ {{ number_format($producto['precio_viejo'], 0, ',', '.') }}
                        </span>

                        <span class="descuento">
                            -{{ $producto['descuento'] }}%
                        </span>

                        <br>

                        <span class="precio-nuevo">
                            $ {{ number_format($producto['precio'], 0, ',', '.') }}
                        </span>

                    </p>

                </div>

            </a>

        </div>
        @endforeach

    </div>

</div>

</x-layout>