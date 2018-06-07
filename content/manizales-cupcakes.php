<?php $urlSitio = get_template_directory_uri(); ?>
<input type="hidden" id="urlSite" value="<?php echo $urlSitio; ?>">
<div id="paginaEntera">
	<div class="container-fluid">
		<div class="row xpressArte">
			<div class="col-2">
				<div class="tamanio">
					<h5>Tamaño Cupcake</h5>
					<input class="slider" type="range" min="10" max="20" value="20" disabled="true" />
					<div>
						<button class="tamanioSeleccionado" name="Mini" id="mini" value="10">Mini</button>
						<button class="tamanioSeleccionado" name="Standard" id="stan" value="20">Standard</button>
					</div>
				</div>
				<div class="cantidad" id ="cantidadMini">
					<h5>Cantidad</h5>
					<input class="slider" type="range" min="10" max="20" value="10" disabled="true" />
					<div>
						<button class="cantidadSeleccionada" name="cantidades" id="0" value="10">0</button>
						<button class="cantidadSeleccionada" name="cantidades" id="12" value="20">12</button>
					</div>
				</div>
				<div class="cantidad" id="cantidadStandard">
					<h5>Cantidad</h5>
					<input class="slider" type="range" min="10" max="40" value="10" disabled="true" />
					<div>
						<button class="cantidadSeleccionada" name="cantidades" id="1" value="10">1</button>
						<button class="cantidadSeleccionada" name="cantidades" id="2" value="20">2</button>
						<button class="cantidadSeleccionada" name="cantidades" id="6" value="30">6</button>
						<button class="cantidadSeleccionada" name="cantidades" id="14" value="40">14</button>
					</div>
				</div>
				<div class="colores">
					<h5>Color de Capacillo</h5>
					<ul class="contenedorinputs">   
						<li><input data-color-bar="#9D1822" class="inputradio" type="radio" name="color" value="rojo" checked><span class="inputColor" id="rojo"></span></li>
						<li><input data-color-bar="#000000a1" class="inputradio" type="radio" name="color" value="morado"><span class="inputColor" id="morado"></span></li>
						<li><input data-color-bar="#068281" class="inputradio" type="radio" name="color" value="azul" ><span class="inputColor" id="azul"></span></li>
						<li><input data-color-bar="#74A52F" class="inputradio" type="radio" name="color" value="verde"><span class="inputColor" id="verde"></span></li>
						<li><input data-color-bar="#b7a418" class="inputradio" type="radio" name="color" value="amarillo"><span class="inputColor" id="amarillo"></span></li>
						<li><input data-color-bar="#9D1822" class="inputradio" type="radio" name="color" value="rosado"><span class="inputColor" id="rosado"> </span></li>
						<li><input data-color-bar="#000000a1" class="inputradio" type="radio" name="color" value="naranja"><span class="inputColor" id="naranja"></span></li>
						<li><input data-color-bar="#f5b488" class="inputradio" type="radio" name="color" value="cafe"><span class="inputColor" id="cafe"></span></li>
						<li><input data-color-bar="#aba9a9" class="inputradio" type="radio" name="color" value="negro"><span class="inputColor" id="negro"></span></li>
					</ul>
					
				
				</div>
			<!-- 	<div class="precio">
					<h6>Precio actual</h6>
					<div class="valor">
						<p>$0</p>
					</div>
				</div> -->
			</div>
			<div class="col-8 cupcake">
				<embed id="cup" src="<?php echo $urlSitio; ?>/img/svg/Cupcake-01-01.svg" width="50%" height="50%" />
				<div class="verRelleno">
					<button id="noRelleno" class="item_relleno"><img src="<?php echo $urlSitio; ?>/img/Despiece/sin_relleno.png" /></button>
					<button id="relleno" class="item_relleno active"><img src="<?php echo $urlSitio; ?>/img/Despiece/relleno.png" /></button>
					
				</div>
				<a href="#cpkp" class="listo" id="bt_sup_listo">listo para hornear</a>
			</div>
			<div class="saboresRellenos col-2">
				<div class="sabores">
					<h5>Sabores</h5>
					<div class="saborNormal">
						<h6>Sabor</h6>
						<ul class="contenedorinputs">   
					  		<li><input data-color-sabor="#F8D675" class="inputSabor" type="radio" name="saborEstandar" value="Vainilla" id="vainilla" checked>
					  			<span class="inputColorSabor" id="vainillaSabor"><label for="vainilla">Vainilla</label></span></li>
					  		<li><input data-color-sabor="#603813" class="inputSabor" type="radio" name="saborEstandar" value="Chocolate" id="choco">
					  			<span class="inputColorSabor" id="chocolate">
					  			<label for="choco">Chocolate</label></span></li>
					  		<li><input data-color-sabor="#EDCE3A" class="inputSabor" type="radio" name="saborEstandar" value="Naranja" id="naranjaS">
					  			<span class="inputColorSabor" id="naranjaSabor">
					  			<label for="naranjaS">Naranja Amapola</label></span></li>
					  		<li><input data-color-sabor="#FFE5A4" class="inputSabor" type="radio" name="saborEstandar" value="Coco" id="coco"><span class="inputColorSabor" id="cocoSabor">
					  			<label for="coco">Coco</label></span></li>
						</ul>
					</div>
					<div class="saborEspecial">
						<h6>Sabor Especial</h6>
						<ul class="contenedorinputs">
							<li><input data-color-sabor="#C1272D" class="inputSabor" type="radio" name="saborEstandar" value="Red Velvet" id="redVel">
					  			<span class="inputColorSabor" id="redVelvet">
					  				<label for="redVel">Red Velvet</label></span></li>
					  		<li><input data-color-sabor="#CCB279" class="inputSabor" type="radio" name="saborEstandar" value="Mocca" id="moccaS">
					  			<span class="inputColorSabor" id="mocca">
					  				<label for="moccaS">Moka</label></span></li>
					  		<li><input data-color-sabor="#EFAC37" class="inputSabor" type="radio" name="saborEstandar" value="Maple" id="mapleS">
					  			<span class="inputColorSabor" id="maple">
					  				<label for="mapleS">Maple</label></span></li>
					  		<li><input data-color-sabor="#EFAC37" class="inputSabor" type="radio" name="saborEstandar" value="Zanahoria" id="zanahoriaS">
					  			<span class="inputColorSabor" id="zanahoria"><label for="zanahoriaS">Zanahoria</label></span></li>   
						</ul>
					</div>
					<div class="saborSinAzucar">
						<h6>Sabor sin Azucar</h6>
						<ul class="contenedorinputs">   
					  		<li><input data-color-sabor="#F8D675" class="inputSabor" type="radio" name="saborEstandar" value="Vainilla sin azucar" 
					  			id="vainillaEs">
					  			<span class="inputColorSabor" id="vainillaEspecial">
					  				<label for="vainillaEs">Vainilla</label></span></li>
					  		<li><input data-color-sabor="#603813" class="inputSabor" type="radio" name="saborEstandar" value="Chocolate sin azucar" 
					  			id="chocolateEs">
					  			<span class="inputColorSabor" id="chocolateEspecial">
					  				<label for="chocolateEs">Chocolate</label></span></li>
					  		<li><input data-color-sabor="#EFAC37" class="inputSabor" type="radio" name="saborEstandar" value="Naranja sin azucar" 
					  			id="naranjaEs">
					  			<span class="inputColorSabor" id="naranjaEspecial">
					  				<label for="naranjaEs">Naranja</label></span></li>
						</ul>
					</div>
				</div>
				<div class="rellenos">
					<h5>Relleno</h5>
						<ul class="contenedorinputs">
							<li><input data-color-relleno="#603813" class="inputRelleno" type="radio" name="saborRelleno" value="Nutela" id="nutelaR">
					  			<span class="inputColorRelleno" id="nutela">
					  				<label for="nutelaR">Nutela</label></span></li> 
					  		<li><input data-color-relleno="#F9C41E" class="inputRelleno" type="radio" name="saborRelleno" value="Maracuya" id="maracuyaR">
					  			<span class="inputColorRelleno" id="maracuya">
					  				<label for="maracuyaR">Maracuya</label></span></li>
					  		<li><input data-color-relleno="#C67A24" class="inputRelleno" type="radio" name="saborRelleno" value="Arequipe" id="arequipeR">
					  			<span class="inputColorRelleno" id="arequipe">
					  				<label for="arequipeR">Arequipe</label></span></li>
					  		<li><input data-color-relleno="#DEFFAE" class="inputRelleno" type="radio" name="saborRelleno" value="Limón" id="limonR">
					  			<span class="inputColorRelleno" id="limon">
					  				<label for="limonR">Limón</label></span></li>
					  		<li><input data-color-relleno="#FFE5A4" class="inputRelleno" type="radio" name="saborRelleno" value="Leche Condensada" id="lecheCondensadaR">
					  			<span class="inputColorRelleno" id="lecheCondensada">
					  				<label for="lecheCondensadaR">Leche</label></span></li>
					  		<li><input data-color-relleno="#FFE5A4" class="inputRelleno" type="radio" name="saborRelleno" value="Coco" id="cocoR">
					  			<span class="inputColorRelleno" id="cocoRe">
					  				<label for="cocoR">Coco</label></span></li>  
					  		<li><input data-color-relleno="#C67A24" class="inputRelleno" type="radio" name="saborRelleno" value="Mantequilla de Maní" id="mantequillaR">
					  			<span class="inputColorRelleno" id="mantequilla">
					  				<label data-toggle="tooltip" data-placement="top" title="Mantequilla de Maní"
					  				 for="mantequillaR">Mantequilla de Maní</label></span></li>
					  		<li><input data-color-relleno="#F5D0A9" class="inputRelleno" type="radio" name="saborRelleno" value="Vainilla" 
					  			id="vainillaR" checked>
					  			<span class="inputColorRelleno" id="vainillaRelleno">
					  				<label for="vainillaR">Vainilla</label></span></li>
					  		<li><input data-color-relleno="#F5A9A9" class="inputRelleno" type="radio" name="saborRelleno" value="Fresa" id="fresaR">
					  			<span class="inputColorRelleno" id="fresa">
					  				<label for="fresaR">Fresa</label></span></li>
					  		<li><input data-color-relleno="#D0FA58" class="inputRelleno" type="radio" name="saborRelleno" value="Mango" id="mangoR">
					  			<span class="inputColorRelleno" id="mango">
					  				<label for="mangoR">Mango</label>
					  			</span></li>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="cpkp"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="cpk1">
					<h1>Seleccionaste</h1>
					<div id="cpk2">
						<div id="cont_cup_img">
							<h2 id="cantidadSel">0</h2>
							<embed id="cpkSeleccionado" src="<?php echo $urlSitio; ?>/img/svg/cupcakeSelect.svg" />
						</div>
						<div id="cont_cup_sel">
							<h3 id="cupcakeTxt" class="txtCake">Cupcakes</h3>
							<h3 id="tamnioTxt" class="txtCake">Standard</h3>
							<p id="saborTxt" class="txtCake">Sabor a <span id="txtSabor" class="spanCup">Sabor</span></p>
							<p id="rellenoTxt" class="txtCake">Con relleno de <span id="txtRelleno" class="spanCup">Relleno</span></p>
						</div>
					</div>
					<button class="listo" id="al_horno">Al horno</button>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row anim">
			<div class="col-12" id="animacion">
				<p>Aqui va animación</p>
			</div>
		</div>
		<div class="row image">
			<div class="col-12" id="imagen">
				<img src="<?php echo $urlSitio; ?>/img/Despiece/imagen2.png">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row decorar">
			<div class="col-2">
				<div class="cantidadCupcakes">
					<h5>Tus Cupcakes</h5>
					<p>Selecciona los cupcakes que tendran este diseño</p>
					<div class="numeroCup"></div>
					<h6 class="txt_dis">Selecciona los cupcakes para aplicar este diseño</h6>
					<button class="aplicar" id="aplicar_dis">Aplicar Diseño</button>

				</div>
				<button class="aplicar" id="info">Información</button>
			</div>
			<div class="col-7 cupcakeAdorno">
				
				<!-- <text x=20 y=150
  					style="font: bold 2em 'comic sans ms';fill: aqua; stroke: blue; stroke-width: 2px;">
  					Primer texto svg</text> -->
				<embed id="cup1" src="<?php echo $urlSitio; ?>/img/svg/cupcakeFinal.svg" width="50%" height="50%">
					<div id="textocup"></div>
				</embed>
				
					
				
				
				<div id="prev_circle" style="background-image: url('<?php echo $urlSitio; ?>/img/Despiece/prev_circle.png');"></div>
			</div>
			<div class="col-3">
				<div class="seccion">
					<h6>Elige una opción</h6>
					<button id="btn_personaje" data-sel="<?php echo $urlSitio; ?>/img/svg/Fondand.svg" class="btn_adornos active"><img src="<?php echo $urlSitio; ?>/img/Despiece/personaje_cupcake.png" /></button>
					<button id="btn_mensaje" data-sel="<?php echo $urlSitio; ?>/img/svg/Fondand.svg"  class="btn_adornos"><img src="<?php echo $urlSitio; ?>/img/Despiece/mensaje.png" /></button>
					<button id="btn_crema" data-sel="<?php echo $urlSitio; ?>/img/svg/Crema-02.svg" class="btn_adornos"><img src="<?php echo $urlSitio; ?>/img/Despiece/crema.png" />		
					</button>
					<button id="btn_foto" data-sel="<?php echo $urlSitio; ?>/img/svg/Fondand.svg" class="btn_adornos"><img src="<?php echo $urlSitio; ?>/img/Despiece/foto.png" /></button>
					
				</div>
				<div id="opcionesTexto">
					<div class="texto">
						<h5>Escribe algo</h5>
						<input type="text" class="escribir" id="txt_mensaje" maxlength="10" value="">
						<p>10 caracteres maximo</p>
					</div>
					<div class="colorCrema">
						<div class="tituloCrema">
							<h5>Colores de Crema</h5>
						</div>
						<ul class="contenedorinputs">
							<li><label><input class="inputradioCrema" type="radio" name="color" value="amarilloCr" checked>
								<span class="inputColorCrema" id="amarilloCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="naranjaCr" >
								<span class="inputColorCrema" id="naranjaCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="rojoCr" >
								<span class="inputColorCrema" id="rojoCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="fucsiaCr" >
								<span class="inputColorCrema" id="fucsiaCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="moradoCr" >
								<span class="inputColorCrema" id="moradoCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="azulOscuroCr" >
								<span class="inputColorCrema" id="azulOscuroCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="azulCr" >
								<span class="inputColorCrema" id="azulCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="azulClaroCr" >
								<span class="inputColorCrema" id="azulClaroCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="verdeClaroCr" >
								<span class="inputColorCrema" id="verdeClaroCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="verdeOscuroCr" >
								<span class="inputColorCrema" id="verdeOscuroCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="verdeCr" >
								<span class="inputColorCrema" id="verdeCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="amarilloClaroCr" >
								<span class="inputColorCrema" id="amarilloClaroCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="negroCr" >
								<span class="inputColorCrema" id="negroCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="blancoCr" >
								<span class="inputColorCrema" id="blancoCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="grisCr" >
								<span class="inputColorCrema" id="grisCrema"></span></label></li>
							<li><label><input class="inputradioCrema" type="radio" name="color" value="cafeCr" >
								<span class="inputColorCrema" id="cafeCrema"></span></label></li>
						</ul>
					</div>
					<div class="colorLetra">
						<div class="tituloTexto">
							<h5>Colores de texto</h5>
						</div>
						<ul class="contenedorinputs">
							<li><label><input class="inputradioLetra" type="radio" name="color" value="amarilloLrt" checked>
								<span class="inputColorLetra" id="amarilloLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="naranjaLrt" >
								<span class="inputColorLetra" id="naranjaLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="rojoLrt" >
								<span class="inputColorLetra" id="rojoLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="fucsiaLrt" >
								<span class="inputColorLetra" id="fucsiaLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="moradoLrt" >
								<span class="inputColorLetra" id="moradoLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="azulOscuroLrt" >
								<span class="inputColorLetra" id="azulOscuroLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="azulLrt" >
								<span class="inputColorLetra" id="azulLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="azulClaroLrt" >
								<span class="inputColorLetra" id="azulClaroLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="verdeClaroLrt" >
								<span class="inputColorLetra" id="verdeClaroLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="verdeOscuroLrt" >
								<span class="inputColorLetra" id="verdeOscuroLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="verdeLrt" >
								<span class="inputColorLetra" id="verdeLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="amarilloClaroLrt" >
								<span class="inputColorLetra" id="amarilloClaroLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="negroLrt" >
								<span class="inputColorLetra" id="negroLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="blancoLrt" >
								<span class="inputColorLetra" id="blancoLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="grisLrt" >
								<span class="inputColorLetra" id="grisLetra"></span></label></li>
							<li><label><input class="inputradioLetra" type="radio" name="color" value="cafeLrt" >
								<span class="inputColorLetra" id="cafeLetra"></span></label></li>
						</ul>
					</div>
				</div>
				<div id="sel_personajes">
					<div class="opcionesPersonajes" id="op_per">
						<h5>¿Cómo lo quieres?</h5>
						<button data-imagen="<?php echo $urlSitio; ?>/img/svg/Fondand.svg" class="btn_seleccion_p active" 
							id="fondant_sel">
							<img src="<?php echo $urlSitio; ?>/img/Despiece/fondant.png">
						</button>
						<button data-imagen="<?php echo $urlSitio; ?>/img/svg/Crema.svg" class="btn_seleccion_p" id="crema_sel">
							<img  src="<?php echo $urlSitio; ?>/img/Despiece/crema_1.png">
						</button>
					</div>
				</div>
				<div id="personajes">
					<div class="sel_per_pie">
						<div class="botones_adornos">
							<button class="btn_per_pie active" id="prediseniado">Prediseñados</button>
							<button class="btn_per_pie" id="piezas">Piezas</button>
						</div>
						<ul class="fondant_adornos">
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/sullivan_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/sullivan.svg" class="inputradioPersonaje" type="radio" checked>
								<span  class="inputPersonaje" id="sullivan"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/wasauski_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/wasauski.svg" class="inputradioPersonaje" type="radio">
								<span   class="inputPersonaje" id="wasauski"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="angry"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry1.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="angry1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry2_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry2.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="angry2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/marrano_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/marrano.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="marrano"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/conejo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/conejo.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="conejo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gato_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="gato"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/hello_kitty_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/hello_kitty.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="hello_kitty"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gato1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato1.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="gato1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/pollo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/pollo.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="pollo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gallo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gallo.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="gallo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji1.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji2_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji2.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji3_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji3.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji3"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="elmo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo1.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="elmo1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/castor_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/castor.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="castor"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elefante_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elefante.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="elefante"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/caballo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/caballo.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="caballo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/cerdo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/cerdo.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="cerdo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/unicornio_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/unicornio.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="unicornio"></span></label></li>

						</ul>

						<ul class="crema_adornos">
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/sullivan_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/sullivan_crema.svg" class="inputradioPersonaje" type="radio" checked>
								<span  class="inputPersonaje" id="sullivan"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/wasauski_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/wasauski_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="wasauski"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="angry"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry1_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="angry1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/angry2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry2_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="angry2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/marrano_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/marrano_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="marrano"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/conejo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/conejo_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="conejo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gato_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="gato"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/hello_kitty_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/hello_kitty_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="hello_kitty"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gato1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato1_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="gato1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/pollo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/pollo_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="pollo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/gallo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gallo_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="gallo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji1_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji2_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji3_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji3_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="emoji3"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="elmo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo1_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="elmo1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/castor_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/castor_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="castor"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/elefante_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elefante_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="elefante"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/caballo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/caballo_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="caballo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/cerdo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/cerdo_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="cerdo"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/unicornio_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/unicornio_crema.svg" class="inputradioPersonaje" type="radio">
								<span  class="inputPersonaje" id="unicornio"></span></label></li>

						</ul>
						
							<div class="tituloPiezas">
								<h5><img src="<?php echo $urlSitio; ?>/img/Despiece/ojos.png">Ojos</h5>
							</div>
							<ul id="lista_ojos">
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_1.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_1.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_1"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_2.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_2.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_2"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_3.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_3.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_3"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_4.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_4.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_4"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_5.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_5.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_5"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_6.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_6.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_6"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_7.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_7.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_7"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_8.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_8.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_8"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_9.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_9.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_9"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_10.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_10.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_10"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_11.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_11.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_11"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_12.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_12.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_12"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="ojo_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/ojo_13.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/ojo_13.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="ojo_13"></span></label></li>
			
							</ul>
							<div class="tituloPiezas">
								<h5><img src="<?php echo $urlSitio; ?>/img/Despiece/boca.png">Bocas</h5>
							</div>
							<ul id="lista_boca">
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_1.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_1.svg" class="inputradioPieza" type="radio" checked>
									<span  class="inputPieza" id="boca_1"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_2.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_2.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="boca_2"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_3.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_3.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="boca_3"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_4.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_4.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="boca_4"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_5.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_5.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="boca_5"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_6.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_6.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="boca_6"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="boca_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/boca_7.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/boca_7.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="boca_7"></span></label></li>
							</ul>

							<div class="tituloPiezas">
								<h5><img src="<?php echo $urlSitio; ?>/img/Despiece/nariz.png">Narices</h5>
							</div>
							<ul id="lista_nariz">
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_1.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_1.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_1"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_2.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_2.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_2"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_3.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_3.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_3"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_4.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_4.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_4"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_5.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_5.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_5"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_6.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_6.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_6"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_7.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_7.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_7"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_8.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_8.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_8"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_9.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_9.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_9"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_10.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_10.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_10"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_11.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_11.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_11"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="nariz_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_12.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/nariz_12.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="nariz_12"></span></label></li>
							</ul>

							<div class="tituloPiezas">
								<h5><img src="<?php echo $urlSitio; ?>/img/Despiece/oreja.png">Orejas</h5>
							</div>
							<ul id="lista_oreja">
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_1.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_1.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_1"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_2.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_2.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_2"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_3.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_3.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_3"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_4.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_4.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_4"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_5.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_5.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_5"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_6.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_6.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_6"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_7.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_7.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_7"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_8.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_8.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_8"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_9.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_9.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_9"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_10.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_10.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_10"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_11.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_11.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_11"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_12.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_12.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_12"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_13.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_13.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_13"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_14.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_14.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_14"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_15.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_15.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_15"></span></label></li>
								<li class="lst_piezas"><label><input data-sel="oreja_sel" 
									data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_16.svg" 
									data-d="<?php echo $urlSitio; ?>/img/svg/oreja_16.svg" class="inputradioPieza" type="radio">
									<span  class="inputPieza" id="oreja_16"></span></label></li>
							</ul>
						</div>
					</div>
				<div id="sel_cremas">
					<div class="cremas">
						<div class="tituloTexto">
							<h5>
								Colores de Crema
							</h5>
						</div>
						<ul>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema1.png" data-cr1="#92ce45" data-cr="#88c23f" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema1"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema2.png" data-cr1="#fbfb3b" data-cr="#FFFF00" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema2"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema3.png" data-cr1="#f79930" data-cr="#F38F1E" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema3"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema4.png" data-cr1="#e23c64" data-cr="#DD2A55" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema4"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema5.png" data-cr1="#e864ec" data-cr="#E352E8" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema5"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema6.png" data-cr1="#44b1e0" data-cr="#29A7DE" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema6"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema7.png" data-cr1="#d3f3a7" data-cr="#CCEF9C" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema7"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema8.png" data-cr1="#f5f3cb" data-cr="#FFFDAB" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema8"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema9.png" data-cr1="#fbe0c6" data-cr="#FCD6B1" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema9"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema10.png" data-cr1="#f1bfcd" data-cr="#EDB0C1" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema10"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema11.png" data-cr1="#fa97ff" data-cr="#EE82F4" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema11"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema12.png" data-cr1="#b7e8f9" data-cr="#9DDDF4" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema12"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema13.png" data-cr1="#FCF8A9" data-cr="#88C23F" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema13"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema14.png" data-cr1="#FCF8A9" data-cr="#FFFF00" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema14"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema15.png" data-cr1="#FCF8A9" data-cr="#F38F1E" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema15"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema16.png" data-cr1="#FCF8A9" data-cr="#DD2A55" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema16"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema17.png" data-cr1="#FCF8A9" data-cr="#E352E8" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema17"></span></label></li>
							<li><label><input data-adorno="<?php echo $urlSitio; ?>/img/svg/crema18.png" data-cr1="#FCF8A9" data-cr="#29A7DE" class="inputradioCremas" type="radio">
									<span class="inputCremas" id="crema18"></span></label></li>
						</ul>
					</div>
				</div>
				<div id="foto">
					<div class="fotos">
						<div class="tituloTexto">
							<h5>Subir una foto</h5>

						</div>
						<input type="file" name="custom_foto" id="custom_foto" accept="image/*" style="visibility: hidden; max-width: 100%;">
						<button id="cargarFoto"><img src="<?php echo $urlSitio; ?>/img/Despiece/btn_subir1.png"></button>
						<div class="cont_prev_square">
							<img id="prev_square" src="<?php echo $urlSitio; ?>/img/Despiece/cuadro_foto.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>