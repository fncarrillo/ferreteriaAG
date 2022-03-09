<?php

$id_categoria=7;
$srv="localhost";
$user="root";
$passwd="";
$db="ferreteriaag";

$connection = new mysqli($srv,$user,$passwd,$db);
if ($connection->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}


$brandQuery = "SELECT `marca` FROM `marca`,`articulo` WHERE `articulo`.`id_categoria`=".$id_categoria." AND `marca`.`id_marca`=`articulo`.`id_marca` GROUP BY `marca`;";
$queryResult = mysqli_query($connection,$brandQuery);
/*
while ($brand = mysqli_fetch_array($queryResult)){
    echo $brand['marca']."<br/>";
}*/

$artQuery = "SELECT `articulo`.`nombre`,`articulo`.`descripcion` FROM `articulo`,`categoria` WHERE `articulo`.`id_categoria`=`categoria`.`id_categoria` AND `articulo`.`id_categoria`=".$id_categoria." ORDER BY `articulo`.`id_marca`;";
$queryResult = mysqli_query($connection,$artQuery);
/*
while ($art = mysqli_fetch_array($queryResult)){
    echo $art['nombre']." ".$art['descripcion']."<br/>";
}*/
mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
<head>
	<title> Ferreteria AG </title>
	<link rel="stylesheet" type="text/css" href="style/masterdata.css">
	<link rel="stylesheet" type="text/css" href="style/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Styles-->
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/catalogue.css">
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



	<main class="main">
		<div class="category">
			<p>Máquinas</p>
			<img src="img/catalogue/herram.png"/>			
		</div>
		<div class="category">
			<p>Sanitarios</p>
			<img src="img/catalogue/sanitario.jpg"/>			
		</div>
		<div class="category">
			<p>Termofusion</p>
			<img src="img/catalogue/termofusion.jpg"/>			
		</div>
		<div class="category">
			<p>Polipropileno</p>
			<img src="img/catalogue/ppn.jpg"/>			
		</div>
		<div class="category">
			<p>PVC & Awaduct</p>
			<img src="img/catalogue/awaduct.jpg"/>			
		</div>
		<div class="category">
			<p>Buloneria</p>
			<img src="img/catalogue/buloneria.jpg"/>			
		</div>
		<div class="category">
			<p>Discos & Mechas</p>
			<img src="img/catalogue/discos.jpg"/>			
		</div>
		<div class="category">
			<p>Adhesivos & Siliconas</p>
			<img src="img/catalogue/silicona.jpg"/>			
		</div>
		<div class="category">
			<p>Reparación Hogar</p>
			<img src="img/catalogue/rep-hogar.jpg"/>			
		</div>
		<div class="category">
			<p>Articulos Hogar</p>
			<img src="img/catalogue/art-hogar.jpg"/>
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

		<p class="copyright"> Copyright © 2021 – All rights reserved</p>
	</footer>

</body>	
</html>