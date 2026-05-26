@foreach($productos as $producto)
    <div class="col-md-6 col-xl-4">
        <div class="producto-card">
            <a href="{{ route('producto.show', $producto->id) }}" class="text-decoration-none text-dark">

                <div class="producto-img-container">
                    <img src="{{ asset($producto->imagenes->first()->ruta ?? 'images/no-image.png') }}"
                         class="producto-img">

                    @if($producto->descuento > 0)
                        <span class="badge-descuento">
                            -{{ $producto->descuento }}%
                        </span>
                    @endif
                </div>

                <div class="producto-info">
                    <h5 class="producto-nombre">{{ $producto->nombre }}</h5>

                    @if($producto->precio_viejo)
                        <div class="precio-viejo">
                            $ {{ number_format($producto->precio_viejo,0,',','.') }}
                        </div>
                    @endif

                    <div class="precio-actual">
                        $ {{ number_format($producto->precio,0,',','.') }}
                    </div>
                </div>

            </a>
        </div>
    </div>
@endforeach