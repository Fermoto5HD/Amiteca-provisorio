	<!-- Título + metadata -->
		<title>Amiteca (Alpha)</title>
		
		<meta name="description" content="Descripción en Google.">
		<meta property="og:description" content="Descripción en Google.">
		<meta name="twitter:title" content="Amiteca (Alpha)" />
		<meta name="twitter:description" content="Descripción en Google." />
	<!-- Charset + estilos -->
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/Favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/general.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
	<!-- Scripts -->
		<script type='text/javascript' src="js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	<!-- Isologotipo + Navegación -->
		<header id="estructura-header">
			<div class="encuadre" id="header">
				<div id="encabezado-isologotipo" onclick="Home()" alt="Amiteca"></div>
				<nav class="encabezado-navegacion">
					<!--<button id="boton-menu">Menú principal</button>-->
					<div class="navegacion-item" id="home" onclick="Home()">Home</div>
					<div class="navegacion-item" id="acerca-de" onclick="AcercaDe()">¿Que es?</div>
					<div class="navegacion-item" id="contacto" onclick="Contacto()">Blog</div>
					<div class="navegacion-item" id="sesion-en-curso">
						<div class="usuario-img"></div>
						Usuario <i class="fa fa-caret-down"></i>
					</div>
				</nav>
			</div>
		</header>