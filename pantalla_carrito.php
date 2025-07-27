<?php
    // Define el título específico de esta página
    $titulo = "D&D | Carrito Compras";
    // Incluir el CSS específico para esta página
	$style_css = "CSS/carrito.css";
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

    $lista_carrito = array();

    $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

    if ($productos != null) {
        foreach ($productos as $clave => $cantidad) {
            $sql = $con->prepare("SELECT Producto_ID, Nombre, Precio, Descuento FROM productos WHERE Producto_ID=? AND Activo=1");
            $sql->execute([$clave]);
            $producto = $sql->fetch(PDO::FETCH_ASSOC);
            if ($producto) {
                $producto['cantidad'] = $cantidad;
                $lista_carrito[] = $producto;
            }
        }
    }

    // Consulta para obtener productos adicionales
    $sql = $con->prepare("SELECT Producto_ID, Nombre, Precio, Descuento FROM productos WHERE Activo=1");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container-title">CARRITO</div>

<!-- ITEMS DEL CARRITO -->
<div class="small-container cart-page">
    <?php if($lista_carrito == null): ?>
        <div class="carrito-vacio">Carrito Vacio</div>
    <?php else: 
        $total = 0;
        $gasto_envio = 50.00; // Definir el gasto de envío
        ?>
        <table>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php foreach($lista_carrito as $producto): 
                $_id = $producto['Producto_ID'];
                $nombre = $producto['Nombre'];
                $precio = $producto['Precio'];
                $descuento = $producto['Descuento'];
                $cantidad = $producto['cantidad'];
                // Calcular el precio con descuento solo si hay un descuento aplicado
                $precio_desc = ($descuento > 0) ? $precio * (1 - $descuento / 100) : $precio;

                $subtotal = $cantidad * $precio_desc;
                $total += $subtotal;

                // Ruta de la imagen del producto
                $dir_imagenes = 'IMG/Catalogo/' . $_id . '/';
                $rutaImgPrincipal = $dir_imagenes . 'Producto.webp';

                if (!file_exists($rutaImgPrincipal)) {
                    $rutaImgPrincipal = 'IMG/iconos/Foto_no_disponible.png';
                }
                ?>
                <tr>
                    <td>
                        <div class="card-info">
                            <img src="<?php echo $rutaImgPrincipal; ?>" alt="Imagen del producto">
                            <div class="info-product">
                                <p><?php echo $nombre; ?></p>
                                <small><?php echo MONEDA . number_format($precio_desc, 3, '.', ','); ?></small>
                                <br>
                                <br>
                                <a href="#" id="eliminarProducto" class="remove" data-bs-id="<?php echo $_id; ?>">Eliminar</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="number" min='1' max='5' step='1' value='<?php echo $cantidad; ?>' id='cantidad_<?php echo $_id; ?>' onchange='actualizarCantidad(<?php echo $_id; ?>, this.value)'>
                    </td>
                    <td><?php echo MONEDA . number_format($subtotal, 3, '.', ','); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal :</td>
                    <td><?php echo MONEDA . number_format($total, 3, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Gasto de envio :</td>
                    <td><?php echo MONEDA . number_format($gasto_envio, 3, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Total estimado :</td>
                    <td><?php echo MONEDA . number_format($total + $gasto_envio, 3, '.', ','); ?></td>
                </tr>
            </table>
            <a href="pagos.php" class="proceed-btn">Pagar (<?php echo count($lista_carrito); ?>)</a> <!-- Botón de pago -->
        </div>
    <?php endif; ?>
</div>




			<section class="container top-products">
				<h1 class="heading-1">Tambien te puede interesar</h1>

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

<?php
        // INCLUYE EL PIE DE PAGINA
    require_once 'footer.php';
?>