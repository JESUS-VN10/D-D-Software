function animateCartIcon() {
    var cartIcon = document.getElementById("cart-container");
    cartIcon.classList.add("bounce");
    setTimeout(function() {
        cartIcon.classList.remove("bounce");
    }, 1000); // Duración de la animación
}

function addProducto(id, token) {
    let url = 'carrito.php';
    let formData = new FormData();
    formData.append('id', id);
    formData.append('token', token);

    fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
    })
    .then(response => {
        // Verificar el estado de la respuesta
        if (!response.ok) {
            throw new Error('Error al añadir el producto al carrito');
        }
        return response.json();
    })
    .then(data => {
        if (data.ok) {
            // Actualizar el número de productos en el carrito
            let elemento = document.getElementById("num_cart");
            elemento.innerHTML = `(${data.numero})`;
            // Animar el ícono del carrito
            animateCartIcon();
        } else {
            throw new Error('Error al añadir el producto al carrito: ' + data.error);
        }
    })
    .catch(error => {
        console.error(error);
    });
}


document.addEventListener('DOMContentLoaded', function() {

    // OPTIMIZACION IMAGENES LAZY LOADING Y PAGESHOW
    if ('IntersectionObserver' in window) {
        let lazyImages = document.querySelectorAll('img[loading="lazy"]');
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
    
    // Código para manejar la eliminación de productos del carrito
    const botonesEliminar = document.querySelectorAll('.remove');
    botonesEliminar.forEach(boton => {
        boton.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.dataset.bsId;
            eliminarProducto(id);
        });
    });

    // Código para manejar el cambio de cantidad de productos en el carrito
    const inputsCantidad = document.querySelectorAll('input[id^="cantidad_"]');
    inputsCantidad.forEach(input => {
        input.addEventListener('change', function() {
            const id = this.id.split('_')[1];
            const cantidad = this.value;
            actualizarCantidad(id, cantidad);
        });
    });

});

function eliminarProducto(id) {
    let url = 'eliminar_producto.php';
    let formData = new FormData();
    formData.append('id', id);

    fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
    })
    .then(response => response.json())
    .then(data => {
        if (data.ok) {
            location.reload(); // Recargar la página para reflejar los cambios
        }
    })
    .catch(error => {
        console.error(error);
    });
}

function actualizarCantidad(id, cantidad) {
    let url = 'actualizar_carrito.php';
    let formData = new FormData();
    formData.append('id', id);
    formData.append('cantidad', cantidad);

    fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
    })
    .then(response => response.json())
    .then(data => {
        if (data.ok) {
            location.reload(); // Recargar la página para reflejar los cambios
        }
    })
    .catch(error => {
        console.error(error);
    });
}
