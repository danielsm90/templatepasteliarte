<?php get_header(); ?>
<?php if (have_posts()): the_post(); ?>
	<div id="fondoCita">
		<div id="txt_cita">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cita.png" />
		</div>
	</div>
	<div id="cita_txt">
		<?php the_content(); ?>
	</div>
<?php endif ?>
	<div id="formulario">
		<div id="formularioCampos">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('cita-artista')) : endif; ?>
						
					</div>
					<div class="col-12 col-md-6">
						<?php

						query_posts('post_type=faq');

						if ( have_posts() ) {
							?>
							<div class="pregutas_frec">
								<h2>Preguntas Frecuentes</h2>
								<div id="accordion">
									<?php
									while( have_posts() ){
										the_post();
										?>
										<div class="card">
										    <div class="card-header" id="heading-<?php  echo get_the_ID();?>">
										      <h5 class="mb-0">
										        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php  echo get_the_ID();?>" aria-expanded="false" aria-controls="collapse<?php  echo get_the_ID();?>">
										        	<?php echo get_the_title(); ?>
										        </button>
										      </h5>
										    </div>

										    <div id="collapse<?php  echo get_the_ID();?>" class="collapse" aria-labelledby="heading<?php  echo get_the_ID();?>" data-parent="#accordion">
										      <div class="card-body">
										      	<?php the_content(); ?>
										      </div>
										    </div>
									  	</div>
									<?php
									}
								?>
								</div>
							</div>
							<!-- <div class="pedir">
								<p>
									RECOMENDACIONES te contactamos para agendar en menos de 48 horas.
								</p>
				  				<button id="enviar" type="submit">Pedir mi cita</button>
				  			</div>-->
							<?php
						}else{
							echo "No hay";
						}

						?>
			  		</div>
		  		</div>
	  		</div>
		</div>
	</div>
<?php get_footer(); ?>