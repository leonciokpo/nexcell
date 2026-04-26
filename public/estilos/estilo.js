// CAROUSEL
const carousel = document.querySelector('#carouselNexcell');

if (carousel) {
    new bootstrap.Carousel(carousel, {
        interval: 4000,
        ride: 'carousel'
    });
}

// NAVBAR SCROLL
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if (navbar) {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scroll');
        } else {
            navbar.classList.remove('navbar-scroll');
        }
    }
});

// BUSCADOR
const searchIcon = document.querySelector('.search-icon');

if (searchIcon) {
    searchIcon.addEventListener('click', () => {
        alert('Click detectado');
    });
}

document.addEventListener('DOMContentLoaded', () => {

    const miniaturas = document.querySelectorAll('.miniatura');
    const imagenPrincipal = document.getElementById('imagenPrincipal');
    const colorTexto = document.getElementById('colorSeleccionado');

    miniaturas.forEach(img => {
        img.addEventListener('click', () => {

            // Cambiar imagen principal
            imagenPrincipal.src = img.dataset.imagen;

            // Cambiar texto del color
            colorTexto.textContent = img.dataset.color;

            // Cambiar estado activo
            miniaturas.forEach(i => i.classList.remove('active'));
            img.classList.add('active');
        });
    });

});