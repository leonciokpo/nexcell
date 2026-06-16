
<x-layout title="Registrar Sesión">

    <div class="registro-container">

        <div class="registro-grid">

            {{-- INFO --}}
            <div class="registro-info">

                <h1 class="registro-title">
                    Creá tu cuenta Nexcell
                </h1>

                <p class="registro-texto">
                    Registrate para comprar más rápido, guardar productos
                    favoritos y acceder a ofertas exclusivas.
                </p>

                <div class="registro-item">
                    <i class="bi bi-person-plus-fill"></i>
                    Cuenta gratuita
                </div>

                <div class="registro-item">
                    <i class="bi bi-shield-check"></i>
                    Datos protegidos
                </div>

                <div class="registro-item">
                    <i class="bi bi-bag-check-fill"></i>
                    Compras más rápidas
                </div>

            </div>

            {{-- FORM --}}
            <form
                action="{{ route('signup.procesar') }}"
                method="POST"
                class="registro-form">

                @csrf

                <h2 class="mb-4 text-center">
                    Registrarse
                </h2>

                {{-- NOMBRE --}}
                <div class="form-group">

                    <label>Nombre</label>

                    <input
                        type="text"
                        name="nombre"
                        value="{{ old('nombre') }}"
                        placeholder="Ingresá tu nombre">

                </div>

                {{-- APELLIDO --}}
                <div class="form-group">

                    <label>Apellido</label>

                    <input
                        type="text"
                        name="apellido"
                        value="{{ old('apellido') }}"
                        placeholder="Ingresá tu apellido">

                </div>

                {{-- EMAIL --}}
                <div class="form-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Ingresá tu email">

                </div>

                {{-- TELEFONO --}}
                <div class="form-group">

                    <label>Número de teléfono</label>

                    <input
                        type="text"
                        name="telefono"
                        value="{{ old('telefono') }}"
                        placeholder="Ingresá tu número">

                </div>

                {{-- PASSWORD --}}
                <div class="form-group">

                    <label>Contraseña</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Ingresá tu contraseña">

                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="form-group">

                    <label>Confirmar contraseña</label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Repetí tu contraseña">

                </div>

                <button
                    type="submit"
                    class="btn-registro-submit w-100">

                    Crear cuenta

                </button>

            </form>

        </div>

    </div>

</x-layout>

