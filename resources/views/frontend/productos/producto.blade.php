<x-layout title="{{ $producto['nombre'] }}" bodyClass="fondo-producto">

<div class="container producto-detalle-container">

    <div class="producto-detalle-card">

        <div class="row g-5 align-items-start">

            <!-- IMAGEN -->
            <div class="col-lg-6 text-center">

                <div class="producto-img-box">
                    <img src="{{ asset($producto['imagen']) }}" 
                         class="img-fluid producto-img">
                </div>

            </div>

            <!-- INFO -->
            <div class="col-lg-6">

                <span class="producto-vendido">
                    NUEVO
                </span>

                <h1 class="producto-titulo">
                    {{ $producto['nombre'] }}
                </h1>

                <div class="producto-rating mb-3">
                    ⭐⭐⭐⭐⭐
                    <span>(124 opiniones)</span>
                </div>

                @if(isset($producto['precio_viejo']))
                    <div class="precio-viejo-detalle">
                        $ {{ number_format($producto['precio_viejo'],0,',','.') }}
                    </div>
                @endif

                <div class="precio-actual">
                    $ {{ number_format($producto['precio'],0,',','.') }}
                </div>

                @if(isset($producto['descuento']))
                    <div class="descuento-detalle">
                        {{ $producto['descuento'] }}% OFF
                    </div>
                @endif

                <p class="producto-cuotas">
                    en 6 cuotas sin interés
                </p>

                <hr>

                <div class="producto-descripcion">
                    <h5>Descripción</h5>

                    <p>
                        {{ $producto['descripcion'] }}
                    </p>
                </div>

                <div class="d-grid gap-3 mt-4">

                    <button class="btn-comprar-detalle">
                        Comprar ahora
                    </button>

                    <button class="btn-carrito-detalle">
                        Agregar al carrito
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>

</x-layout>