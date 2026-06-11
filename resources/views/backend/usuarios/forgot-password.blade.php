<x-layout title="Recuperar contraseña">

    <div class="login-container">

        <form method="POST"
              action="{{ route('password.email') }}"
              class="login-form">

            @csrf

            <h2 class="mb-4 text-center">
                Recuperar contraseña
            </h2>

            <p class="login-texto mb-4">
                Ingresá tu email y te enviaremos un enlace
                para restablecer tu contraseña.
            </p>

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    placeholder="Ingresá tu email"
                    required>

                @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <button
                type="submit"
                class="btn-login-submit w-100">

                Enviar enlace

            </button>

        </form>

    </div>

</x-layout>