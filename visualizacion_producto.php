<?php
    // Define el título específico de esta página
    $titulo = "D&D | Visualizar Producto";
    // Incluir el CSS específico para esta página
	$style_css = "CSS/visualizacion_producto.css";
    // Incluir archivo JS específico para esta página
	$file_js = "JS/visualizacion_producto.js";
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

    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $token = isset($_GET['token']) ? $_GET['token'] : '';

    if($id == '' || $token == '') {
        echo 'Error al Procesar la Peticion';
        exit();
    } else {
        // Verificar la validez del token
        $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

        if ($token == $token_tmp) {     
            // Consultar si el producto existe y está activo
            $sql = $con->prepare("SELECT Nombre, Precio, Descripcion, Descuento FROM productos WHERE Producto_ID=? AND Activo=1 LIMIT 1");
            $sql->execute([$id]);

            // Verificar si se encontró el producto
            if ($sql->rowCount() > 0) {
                // Obtener los detalles del producto
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $nombre = $row['Nombre'];
                $precio = $row['Precio'];
                $descripcion = $row['Descripcion'];
                $descuento = $row['Descuento'];

                // Definir $es_producto_principal como verdadero
                $es_producto_principal = true;

                // Obtener el precio original del producto principal
                $precio_original_principal = $precio;

                // Calcular el precio con descuento solo si hay un descuento aplicado
                if ($descuento > 0) {
                    $precio_desc = $precio * (1 - $descuento / 100);
                } else {
                    $precio_desc = $precio_original_principal; // Usar el precio original del producto principal
                }
            

                $dir_imagenes = 'IMG/Catalogo/' . $id . '/';

                $rutaImgPrincipal = $dir_imagenes . 'Producto.webp';

                if (!file_exists($rutaImgPrincipal)) {
                    $rutaImgPrincipal = 'IMG/iconos/Foto_no_disponible.png';
                }

                $imagenesAdicionales = array();
                if(file_exists($dir_imagenes)){
                $dir = dir($dir_imagenes);

                while (($archivo = $dir->read()) != false) {
                    if ($archivo != 'Producto.webp' && (strpos($archivo, 'webp') || strpos($archivo, 'jpg'))) {
                        $imagenesAdicionales[] = $dir_imagenes . $archivo;
                    }
                }
                $dir->close();
            }
                $resultado = []; // Asignar un array vacío por defecto

                // Consultar productos relacionados o productos de la misma categoría
                $sql_relacionados = $con->prepare("SELECT Producto_ID, Nombre, Precio, Descuento FROM productos WHERE Producto_ID != ? AND Activo = 1");
                $sql_relacionados->execute([$id]);

                // Verificar si se encontraron productos relacionados
                if ($sql_relacionados->rowCount() > 0) {
                    // Obtener los productos relacionados
                    $resultado = $sql_relacionados->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    echo 'No se encontraron productos relacionados.';
                    // Se asignar un array vacío a $resultado si no hay productos relacionados
                    $resultado = [];
                }
            } else {
                echo 'Error al Procesar la Peticion: Producto no encontrado o inactivo';
                exit();
            }
        } else {
            echo 'Error al Procesar la Peticion: Token inválido';
            exit();
        }
    }
?>

        <div class="container-title"><?php echo $nombre; ?></div>

            <main>
                    <div class="Img-Card" id="product-image-container">
                            <img src="<?php echo $rutaImgPrincipal; ?>" alt="imagen-producto">
                        </div>

                    <div class="variant-cards">
                        <!-- Agregar la imagen principal como primera opción -->
                        <div class="variant-card">
                            <img src="<?php echo $rutaImgPrincipal; ?>" alt="Variante" class="variant-image">
                        </div>
                        <!-- Iterar sobre las imágenes adicionales -->
                        <?php foreach ($imagenesAdicionales as $index => $imagen) { ?>
                            <div class="variant-card">
                                <img src="<?php echo $imagen; ?>" alt="Variante" class="variant-image">
                            </div>
                        <?php } ?>
                    </div> 


                            
                          <div class="container-info-product">
                                <div class="container-price">
                                <span><?php echo MONEDA . number_format($precio_desc, 3, '.', ','); ?> mil</span>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>

                                <div class="container-details-product">
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <select name="color" id="color">
                                            <option disabled selected value="">Escoge una opcion</option>
                                            <option value="rojo">Rojo</option>
                                            <option value="verde">Verde</option>
                                            <option value="negro">Negro</option>
                                            <option value="blanco">Blanco</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Talla</label>
                                        <select name="size" id="size">
                                            <option disabled selected value="">Escoge una opcion</option>
                                            <option value="36">36</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                        </select>
                                    </div>
                                

                                <div class="container-add-cart">
                                    <div class="container-quantity">
                                        <input type="number"  
                                        placeholder="1"
                                        value="1" 
                                        min="1" 
                                        class="input-quantity">

                                <div class="btn-increment-decrement">
                                    <!-- <i class="fa-solid fa-chevron-up"></i>
                                    <i class="fa-solid fa-chevron-down"></i> -->
                                        </div>
                                    </div>
                                <button class="btn-add-to-cart" onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">
                                    <i class="fa-solid fa-plus"></i>
                                    Añadir al carrito
                                </button>
                            
                            <button class="btn-buy">
                                <i class="fa-solid fa-bag-shopping"></i>
                                Comprar
                            </button>
                                </div>
                                    </div>  

                            <div class="container-description">
                                <div class="title-description">
                                    <h4>Descripcion</h4>
                                    <i class="fa-solid fa-chevron-down rotate"></i>
                                </div>
                                <div class="text-description">
                                    <p>
                                        <?php echo $descripcion; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="container-reviews">
                                <div class="title-reviews">
                                    <h4>Reseñas</h4>
                                    <i class="fa-solid fa-chevron-down rotate"></i>
                                </div>
                                <div class="text-reviews">
                                    <p>---------</p>     
                                </div>
                            </div>

                            <div class="container-social">
                                <span>Compartir</span>
                                <div class="container-buttons-social">
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                            </div>
                                </div> 
                                    </div>
                                        </div>
                        </main>

            <section class="container top-products">
                    <h1 class="heading-1">Otras Opciones</h1>
					<div class="container-products">
						<?php 
						foreach($resultado as $row)  { 
							// Mostrar los productos a partir del Producto_ID 21
                            if ($row['Producto_ID'] >= 21) {

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
										<span class="add-cart">
											<i class="fa-solid fa-cart-plus"></i>
										</span>
										<!-- Mostrar el precio original y el precio con descuento si hay descuento -->
                                        <?php if ($row['Descuento'] > 0): ?>
                                              <p class="price">
                                                <?php echo MONEDA . number_format($row['Precio'] * (1 - $row['Descuento'] / 100), 3, '.', ','); ?> mil 
                                                <span class="original-price"><?php echo MONEDA . number_format($row['Precio'], 3, '.', ','); ?> mil</span>
                                              </p>
                                        <?php else: ?>
                                              <p class="price">
                                                <?php echo MONEDA . number_format($row['Precio'], 3, '.', ','); ?> mil
                                              </p>
                                        <?php endif; ?>
									</div>
								</div>
								<?php
							}
						} 
						?>
			</section>

<?php
        // INCLUYE EL PIE DE PAGINA
    require_once 'footer.php';
?>