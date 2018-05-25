<?php get_header(); ?>
	<?php
	if(have_posts()):
		the_post();
		$my_wp_query = new WP_Query();
    	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1));
		$arrayPages = get_page_children(get_the_ID(), $all_wp_pages);
	?>
		<div id="fondo">
			<img id="momento" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/Momento.png" />
			<img id="icono" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/imgXpress.png" />
			<div id="contenedorGrande">
				<h3><?php echo get_the_content(); ?></h3>
				<div id="manizales">
					<h1>En Manizales<h1>
					<a href="<?php echo get_page_link($arrayPages[2]->ID); ?>">
						<div id="contenedorCupcake">
							<div id="cupcake">
								<h2>Cupcakes</h2>
								<img class="imgCupcake" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/xcupcake.png" />
							</div>
						</div>
					</a>
					<a href="<?php echo get_page_link($arrayPages[1]->ID); ?>">
						<div id="contenedorTorta">
							<div id="torta">
								<h2>Cakes</h2>
								<img class="imgCake" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/cake.png" />
							</div>
						</div>
					</a>
					
				</div>
				<div id="restodelpais">
					<h1>En el resto del país<h1>
					<a href="<?php echo get_page_link($arrayPages[0]->ID); ?>">
						<div id="contenedorTortas">
							<div id="tortas">
								<h2>Cakes</h2>
								<img class="imgCakes" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/cakes.png" />
							</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php get_footer('xpressarte'); ?>