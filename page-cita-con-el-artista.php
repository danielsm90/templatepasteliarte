<?php include('header.php'); ?>
	<div id="fondoCita">
		<div id="txt_cita">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cita.png" />
		</div>
	</div>
	<div id="cita_txt">
		<p>
			En Pasteliarte contamos con un selecto equipo de artistas los cuales realizan un impecable trabajo para darle toques únicos a tus momentos especiales. Ellos están  dispuestos a compartir un momento contigo para que desde su experiencia, conocimiento, tus ideas y sueños, puedan co-crear las bases para hacer de tu celebración un momento único  y especial. Nuestros artistas son especialistas en cupcakes, tortas, mesas de dulces, postres y desarrollo completo de eventos, como celebraciones corporativas, bodas, aniversarios, quince años, cumpleaños, etc.

			Cada cita con nuestros artistas es una experiencia única. Por eso para que puedas tener la experiencia de co-crear, obras de arte comestibles productos comestibles,  Debes agendar tu cita, para que uno de nuestros artistas pueda acompañarte en la experiencia Pasteliarte y dedicarte el tiempo necesario para que su reunión tenga los mejores resultados. <br>

			Tips:
			Debemos conocer para que fecha que fecha tienes programada tu celebración, cuantos invitados tienes, temática, lugar del evento y todo lo que creas nos pueda ayudar para entender el tipo de desarrollo que necesitas!! 

			El tiempo promedio de una cita es de 20 a 45 minutos, Llena el formulario o escríbenos al +57 310 366 1726 solicitando una cita con el artista y nos comunicamos contigo para reservar tu espacio.

		</p>
	</div>
	<div id="formulario">
		<div id="formularioCampos">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('cita-artista')) : endif; ?>
						
					</div>
					<div class="col-6">
						<div class="pregutas_frec">
							<h2>Preguntas Frecuentes</h2>
							<!-- <div id="accordion">
								<div class="card">
								    <div class="card-header" id="headingOne">
								      <h5 class="mb-0">
								        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								          Collapsible Group Item #1
								        </button>
								      </h5>
								    </div>

								    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								      <div class="card-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
							  	</div>

							  	<div class="card">
								    <div class="card-header" id="headingTwo">
								      <h5 class="mb-0">
								        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								          Collapsible Group Item #2
								        </button>
								      </h5>
								    </div>
								    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								      	<div class="card-body">
								        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      	</div>
								    </div>
								</div>
							</div> -->
						</div>
						<!-- <div class="pedir">
							<p>
								RECOMENDACIONES te contactamos para agendar en menos de 48 horas.
							</p>
			  				<button id="enviar" type="submit">Pedir mi cita</button>
			  			</div> -->
			  		</div>
		  		</div>
	  		</div>
		</div>
	</div>
<?php include('footer.php'); ?>