@foreach($productos as $producto)

    <div class="col-md-6 col-xl-4">

        <div class="producto-card">

            <a href="{{ route('producto.show', $producto->id) }}"
               class="text-decoration-none text-dark">

                <div class="producto-img-container">

                    <img
                        src="{{ asset($producto->imagenes->first()->ruta ?? 'images/no-image.png') }}"
                        class="producto-img"
                    >

                    @if($producto->descuento > 0)

                        <span class="badge-descuento">
                            -{{ $producto->descuento }}%
                        </span>

                    @endif

                </div>

                <div class="producto-info">

                    <h5 class="producto-nombre">
                        {{ $producto->nombre }}
                    </h5>

                    @if($producto->descuento > 0)

                        <div class="precio-viejo">
                            $ {{ number_format($producto->precio,0,',','.') }}
                        </div>

                        <div class="precio-actual">
                            $ {{ number_format($producto->precio_final,0,',','.') }}
                        </div>

                    @else

                        <div class="precio-actual">
                            $ {{ number_format($producto->precio,0,',','.') }}
                        </div>

                    @endif

                </div>

            </a>

            {{-- BOTON CARRITO --}}
            @if(session('usuario_id'))

                <form action="{{ route('carrito.agregar') }}"
                      method="POST"
                      class="mt-3">

                    @csrf

                    <input type="hidden"
                           name="producto_id"
                           value="{{ $producto->id }}">

                    <input type="hidden"
                           name="cantidad"
                           value="1">

                    <button type="submit"
                            class="btn-agregar-carrito">

                        <i class="bi bi-cart-plus"></i>
                        Agregar al carrito

                    </button>

                </form>

            @else

                <a href="{{ route('inicioSesion') }}"
                   class="btn-agregar-carrito text-center d-block">

                    <i class="bi bi-person"></i>
                    Iniciá sesión

                </a>

            @endif

        </div>

    </div>

@endforeach