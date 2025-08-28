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
   
       // Toggle
       // Script for Descriptions and Reviews
          const toggleDescription = document.querySelector('.title-description');
          const toggleReviews = document.querySelector('.title-reviews');

       // Constantes Contenido Texto
          const contentDescription = document.querySelector('.text-description');
          const contentReviews = document.querySelector('.text-reviews');

       // Funciones para ocultar info y rotar íconos
          toggleDescription.addEventListener('click', () => {
          contentDescription.classList.toggle('hidden');
          toggleDescription.querySelector('.fa-chevron-down').classList.toggle('active');

});
          toggleReviews.addEventListener('click', () => {
          contentReviews.classList.toggle('hidden');
          toggleReviews.querySelector('.fa-chevron-down').classList.toggle('active');
          
});
          const toggleIcon = document.querySelector('.rotate');
          toggleIcon.addEventListener('click', () => {
          toggleIcon.classList.toggle('active');
});

         // Utilizamos 'var' para declarar la variable, y obtenemos referencias a los elementos del DOM
         var containerImg = document.getElementById('product-image-container');
         var variantImages = document.querySelectorAll('.variant-image');

         // Función para cambiar la imagen principal al hacer clic en una de las variant-cards
         function changeImage(event) {
            var clickedImageSrc = event.target.src;
            containerImg.querySelector('img').src = clickedImageSrc;
         }

         // Agregar evento de clic a cada una de las imágenes de las variant-cards
         variantImages.forEach(function(variantImage) {
            variantImage.addEventListener('click', changeImage);
         });






});