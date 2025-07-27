<?php
    // Define el título específico de esta página
    $titulo = "D&D | Pago_realizado";
    // Incluir el CSS específico para esta página
	  $style_css = "CSS/pago_realizado.css";
    // INCLUYE EL ENCABEZADO
    require_once 'header.php';
	  // INCLUYE EL ARCHIVO CONFIG
	  require 'Config/config.php';
    // INCLUYE LA CONEXION
    include_once('Config/conexion.php');
    $db = new Database();
    $con = $db->conectar();

    // Verificar si la conexión se estableció correctamente
    if ($con === false) {
        die("Error de conexión: No se pudo conectar a la base de datos");
    }
	
?>

<div class="container-title">RESULTADO PAGO</div>
           <br>
    <div class="text"> 
              <h1 class="heading-1">¡GRACIAS POR TÚ COMPRA!</h1>
        <br>
          <br>
            <br>
              <h1 class="heading-2">Se ha enviado a tú correo electronico informacion sobre la compra</h1>
                <br>
              <br>
            <br>
          <br>
        <br>
         <a href="pagina_inicio.php" class="Home">Volver al inicio</a>
    </div>
          <br>
            <br>
              <br>
                <br>


<?php
    // INCLUYE EL PIE DE PAGINA
    require_once 'footer.php';
?>