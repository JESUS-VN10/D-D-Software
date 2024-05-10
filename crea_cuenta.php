<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta
             name="viewport"
             content="width=device-width, initial-scale=1.0" 
         />
         <title>D&D || Crear_Cuenta</title>
         <link rel="stylesheet" href="./CSS/crea_cuenta.css"/>
     </head>
    <body>
      <div class="container-logo">
        <h1 class="logo"><a href="#">D&D</a></h1>
        <H2>Ropa Y Calzado</H2>
      </div>

      <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']?></p> 
        <?php } ?>


         <!-- WRAPPER / TITULO-->
        <div class="wrapper">
          <div class="title">
          Crea una cuenta
        </div>

        <form action="Config/CreaCuenta.php" method="POST">

          <!-- CAMPO TU NOMBRE -->
           <div class="input-box">
           <input type="text" placeholder="Tu nombre" name="Nombre_U">
        </div>
        <!-- CAMPO NUMERO DE CEDULA -->
          <div class="input-box">
          <input type="number" placeholder="Numero de cedula" name="Cedula_U">
        </div>
        <!-- CAMPO CORREO ELECTRONICO -->
            <div class="input-box">
            <input type="email" placeholder="Correo electronico" name="Correo_electronico">
        </div>
        <!-- CAMPO CONTRASEÑA -->
            <div class="input-box">
            <input type="password" placeholder="Contraseña" name="Contraseña">
        </div>
        <!-- CAMPO VUELVE A ESCRIBIR LA CONTRASEÑA -->
            <div class="input-box">
            <input type="password" placeholder="Vuelve a escribir la contraseña" name="RContraseña">
        </div>
        <!-- BOTON PARA CONTINUAR -->
            <div class="input-box button">
        <input type="submit" name="Continuar">
        </div>
     
        <!-- TEXTO TERMINOS USUARIO -->
        <div class="terminos">
            <p>Al crear una cuenta, aceptas las Condiciones <br>  
                de uso y el Aviso de Privacidad de D&D.com</p>
              </div>     

          <div class="Login-link">
                Ya tienes una cuenta? <a
   href="iniciar_sesion.php">Iniciar sesion</a>
                </div>    
        </div>
    </form>
      
          <!-- FOOTER -->
     <footer>
      <ul> 
         <br>
          <li><a href="https://www.google.com/?hl=es"target="_blank">Condiciones de uso</a></li>
          <li><a href="https://www.google.com/?hl=es"target="_blank">Privacidad del usuario</a></li>
          <li><a href="https://www.google.com/?hl=es"target="_blank">Ayuda</a></li>
      </ul>
      <hr class="linea-footer">
      <div class="nombre_pagina">
          © 2024 D&D.com
  </div>
    </footer>
         </body>
            </html>
