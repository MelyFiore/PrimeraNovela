<?php /* Template Name: Detalles */

get_header(); ?>
    
    <section class="container detalles">
        <div class="row">
            <div class="col-sm-12 title">   
                <h1 class="titulo"><?php the_title(); ?></h1>
            </div>         
            <div class="col text-center imagen">
                <img src="<?php the_post_thumbnail_url(); ?>" width="800px">
            </div>   
            <div>
                <p class="texto"><?php the_content(); ?></p>
            </div>    
        </div>        
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
					<div class="form-group boton">	
						<input type="submit" class="btn btn-success" value=" Enviar">
					</div>
				</form>
			</div>
		</div>
	</section>

    <?php get_footer(); ?>