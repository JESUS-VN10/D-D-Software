<?php
    // Define el título específico de esta página
    $titulo = "D&D | Pagina Inicio";
	// Incluir el CSS específico para esta página
	$style_css = "CSS/pagina_inicio.css";
	// Incluir archivo JS específico para esta página
	$file_js = "JS/pagina_inicio.js";
    // INCLUYE EL ENCABEZADO
    require_once 'header.php';
	// INCLUYE EL ARCHIVO CONFIG
	require 'Config/config.php';
    // INCLUYE LA CONEXION
    include_once('Config/conexion.php');
    $db = new Database();
    $con = $db->conectar();

    $preload_enabled = true;

    // Verificar si la conexión se estableció correctamente
    if ($con === false) {
        die("Error de conexión: No se pudo conectar a la base de datos");
    }

    $sql = $con->prepare("SELECT Producto_ID, Nombre, Precio, Descuento FROM productos WHERE Activo=1");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
	
?>


	<section class="banner">
			<div class="content-banner">
				<p>Nuevas Prendas</p>
				<h2>Accede a varios estilos <br />Nuevas Prendas y calzado a grandes precios</h2>
				<a href="#">Comprar ahora</a>
			</div>
			<i class="fa-solid fa-chevron-right arrow-icon"></i>
	</section>

		<main class="main-content">
			<section class="container-features">
				<div class="features">
					<div class="feature">
						<img class="featureIcon" src="IMG/iconos/shipping.png" alt="">
						<span class="featureTitle">ENVIOS A TODO EL PAIS</span>
						<span class="featureDesc">En pedidos desde $50 mil</span>
					</div>
					<div class="feature">
						<img class="featureIcon" src="IMG/iconos/return.png" alt="">
						<span class="featureTitle">PAGA COMO QUIERAS</span>
						<span class="featureDesc">Paga con cualquier medio de pago</span>
					</div>
					<div class="feature">
						<img class="featureIcon" src="IMG/iconos/gift.png" alt="">
						<span class="featureTitle">HAZ TU PRIMERA COMPRA</span>
						<span class="featureDesc">Bonos especiales como regalo</span>
					</div>
					<div class="feature">
						<img class="featureIcon" src="IMG/iconos/contact.png" alt="">
						<span class="featureTitle">SERVICIO AL CLIENTE</span>
						<span class="featureDesc">Escribenos al correo D&D@soporte.com</span>
					</div>
				</div>
			</section>
                
		<section class="container top-products">
				<h1 class="heading-1">Mejores Productos</h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					<span>Más recientes</span>
					<span>Mas prendas</span>
				</div>

				<div class="Filter">
					<button class="button-filter" type="button" id="button-filter">
					  <span class="text-filter">Filtros</span>
					  <span class="icon-text-filter"><i class="fa-solid fa-sliders"></i></span>
					</button>
					<div class="overlay" id="overlay"></div>
					<div class="dropdown-content" id="dropdown-content">
						<span class="title">Filtrar Y Ordenar</span> 
						<div class="dropdown-item">
						  <a href="#" class="title-bold" id="title-bold-filter">TALLA ROPA <i class="fa-solid fa-chevron-right"></i></a>
						  <div class="sub-menu" id="submenu">
							<!-- Contenido desplegable para TALLA -->
							<div class="size-options">
								<a href="#" class="size-button">S</a>
								<a href="#" class="size-button">M</a>
								<a href="#" class="size-button">L</a>
								<a href="#" class="size-button">XS</a>
								<a href="#" class="size-button">XL</a>
							</div>
						  </div>
						</div>
						<div class="dropdown-item">
						  <a href="#" class="title-bold" id="title-bold-filter">COLOR<i class="fa-solid fa-chevron-right"></i></a>
						  <div class="sub-menu color-menu" id="submenu">
							<!-- Contenido desplegable para COLOR -->
							<div class="color-row">
								<a href="#" class="color-option">
									<div class="color-circle black"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle white"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle blue"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle red"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle green"></div>
								</a>
							</div>
							<div class="color-row">
								<a href="#" class="color-option">
									<div class="color-circle yellow"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle grey"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle purple"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle orange"></div>
								</a>
								<a href="#" class="color-option">
									<div class="color-circle pink"></div>
								</a>
						   </div>
						</div>
				     </div>
						<div class="dropdown-item">
							<a href="#" class="title-bold" id="title-bold-filter">TALLA CALZADO <i class="fa-solid fa-chevron-right"></i></a>
							<div class="sub-menu" id="submenu">
							  <!-- Contenido desplegable para TALLA -->
							  <div class="size-options">
								  <a href="#" class="size-button">36</a>
								  <a href="#" class="size-button">38</a>
								  <a href="#" class="size-button">39</a>
								  <a href="#" class="size-button">40</a>
								  <a href="#" class="size-button">41</a>
							  </div>
							</div>
						  </div>
						  <div class="dropdown-item">
							<a href="#" class="title-bold" id="title-bold-filter">PRECIO<i class="fa-solid fa-chevron-right"></i></a>
							<div class="sub-menu" id="submenu">
							<div class="price-slider-container">
								<input type="range" class="price-slider" min="50000" max="1500000" step="5000" value="50000">
								<div class="price-values">
									<span>$50,000</span>
									<span>$1,500,000</span>
							  </div>
							 </div>
						    </div>
						   </div>
						
						<div class="dropdown-item">
						  <a href="#" class="title-bold" id="title-bold-filter">MARCA<i class="fa-solid fa-chevron-right"></i></a>
						  <div class="sub-menu" id="submenu">
							<!-- Contenido desplegable para MARCA -->
							<a href="#" class="brand">TOMMY HILFIGUER</a>
                            <a href="#" class="brand">LACOSTE</a>
                            <a href="#" class="brand">POLO</a>
							<a href="#" class="brand">NIKE</a>
                            <a href="#" class="brand">ADIDAS</a>
                            <a href="#" class="brand">PUMA</a>
						  </div>
						</div>
					  </div>					  
				  </div>
		    </section>
				  
		<section class="container top-products">
			<div class="container-products">
				<?php 
					foreach($resultado as $row)  { 
						// Calcular el precio con descuento
						$precio_desc = $row['Precio'] * (1 - $row['Descuento'] / 100);
						// Mostrar los productos hasta el Producto_ID 12
						if ($row['Producto_ID'] <= 12) {

							$id = $row['Producto_ID'];
							$imagenes = "IMG/Catalogo/" . $id . "/Producto.webp";

							if(!file_exists($imagenes)){
							$imagenes = "IMG/iconos/Foto_no_disponible.png";
						}
				?>
				<!-- Productos -->
				<div class="card-product">
						<!-- Enlace para llevar a la pantalla de detalles -->
						<a href="visualizacion_producto.php?id=<?php echo $row['Producto_ID']; ?>&token=<?php echo hash_hmac('sha1', $row['Producto_ID'], KEY_TOKEN); ?>">
							<div class="container-img">
								<img data-src="<?php echo $imagenes; ?>" loading="lazy" class="lazyload"
								<?php if (isset($preload_enabled) && $preload_enabled) : ?>
										<?php echo 'preload="auto"'; ?>
								<?php endif; ?> />			
						</a>
							    <!-- Mostrar el descuento -->
								<span class="discount"><?php echo $row['Descuento']; ?>%</span>
							<div class="button-group">
										<span>
											<i class="fa-regular fa-heart"></i>
										</span>
										<span>
											<i class="fa-solid fa-share-nodes"></i>
										</span>
									</div>
								</div>
							<div class="content-card-product">
									<h3><?php echo $row['Nombre']; ?> </h3>
									<span class="add-cart" onclick="addProducto(<?php echo $row['Producto_ID']; ?>, '<?php echo hash_hmac('sha1', $row['Producto_ID'], KEY_TOKEN); ?>')">
										<i class="fa-solid fa-cart-plus"></i>
									</span>
									<!-- Mostrar el precio original y el precio con descuento -->
									<?php if ($row['Descuento'] > 0): ?>
										<p class="price">
											$<?php echo number_format($precio_desc, 3, '.', ','); ?> mil 
											<span class="original-price">$<?php echo number_format($row['Precio'], 3, '.', ','); ?> mil</span>
										</p>
									<?php else: ?>
										<p class="price">
											$<?php echo number_format($row['Precio'], 3, '.', ','); ?> mil
										</p>
									<?php endif; ?>
								</div>
							</div>
							<?php
						}
					} 
					?>	
			</section>	
			

			<!-- GALLERY -->
			<div class="newSeason">
                <div class="nsItem">
				<img src="IMG/productos/Gallery1.webp" alt="" class="nsImg" <?php echo 'preload="auto"'; ?> />
                </div>
                <div class="nsItem">
                    <h3 class="nsTitleSm">Grandes precios en diferentes productos</h3>
                    <h1 class="nsTitle">New Season</h1>
                    <h1 class="nsTitle">Nueva Coleccion</h1>
                    <a href="#nav">
                        <button class="nsButton">ELIGE TU ESTILO</button>
                    </a>
                </div>
                <div class="nsItem">
				<img src="IMG/productos/Gallery2.webp" alt="" class="nsImg" <?php echo 'preload="auto"'; ?> />
                </div>				
            </div>


			<section class="container top-products">
					<div class="container-products">
						<?php 
						foreach($resultado as $row)  { 
							// Calcular el precio con descuento
						    $precio_desc = $row['Precio'] * (1 - $row['Descuento'] / 100);
							// Mostrar los productos a partir del Producto_ID 13
							if ($row['Producto_ID'] >= 13 && $row['Producto_ID'] <= 20) {

								$id = $row['Producto_ID'];
								$imagenes = "IMG/Catalogo/" . $id . "/Producto.webp";

								if(!file_exists($imagenes)){
									$imagenes = "IMG/iconos/Foto_no_disponible.png";
								}			
						?>
								<!-- Productos -->
						<div class="card-product">
							<!-- Enlace para llevar a la pantalla de detalles -->
							<a href="visualizacion_producto.php?id=<?php echo $row['Producto_ID']; ?>&token=<?php echo hash_hmac('sha1', $row['Producto_ID'], KEY_TOKEN); ?>">
								<div class="container-img">
									<img data-src="<?php echo $imagenes; ?>" loading="lazy" class="lazyload"
									<?php if (isset($preload_enabled) && $preload_enabled) : ?>
										   <?php echo 'preload="auto"'; ?>
								    <?php endif; ?> />
							</a>
							            <!-- Mostrar el descuento -->
								        <span class="discount"><?php echo $row['Descuento']; ?>%</span>
								<div class="button-group">
											<span>
												<i class="fa-regular fa-heart"></i>
											</span>
											<span>
												<i class="fa-solid fa-share-nodes"></i>
											</span>
										</div>
									</div>
								<div class="content-card-product">
									<h3><?php echo $row['Nombre']; ?> </h3>
									<span class="add-cart" onclick="addProducto(<?php echo $row['Producto_ID']; ?>, '<?php echo hash_hmac('sha1', $row['Producto_ID'], KEY_TOKEN); ?>')">
										<i class="fa-solid fa-cart-plus"></i>
									</span>
									<!-- Mostrar el precio original y el precio con descuento -->
									<?php if ($row['Descuento'] > 0): ?>
										<p class="price">
											$<?php echo number_format($precio_desc, 3, '.', ','); ?> mil 
											<span class="original-price">$<?php echo number_format($row['Precio'], 3, '.', ','); ?> mil</span>
										</p>
									<?php else: ?>
										<p class="price">
											$<?php echo number_format($row['Precio'], 3, '.', ','); ?> mil
										</p>
									<?php endif; ?>
								</div>
							</div>
							<?php
						}
					} 
					?>
			</section>

			<!-- RESEÑAS -->

			<section class="container blogs">
				<h1 class="heading-2">Reseñas</h1>

				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img data-src="IMG/productos/Blog1.webp" loading="lazy" alt="Imagen Blog 1" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>30 junio 2024</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img data-src="IMG/productos/Blog2.webp" loading="lazy" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>30 junio 2024</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img data-src="IMG/productos/Blog3.webp" loading="lazy" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>30 junio 2024</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php
    // INCLUYE EL PIE DE PAGINA
    require_once 'footer.php';
?>

