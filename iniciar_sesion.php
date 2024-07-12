<!DOCTYPE html>
<html lang="es">
    <head>
          <meta charset="UTF-8" />
		      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		      <meta
			       name="viewport"
			       content="width=device-width, initial-scale=1.0" 
		     />
         <title>D&D || Inicio_Sesion</title>
         <link rel="stylesheet" href="./CSS/iniciar_sesion.css"/>
     </head>

    <body>
      <div class="container-logo">
        <h1 class="logo"><a href="#">D&D</a></h1>
        <H2>Ropa Y Calzado</H2>
      </div>

      <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']?></p>
      <?php } ?>
      
        <div class="wrapper">
          <div class="title">
          Ingresar con
        </div>

        <form action="Config/IniciarSesion.php" method="POST"> 

          <!-- BOTON DE GOOGLE -->
          <div class="option">
          <div class="input-box button">
       <div class="Google">
       <a href="https://www.google.com/?hl=es"target="_blank">
           <i class='bx bxl-Google'></i>
           GOOGLE
          </a>  
       </div>
         </div>
           </div>

           <!-- CAMPOS DE CORREO Y CONTRASEÑA -->
           <div class="input-box">
           <input type="text" class="email" placeholder="Correo electrónico" name="Correo_electronico">
        </div>

        <div class="input-box">
        <input type="password" placeholder="Contraseña" id="password-input" name="Contraseña">

                <!-- OPCION PARA PASAR PASSWORD A TEXT -->
               <div class="toggle-password">
                <button type="button" id="toggle-password-btn">
                   <img src="./IMG/iconos/invisible.png" class="ojo-img" id="ojo-img-normal">
                   <img src="./IMG/iconos/ojo.png" class="ojo-img" id="ojo-img-rayado" style="display: none;"> 
             </button>
         </div>
     </div>
         
           <!-- OPCION DE RECORDARME -->
           <div class="remember-forgot">
             <div class="remember">
              <input type="checkbox">Recordarme
        </div>

        <!-- OPCION DE OLVIDASTE CONTRASEÑA -->
        <div class="forgot">
            <a href="https://www.google.com/?hl=es">Olvidaste la contraseña?</a>
        </div>
        </div>
        <div class="input-box button">
          <input type="submit" class="inicio-seccion" name="Iniciar Sesion" class="texto-inicio"> 
        </div>

        <!-- OPCION NO TIENES CUENTA -->
        <div class="signup-link">
                No tienes una cuenta? <a
   href="crea_cuenta.php">Crea una</a>
                </div>    
          </div>
       </form>

    <!-- FOOTER -->
    <footer>
      <ul>
          <li><a href="https://www.google.com/?hl=es"target="_blank">Condiciones de uso</a></li>
          <li><a href="https://www.google.com/?hl=es"target="_blank">Privacidad del usuario</a></li>
          <li><a href="https://www.google.com/?hl=es"target="_blank">Ayuda</a></li>
      </ul>
      <hr class="linea-footer">
      <div class="nombre_pagina">
          © 2024 D&D.com
  </div>
      </footer>
      <script src="JS/iniciar_sesion.js"></script>
            </body>
                 </html>