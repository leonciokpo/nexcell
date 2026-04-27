<x-layout title="{{ $producto['nombre'] }}" bodyClass="fondo-producto">

<div class="container producto-detalle-container">

    <div class="producto-detalle-card">

        <div class="row g-5 align-items-start">

            <!-- IMAGEN -->
            <div class="col-lg-6 text-center">

                <div class="producto-img-box">
                    <img src="{{ asset($producto['variantes'][0]['imagen'] ?? $producto['imagen']) }}" 
                        class="img-fluid producto-img"
                        id="imagenPrincipal">
                        @if(isset($producto['variantes']))
                            <div class="mt-4">

                                <p><strong>Color:</strong> 
                                    <span id="colorSeleccionado">
                                        {{ $producto['variantes'][0]['color'] }}
                                    </span>
                                </p>

                                <div class="d-flex gap-2">

                                    @foreach ($producto['variantes'] as $index => $variante)
                                        <img src="{{ asset($variante['imagen']) }}"
                                            class="miniatura {{ $loop->first ? 'active' : '' }}"
                                            data-imagen="{{ asset($variante['imagen']) }}"
                                            data-color="{{ $variante['color'] }}">
                                    @endforeach

                                </div>

                            </div>
                        @endif
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

                <p class="metodos-link mt-2" data-bs-toggle="modal" data-bs-target="#modalPagos">
                    Ver Metodos de Pago
                </p>

                <hr>

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

        <!-- DESCRIPCIÓN ABAJO -->
        <div class="row mt-5">
            <div class="col-12">

                <div class="producto-detalle-card">

                    <div class="producto-descripcion">
                        <h5>Descripción</h5>

                        <p class="descripcion">
                            {!! nl2br(e($producto['descripcion'])) !!}
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- MODAL METODOS DE PAGO -->
<div class="modal fade" id="modalPagos" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-ml">

            <div class="modal-header border-0">
                <h5 class="modal-title">Medios de pago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <p class="subtitulo-pagos">Pagá con tarjetas de crédito</p>

                <div class="pagos-grid">
                    <img src="{{ asset('images/medios_de_pago/visa.jpg') }}">
                    <img src="{{ asset('images/medios_de_pago/mastercard.jpg') }}">
                    <img src="{{ asset('images/medios_de_pago/cabal.jpg') }}">
                </div>

                <hr>

                <p class="subtitulo-pagos">Pagá en efectivo</p>

                <div class="pagos-grid">
                    <img src="{{ asset('images/medios_de_pago/rapipago.jpg') }}">
                    <img src="{{ asset('images/medios_de_pago/pagofacil.jpg') }}">
                </div>

            </div>

        </div>
    </div>
</div>
</x-layout>