document.addEventListener('DOMContentLoaded', function() {
    // OPTIMIZACION IMAGENES LAZY LOADING Y PAGESHOW
    const images = document.querySelectorAll('img.lazyload');
    images.forEach(img => {
        const highResImage = new Image();
        highResImage.src = img.dataset.src;
        highResImage.onload = () => {
            img.src = highResImage.src;
            img.classList.add('loaded');
        };
    });

    if ('IntersectionObserver' in window) {
        let lazyImages = document.querySelectorAll('img.lazyload');
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.add('loaded');
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    }
});

window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        document.querySelectorAll('img[loading="lazy"]').forEach(function(img) {
            if (!img.classList.contains('loaded')) {
                img.src = img.dataset.src;
            }
        });
    }

        //  MENU HAMBURGUESA
        document.getElementById('menu-icon').addEventListener('click', function() {
        document.getElementById('menu-items').classList.toggle('active');
        // Agrega un evento de clic al icono "X" para cerrar el menú
        document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('menu-items').classList.remove('active');
      });
    });


        // CAMBIO DE IMAGENES / BANNER
        // CAMBIO DE IMÁGENES / BANNER
        const banner = document.querySelector('.banner');
        const arrowIcon = document.querySelector('.arrow-icon'); // Seleccionamos el icono de la flecha
        let currentIndex = 0;
        let intervalId; // Variable para almacenar el ID del intervalo

        function changeImage() {
            currentIndex = (currentIndex + 1) % 3; // Esto asegura que currentIndex esté dentro del rango de imágenes (de 0 a 2)
            banner.setAttribute('data-index', currentIndex); // Actualiza el índice de la imagen
            banner.style.transition = 'background-image 0.5s ease';
        }

        // Función para iniciar el temporizador
        function startTimer() {
            intervalId = setInterval(changeImage, 10000);
        }

        // Iniciar el temporizador
        startTimer();

        // Agregar evento de clic al icono para cambiar la imagen
        arrowIcon.addEventListener('click', function() {
            changeImage();
            clearInterval(intervalId); // Reiniciar el temporizador
            startTimer(); // Iniciar el temporizador nuevamente
        });


        // MENU HAMBURGUESA / FILTROS
        var dropdownContent = document.getElementById('dropdown-content');
        var overlay = document.getElementById('overlay');
        var buttonFilter = document.getElementById('button-filter');

        buttonFilter.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdownContent.classList.toggle('show');
        overlay.classList.toggle('show');
});

        document.addEventListener('click', function(e) {
        if (!dropdownContent.contains(e.target)) {
        dropdownContent.classList.remove('show');
        overlay.classList.remove('show');
    }
});    
        var dropdownContent = document.getElementById('dropdown-content');

        // Agregar desplazamiento con la rueda del ratón al menú desplegable
        dropdownContent.addEventListener('wheel', function(e) {
        var delta = e.deltaY || e.detail || e.wheelDelta;
        this.scrollTop += (delta < 0 ? -30 : 30); // Ajusta la velocidad de desplazamiento según tu preferencia
        e.preventDefault();
});    
        // Cerrar menú desplegable al hacer clic fuera de él
        document.addEventListener('click', function(e) {
        if (!dropdownContent.contains(e.target)) {
        dropdownContent.classList.remove('show');
        overlay.classList.remove('menu-open'); // Remover clase para ocultar el overlay
    }
});
        // Permitir desplazamiento en el menú desplegable
        dropdownContent.addEventListener('wheel', function(e) {
        e.stopPropagation();
});
        // Permitir desplazamiento en el overlay
        overlay.addEventListener('wheel', function(e) {
        e.stopPropagation();
});

        // CONTROL DESLIZANTE PRECIOS / FILTROS

        const priceSlider = document.querySelector('.price-slider');
        const priceValues = document.querySelectorAll('.price-values span');

        priceSlider.addEventListener('input', function() {
        const value = parseInt(priceSlider.value);
        priceValues[0].textContent = `$${value.toLocaleString()}`;
    });

        // Obtener todos los elementos de título por su clase
        const titleElements = document.querySelectorAll('.title-bold');

        // Iterar sobre cada elemento
        titleElements.forEach(title => {
        // Agregar un evento de clic a cada título
        title.addEventListener('click', () => {
        // Obtener el id del submenú correspondiente
        const submenuId = title.getAttribute('id').replace('title-bold-filter', 'submenu');
        const subMenu = document.getElementById(submenuId);

        // Toggle de la clase "show" para mostrar u ocultar el submenú
        if (subMenu) {
            subMenu.classList.toggle('show');

            // Rotar la flecha utilizando la clase "rotate"
            title.querySelector('i').classList.toggle('rotate');
        }
    });
});





        
});
