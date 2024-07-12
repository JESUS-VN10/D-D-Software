<?php 
    session_start();
	// Destruir la sesión
    // session_destroy();

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

<!-- HTML INICIO-->
<!DOCTYPE html>
	<html lang="es">
		<!-- HEAD INICIO-->
		<head>
			<meta charset="UTF-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport"content="width=device-width, initial-scale=1.0" />

			<title><?php echo isset($titulo) ?
			$titulo: 'Titulo predeterminado'; ?>
			</title>
			
			<link rel="stylesheet" href="CSS/header.css"/>
			
			<?php if (isset($style_css)) { ?>
				<link rel="stylesheet" href="<?php echo $style_css; ?>"/>
			<?php } ?>
		</head>
		<!-- HEAD FINAL-->

		<!-- BODY INICIO-->
		<body>
			<!-- HEADER INICIO-->
			<header>
				<div class="container-hero">
					<div class="container hero">
						<div class="container-logo">
							<!-- <i class="fa-solid fa-mug-hot"></i> -->
							<h1 class="logo"><a href="#">D&D</a></h1>
							<H2>Ropa Y Calzado</H2>
						</div>

						<div class="container-user">
							<i class="fa-solid fa-user"></i>
							<a href="pantalla_carrito.php">
							<i class="fa-solid fa-cart-shopping"></i>
							</a>
							<div class="content-shopping-cart" id="cart-container">
								<span class="text">Carrito</span>
								<span class="number" id="num_cart">(<?php echo $num_cart ?>)</span>
							</div>
						</div>
					</div>
				</div>

				<div class="container-navbar">
					<nav class="navbar container">
						<i class="fa-solid fa-bars" id="menu-icon"></i>
						<ul class="menu" id="menu-items">
							<i class="fa-solid fa-xmark" id="close-menu"></i>
							<li><a href="pagina_inicio.php">Inicio</a></li>
							<li><a href="#">Ropa Hombre</a></li>
							<li><a href="#">Ropa Mujer</a></li>
							<li><a href="#">Calzado</a></li>
							<li><a href="#">Más</a></li>
					</ul>

						<form class="search-form">
							<input type="search" placeholder="Busca un producto" />
							<button class="btn-search">
								<i class="fa-solid fa-magnifying-glass"></i>
							</button>
						</form>
					</nav>
				</div>
			</header>
			<!-- HEADER FINAL-->