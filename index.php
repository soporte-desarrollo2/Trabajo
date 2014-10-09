<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	$op=$_GET["op"];
	switch ($op) 
	{
		case "listaregistro":
			$contenido = "php/ListarRegistroCalificado.php";
			$titulo = ": Listar Registro Calificado";
			break;
		case "subiregistro":
			$contenido = "php/SubirRegistroCalificado.php";
			$titulo = ": Subir Registro Calificado";
			break;
		case "listarautoevalucion":
			$contenido = "php/ListarAutoevaluacion.php";
			$titulo = ": Listar Autoevaluacion";
			break;
		case "subirautoevalucion":
			$contenido = "php/SubirAutoevalucion.php";
			$titulo = ": Subir AutoEvaluacion";
			break;
		default:
			$contenido = "php/home.php";
			break;
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="content-type" content="text/html" />
	<meta name="Semillero Web" content="SORCA" />
	<link rel="icon" type="image/png" href="imagen/logo.png" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/menu.js"></script>
	<title><?php echo ("SORCA".$titulo); ?></title>
</head>
<body>
	<header>
		<div class="logo">
			<img src="imagen/logo.png" alt="logo siwebsi">
		</div>
		<div class="titular">
			<h1 class="titulo">SORCA <br>	
				Semillero de Investigación en Ingeniería Web y Sistemas Inteligentes</h1>
			</div>
			<div class="logo-poli">
				<img src="imagen/polilogo2.png" alt="logo poli">
			</div>
	</header>
	<div class="menu_bar">
		<a href="#" class="bt_menu"><span class="icon-list"></span>Menu</a>
	</div>
	<nav id="menu" class="mobile">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="#">Registro Calificado</a>
				<ul>
					<li><a href="?op=listaregistro">Listar Registro</a></li>
					<li><a href="?op=subiregistro">Subir Registro</a></li>
				</ul>
			</li>
			<li><a href="#">Autoevaluacion</a>
				<ul>
					<li><a href="?op=listarautoevalucion">Listar Registro</a></li>
					<li><a href="#">Subir Registro</a></li>
				</ul>
			</li>
			<li><a href="#">Planes de mejoramiento</a></li>
			<li><a href="#">Procesos</a></li>
		</ul>
	</nav>
	<?php 
		include($contenido);
	?>
	<footer>
		<em>SORCA</em> - Version 2.0<br>
		Grupo de Investigación en Software - <em>GRINSOFT</em><br>
		Semillero de Investigación en Ingeniería Web y Sistemas Inteligentes - <em>SIWEBSI</em><br>
		Medellín - Antioquia - Colombia - 2014<br>
		<em>Contacto:</em> jegiraldo@elpoli.edu.co<br>
	</footer>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/listar.js"></script>
	<script src="subir.js"></script>
</body>
</html>	