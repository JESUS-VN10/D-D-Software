document.addEventListener('DOMContentLoaded', function() {
  const togglePasswordBtn = document.getElementById('toggle-password-btn'); 
  const passwordInput = document.getElementById('password-input');
  const ojoImgNormal = document.getElementById('ojo-img-normal');
  const ojoImgRayado = document.getElementById('ojo-img-rayado');

  // Función para ocultar la contraseña al cargar la página
  function ocultarContraseña() { 
    passwordInput.type = 'password';
    ojoImgRayado.style.display = 'none';
    ojoImgNormal.style.display = 'block';
  }

  // Función para actualizar el estado del botón del ojo
  function actualizarEstadoOjo() {
    if (passwordInput.type === 'password') { 
      passwordInput.type = 'text';
      ojoImgRayado.style.display = 'block';
      ojoImgNormal.style.display = 'none';
    } else {
      passwordInput.type = 'password';
      ojoImgRayado.style.display = 'none';
      ojoImgNormal.style.display = 'block';
    }
  }

  // Ocultar la contraseña al cargar la página
  ocultarContraseña();

  // Agregar evento click al botón del ojo
  togglePasswordBtn.addEventListener('click', function() {
    // Alternar entre mostrar y ocultar la contraseña
    actualizarEstadoOjo();
  });
});
