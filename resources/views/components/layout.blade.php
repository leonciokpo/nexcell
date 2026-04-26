@props(['title', 'bodyClass' => ''])

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Home' }}</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('estilos/estilo.css') }}?v={{ time() }}">
    
</head>

<body class="{{ $bodyClass ?? '' }}">

    <x-navbar />

    <main class="container mt-4">
        {{ $slot }}
    </main>

    <x-footer />
    <a href="#" class="whatsapp-float">
        <i class="bi bi-whatsapp"></i>
    </a>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('estilos/estilo.js') }}"></script>
</body>
</html>