<x-layout title="Contacto">

<section class="contacto-container">

    <h1 class="contacto-title">Contacto</h1>
    <p class="contacto-subtitle">¿Tenés alguna consulta? Escribinos y te respondemos lo antes posible.</p>

    <form action="/contacto" method="POST" class="contacto-form">
        @csrf

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Tu nombre completo" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="tuemail@email.com" required>
        </div>

        <div class="form-group">
            <label>Mensaje</label>
            <textarea name="mensaje" rows="4" placeholder="Escribí tu mensaje..." required></textarea>
        </div>

        <button type="submit" class="btn-enviar">Enviar mensaje</button>
    </form>

</section>

</x-layout>