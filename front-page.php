<?php get_header(); ?>
	<div id="encabezado">
		<img class="logoColor"  src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/logo color.png" />
		<img id="pastelLogo" class="pasteles" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cupcake logo.png" />
		<img id="pastelLogo1" class="pasteles" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cupcake logo1.png" />
		<img class="fondo" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/fondoInicio.png" />
		<div id="encabezado1">
			<h1 class="titulo">pasteliarte</h1>
			<img class="imagen1" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cupcake recuadro.png" />
		</div>
	</div>
	<div class="menu scrollflow -slide-top -opacity">
		<div class="opciones" id="conocenos">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/conocenos.png" /></a>
		</div>
		<div class="opciones" id="xpressarte">
			<a href="single-xpressarte.php"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/xpressarte.png" /></a>
		</div>
		<div class="opciones" id="tienda"> 
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/tienda.png" /></a>
		</div>
		<div class="opciones" id="cita">
			<a href="cita-con-el-artista.php"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cita.png" /></a>
		</div>
	</div>
<?php get_footer(); ?>