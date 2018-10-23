<?php get_header(); ?>

<?php if (have_posts()): the_post(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 conocPag">
				<div id="conocenos-superior">
					<img id="conoc_fondo" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/fondo_conoc.png" />
					<div class="contenedor-conoc">
						<div class="row">
							<div class="col-12 linea"></div>
							<div class="col-12 col-lg-6 txt_know">
								<img id="logo-ro" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/Logo-02.png" />
								<?php
								$txt_know = get_post_meta(get_the_ID(), 'txt_know', true);
								echo nl2br($txt_know);
								?>
							</div>
							<div class="col-12 col-lg-6">
								<img id="cpk_fresa" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cpk_fresa.png" />
							</div>
							<div class="col-12 linea"></div>
						</div>
					</div>
					<div class="row galletas">
						<div class="col-12 col-lg-6 historia">
							<img class="fon_gall" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/fondo_ga.png"></img>
							<img class="gall" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/galletas.png"></img>
						</div>
						<div class="col-12 col-lg-6">

							<?php the_content(); ?>

						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- <div class="video">
			<video width="60%" height="0%" controls>
				<source src="<?php //echo get_template_directory_uri(); ?>/img/Pasteliarte/maquina_1version000.mp4" type="video/mp4">
			</video>
		</div> -->
	</div>
<?php endif ?>

<?php get_footer(); ?>