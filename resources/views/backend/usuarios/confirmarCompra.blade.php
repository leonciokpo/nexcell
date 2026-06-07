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
                    <input type="text" name="codigo_postal" class="compra-input" required>

                    <label>Calle</label>
                    <input type="text" name="calle" class="compra-input" required>

                    <label>Número</label>
                    <input type="text" name="numero" class="compra-input" required>

                    <label>Barrio (opcional)</label>
                    <input type="text" name="barrio" class="compra-input">

                    <label>Ciudad</label>
                    <input type="text" name="ciudad" class="compra-input" required>

                    <label>Provincia</label>
                    <input type="text" name="provincia" class="compra-input" required>
                </div>

                {{-- PAGO --}}
                <div class="compra-section">
                    <h5>Método de pago</h5>

                    <select name="metodo_pago" id="metodoPago" class="compra-input" required>
                        <option value="">Seleccionar</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta</option>
                    </select>
                </div>

                {{-- TARJETA --}}
                <div id="datosTarjeta" class="compra-section oculto">

                    <h5>Datos de tarjeta</h5>

                    <label>Número de tarjeta</label>
                    <input type="text" name="numero_tarjeta" class="compra-input">

                    <label>Titular</label>
                    <input type="text" name="titular" class="compra-input">

                    <label>Vencimiento</label>
                    <input type="text" name="vencimiento" class="compra-input">

                    <label>CVV</label>
                    <input type="text" name="cvv" class="compra-input">

                    <label>DNI del titular</label>
                    <input type="text" name="dni" class="compra-input">

                    <label>Teléfono</label>
                    <input type="text" name="telefono" class="compra-input">
                </div>

                <button type="submit" class="btn-confirmar-compra">
                    Confirmar compra
                </button>

            </form>

        </div>

    </div>
</div>

</x-layout>