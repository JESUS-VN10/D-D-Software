<?php
    // Define el título específico de esta página
    $titulo = "D&D || Catalogo_Productos";
    // INCLUYE EL ENCABEZADO
    require_once 'header.php';
?>


<link rel="stylesheet" href="./CSS/catalogo.css"/>

<main class="main-content">
                
			<section class="container top-products">
				<h1 class="heading-1">Ropa para Hombre</h1>

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
				  

            	<div class="container-products">
					
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-1" />
							<span class="discount">Nuevo</span>
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
							<h3>Nike - Force One</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$70.000 mil <span>$90.000 mil</span></p>
						</div>
					</div>

					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-2" />
							<span class="discount">Nuevo</span>
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
							<h3>Common Projects Achilles</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$90.000 mil <span>$120.000 mil</span></p>
						</div>
					</div>
					
					<!-- Producto 3 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-3" />
							<span class="discount">Nuevo</span>
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
							<h3>Adidas - Boston Super OG</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$105.000 mil <span>$150.000 mil</span></p>
						</div>
					</div>
					
					<!-- Producto 4 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-4" />
							<span class="discount">Nuevo</span>
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
							<h3>Common Projects Achilles</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$80.500 mil <span>$130.000 mil</span></p>
						</div>
					</div>
				</div>		
		</section>

			
			<!-- Producto 5 -->
			<section class="container top-products">		
				<div class="container-products">
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-5" />
							<span class="discount">Nuevo</span>
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
							<h3>Nike - Force One</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$70.000 mil <span>$90.000 mil</span></p>
						</div>
					</div>

					<!-- Producto 6 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-6" />
							<span class="discount">Nuevo</span>
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
							<h3>Common Projects Achilles</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$90.000 mil <span>$120.000 mil</span></p>
						</div>
					</div>
					
					<!-- Producto 7 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-7" />
							<span class="discount">Nuevo</span>
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
							<h3>Adidas - Boston Super OG</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$105.000 mil <span>$150.000 mil</span></p>
						</div>
					</div>
					
					<!-- Producto 8 -->
					<div class="card-product">
						<div class="container-img">
							<img src="IMG/productos/Producto1.png" alt="producto-8" />
							<span class="discount">Nuevo</span>
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
							<h3>Common Projects Achilles</h3>
							<span class="add-cart">
								<i class="fa-solid fa-cart-plus"></i>
							</span>
							<p class="price">$80.500 mil <span>$130.000 mil</span></p>
						</div>
					</div>
				</div>	
			</section>


            <section class="container-features">
				<div class="features">
					<div class="feature">
						<img src="IMG/iconos/shipping.png" alt="" class="featureIcon">
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

			
                <!-- Producto 9 -->
				<section class="container top-products">
					<div class="container-products">
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-9" />
								<span class="discount">Nuevo</span>
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
								<h3>Nike - Force One</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$70.000 mil <span>$90.000 mil</span></p>
							</div>
						</div>
	
						<!-- Producto 10 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-10" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$90.000 mil <span>$120.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 11 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-11" />
								<span class="discount">Nuevo</span>
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
								<h3>Adidas - Boston Super OG</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$105.000 mil <span>$150.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 12 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-12" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$80.500 mil <span>$130.000 mil</span></p>
							</div>
						</div>
					</div>	
			</section>

            <!-- GALLERY 1 -->
            <div class="gallery">
                <div class="galleryItem">
                    <h1 class="galleryTitle">Be Yourself!</h1>
                    <img src="IMG/productos/Gallery1.jpg"
                        alt="" class="galleryImg">
                </div>
                <div class="galleryItem">
                    <img src="IMG/productos/Gallery2.jpg"
                        alt="" class="galleryImg">
                    <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
                </div>
                <div class="galleryItem">
                    <h1 class="galleryTitle">Just Do it!</h1>
                    <img src="IMG/productos/Gallery3.jpg"
                        alt="" class="galleryImg">
                </div>
            </div>


                <!-- Producto 13 -->
				<section class="container top-products">
					<div class="container-products">
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-13" />
								<span class="discount">Nuevo</span>
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
								<h3>Nike - Force One</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$70.000 mil <span>$90.000 mil</span></p>
							</div>
						</div>
	
						<!-- Producto 14 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-14" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$90.000 mil <span>$120.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 15 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-15" />
								<span class="discount">Nuevo</span>
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
								<h3>Adidas - Boston Super OG</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$105.000 mil <span>$150.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 16 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-16" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$80.500 mil <span>$130.000 mil</span></p>
							</div>
						</div>
					</div>	
			</section>

            <!-- Producto 17 -->
				<section class="container top-products">
					<div class="container-products">
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-13" />
								<span class="discount">Nuevo</span>
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
								<h3>Nike - Force One</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$70.000 mil <span>$90.000 mil</span></p>
							</div>
						</div>
	
						<!-- Producto 18 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-14" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$90.000 mil <span>$120.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 19 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-15" />
								<span class="discount">Nuevo</span>
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
								<h3>Adidas - Boston Super OG</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$105.000 mil <span>$150.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 20 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-16" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$80.500 mil <span>$130.000 mil</span></p>
							</div>
						</div>
					</div>	
			</section>

            <!-- GALLERY 2 -->
            <div class="newSeason">
                <div class="nsItem">
                    <img src="IMG/productos/Gallery6.jpg"
                        alt="" class="nsImg">
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
                    <img src="IMG/productos/Gallery5.jpg"
                        alt="" class="nsImg">
                </div>
            </div>


            <!-- Producto 21 -->
				<section class="container top-products">
					<div class="container-products">
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-13" />
								<span class="discount">Nuevo</span>
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
								<h3>Nike - Force One</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$70.000 mil <span>$90.000 mil</span></p>
							</div>
						</div>
	
						<!-- Producto 22 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-14" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$90.000 mil <span>$120.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 23 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-15" />
								<span class="discount">Nuevo</span>
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
								<h3>Adidas - Boston Super OG</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$105.000 mil <span>$150.000 mil</span></p>
							</div>
						</div>
						
						<!-- Producto 24 -->
						<div class="card-product">
							<div class="container-img">
								<img src="IMG/productos/Producto1.png" alt="producto-16" />
								<span class="discount">Nuevo</span>
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
								<h3>Common Projects Achilles</h3>
								<span class="add-cart">
									<i class="fa-solid fa-cart-plus"></i>
								</span>
								<p class="price">$80.500 mil <span>$130.000 mil</span></p>
							</div>
						</div>
					</div>	
			</section>

			<!-- RESEÑAS -->

			<section class="container blogs">
				<h1 class="heading-1">Reseñas</h1>

				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="IMG/productos/Blog1.png" alt="Imagen Blog 1" />
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
							<img src="IMG/productos/Blog2.png" alt="Imagen Blog 2" />
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
							<img src="IMG/productos/Blog3.png" alt="Imagen Blog 3" />
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


        <script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
		<script src="JS/catalogo.js"></script>

<?php
        // INCLUYE EL PIE DE PAGINA
    require_once 'footer.php';
?>