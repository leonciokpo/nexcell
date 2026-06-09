<x-layout title="Confirmación de Compra">

    <div class="fondo-compra">
        <div class="compra-container">

            <div class="compra-card">

                <div class="compra-header">
                    <div class="compra-icon">
                        <i class="bi bi-bag-check-fill"></i>
                    </div>

                    <div>
                        <h1>Confirmar Compra</h1>
                        <p>Completá los datos para finalizar tu pedido</p>
                    </div>
                </div>

                <form action="{{ route('carrito.confirmar') }}" method="POST">
                @csrf

                {{-- DIRECCIÓN --}}
                <div class="compra-section">

                    <h5>Dirección de envío</h5>

                    <label>Código postal</label>
                    <input
                        type="text"
                        name="codigo_postal"
                        class="compra-input"
                        value="{{ old('codigo_postal') }}">

                    @error('codigo_postal')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Calle</label>
                    <input
                        type="text"
                        name="calle"
                        class="compra-input"
                        value="{{ old('calle') }}">

                    @error('calle')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Número</label>
                    <input
                        type="text"
                        name="numero"
                        class="compra-input"
                        value="{{ old('numero') }}">

                    @error('numero')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Barrio (opcional)</label>
                    <input
                        type="text"
                        name="barrio"
                        class="compra-input"
                        value="{{ old('barrio') }}">

                    @error('barrio')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Ciudad</label>
                    <input
                        type="text"
                        name="ciudad"
                        class="compra-input"
                        value="{{ old('ciudad') }}">

                    @error('ciudad')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Provincia</label>
                    <input
                        type="text"
                        name="provincia"
                        class="compra-input"
                        value="{{ old('provincia') }}">

                    @error('provincia')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                {{-- PAGO --}}
                <div class="compra-section">

                    <h5>Método de pago</h5>

                    <select
                        name="metodo_pago"
                        id="metodoPago"
                        class="compra-input">

                        <option value="">Seleccionar</option>

                        <option
                            value="efectivo"
                            {{ old('metodo_pago') == 'efectivo' ? 'selected' : '' }}>
                            Efectivo
                        </option>

                        <option
                            value="tarjeta"
                            {{ old('metodo_pago') == 'tarjeta' ? 'selected' : '' }}>
                            Tarjeta
                        </option>

                    </select>

                    @error('metodo_pago')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                {{-- TARJETA --}}
                <div
                    id="datosTarjeta"
                    class="compra-section {{ old('metodo_pago') == 'tarjeta' ? '' : 'oculto' }}">

                    <h5>Datos de tarjeta</h5>

                    <label>Número de tarjeta</label>
                    <input
                        type="text"
                        name="numero_tarjeta"
                        class="compra-input"
                        value="{{ old('numero_tarjeta') }}">

                    @error('numero_tarjeta')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Titular</label>
                    <input
                        type="text"
                        name="titular"
                        class="compra-input"
                        value="{{ old('titular') }}">

                    @error('titular')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Vencimiento (MM/AA)</label>
                    <input
                        type="text"
                        name="vencimiento"
                        class="compra-input"
                        value="{{ old('vencimiento') }}"
                        placeholder="08/28">

                    @error('vencimiento')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>CVV</label>
                    <input
                        type="text"
                        name="cvv"
                        class="compra-input"
                        value="{{ old('cvv') }}">

                    @error('cvv')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>DNI del titular</label>
                    <input
                        type="text"
                        name="dni"
                        class="compra-input"
                        value="{{ old('dni') }}">

                    @error('dni')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror


                    <label>Teléfono</label>
                    <input
                        type="text"
                        name="telefono"
                        class="compra-input"
                        value="{{ old('telefono') }}">

                    @error('telefono')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <button type="submit" class="btn-confirmar-compra">
                    Confirmar compra
                </button>

            </form>

            </div>

        </div>
    </div>

</x-layout>