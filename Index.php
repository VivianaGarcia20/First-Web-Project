<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Francolino Arte</title>
		<link rel="stylesheet" type="text/css" href="Estilos.css"/>
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/lightbox.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
			<div class="contenedor_header">
			<div id= "marca" >
				<img src="Imagenes/header_fa.png" alt="marca" class= "marca"/>
			</div>
			<nav id= "botonera_secciones" >
				<ul>
					<li><a href="#biografia_persona">Bio</a></li> 
					<li><a href="#biografia_artista">Arte</a></li>
					<li><a href="#seccion_galerias">Galeria</a></li>
					<li><a href="Index.php?id=ol#seccion_recomendados">Recomendados</a></li>
					<li><a href="#contacto">Contacto</a></li>
				</nav>
			</div>
		</header>

		<section id= "seccion_biografia">
			<div id= "imagen_persona">
				<img src="Imagenes/imagen_persona.jpg" alt= "imagen_persona" class="rounded-corners-persona"/>
			</div>
			<article id= "biografia_persona">
				<h3>Bio</h3>
				<p><strong>"Escapar... Salir de mis pensamientos y transportarme a un lugar donde quisiera estar. Formar parte de ese lugar, en ese instante y sólo ser. Esa es la motivación detrás de cada pintura.</p>
				<p>Quiero sentir que ese instante es mío y lo logro pintando. Crearlo de nuevo. Como si pudiera robarle al universo un pedacito de su belleza y hacerla mía".</strong></p> 
			</article>
			<article id= "biografia_artista" >
				<h3>Arte</h3>
				<p><strong>Se dedica hace 20 años al arte y el diseño gráfico. Con más de una década de experiencia en Motion Graphics y 3D.</p>
				<p>Hoy se expresa a través del óleo y el lápiz, su predilección por los paisajes y la vida salvaje lo desafían en la constante búsqueda de su estilo.</strong></p>
			</article>
			<div id= "imagen_artista" >
				<img src="Imagenes/imagen_artista.jpg" alt= "imagen_persona" class="rounded-corners-artista"/>
			</div>
		</section>
		<section id= "seccion_galerias">
			<h2>Galería</h2>
			<div id= "carrousel_oleo" >
				<a href="Imagenes/oleo/oleo01.jpg" data-lightbox="oleo" data-title="Búho cornado"> <img src="Imagenes/oleo/oleo01.jpg" class="imagen_carrousel"/> </a>
				<a href="Imagenes/oleo/oleo02.jpg" data-lightbox="oleo" data-title="Darth Vader"> <img src="Imagenes/oleo/oleo02.jpg" class="imagen_carrousel"/> </a>
				<a href="Imagenes/oleo/oleo03.jpg" data-lightbox="oleo" data-title="Colibrí"> <img src="Imagenes/oleo/oleo03.jpg" class="imagen_carrousel"/> </a>
				<a href="Imagenes/oleo/oleo04.jpg" data-lightbox="oleo" data-title="Papagayo"> <img src="Imagenes/oleo/oleo04.jpg" class="imagen_carrousel"/> </a>
			</div>
			<div id= "carrousel_lapiz" > 
				<a href="Imagenes/lapiz/lapiz01.jpg" data-lightbox="lapiz" data-title="Ave"> <img src="Imagenes/lapiz/lapiz01.jpg" class="imagen_carrousel"/> </a>
				<a href="Imagenes/lapiz/lapiz02.jpg" data-lightbox="lapiz" data-title="Leopardo de las nieves"> <img src="Imagenes/lapiz/lapiz02.jpg" class="imagen_carrousel"/> </a>
				<a href="Imagenes/lapiz/lapiz03.jpg" data-lightbox="lapiz" data-title="Colibrí"> <img src="Imagenes/lapiz/lapiz03.jpg" class="imagen_carrousel"/> </a>
				<a href="Imagenes/lapiz/lapiz04.jpg" data-lightbox="lapiz" data-title="Ciervo"> <img src="Imagenes/lapiz/lapiz04.jpg" class="imagen_carrousel"/> </a>
			</div>
		</section>
		<section id="seccion_recomendados">
			<h2>Recomendados</h2>
			<nav id="botonera_recomendados">
				<ul> 
					<li><a href="Index.php?id=ol#seccion_recomendados">Óleo</a></li>
					<li><a href="Index.php?id=la#seccion_recomendados">Lápiz</a></li>
				</ul>
			</nav>
		<?php
		if (isset($_GET['id'])) { // verifica que la variable GET este recibiendo el valor de id
		
		switch ($_GET['id']) {
			case 'ol':
				$imagen='oferta_oleo.jpg';
				$soporte='Óleo';
				$nombre='Búho cornado';
				$descripcion='Óleo sobre lienzo. 
					Medidas: 40 x 60.';
				break;
			case 'la':
				$imagen='oferta_lapiz.jpg';
				$soporte='Lápiz';
				$nombre='Pajarito';
				$descripcion='Lápiz sobre papel. 
					Medidas: 30 x 21.';
				break;
			}	
			?>
			<div id="img_obra">
				<img src="Imagenes/<?php echo $imagen;?>" alt= "imagen_obra" class="rounded-corners-obra">
			</div>
			<article id="info_obra">
				<h3><?php echo $soporte;?>
				</h3>
				<h4><?php echo $nombre;?></h4>
				<p><?php echo $descripcion;?></p>
			</article>
			<?php
			} // cierra el if
			?>
		</section>
		
		<footer>
			<section id= "contacto" >
				<h2>Contacto</h2>
				<form method="POST" action="formulario_contacto.php">
					<input type="text" name="nombre" placeholder="Nombre" maxlength="30">
					<input type="email" name="mail" placeholder="Correo electrónico" maxlength="30">
					<textarea name="mensaje" placeholder="Mensaje" rows="3"></textarea>
					<input type="text" name="referido" placeholder="¿Cómo me conociste?" maxlength="30">
					<input type="submit" id="Enviar">
				</form>
			</section>
			<nav id= "botonera_redes" >
				<ul>
				<li><a href="https://www.instagram.com/francolinoarte/" target="new"> <img src="Imagenes/instagram.png" class="fa"/></a></li>
				<li><a href="https://www.facebook.com/FrancolinoArte/" target="new"> <img src="Imagenes/facebook.png" class="ins"/></a></li>
				<ul/>
			</nav>
		</div>
		</footer>

	<script src="js/lightbox-plus-jquery.min.js"></script>

	</body>
</html>
