<?php
	// Incluir el CSS específico para esta página
	$style_css = "CSS/footer.css";
    // INCLUYE EL ENCABEZADO
    require_once 'header.php';	
?>

<link rel="stylesheet" href="CSS/footer.css"/>
<!-- FOOTER INICIO-->
<footer class="footer">
		<div class="container-title-2"><?php echo isset($titulo) ? $titulo : 'Titulo predeterminado'; ?></div>

			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: Calle 50 # 117-44, Bogota
							</li>
							<li>Teléfono: 3195941114</li>
							<li>Fax: 55555300</li>
							<li>EmaiL: D&D@soporte.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="#">Acerca de Nosotros</a></li>
							<li><a href="#">Información de productos</a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="#">Términos y condiciones</a></li>
							<li><a href="#">Contactános</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="#">Mi cuenta</a></li>
							<li><a href="#">Historial de pedidos</a></li>
							<li><a href="#">Lista de deseos</a></li>
							<li><a href="#">Boletín</a></li>
							<li><a href="#">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros servicios ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
					   &copy; Todos los derechos reservados D&D.com 2024
					</p>
					<img src="IMG/iconos/card_img.png" alt="Pagos">
				</div>
			</div>	
		</footer>
		<!-- FOOTER FINAL-->
		 
		<script src="https://kit.fontawesome.com/81581fb069.js"crossorigin="anonymous" defer></script>
		<script src="JS/carrito.js" defer></script>
		<script src="JS/service-worker.js" defer></script>
		<?php if (isset($file_js)) { ?>
    		<script src="<?php echo $file_js; ?>" defer></script>
		<?php } ?>
	</body>
	<!-- BODY FINAL-->
</html>
<!-- HTML FINAL-->