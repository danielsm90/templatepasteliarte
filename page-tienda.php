<?php
get_header();
if (have_posts()) {
	?>
	<div id="fondoTienda">
		<div id="txt_tienda">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/tienda.png" />
		</div>
	</div>
	<?php
	the_post();
	the_content();
	?>
	<div class="text-adicional">
		Porque para cada ocasión hay un tipo de cupcake, aquí los encontrarás de los más apetitosos y como tú elijas. Todos nuestros cupcakes están realizados bajo pedido, por lo que los disfrutarás recién hechos y los que tú elijas. Además al ser naturales disfrutarás de todo su sabor, pero también podrás adaptarlo si tienes intolerancias alimentarias.
		<br>Entrega en Manizales ciudad
		<br>Lunes a domingo de 8:00 a 18:00
	</div>
	<?php
}
get_footer();
?>