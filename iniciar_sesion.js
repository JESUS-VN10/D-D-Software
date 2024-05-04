document.addEventListener('DOMContentLoaded', function() {
  const togglePasswordBtn = document.getElementById('toggle-password-btn');
  const passwordInput = document.getElementById('password-input');
  const ojoImgNormal = document.getElementById('ojo-img-normal');
  const ojoImgRayado = document.getElementById('ojo-img-rayado');

  // Función para actualizar el estado del botón del ojo
  function actualizarEstadoOjo() {
    if (passwordInput.type === 'password') {
      ojoImgNormal.style.display = 'block'; 
      ojoImgRayado.style.display = 'none';  
    } else {
      ojoImgNormal.style.display = 'none';   
      ojoImgRayado.style.display = 'block'; 
    }
  }

  // Actualizar el estado del botón del ojo al cargar la página
  actualizarEstadoOjo();

  // Agregar evento click al botón del ojo
  togglePasswordBtn.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
    } else {
      passwordInput.type = 'password';
    }
    // Actualizar el estado del botón del ojo después de cambiar el tipo de entrada
    actualizarEstadoOjo();
  });
});

