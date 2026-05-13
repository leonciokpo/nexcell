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

const cartSidebar = document.getElementById('cartSidebar');
const cartOverlay = document.getElementById('cartOverlay');

const openButtons = [
    document.getElementById('openCart'),
    document.getElementById('openCartMobile')
];

const closeButton = document.getElementById('closeCart');

function openCart() {
    if(cartSidebar && cartOverlay){
        cartSidebar.classList.add('active');
        cartOverlay.classList.add('active');
    }
}

function closeCart() {
    if(cartSidebar && cartOverlay){
        cartSidebar.classList.remove('active');
        cartOverlay.classList.remove('active');
    }
}

/* BOTONES ABRIR */
openButtons.forEach(btn => {
    if(btn){
        btn.addEventListener('click', openCart);
    }
});

/* BOTON CERRAR */
if(closeButton){
    closeButton.addEventListener('click', closeCart);
}

/* OVERLAY */
if(cartOverlay){
    cartOverlay.addEventListener('click', closeCart);
}