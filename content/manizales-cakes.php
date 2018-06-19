<?php $urlSitio = get_template_directory_uri(); ?>

	<div id="paginaEntera">
	<div class="container-fluid">
		<div class="row xpressArte">
			<div class="col-10 cake">
				<embed id="cake_1" src="<?php echo $urlSitio; ?>/img/svg/Torta.svg" width="50%" height="50%" />
				<a href="#cake1" class="listo" id="bt_sup_listo">listo para hornear</a>
			</div>
			<div class="saboresRellenosCake col-2">
				<div class="saboresCake">
					<h5>Sabores</h5>
					<div class="saborNormal">
						<h6>Sabor</h6>
						<ul class="contenedorinputs">   
					  		<li><input data-color-sabor="#F8D675" class="inputSaborCake" type="radio" name="saborEstandar" value="Vainilla" id="vainilla" checked>
					  			<span class="inputColorSaborCake" id="vainillaSabor"><label for="vainilla">Vainilla</label></span></li>
					  		<li><input data-color-sabor="#603813" class="inputSaborCake" type="radio" name="saborEstandar" value="Chocolate" id="choco">
					  			<span class="inputColorSaborCake" id="chocolate">
					  			<label for="choco">Chocolate</label></span></li>
					  		<li><input data-color-sabor="#EDCE3A" class="inputSaborCake" type="radio" name="saborEstandar" value="Naranja" id="naranjaS">
					  			<span class="inputColorSaborCake" id="naranjaSabor">
					  			<label for="naranjaS">Naranja <br> Amapola</label></span></li>
					  		<li><input data-color-sabor="#FFE5A4" class="inputSaborCake" type="radio" name="saborEstandar" value="Coco" id="coco"><span class="inputColorSaborCake" id="cocoSabor">
					  			<label for="coco">Coco</label></span></li>
						</ul>
					</div>
					<div class="saborEspecial">
						<h6>Sabor Especial</h6>
						<ul class="contenedorinputs">
							<li><input data-color-sabor="#C1272D" class="inputSaborCake" type="radio" name="saborEstandar" value="Red Velvet" id="redVel">
					  			<span class="inputColorSaborCake" id="redVelvet">
					  				<label for="redVel">Red Velvet</label></span></li>
					  		<li><input data-color-sabor="#CCB279" class="inputSaborCake" type="radio" name="saborEstandar" value="Mocca" id="moccaS">
					  			<span class="inputColorSaborCake" id="mocca">
					  				<label for="moccaS">Moka</label></span></li>
					  		<li><input data-color-sabor="#EFAC37" class="inputSaborCake" type="radio" name="saborEstandar" value="Maple" id="mapleS">
					  			<span class="inputColorSaborCake" id="maple">
					  				<label for="mapleS">Maple</label></span></li>
					  		<li><input data-color-sabor="#EFAC37" class="inputSaborCake" type="radio" name="saborEstandar" value="Zanahoria" id="zanahoriaS">
					  			<span class="inputColorSaborCake" id="zanahoria"><label for="zanahoriaS">Zanahoria</label></span></li>   
						</ul>
					</div>
					<div class="saborSinAzucar">
						<h6>Sabor sin Azucar</h6>
						<ul class="contenedorinputs">   
					  		<li><input data-color-sabor="#F8D675" class="inputSaborCake" type="radio" name="saborEstandar" value="Vainilla sin azucar" 
					  			id="vainillaEs">
					  			<span class="inputColorSaborCake" id="vainillaEspecial">
					  				<label for="vainillaEs">Vainilla</label></span></li>
					  		<li><input data-color-sabor="#603813" class="inputSaborCake" type="radio" name="saborEstandar" value="Chocolate sin azucar" 
					  			id="chocolateEs">
					  			<span class="inputColorSaborCake" id="chocolateEspecial">
					  				<label for="chocolateEs">Chocolate</label></span></li>
					  		<li><input data-color-sabor="#EFAC37" class="inputSaborCake" type="radio" name="saborEstandar" value="Naranja sin azucar" 
					  			id="naranjaEs">
					  			<span class="inputColorSaborCake" id="naranjaEspecial">
					  				<label for="naranjaEs">Naranja</label></span></li>
						</ul>
					</div>
				</div>
				<div class="rellenosCake">
					<h5>Relleno</h5>
						<ul class="contenedorinputs">
							<li><input data-color-relleno="#603813" class="inputRellenoCake" type="radio" name="saborRelleno" value="Nutela" id="nutelaR">
					  			<span class="inputColorRellenoCake" id="nutela">
					  				<label for="nutelaR">Nutela</label></span></li> 
					  		<li><input data-color-relleno="#F9C41E" class="inputRellenoCake" type="radio" name="saborRelleno" value="Maracuya" id="maracuyaR">
					  			<span class="inputColorRellenoCake" id="maracuya">
					  				<label for="maracuyaR">Maracuya</label></span></li>
					  		<li><input data-color-relleno="#C67A24" class="inputRellenoCake" type="radio" name="saborRelleno" value="Arequipe" id="arequipeR">
					  			<span class="inputColorRellenoCake" id="arequipe">
					  				<label for="arequipeR">Arequipe</label></span></li>
					  		<li><input data-color-relleno="#DEFFAE" class="inputRellenoCake" type="radio" name="saborRelleno" value="Limón" id="limonR">
					  			<span class="inputColorRellenoCake" id="limon">
					  				<label for="limonR">Limón</label></span></li>
					  		<li><input data-color-relleno="#FFE5A4" class="inputRellenoCake" type="radio" name="saborRelleno" value="Leche Condensada" id="lecheCondensadaR">
					  			<span class="inputColorRellenoCake" id="lecheCondensada">
					  				<label for="lecheCondensadaR">Leche</label></span></li>
					  		<li><input data-color-relleno="#FFE5A4" class="inputRellenoCake" type="radio" name="saborRelleno" value="Coco" id="cocoR">
					  			<span class="inputColorRellenoCake" id="cocoRe">
					  				<label for="cocoR">Coco</label></span></li>  
					  		<li><input data-color-relleno="#C67A24" class="inputRellenoCake" type="radio" name="saborRelleno" value="Mantequilla de Maní" id="mantequillaR">
					  			<span class="inputColorRellenoCake" id="mantequilla">
					  				<label data-toggle="tooltip" data-placement="top" title="Mantequilla de Maní"
					  				 for="mantequillaR">Mantequilla de Maní</label></span></li>
					  		<li><input data-color-relleno="#F5D0A9" class="inputRellenoCake" type="radio" name="saborRelleno" value="Vainilla" 
					  			id="vainillaR" checked>
					  			<span class="inputColorRellenoCake" id="vainillaRelleno">
					  				<label for="vainillaR">Vainilla</label></span></li>
					  		<li><input data-color-relleno="#F5A9A9" class="inputRellenoCake" type="radio" name="saborRelleno" value="Fresa" id="fresaR">
					  			<span class="inputColorRellenoCake" id="fresa">
					  				<label for="fresaR">Fresa</label></span></li>
					  		<li><input data-color-relleno="#D0FA58" class="inputRellenoCake" type="radio" name="saborRelleno" value="Mango" id="mangoR">
					  			<span class="inputColorRellenoCake" id="mango">
					  				<label for="mangoR">Mango</label>
					  			</span></li>
						</ul>
				</div>
			</div>
		</div>

	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="cake1">
					<h1>Seleccionaste</h1>
					<div id="cake2">
						<div id="cont_cake_img">
							<h2 id="cantidadSel">1</h2>
							<embed id="cakeSeleccionado" src="<?php echo $urlSitio; ?>/img/svg/Torta.svg" />
						</div>
						<div id="cont_cake_sel">
							<h3 id="cakeTxt" class="txtCup">Cake</h3>
							<p id="saborTxt" class="txtCup">Sabor a <span id="txtSabor" class="spanCup">Sabor</span></p>
							<p id="rellenoTxt" class="txtCup">Con relleno de <span id="txtRelleno" class="spanCup">Relleno</span></p>
						</div>
					</div>
					<button class="listo" id="al_horno">Al horno</button>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<!-- <div class="row anim">
			<div class="col-12" id="animacion">
				<p>Aqui va animación</p>
			</div>
		</div> -->
		<div class="row image">
			<div class="col-12" id="imagen">
				<img src="<?php echo $urlSitio; ?>/img/Despiece/imagen2.png">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row decorar">
			<div class="col-2">
				<div class="cantidadCakes">
					<h5>Tus pasteles</h5>
					<p>Selecciona los pasteles que tendran este diseño</p>
					<div class="numeroCake">
						<label class="image-checkbox">
							<img class="cantidad_cake" src="<?php echo $urlSitio; ?>/img/Despiece/circulo.png" />
							<br>
							<input class="disenios" type="checkbox" value="sel_'+i+'" />
						</label>
					</div>
					<h6 class="txt_dis">Selecciona los pasteles para aplicar este diseño</h6>
					<button class="aplicar" id="aplicar_dis_cake">Aplicar Diseño</button>
				</div>
			</div>
			<div class="col-7 cakeAdorno">

				<embed id="cakeSel" src="<?php echo $urlSitio; ?>/img/svg/TortaCrema.svg" width="50%" height="50%">
				</embed>
				
			</div>
			<div class="col-3">
				<div class="seccionCake">
					<h6>Elige una opción</h6>
					<button id="btn_personaje" data-sel="Fondand.svg" class="btn_adornos_cake"><img src="<?php echo $urlSitio; ?>/img/Despiece/personaje_cupcake.png" /></button>
					
				</div>

				<div id="personajes_cake">
					<div class="sel_per_pie">

						<ul class="crema_adornos_cake">
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/sullivan_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/sullivan_torta.svg" class="inputradioPersonajeCake" type="radio" checked>
								<span  class="inputPersonaje" id="sullivan"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/wasauski_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/wasauski_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="wasauski"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="angry"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="angry1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry2_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="angry2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/marrano_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/marrano_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="marrano"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/conejo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/conejo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="conejo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gato_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="gato"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/hello_kitty_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/hello_kitty_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="hello_kitty"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gato1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="gato1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/pollo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/pollo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="pollo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gallo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gallo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="gallo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="emoji"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="emoji1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji2_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="emoji2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji3_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji3_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="emoji3"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="elmo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="elmo1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/castor_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/castor_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="castor"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elefante_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elefante_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="elefante"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/caballo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/caballo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="caballo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/cerdo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/cerdo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="cerdo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/unicornio_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/unicornio_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span  class="inputPersonajeCake" id="unicornio"></span></label></li>

						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>