<?php get_header(); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 p-0">
				<div id="encabezado">
					<?php
					$pageXpressarte = get_page_by_path('xpressarte');
					$urlXpressarte = get_permalink( $pageXpressarte );

					 ?>
					<a href="<?php echo $urlXpressarte; ?>">
						<img class="logoColor"  src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/expresate-aqui.png" />
					</a>
					<img id="pastelLogo" class="pasteles" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cupcake logo.png" />
					<img id="pastelLogo1" class="pasteles" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cpk.png" />
					<img class="fondo" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/fondoInicio.png" />
					<div id="encabezado1">
						<img class="titulo" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/Logo-01.png" />
						<p>
							<?php show_data_opciones('data_somos'); ?>
						</p>
						<img class="imagen1" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cpk1.png" />
						<!-- <img  src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cuadro.svg" /> -->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 p-0">
				<div class="menu scrollflow -slide-top -opacity">
					<div class="opciones" id="conocenos">
						<?php
						$pageConocenos = get_page_by_path('conocenos');
						$urlConocenos = get_permalink( $pageConocenos );
						?>
						<div class="conoc">
							<p>
								<?php show_data_opciones('data_conocenos'); ?>
							</p>
						</div>
						<a href="<?php echo $urlConocenos; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/conocenos.png" /></a>
					</div>
					<div class="opciones" id="xpressarte">
						<?php
						$pageXpressarte = get_page_by_path('xpressarte');
						$urlXpressarte = get_permalink( $pageXpressarte );
						?>
						<div class="xpre">
							<p>
								<?php show_data_opciones('data_xpressarte'); ?>
							</p>
						</div>
						<a href="<?php echo $urlXpressarte; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/xpressarte.png" /></a>

					</div>
					<div class="opciones" id="tienda">
						<?php
						$pageTienda = get_page_by_path('tienda');
						$urlTienda = get_permalink( $pageTienda );
						?>
						<div class="tnd">
							<p>
								<?php show_data_opciones('data_tienda'); ?>
							</p>
						</div>
						<a href="<?php echo $urlTienda; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/tienda.png" /></a>
					</div>
					<div class="opciones" id="cita">
						<?php
						$pageCita = get_page_by_path('cita-con-el-artista');
						$urlCita = get_permalink( $pageCita );
						?>
						<div class="ct">
							<p>
								<?php show_data_opciones('data_cita'); ?>
							</p>
						</div>
						<a href="<?php echo $urlCita; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cita.png" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>