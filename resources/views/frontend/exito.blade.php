<x-layout title="Mensaje Enviado">

<section class="exito-container">

    <div class="exito-card">

        <!-- ICONO -->
        <div class="exito-icon">
            <i class="bi bi-check-circle-fill"></i>
        </div>

        <!-- TÍTULO -->
        <h1 class="exito-title">¡Mensaje enviado!</h1>

        <!-- TEXTO -->
        <p class="exito-text">
            Hola <strong>{{ $nombre }}</strong>, recibimos tu mensaje correctamente.
        </p>

        <p class="exito-subtext">
            Un miembro del equipo se pondrá en contacto con vos al correo:
            <strong>{{ $email }}</strong>
        </p>

        <p class="exito-gracias">
            Gracias por confiar en Nexcell.
        </p>

        <!-- BOTÓN -->
        <a href="{{ route('principal') }}" class="btn-volver">
            Volver al inicio
        </a>

    </div>

</section>

</x-layout>