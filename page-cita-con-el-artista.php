<?php include('header.php'); ?>
	<div id="fondoCita">
		<div id="txt_cita">
			<img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/cita.png" />
		</div>
	</div>
	<div id="formulario">
		<div id="formularioCampos">
			<form action="php/enviarCita.php" method="post">
				<div class="form-group">
				    <label class="campos" for="nombre">Nombre*</label>
				    <input required type="text" name="nombre" class="form-control" id="nombre">
				</div>
		 		<div class="form-group">
		    		<label class="campos" for="apellido">Apellido*</label>
		    		<input required type="text" name="apellido" class="form-control" id="apellido">
		  		</div>
		  		<div class="form-group">
		    		<label class="campos" for="email">Email*</label>
		    		<input required type="text" name="email" class="form-control" id="email">
		  		</div>
		  		<div class="form-group">
		  			<label class="campos">Que quieres cotizar*</label>
			  		<div class="radio">
						<label><input required name="radio" value="Tortas" class="inputRadio"  type="radio">Tortas</label>
					</div>
					<div class="radio">
						<label><input required name="radio" value="Evento" class="inputRadio" type="radio">Evento</label>
					</div>
				</div>
				<div class="form-group">
					<h2>Informacion adicional</h2>
				    <label class="campos" for="descripcion">Introduce las instrucciones especiales para tu pedido</label>
				    <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
				</div>
		  		<button type="submit">Pedir cita</button>
		    </form>
		</div>
	</div>
<?php include('footer.php'); ?>