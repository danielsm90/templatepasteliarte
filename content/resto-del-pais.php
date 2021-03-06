<?php $urlSitio = get_template_directory_uri(); ?>

<div id="paginaEntera">
	<div class="container-fluid">
		<div class="row xpressArte">
			<div class="col-lg-10 col-12 cake">
				<embed id="cake_1" src="<?php echo $urlSitio; ?>/img/svg/Torta.svg" width="50%" height="50%" />
				<a href="#cake1" class="listo" id="bt_sup_listo">listo para hornear</a>
			</div>
			<div class="saboresRellenosCake col-lg-2 col-12">
				<div class="saboresCake">
					<h5 class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Sabores</h5>
					<div class="collapse multi-collapse" id="multiCollapseExample1">
						<div class="saborNormal">
							<h6>Sabor</h6>
							<ul class="contenedorinputs">   
						  		<li><input data-color-sabor="#F8D675" class="inputSaborCake" type="radio" name="saborEstandar" value="Vainilla" id="vainilla" checked>
						  			<span class="inputColorSaborCake" id="vainillaSabor">
						  				<label data-toggle="tooltip" data-placement="top" title="Vainilla: El clásico Pastel blanco  que hace una perfecta combinación con cualquier tipo de relleno" for="vainilla">Vainilla</label></span></li>
						  		<li><input data-color-sabor="#603813" class="inputSaborCake" type="radio" name="saborEstandar" value="Chocolate" id="choco">
						  			<span class="inputColorSaborCake" id="chocolate">
						  			<label data-toggle="tooltip" data-placement="top" title="Chocolate: Suave sabor a chocolate que  al contrastar con nuestros rellenos, genera una explosión de sabores en el paladar" for="choco">Chocolate</label></span></li>
						  		<li><input data-color-sabor="#EDCE3A" class="inputSaborCake" type="radio" name="saborEstandar" value="Naranja" id="naranjaS">
						  			<span class="inputColorSaborCake" id="naranjaSabor">
						  			<label data-toggle="tooltip" data-placement="top" title="Cítricos- amapola: un pastel blanco con matices cítricos y semillas de amapola" for="naranjaS">Naranja <br> Amapola</label></span></li>
						  		<li><input data-color-sabor="#FFE5A4" class="inputSaborCake" type="radio" name="saborEstandar" value="Coco" id="coco"><span class="inputColorSaborCake" id="cocoSabor">
						  			<label data-toggle="tooltip" data-placement="top" title="Coco: un esponjoso pastel blanco con sabor y trozos de coco naturales" for="coco">Coco</label></span></li>
							</ul>
						</div>
						<div class="saborEspecial">
							<h6>Sabor Especial</h6>
							<ul class="contenedorinputs">
								<li><input data-color-sabor="#C1272D" class="inputSaborCake" type="radio" name="saborEstandar" value="Red Velvet" id="redVel">
						  			<span class="inputColorSaborCake" id="redVelvet">
						  				<label data-toggle="tooltip" data-placement="top" title="Red Velvet: De origen americano, Es un  pastel de color rojo con la perfecta combinación entre vainilla  y chocolate  que hace maridaje con un suave frosting de queso como relleno." for="redVel">Red Velvet</label></span></li>
						  		<li><input data-color-sabor="#CCB279" class="inputSaborCake" type="radio" name="saborEstandar" value="Mocca" id="moccaS">
						  			<span class="inputColorSaborCake" id="mocca">
						  				<label data-toggle="tooltip" data-placement="top" title="Mocca (para cupcakes):  Pastel de Café Amaretto con trozos de chocolate belga como relleno" for="moccaS">Moka</label></span></li>
						  		<li><input data-color-sabor="#EFAC37" class="inputSaborCake" type="radio" name="saborEstandar" value="Maple" id="mapleS">
						  			<span class="inputColorSaborCake" id="maple">
						  				<label data-toggle="tooltip" data-placement="top" title="Maple & Bacon : delicioso pastel que te lleva por un camino de sensaciones en tu paladar,  que va de lo dulce de la miel de maple al toque salado y crocante del bacon" for="mapleS">Maple</label></span></li>
						  		<li><input data-color-sabor="#EFAC37" class="inputSaborCake" type="radio" name="saborEstandar" value="Zanahoria" id="zanahoriaS">
						  			<span class="inputColorSaborCake" id="zanahoria">
						  				<label data-toggle="tooltip" data-placement="top" title="Zanahoria: pastel hecho con trozos de zanahoria y el toque especial que nos evoca las delicias de la abuela
											" for="zanahoriaS">Zanahoria</label></span></li>   
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
				</div>
				<div class="rellenosCake">
					<h5 class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Relleno</h5>
						<div class="collapse multi-collapse" id="multiCollapseExample2">
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

	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="cake1">
					<h1>Seleccionaste</h1>
					<div class="row" id="cake2">
						<div class="col-12 col-lg-6" id="cont_cake_img">
							<h2 id="cantidadSel">1</h2>
							<embed id="cakeSeleccionado" src="<?php echo $urlSitio; ?>/img/svg/Torta.svg" />
						</div>
						<div class="col-12 col-lg-6" id="cont_cake_sel">
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
			<div class="col-12 col-lg-2 col-decorar">
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
				<button class="btn btn-primary aplicar" data-toggle="modal" data-target="#formularioPago" data-whatever="@mdo" id="infoCake">Agregar al carrito</button>
			</div>
			<div class="col-12 col-lg-7 cakeAdorno">

				<embed id="cakeSel" src="<?php echo $urlSitio; ?>/img/svg/TortaCrema.svg" width="50%" height="50%">
				</embed>
				
			</div>
			<div class="col-12 col-lg-3">
				<div class="seccionCake">
					<h6>Elige una opción</h6>
					<button id="btn_personaje" data-sel="Fondand.svg" class="btn_adornos_cake"><img src="<?php echo $urlSitio; ?>/img/Despiece/personaje_cupcake.png" /></button>
					
				</div>

				<div id="personajes_cake">
					<div class="sel_per_pie">

						<ul class="crema_adornos_cake">
							<li><label><input data-toggle="tooltip" data-placement="top" title="Sulley Sullivan Monster Inc" data-nombre="SulleySullivanMonsterInc" data-adorno="<?php echo $urlSitio; ?>/img/svg/sullivan_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/sullivan_torta.svg" class="inputradioPersonajeCake" type="radio" checked>
								<span data-toggle="tooltip" data-placement="top" title="Sulley Sullivan Monster Inc" class="inputPersonaje" id="sullivan"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Mike Wazowski– Monsters Inc" data-nombre="Mike_Wazowski_Monsters_Inc" data-adorno="<?php echo $urlSitio; ?>/img/svg/wasauski_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/wasauski_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Mike Wazowski– Monsters Inc" class="inputPersonajeCake" id="wasauski"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird rojo" data-nombre="Angry_bird_rojo" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird rojo" class="inputPersonajeCake" id="angry"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird amarillo" data-nombre="Angry_bird_amarillo" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird amarillo" class="inputPersonajeCake" id="angry1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird azul" data-nombre="Angry_bird_azul" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry2_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird azul" class="inputPersonajeCake" id="angry2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cerdito de angry bird" data-nombre="Cerdito_de_angry_bird" data-adorno="<?php echo $urlSitio; ?>/img/svg/marrano_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/marrano_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Cerdito de angry bird" class="inputPersonajeCake" id="marrano"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Conejo" data-nombre="Conejo" data-adorno="<?php echo $urlSitio; ?>/img/svg/conejo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/conejo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Conejo" class="inputPersonajeCake" id="conejo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Gato" data-nombre="Gato" data-adorno="<?php echo $urlSitio; ?>/img/svg/gato_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Gato" class="inputPersonajeCake" id="gato"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Hello kitty" data-nombre="Hello_kitty" data-adorno="<?php echo $urlSitio; ?>/img/svg/hello_kitty_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/hello_kitty_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Hello kitty" class="inputPersonajeCake" id="hello_kitty"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Gato rosado" data-nombre="Gato_rosado" data-adorno="<?php echo $urlSitio; ?>/img/svg/gato1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Gato rosado" class="inputPersonajeCake" id="gato1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Pato" data-nombre="Pato" data-adorno="<?php echo $urlSitio; ?>/img/svg/pollo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/pollo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Pato" class="inputPersonajeCake" id="pollo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Pollo" data-nombre="Pollo" data-adorno="<?php echo $urlSitio; ?>/img/svg/gallo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gallo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Pollo" class="inputPersonajeCake" id="gallo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji carita feliz" data-nombre="Emoji_carita_feliz" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji carita feliz" class="inputPersonajeCake" id="emoji"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji enamorado" data-nombre="Emoji_enamorado" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji enamorado" class="inputPersonajeCake" id="emoji1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji ojos cerrados y sacando lengua" data-nombre="Emoji_ojos_cerrados_y_sacando lengua"  data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji2_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji ojos cerrados y sacando lengua" class="inputPersonajeCake" id="emoji2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji picando el ojo, guiño y corazón" data-nombre="Emoji_picando_el_ojo_guiño_y_corazón" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji3_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji3_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji picando el ojo, guiño y corazón" class="inputPersonajeCake" id="emoji3"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Monstro comegalletas –  plaza sésamo" data-nombre="Monstro_comegalletas_plaza_sésamo" data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Monstro comegalletas –  plaza sésamo" class="inputPersonajeCake" id="elmo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Elmo – Plaza sésamo" data-nombre="Elmo_Plaza_sésamo" data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo1_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Elmo – Plaza sésamo" class="inputPersonajeCake" id="elmo1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Castor" data-nombre="Castor" data-adorno="<?php echo $urlSitio; ?>/img/svg/castor_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/castor_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Castor" class="inputPersonajeCake" id="castor"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Elefante" data-nombre="Elefante" data-adorno="<?php echo $urlSitio; ?>/img/svg/elefante_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elefante_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Elefante" class="inputPersonajeCake" id="elefante"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Caballo" data-nombre="Caballo" data-adorno="<?php echo $urlSitio; ?>/img/svg/caballo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/caballo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Caballo" class="inputPersonajeCake" id="caballo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cerdito" data-nombre="Cerdito" data-adorno="<?php echo $urlSitio; ?>/img/svg/cerdo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/cerdo_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Cerdito" class="inputPersonajeCake" id="cerdo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Unicornio" data-nombre="Unicornio" data-adorno="<?php echo $urlSitio; ?>/img/svg/unicornio_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/unicornio_torta.svg" class="inputradioPersonajeCake" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Unicornio" class="inputPersonajeCake" id="unicornio"></span></label></li>

						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="formularioPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" id="formulario_pago">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New message</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
				</div>
				<div class="modal-body">
					<form id="formularioP" method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
					
						<div class="form-group">
							<label for="payerDocument">Numero cedula</label>
							<input name="payerDocument"  id="payerDocument"  type="text"  class="form-control">
						</div>
						<div class="form-group">
							<label for="buyerFullName">Nombre Completo</label>
							<input name="buyerFullName"  id="buyerFullName"  type="text"  class="form-control">
						</div>
						<div class="form-group">
							<label for="mobilePhone">Celular</label>
							<input name="mobilePhone"  id="mobilePhone"  type="text"  class="form-control">
						</div>
						<div class="form-group">
							<label for="extra3">Cumpleaños</label>
							<input name="extra3"  id="extra3"  type="date"  class="form-control">
						</div>
					
						<div class="form-group">
							<label for="buyerEmail">Email</label>
							<input name="buyerEmail"  id="buyerEmail"  type="email"  class="form-control">
						</div>
						<div class="form-group">
							<label for="shippingCity">Ciudad</label>
							<input name="shippingCity"  id="shippingCity"  type="text"  class="form-control">
						</div>
						<div class="form-group">
							<label for="shippingAddress">Direccion</label>
							<input name="shippingAddress" id="shippingAddress" type="text" value=""  class="form-control"> 
						</div>
					
						<input name="merchantId"  id="merchantId"  type="hidden"  value="508029"   >
						<input name="accountId" id="accountId"     type="hidden"  value="512321" >
						<input name="description"   type="hidden"  value="Cupcake personalizado"  >
						<input name="referenceCode" id="referenceCode" type="hidden"  value="" >
						<input name="amount" id="amount" type="hidden"  value=""   >
						<input name="tax" type="hidden"  value="0"  >
						<input name="taxReturnBase" type="hidden"  value="0" >
						<input name="currency" id="currency" type="hidden"  value="COP" >
						<input name="signature" id="signature" type="hidden"  value=""  >
						<input name="extra1" id="extra1" type="hidden" value="" >
						<input name="extra2" id="extra2" type="hidden" value="" >
						<input name="test" type="hidden"  value="1" >
					
						
						<input name="responseUrl" type="hidden"  value="http://pasteliarte.com/response" >
						<input name="confirmationUrl" type="hidden"  value="http://pasteliarte.com/confirmation" >
						<input name="Submit" id="pasarela" type="submit"  value="Pagar" >
					
						
						<input name="shippingCity" type="hidden" value="Manizales" > 
						<input name="shippingCountry" type="hidden" value="CO" > 
					
					</form>
				</div>
			</div>
		</div>
	</div>
</div>