<x-layout title="Iniciar Sesión">

    <div class="login-container">

        <div class="login-grid">

            {{-- INFO --}}
            <div class="login-info">

                <h1 class="login-title">
                    Bienvenido a Nexcell
                </h1>

                <p class="login-texto">
                    Iniciá sesión para acceder a tu cuenta, revisar tus pedidos,
                    guardar productos favoritos y disfrutar de una experiencia
                    personalizada.
                </p>

                <div class="login-item">
                    <i class="bi bi-shield-lock-fill"></i>
                    Seguridad protegida
                </div>

                <div class="login-item">
                    <i class="bi bi-lightning-fill"></i>
                    Acceso rápido
                </div>

                <div class="login-item">
                    <i class="bi bi-phone-fill"></i>
                    Gestioná tus compras
                </div>

            </div>

            {{-- FORM --}}
            <form
                action="{{ route('login.procesar') }}"
                method="POST"
                class="login-form">

                @csrf

                <h2 class="mb-4 text-center">
                    Iniciar Sesión
                </h2>

                {{-- GOOGLE LOGIN --}}
                <a href="{{ route('google.login') }}"
                   class="btn-google-login">

                    <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                         width="22">

                    Continuar con Google

                </a>

                <div class="separator">
                    <span>o</span>
                </div>

                {{-- EMAIL --}}
                <div class="form-group">

                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Ingresá tu email">

                    @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- PASSWORD --}}
                <div class="form-group">

                    <label>Contraseña</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Ingresá tu contraseña">

                    @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                <button
                    type="submit"
                    class="btn-login-submit w-100">

                    Ingresar

                </button>

            </form>

        </div>

    </div>

</x-layout>

