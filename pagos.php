<?php
	// Define el título específico de esta página
	$titulo = "D&D | Pasarela De Pagos";
	// Incluir el CSS específico para esta página
	$style_css = "CSS/pagos.css";
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

	$total = 0;
	$gasto_envio = 50.00; // Definir el gasto de envío

	foreach ($lista_carrito as $producto) {
		$precio = $producto['Precio'];
		$descuento = $producto['Descuento'];
		$cantidad = $producto['cantidad'];
		$precio_desc = ($descuento > 0) ? $precio * (1 - $descuento / 100) : $precio;
		$subtotal = $cantidad * $precio_desc;
		$total += $subtotal;
	}
?>
	<!-- Incluye el JavaScript SDK de Pay Pal-->
		<script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&currency=<?php echo CURRENCY; ?>"></script>

	<script>
    	paypal.Buttons({
        style:{
            shape: 'pill',
            label: 'pay'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: <?php echo number_format($total + $gasto_envio, 3, '.', ','); ?> 
                    }
                }]
            });
        },

        onApprove: function(data, actions) {
            let URL = 'Config/captura.php'
            actions.order.capture().then(function(detalles){
                
                console.log(detalles)
                
                let url = 'Config/captura.php'

                return fetch(url, {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json'
                    },
                    body: JSON.stringify({
                        detalles: detalles
                    })
                }).then(function(response) {
                    if (response.ok) {
                        window.location.href = 'pago_realizado.php';
                    } else {
                        console.log('Error al capturar el pago.');
                    }
                });
            });
        },

        onCancel: function(data) {
            alert("Pago Cancelado");
            console.log(data);
       		 }
    	}).render('#paypal-button-container');
	</script>

	<div class="container-title">PAGOS</div>

		<h1 class="heading-1">Realizar Pago</h1>

		<!-- ITEMS DEL CARRITO -->
		<div class="small-conatiner cart-page">
			<table>
				<tr>
					<th>Opciones de Pago</th>
					<th>Producto</th>
					<th>Subtotal</th>
				</tr>
				<tr>
					<td>
						<div class="card-info">
							<!-- Agrega el contenedor del los botones -->
							<div id="paypal-button-container"></div>
						</div>
					</td>
					<td>
						<?php foreach($lista_carrito as $producto): ?>
							<div class="product-name no-bold"><?php echo $producto['Nombre']; ?></div>
						<?php endforeach; ?>
						<div class="product-name total">Total + Envio:</div> <!-- Agregamos la clase total para estilo -->
					</td>
					<td>
						<?php foreach($lista_carrito as $producto): ?>
							<div class="product-price"><?php echo MONEDA . number_format($producto['Precio'] * $producto['cantidad'], 3, '.', ','); ?></div>
						<?php endforeach; ?>
						<div class="product-price total"><?php echo MONEDA . number_format($total + $gasto_envio, 3, '.', ','); ?></div> <!-- Agregamos la clase total para estilo -->
					</td>
				</tr>
			</table>
		</div>

	<!-- RESEÑAS -->

	<section class="container blogs">
				<h1 class="heading-1">Reseñas</h1>

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

<?php
	// INCLUYE EL PIE DE PAGINA
	require_once 'footer.php';
?>