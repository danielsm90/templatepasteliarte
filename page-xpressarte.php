<?php get_header('xpressarte'); ?>
	<?php
	if(have_posts()):
		the_post();
	?>
		<div id="fondo">
			<img id="momento" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/Momento.png" />
			<img id="icono" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/imgXpress.png" />
			<div id="contenedorGrande">
				<h3><?php echo get_the_content(); ?></h3>
				<div id="manizales">
					<h1>En Manizales</h1>
					<?php
					$pageMCupCakes = get_page_by_path( 'manizales-cupcakes' );
					$urlImagenMCupCakes = get_the_post_thumbnail_url( $pageMCupCakes );
					$urlMCupCakes = get_permalink( $pageMCupCakes );
					?>
					<a id="urlCuManizales" href="<?php echo $urlMCupCakes; ?>">
						<div id="contenedorCupcake">
							<div id="cupcake">
								<h2>Cupcakes</h2>
								<img class="imgCupcake" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/xcupcake.png" />
							</div>
						</div>
					</a>
					<?php
					$pageMCakes = get_page_by_path( 'manizales-cakes' );
					$urlImagenMCakes = get_the_post_thumbnail_url( $pageMCakes );
					$urlMCakes = get_permalink( $pageMCakes );
					?>
					<a id="urlCaManizales" href="<?php echo $urlMCakes; ?>">
						<div id="contenedorTorta">
							<div id="torta">
								<h2>Cakes</h2>
								<img class="imgCake" src="<?php echo get_template_directory_uri(); ?>/img/Despiece/cake.png" />
							</div>
						</div>
					</a>
					
				</div>
				<div id="restodelpais">
					<h1>En el resto del país</h1>
					<?php
					$pageResto = get_page_by_path( 'resto-del-pais' );
					$urlImagenResto = get_the_post_thumbnail_url( $pageResto );
					$urlResto = get_permalink( $pageResto );
					?>
					<a id="urlResto" href="<?php echo $urlResto; ?>">
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