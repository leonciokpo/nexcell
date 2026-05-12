<x-layout title="Contacto">

<section class="contacto-container">

    <div class="contacto-grid">

        <!-- INFO -->
        <div class="contacto-info">

            <h1 class="contacto-title">Contacto</h1>

            <p class="contacto-texto">
                También encontranos en:
            </p>

            <div class="contacto-item">
                <i class="bi bi-geo-alt-fill"></i>
                Hipolito Yrigoyen 1700 - Centenario Shopping
            </div>

            <div class="contacto-item">
                <i class="bi bi-whatsapp"></i>
                +54 9 2323 348545
            </div>

            <div class="contacto-item">
                <i class="bi bi-telephone-fill"></i>
                +54 8912 839123
            </div>

            <div class="contacto-item">
                <i class="bi bi-envelope-fill"></i>
                nexcell@gmail.com
            </div>

            <div class="contacto-item">
                <i class="bi bi-shop"></i>
                Hipolito Yrigoyen 1700
            </div>

        </div>

        <!-- FORM -->
        <form action="/contacto" method="POST" class="contacto-form">
            @csrf

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Tu nombre completo" value="{{ old('nombre') }}">
                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="tuemail@email.com" value="{{ old('email') }}">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
    <label>Motivo</label>

            <input 
                type="text" name="motivo" placeholder="Motivo de la consulta" value="{{ old('motivo') }}">
            @error('motivo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>

            <div class="form-group">
                <label>Mensaje</label>
                <textarea name="consulta" rows="4" placeholder="Escribí tu mensaje..." value="{{ old('consulta') }}"></textarea>
                @error('consulta')
                    <small class="text-danger">{{ $message }}</small>
                @enderror            
            </div>

            <button type="submit" class="btn-enviar">
                Enviar mensaje
            </button>
        </form>

    </div>

    @if (session('success_message'))
        <div class="alert alert-success" role="alert">
            {{ session('success_message') }}
        </div>
    @endif
</section>

</x-layout>