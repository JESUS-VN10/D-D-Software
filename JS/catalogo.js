document.addEventListener('DOMContentLoaded', function(){

    //  MENU HAMBURGUESA
    document.getElementById('menu-icon').addEventListener('click', function() {
        document.getElementById('menu-items').classList.toggle('active');
        // Agrega un evento de clic al icono "X" para cerrar el menú
        document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('menu-items').classList.remove('active');
      });
    });



    // CARRITO DE COMPRAS

    // Obtener el elemento del botón de añadir al carrito dentro del producto
    const addCartButtons = document.querySelectorAll('.content-card-product .add-cart');

    // Obtener el elemento del contador del carrito en la parte superior de la página
    const cartCountElement = document.querySelector('.container-user .content-shopping-cart .number');

    addCartButtons.forEach(button => {
        
    // Evento de clic en el botón de añadir al carrito dentro del producto
        button.addEventListener('click', function() {
        // Obtener el número actual de productos en el carrito
        let currentCount = parseInt(cartCountElement.textContent.replace(/\D/g, '')); // Eliminar el texto y convertir a número
        currentCount++; // Incrementar en 1
        cartCountElement.textContent = `(${currentCount})`; // Actualizar el contenido del contador
    });
  });




    // SCRIPT PARA EL MENU DEPLEGABLE CARRITO DE COMPRAS
    const cartIcon = document.querySelector('.fa-cart-shopping'); 
    const cartTab = document.getElementById('cartTab');
    const closeButton = document.querySelector('.close');

    // Función para abrir el menú
    cartIcon.addEventListener('click', function() {
    document.body.classList.add('showCart');
});

    // Función para cerrar el menú
    closeButton.addEventListener('click', function() {
    document.body.classList.remove('showCart');
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