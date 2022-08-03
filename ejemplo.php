<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fruto Prohibido</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/estilos.css">
</head>
<body>

	<header class="cabecera">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img src="<?php bloginfo('template_url'); ?>/imagenes/frutoprohibido.jpg" width="100">
				</div>
				<div class="col-sm-4">
					<h1 class="titulo">Fruto Prohibido</h1>
					<h2 class="subtitulo">Por Melitza Fiorella Aquino Maximiliano</h2>
				</div>
				<div class="col-sm-4">
					<nav class="menu">
						<ul>
							<li><a href="index.html">Portada</a></li>
							<li><a href="capitulos.html">Capítulos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<section class="portada">

	<?php $articulos = new WP_Query([
			'showposts' => 5,
			]);	
		while ($articulos->have_posts()) {
			$articulos->the_post(); ?>

		<br>

		<div class="row caja">
			<div class="col-sm-2"> 
				<?php the_post_thumbnail("thumbnail"); ?>
			</div>
			<div class="col-sm-10">
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
			</div>
		</div>	

	<?php } ?>

	</section>

	<section class="contacto container">

		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<h3>Déjame tu comentario</h3>
				<form action="#" method="POST">
					<div class="form-group">
						<label>Nombre Completo</label>	
						<input type="text" class="form-control" name="nombre">			
					</div>
					<div class="form-group">
						<label>Correo Electrónico</label>	
						<input type="email" class="form-control" name="email">			
					</div>
					<div class="form-group">
						<label>Teléfono</label>	
						<input type="text" class="form-control" name="telefono">			
					</div>
					<div class="form-group">
						<label>Mensaje</label>	
						<textarea class="form-control" name=" mensaje"></textarea> 			
					</div>
					<div class="form-group">	
						<input type="submit" class="btn btn-success" value=" Enviar">
					</div>
				</form>
			</div>
		</div>
	</section>

	<footer  class="pie">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4>Contáctame</h4>
					<p>melitza.aquino@ismem.edu.pe</p>
				</div>
				<div class="col-sm-4">
					<h4>Mis redes sociales</h4>
					<ul>
						<li><a href="https://www.facebook.com/melitzafiorella/" target="_blank">
							<i class="fa fa-facebook-square"></i>
						</a></li>
						<li><a href="https://www.youtube.com/channel/UCE63Eg1krHyIGabXRc6Y05A" target="_blank">
							<i class="fa fa-youtube-play"></i>
						</a></li>
						<li><a href="https://www.instagram.com/melitzafiorella/?hl=es" target="_blank">
							<i class="fa fa-instagram"></i>
						</a></li>
						<li><a href="https://twitter.com/melitzafiorella" target="_blank">
							<i class="fa fa-twitter"></i>
						</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h4>Melitza Fiorella Aquino Maximiliano</h4>
					<p>Estudiante de Computación e informática</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			Desarrollado con <i class="fa fa-heart"> por Melitza Aquino</i>
		</div>	
	</footer>


</body>
</html>