<!DOCTYPE html>
<html>
<head>
	<title> Ferreteria AG </title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style/masterdata.css">
	<link rel="stylesheet" type="text/css" href="style/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Styles-->
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/cataloguePHP.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<!--Font&Logo-->
	<link rel="icon" type="image/jpg" href="img/web-logo/logo-pestaña.png"/>
	<script src="https://kit.fontawesome.com/f2e4cb46e4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Sen&display=swap">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!--Comfortaa-->
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
	<!--Questrial-->
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
</head>
	
<body>
	<?php 
		include('accesoDB.php');
		$id_categoria=7;
		$query = "SELECT `nombre`,`descripcion`,`ruta_img` FROM articulo, categorias WHERE articulo.`id_categoria`=categorias.`id_categoria` AND articulo.`id_categoria`=".$id_categoria." ORDER BY articulo.`id_marca`;";
		connect($query);
	?>
	<header class="header header__style">
		<div class="logo_container">
			<img src="img/web-logo/logo.png">
		</div>
		<div class="header__nav-bars fas fa-bars">
			<nav class="header-nav">
				<ul class="header-nav__ul">
					<li class="header-nav__li"><i class="fas fa-home"></i><a href="index.html"> Inicio </a></li>
					<li class="header-nav__li"><i class="fas fa-box"></i><a href="catalogue.html"> Productos </a></li>
					<li class="header-nav__li"><i class="fas fa-comment-alt"></i><a href="contact.html"> Contacto </a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="tituloCategoria">
		<div class="opacidadTituloCategoria"> </div>
		<h1 class="categoria"> Sanitarios </h1>
	</div>
	<main class="main">

	<div id="fondo"></div>
	<div id="filtroFondo"></div>
		<div class="fondo"></div>
			<div class="contenedorArticuloMarca">
			<?php
				foreach($GLOBALS['articulos'] as $artItem){
			?>						
				<div class="articulo">
					<div class="contenedorImgArt"> <img src="../ferreteriaAG/img/catalogue/<?php echo $artItem['ruta_img']?>"/> </div>
					<div class="detallesArt">
						<span class="nombreArt"><?php echo $artItem['nombre'] ?></span>
						<span class="descripArt"><?php echo $artItem['descripcion'] ?></span>						
					</div>					
				</div>
			<?php }?>
			</div>
	</main>

	<footer>

		<div class="font footer__logo-container">
			<img src="img/web-logo/logo.png">
		</div>
		
		<ul class="footer__ul">
			<li class="footer__li footer__title">UBICACION</li>
			<li class="footer__li" id="ubication"><i class="fas fa-map-marker-alt footer__icon"></i>
				<p class="footer__data">Intendente M. Quindimil 118, CP 1824</p>
				<p class="footer__data">Lanus Oeste, Buenos Aires, Argentina</p>
			</li>
			
			<li class="footer__li footer__title">CONTACTO</li>
			<li class="footer__li" id="phone">
				<i class="fas fa-phone-alt footer__icon"></i>
				<p class="footer__data">(+54 11) 7705-1474</p>
				<p class="footer__data">(+54 11) 3292-4361</p>
			</li>
			
			<li class="footer__li" id="mail">
				<i class="fas fa-envelope footer__icon"></i>
				<p class="footer__data" id="footer__data-alone">ferreteria@agserviciossrl.com</p>
			</li>

			<li class="footer__li" id="clock">
				<i class="fas fa-clock footer__icon"></i>
				<p class="footer__data">Lunes-Viernes: 08-18hs</p>
				<p class="footer__data">Sabados: 09-13hs</p>
			</li>

			<li class="footer__li network" id="fb">
				<a class="footer__social-network" href="https://facebook.com/ferre.ag.7" target="_blank">
					<i class="fab fa-facebook-square footer__icon"></i>
					<p class="footer__data" id="footer__data-alone">Facebook</p>
				</a>
			</li>

			<li class="footer__li network" id="is">
				<a class="footer__social-network" href="https://instagram.com/ferreteriaagservicios/" target="_blank">
					<i class="fab fa-instagram footer__icon"></i>
					<p class="footer__data" id="footer__data-alone">Instagram</p>
				</a>
			</li>

		</ul>

		<p class="copyright"> Copyright © 2021 – All rights reserved </p>
	</footer>

</body>	
</html>