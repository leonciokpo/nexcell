<x-layout title="Nueva contraseña">

    <div class="login-container">

        <form method="POST"
              action="{{ route('password.update') }}"
              class="login-form">

            @csrf

            <input type="hidden"
                   name="token"
                   value="{{ $token }}">

            <div class="form-group">
                <label>Email</label>

                <input type="email"
                       name="email">
            </div>

            <div class="form-group">
                <label>Nueva contraseña</label>

                <input type="password"
                       name="password">
            </div>

            <div class="form-group">
                <label>Confirmar contraseña</label>

                <input type="password"
                       name="password_confirmation">
            </div>

            <button type="submit"
                    class="btn-login-submit">

                Cambiar contraseña

            </button>

        </form>

    </div>

</x-layout>