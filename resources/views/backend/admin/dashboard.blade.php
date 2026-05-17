<x-layout title="Panel Admin">

    <div class="container d-flex justify-content-center align-items-center"
         style="min-height: 80vh;">

        <div class="text-center">

            <h1 class="fw-bold mb-3">
                Bienvenido al Panel de Administrador
            </h1>

            <p class="text-muted fs-5">
                Hola {{ session('usuario_nombre') }}
            </p>

        </div>

    </div>

</x-layout>