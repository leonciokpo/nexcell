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

// ===============================
// FILTROS EN TIEMPO REAL
// ===============================
document.addEventListener('DOMContentLoaded', () => {

    const grid = document.getElementById('productos-grid');

    function obtenerFiltros() {

        let categorias = [];
        let marcas = [];

        document.querySelectorAll('.filtros-box input[type=checkbox]:checked').forEach(el => {

            if (el.name.includes('categorias')) {
                categorias.push(el.value);
            }

            if (el.name.includes('marcas')) {
                marcas.push(el.value);
            }
        });

        return {
            categorias,
            marcas,
            min: document.querySelector('input[name="min"]').value,
            max: document.querySelector('input[name="max"]').value
        };
    }
    
    let sortActual = 'default';
    function filtrarProductos() {

        const params = new URLSearchParams();

        document.querySelectorAll('.filtros-box input[type=checkbox]:checked').forEach(el => {
            if (el.name.includes('categorias')) {
                params.append('categorias[]', el.value);
            }

            if (el.name.includes('marcas')) {
                params.append('marcas[]', el.value);
            }
        });

        const min = document.querySelector('input[name="min"]').value;
        const max = document.querySelector('input[name="max"]').value;

        if (min) params.append('min', min);
        if (max) params.append('max', max);

        params.append('sort', sortActual);

        fetch("/productos/filtro?" + params.toString())
            .then(res => res.text())
            .then(html => {
                grid.innerHTML = html;
            });
    }

    document.querySelectorAll('.filtros-box input').forEach(input => {
        input.addEventListener('change', filtrarProductos);
        input.addEventListener('input', filtrarProductos);
    });

    const sortButton = document.getElementById('sortDropdownBtn');

    document.querySelectorAll('.sort-option').forEach(option => {

        option.addEventListener('click', (e) => {

            e.preventDefault();

            sortActual = option.dataset.sort;

            // CAMBIAR TEXTO DEL BOTÓN
            sortButton.textContent = option.dataset.label;

            // REMOVER ACTIVO
            document.querySelectorAll('.sort-option').forEach(el => {
                el.classList.remove('active-sort');
            });

            // AGREGAR ACTIVO
            option.classList.add('active-sort');

            // FILTRAR
            filtrarProductos();
        });

    });

});