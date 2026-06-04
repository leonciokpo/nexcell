<x-layout title="Mi perfil" bodyClass="fondo-perfil">

<div class="perfil-container">

    <div class="perfil-card">

        <div class="perfil-header">

            <div class="perfil-avatar">
                <i class="bi bi-person-circle"></i>
            </div>

            <div>
                <h1>Mi perfil</h1>
                <p>
                    Administrá tu información personal
                </p>
            </div>

        </div>

        <form method="POST"
              action="{{ route('mi-perfil.update') }}">

            @csrf
            @method('PUT')

            <div class="perfil-section">

                <h5>Información personal</h5>

                <div class="mb-3">

                    <label>Nombre</label>

                    <input type="text"
                           name="nombre"
                           class="form-control perfil-input"
                           value="{{ $usuario->nombre }}">

                </div>

                <div class="mb-4">

                    <label>Email</label>

                    <input type="email"
                           name="email"
                           class="form-control perfil-input"
                           value="{{ $usuario->email }}">

                </div>

            </div>

            <div class="perfil-section">

                <h5>Cambiar contraseña</h5>

                <div class="mb-3">

                    <label>Nueva contraseña</label>

                    <input type="password"
                           name="password"
                           class="form-control perfil-input">

                </div>

                <div class="mb-4">

                    <label>Confirmar contraseña</label>

                    <input type="password"
                           name="password_confirmation"
                           class="form-control perfil-input">

                </div>

            </div>

            <button type="submit"
                    class="btn-guardar-perfil">

                <i class="bi bi-check-circle"></i>
                Guardar cambios

            </button>

        </form>

    </div>

</div>

</x-layout>