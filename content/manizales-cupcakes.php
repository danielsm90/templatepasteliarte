<?php $urlSitio = get_template_directory_uri(); ?>
<input type="hidden" id="urlSite" value="<?php echo $urlSitio; ?>">
<div id="paginaEntera">
	<div class="container-fluid">
		<div class="row xpressArte">
			<div class="col-sm-12 col-lg-2">
				<div class="tamanio">
					<h5>1.Tamaño Cupcake</h5>
					<input id="range_tamanio" class="slider" type="range" min="10" max="20" value="20" step="10" />
					<div>
						<button class="tamanioSeleccionado" name="Mini" id="mini" value="10">Mini</button>
						<button class="tamanioSeleccionado" name="Standard" id="stan" value="20">Standard</button>
					</div>
				</div>
				<div class="cantidad" id ="cantidadMini">
					<h5>2.Cantidad</h5>
					<input id="range_cantidad_mini" class="slider" type="range" min="10" max="20" value="10" step="10" />
					<div>
						<button class="cantidadSeleccionada" name="cantidades" id="0" value="10">0</button>
						<button class="cantidadSeleccionada" name="cantidades" id="12" value="20">12</button>
					</div>
				</div>
				<div class="cantidad" id="cantidadStandard">
					<h5>2.Cantidad</h5>
					<input id="range_cantidad_stan" class="slider" type="range" min="10" max="40" value="10" step="10" />
					<div>
						<button class="cantidadSeleccionada" name="cantidades" id="1" value="10">1</button>
						<button class="cantidadSeleccionada" name="cantidades" id="2" value="20">2</button>
						<button class="cantidadSeleccionada" name="cantidades" id="4" value="30">4</button>
						<button class="cantidadSeleccionada" name="cantidades" id="6" value="40">6</button>
					</div>
				</div>
				<div class="colores">
					<h5>3.Color de Capacillo</h5>
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
						<li><input data-color-bar="#5a5a5a" class="inputradio" type="radio" name="color" value="blanco"><span class="inputColor" id="blanco"></span></li>
					</ul>
					
				
				</div>
			<!-- 	<div class="precio">
					<h6>Precio actual</h6>
					<div class="valor">
						<p>$0</p>
					</div>
				</div> -->
			</div>
			<div class="col-sm-12 col-lg-8 cupcake">
				<embed id="cup" src="<?php echo $urlSitio; ?>/img/svg/Cupcake-01-01.svg" width="50%" height="50%" />
				<div class="verRelleno">
					<button id="noRelleno" class="item_relleno"><img src="<?php echo $urlSitio; ?>/img/Despiece/sin_relleno.png" /></button>
					<button id="relleno" class="item_relleno active"><img src="<?php echo $urlSitio; ?>/img/Despiece/relleno.png" /></button>
					
				</div>
				<a href="#info_sel" class="listo" id="bt_sup_listo">listo para hornear</a>
			</div>
			<div class="saboresRellenos col-sm-12 col-lg-2">
				<div class="sabores">
					<h5 class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">4.Sabores</h5>
					<div class="collapse multi-collapse" id="multiCollapseExample1">
						<div class="saborNormal">
							<h6>Sabor</h6>
					
							<ul class="contenedorinputs">   
						  		<li><input data-color-sabor="#F8D675" class="inputSabor" type="radio" name="saborEstandar" value="Vainilla" id="vainilla" checked>
						  			<span  class="inputColorSabor" id="vainillaSabor">
						  				<label data-toggle="tooltip" data-placement="top" title="Vainilla: El clásico Pastel blanco  que hace una perfecta combinación con cualquier tipo de relleno" for="vainilla">Vainilla</label></span></li>
						  		<li><input data-color-sabor="#603813" class="inputSabor" type="radio" name="saborEstandar" value="Chocolate" id="choco">
						  			<span  class="inputColorSabor" id="chocolate">
						  				<label data-toggle="tooltip" data-placement="top" title="Chocolate: Suave sabor a chocolate que  al contrastar con nuestros rellenos, genera una explosión de sabores en el paladar" for="choco">Chocolate</label></span></li>
						  		<li><input data-color-sabor="#EDCE3A" class="inputSabor" type="radio" name="saborEstandar" value="Naranja" id="naranjaS">
						  			<span  class="inputColorSabor" id="naranjaSabor">
						  				<label data-toggle="tooltip" data-placement="top" title="Cítricos- amapola: un pastel blanco con matices cítricos y semillas de amapola" for="naranjaS">Naranja Amapola</label></span></li>
						  		<li><input data-color-sabor="#FFE5A4" class="inputSabor" type="radio" name="saborEstandar" value="Coco" id="coco">
						  			<span class="inputColorSabor" id="cocoSabor">
						  				<label data-toggle="tooltip" data-placement="top" title="Coco: un esponjoso pastel blanco con sabor y trozos de coco naturales" for="coco">Coco</label></span></li>
							</ul>
						</div>
						<div class="saborEspecial">
							<h6>Sabor Especial</h6>
							<ul class="contenedorinputs">
								<li><input data-color-sabor="#C1272D" class="inputSabor" type="radio" name="saborEstandar" value="Red Velvet" id="redVel">
						  			<span class="inputColorSabor" id="redVelvet">
						  				<label data-toggle="tooltip" data-placement="top" title="Red Velvet: De origen americano, Es un  pastel de color rojo con la perfecta combinación entre vainilla  y chocolate  que hace maridaje con un suave frosting de queso como relleno." for="redVel">Red Velvet</label></span></li>
						  		<li><input data-color-sabor="#CCB279" class="inputSabor" type="radio" name="saborEstandar" value="Mocca" id="moccaS">
						  			<span class="inputColorSabor" id="mocca">
						  				<label data-toggle="tooltip" data-placement="top" title="Mocca (para cupcakes):  Pastel de Café Amaretto con trozos de chocolate belga como relleno" for="moccaS">Mocca</label></span></li>
						  		<li><input data-color-sabor="#EFAC37" class="inputSabor" type="radio" name="saborEstandar" value="Maple" id="mapleS">
						  			<span class="inputColorSabor" id="maple">
						  				<label data-toggle="tooltip" data-placement="top" title="Maple & Bacon : delicioso pastel que te lleva por un camino de sensaciones en tu paladar,  que va de lo dulce de la miel de maple al toque salado y crocante del bacon" for="mapleS">Maple</label></span></li>
						  		<li><input data-color-sabor="#EFAC37" class="inputSabor" type="radio" name="saborEstandar" value="Zanahoria" id="zanahoriaS">
						  			<span class="inputColorSabor" id="zanahoria">
						  				<label data-toggle="tooltip" data-placement="top" title="Zanahoria: pastel hecho con trozos de zanahoria y el toque especial que nos evoca las delicias de la abuela
										" for="zanahoriaS">Zanahoria</label></span></li>   
							</ul>
						</div>
						<div class="saborSinAzucar">
							<h6>Sabor sin Azucar</h6>
							<ul class="contenedorinputs">   
						  		<li><input data-color-sabor="#F8D675" class="inputSabor" type="radio" name="saborEstandar" value="Vainilla sin azucar" 
						  			id="vainillaEs">
						  			<span class="inputColorSabor" id="vainillaEspecial">
						  				<label data-toggle="tooltip" data-placement="top" title="Sin azúcar: Pasteles aptos para diabéticos y dietéticos , el reemplazo del azúcar se absorbe directamente en el intestino delgado." for="vainillaEs">Vainilla</label></span></li>
						  		<li><input data-color-sabor="#603813" class="inputSabor" type="radio" name="saborEstandar" value="Chocolate sin azucar" 
						  			id="chocolateEs">
						  			<span class="inputColorSabor" id="chocolateEspecial">
						  				<label data-toggle="tooltip" data-placement="top" title="Sin azúcar: Pasteles aptos para diabéticos y dietéticos , el reemplazo del azúcar se absorbe directamente en el intestino delgado." for="chocolateEs">Chocolate</label></span></li>
						  		<li><input data-color-sabor="#EFAC37" class="inputSabor" type="radio" name="saborEstandar" value="Naranja sin azucar" 
						  			id="naranjaEs">
						  			<span class="inputColorSabor" id="naranjaEspecial">
						  				<label data-toggle="tooltip" data-placement="top" title="Sin azúcar: Pasteles aptos para diabéticos y dietéticos , el reemplazo del azúcar se absorbe directamente en el intestino delgado." for="naranjaEs">Naranja</label></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="rellenos">
					<h5 class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">5.Relleno</h5>
						<div class="collapse multi-collapse" id="multiCollapseExample2">
							<ul class="contenedorinputs">
								<li><input data-color-relleno="#603813" class="inputRelleno" type="radio" name="saborRelleno" value="Nutela" id="nutelaR">
								  			<span class="inputColorRelleno" id="nutela">
								  				<label data-toggle="tooltip" data-placement="top" title="Nutela" for="nutelaR">Nutela</label></span></li> 
								  		<li><input data-color-relleno="#DEFFAE" class="inputRelleno" type="radio" name="saborRelleno" value="Limón" id="limonR">
								  			<span class="inputColorRelleno" id="limon">
								  				<label data-toggle="tooltip" data-placement="top" title="Limón" for="limonR">Limón</label></span></li>
								  		<li><input data-color-relleno="#FFE5A4" class="inputRelleno" type="radio" name="saborRelleno" value="Leche Condensada" id="lecheCondensadaR">
								  			<span class="inputColorRelleno" id="lecheCondensada">
								  				<label data-toggle="tooltip" data-placement="top" title="Leche Condensada" for="lecheCondensadaR">Leche Condensada</label></span></li>
								  		<li><input data-color-relleno="#FFE5A4" class="inputRelleno" type="radio" name="saborRelleno" value="Coco" id="cocoR">
								  			<span class="inputColorRelleno" id="cocoRe">
								  				<label data-toggle="tooltip" data-placement="top" title="Coco" for="cocoR">Coco</label></span></li>  
								  		<li><input data-color-relleno="#C67A24" class="inputRelleno" type="radio" name="saborRelleno" value="Mantequilla de Maní" id="mantequillaR">
								  			<span class="inputColorRelleno" id="mantequilla">
								  				<label data-toggle="tooltip" data-placement="top" title="Mantequilla de Maní"
								  				 for="mantequillaR">Mantequilla de Maní</label></span></li>
								  		<li><input data-color-relleno="#ECFFCC" class="inputRelleno" type="radio" name="saborRelleno" value="Limonada de Coco" id="limonadaR" checked>
								  			<span class="inputColorRelleno" id="limonadaRelleno">
								  				<label data-toggle="tooltip" data-placement="top" title="Limonada de Coco" for="limonadaR">Limonada de Coco</label></span></li>
								  		<li><input data-color-relleno="#C1272D" class="inputRelleno" type="radio" name="saborRelleno" value="Frutos Rojos" id="frutosR">
								  			<span class="inputColorRelleno" id="frutos">
								  				<label data-toggle="tooltip" data-placement="top" title="Frutos Rojos" for="frutosR">Frutos Rojos</label></span></li>
								  		<li><input data-color-relleno="#603813" class="inputRelleno" type="radio" name="saborRelleno" value="Chocolate" id="chocolateR">
								  			<span class="inputColorRelleno" id="chocol">
								  				<label data-toggle="tooltip" data-placement="top" title="Chocolate" for="chocolateR">Chocolate</label>
								  			</span></li>
							</ul>
							<h5>Con licor</h5>
							<ul class="contenedorinputs">
								<li><input data-color-relleno="#603813" class="inputRelleno" type="radio" name="saborRelleno" value="Amaretto" id="amarettoR">
						  			<span class="inputColorRelleno" id="amaretto">
						  				<label data-toggle="tooltip" data-placement="top" title="Amaretto" for="amarettoR">Amaretto</label></span></li> 
						  		<li><input data-color-relleno="#FFE5A4" class="inputRelleno" type="radio" name="saborRelleno" value="Crema de Whiskey" id="cremaR">
						  			<span class="inputColorRelleno" id="cremaW">
						  				<label data-toggle="tooltip" data-placement="top" title="Crema de Whiskey" for="cremaR">Crema de Whiskey</label></span></li>
						  		<li><input data-color-relleno=" #F9C41E" class="inputRelleno" type="radio" name="saborRelleno" value="Piña Colada" id="piniaR">
						  			<span class="inputColorRelleno" id="pinia">
						  				<label data-toggle="tooltip" data-placement="top" title="Piña Colada" for="piniaR">Piña Colada
						  				</label></span></li>
						  		<li><input data-color-relleno="#CCB279" class="inputRelleno" type="radio" name="saborRelleno" value="Licor de Mocca" id="licorMR">
						  			<span class="inputColorRelleno" id="licorM">
						  				<label data-toggle="tooltip" data-placement="top" title="Licor de Mocca" for="licorMR">Licor de Mocca</label></span></li>
							</ul>
							<h5>Sin azucar</h5>
							<ul class="contenedorinputs">
								<li><input data-color-relleno="#F9C41E" class="inputRelleno" type="radio" name="saborRelleno" value="Maracuya" id="maracuyaR">
							  			<span class="inputColorRelleno" id="maracuya">
							  				<label data-toggle="tooltip" data-placement="top" title="Maracuya" for="maracuyaR">Maracuya</label></span></li>
							  	<li><input data-color-relleno="#C67A24" class="inputRelleno" type="radio" name="saborRelleno" value="Arequipe" id="arequipeR">
							  			<span class="inputColorRelleno" id="arequipe">
							  				<label data-toggle="tooltip" data-placement="top" title="Arequipe" for="arequipeR">Arequipe</label></span></li>
							</ul>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div id="cpkp"></div> -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" id="info_sel">
				<div id="cpk1">
					<h1>Seleccionaste</h1>
					<div class="row" id="cpk2">
						<div class="col-12 col-lg-6" id="cont_cup_img">
							<h2 id="cantidadSel">0</h2>
							<embed id="cpkSeleccionado" src="<?php echo $urlSitio; ?>/img/svg/cupcakeSelect.svg" />
						</div>
						<div class="col-12 col-lg-6" id="cont_cup_sel">
							<h3 id="cupcakeTxt" class="txtCake">Cupcakes</h3>
							<h3 id="tamnioTxt" class="txtCake">Standard</h3>
							<p id="saborTxt" class="txtCake">Sabor a <span id="txtSabor" class="spanCup">Sabor</span></p>
							<p id="rellenoTxt" class="txtCake">Con relleno de <span id="txtRelleno" class="spanCup">Relleno</span></p>
						</div>
					</div>
					<div class="row">
						<a href="#dec" class="listo" id="al_horno">Al horno</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="loader">
		<embed id="horno_img" src="<?php echo $urlSitio; ?>/img/svg/horno.svg">
	</div>
	<div class="container-fluid">
		<!-- <div class="row anim">
			<div class="col-12" id="animacion">
				<p>Aqui va animación</p>
			</div>
		</div> -->
		<div class="row image">
			<div class="col-12 h-md-50 h-lg-100" id="imagen">
				<embed id="horno_img" src="<?php echo $urlSitio; ?>/img/svg/horno.svg">
			</div>
		</div>
	</div>
	<div class="container-fluid" id="dec">
		<div class="row decorar" >

			<div class="col-12 col-lg-2 col-decorar">
				<div class="cantidadCupcakes">
					<h5>Tus Cupcakes</h5>
					<p>Selecciona los cupcakes que tendran este diseño</p>
					<div class="numeroCup"></div>
					<h6 class="txt_dis">Selecciona los cupcakes para aplicar este diseño</h6>
					<button class="aplicar" id="aplicar_dis">Aplicar Diseño</button>

				</div>
				<button class="btn btn-primary aplicar" data-toggle="modal" data-target="#formularioPago" data-whatever="@mdo" id="info">Agregar al carrito</button>
			</div>
			<div class="col-12 col-lg-7 cupcakeAdorno">
				<h1 id="titulo">Es hora de diseñar y crear</h1>
				
				<!-- <text x=20 y=150
  					style="font: bold 2em 'comic sans ms';fill: aqua; stroke: blue; stroke-width: 2px;">
  					Primer texto svg</text> -->
				<embed id="cup1" src="<?php echo $urlSitio; ?>/img/svg/cupcakeFinal.svg" width="50%" height="50%">
					<div id="textocup"></div>
				</embed>
				
					
				
				
				<div id="prev_circle" style="background-image: url('<?php echo $urlSitio; ?>/img/Despiece/prev_circle.png');"></div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="seccion d-flex flex-column">
					<h6>Elige una opción</h6>
					<div class="d-flex justify-content-between">
						<button id="btn_personaje" data-sel="<?php echo $urlSitio; ?>/img/svg/Fondand.svg" class="btn_adornos active"><img src="<?php echo $urlSitio; ?>/img/Despiece/personaje_cupcake.png" /></button>
						<button id="btn_mensaje" data-sel="<?php echo $urlSitio; ?>/img/svg/Fondand.svg"  class="btn_adornos"><img src="<?php echo $urlSitio; ?>/img/Despiece/mensaje.png" /></button>
						<button id="btn_crema" data-sel="<?php echo $urlSitio; ?>/img/svg/Crema-02.svg" class="btn_adornos"><img src="<?php echo $urlSitio; ?>/img/Despiece/crema.png" />		
						</button>
						<button id="btn_foto" data-sel="<?php echo $urlSitio; ?>/img/svg/Fondand.svg" class="btn_adornos"><img src="<?php echo $urlSitio; ?>/img/Despiece/foto.png" /></button>
					</div>
					
				</div>
				<div id="opcionesTexto">
					<div class="texto">
						<h5>Escribe algo</h5>
						<input type="text" class="escribir" id="txt_mensaje" maxlength="10" value="">
						<p>10 caracteres máximo</p>
					</div>
					<div class="texto1">
						<h5>Escribe algo</h5>
						<input type="text" class="escribir1" id="txt_mensaje1" maxlength="1" value="">
						<p>1 caracter máximo</p>
					</div>
					<div class="colorCrema">
						<div class="tituloCrema">
							<h5>Colores de fondant</h5>
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
						<div class="d-flex justify-content-around">
							<button data-imagen="<?php echo $urlSitio; ?>/img/svg/Fondand.svg" class="btn_seleccion_p active" 
								id="fondant_sel">
								<img src="<?php echo $urlSitio; ?>/img/Despiece/fondant.png">
							</button>
							<button data-imagen="<?php echo $urlSitio; ?>/img/svg/Crema.svg" class="btn_seleccion_p" id="crema_sel">
								<img  src="<?php echo $urlSitio; ?>/img/Despiece/crema_1.png">
							</button>
						</div>
					</div>
				</div>
				<div id="personajes">
					<div class="sel_per_pie">
						<div class="botones_adornos">
							<button class="btn_per_pie active" id="prediseniado">Prediseñados</button>
							<button class="btn_per_pie" id="piezas">Piezas</button>
						</div>
						<ul class="fondant_adornos">
							<li><label><input data-toggle="tooltip" data-placement="top" title="Sulley Sullivan Monster Inc" data-nombre="SulleySullivanMonsterInc" data-adorno="<?php echo $urlSitio; ?>/img/svg/sullivan_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/sullivan.svg" class="inputradioPersonaje" type="radio" checked>
								<span  class="inputPersonaje" data-toggle="tooltip" data-placement="top" title="Sulley Sullivan Monster Inc" id="sullivan"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Mike Wazowski– Monsters Inc" data-nombre="Mike_Wazowski_Monsters_Inc" data-adorno="<?php echo $urlSitio; ?>/img/svg/wasauski_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/wasauski.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Mike Wazowski– Monsters Inc"  class="inputPersonaje" id="wasauski"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird rojo" data-nombre="Angry_bird_rojo" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird rojo" class="inputPersonaje" id="angry"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird amarillo" data-nombre="Angry_bird_amarillo" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry1.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird amarillo"
								 class="inputPersonaje" id="angry1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird azul" data-nombre="Angry_bird_azul" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry2_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry2.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird azul" class="inputPersonaje" id="angry2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cerdito de angry bird" data-nombre="Cerdito_de_angry_bird" data-adorno="<?php echo $urlSitio; ?>/img/svg/marrano_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/marrano.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Cerdito de angry bird" class="inputPersonaje" id="marrano"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Conejo" data-nombre="Conejo" data-adorno="<?php echo $urlSitio; ?>/img/svg/conejo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/conejo.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Conejo" class="inputPersonaje" id="conejo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Gato" data-nombre="Gato" data-adorno="<?php echo $urlSitio; ?>/img/svg/gato_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Gato" class="inputPersonaje" id="gato"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Hello kitty" data-nombre="Hello_kitty" data-adorno="<?php echo $urlSitio; ?>/img/svg/hello_kitty_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/hello_kitty.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Hello kitty" class="inputPersonaje" id="hello_kitty"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Gato rosado" data-nombre="Gato_rosado" data-adorno="<?php echo $urlSitio; ?>/img/svg/gato1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato1.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Gato rosado" class="inputPersonaje" id="gato1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Pato" data-nombre="Pato" data-adorno="<?php echo $urlSitio; ?>/img/svg/pollo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/pollo.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Pato" class="inputPersonaje" id="pollo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Pollo" data-nombre="Pollo" data-adorno="<?php echo $urlSitio; ?>/img/svg/gallo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gallo.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Pollo" class="inputPersonaje" id="gallo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji carita feliz" data-nombre="Emoji_carita_feliz" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji carita feliz" class="inputPersonaje" id="emoji"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji enamorado" data-nombre="Emoji_enamorado" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji1.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji enamorado" class="inputPersonaje" id="emoji1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji ojos cerrados y sacando lengua" data-nombre="Emoji_ojos_cerrados_y_sacando lengua" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji2_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji2.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji ojos cerrados y sacando lengua" class="inputPersonaje" id="emoji2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji picando el ojo, guiño y corazón" data-nombre="Emoji_picando_el_ojo_guiño_y_corazón" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji3_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji3.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji picando el ojo, guiño y corazón" class="inputPersonaje" id="emoji3"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Monstro comegalletas –  plaza sésamo" data-nombre="Monstro_comegalletas_plaza_sésamo" data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Monstro comegalletas –  plaza sésamo" class="inputPersonaje" id="elmo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Elmo – Plaza sésamo" data-nombre="Elmo_Plaza_sésamo" data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo1_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo1.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Elmo – Plaza sésamo" class="inputPersonaje" id="elmo1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Castor" data-nombre="Castor" data-adorno="<?php echo $urlSitio; ?>/img/svg/castor_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/castor.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Castor" class="inputPersonaje" id="castor"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Elefante" data-nombre="Elefante" data-adorno="<?php echo $urlSitio; ?>/img/svg/elefante_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elefante.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Elefante" class="inputPersonaje" id="elefante"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Caballo" data-nombre="Caballo" data-adorno="<?php echo $urlSitio; ?>/img/svg/caballo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/caballo.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Caballo" class="inputPersonaje" id="caballo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cerdito" data-nombre="Cerdito" data-adorno="<?php echo $urlSitio; ?>/img/svg/cerdo_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/cerdo.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Cerdito" class="inputPersonaje" id="cerdo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Unicornio" data-nombre="Unicornio" data-adorno="<?php echo $urlSitio; ?>/img/svg/unicornio_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/unicornio.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Unicornio" class="inputPersonaje" id="unicornio"></span></label></li>

						</ul>

						<ul class="crema_adornos">
							<li><label><input data-toggle="tooltip" data-placement="top" title="Sulley Sullivan Monster Inc crema" data-nombre="Sulley_Sullivan_Monster_Inc_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/sullivan_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/sullivan_crema.svg" class="inputradioPersonaje" type="radio" checked>
								<span data-toggle="tooltip" data-placement="top" title="Sulley Sullivan Monster Inc crema" class="inputPersonaje" id="sullivan"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Mike Wazowski– Monsters Inc crema" data-nombre="Mike_Wazowski_Monsters_Inc_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/wasauski_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/wasauski_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Mike Wazowski– Monsters Inc crema" class="inputPersonaje" id="wasauski"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird rojo crema" data-nombre="Angry_bird_rojo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird rojo crema" class="inputPersonaje" id="angry"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird amarillo crema" data-nombre="Angry_bird_amarillo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry1_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird amarillo crema" class="inputPersonaje" id="angry1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Angry bird azul crema" data-nombre="Angry_bird_azul_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/angry2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/angry2_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Angry bird azul crema" class="inputPersonaje" id="angry2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cerdito de angry bird crema" data-nombre="Cerdito_de_angry_bird_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/marrano_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/marrano_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Cerdito de angry bird crema" class="inputPersonaje" id="marrano"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Conejo crema" data-nombre="Conejo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/conejo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/conejo_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Conejo crema" class="inputPersonaje" id="conejo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Gato crema" data-nombre="Gato_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/gato_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Gato crema" class="inputPersonaje" id="gato"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Hello kitty crema" data-nombre="Hello_kitty_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/hello_kitty_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/hello_kitty_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Hello kitty crema" class="inputPersonaje" id="hello_kitty"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Gato rosado crema" data-nombre="Gato_rosado_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/gato1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gato1_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Gato rosado crema" class="inputPersonaje" id="gato1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Pato crema" data-nombre="Pato_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/pollo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/pollo_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Pato crema" class="inputPersonaje" id="pollo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Pollo crema" data-nombre="Pollo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/gallo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/gallo_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Pollo crema" class="inputPersonaje" id="gallo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji carita feliz crema" data-nombre="Emoji_carita_feliz_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji carita feliz crema" class="inputPersonaje" id="emoji"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji enamorado crema" data-nombre="Emoji_enamorado_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji1_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji enamorado crema" class="inputPersonaje" id="emoji1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji ojos cerrados y sacando lengua crema" data-nombre="Emoji_ojos_cerrados_y_sacando lengua_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji2_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji2_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji ojos cerrados y sacando lengua crema" class="inputPersonaje" id="emoji2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Emoji picando el ojo, guiño y corazón crema" data-nombre="Emoji_picando_el_ojo_guiño_y_corazón_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/emoji3_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/emoji3_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Emoji picando el ojo, guiño y corazón crema" class="inputPersonaje" id="emoji3"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Monstro comegalletas –  plaza sésamo crema" data-nombre="Monstro_comegalletas_plaza_sésamo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Monstro comegalletas –  plaza sésamo crema" class="inputPersonaje" id="elmo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Elmo – Plaza sésamo crema" data-nombre="Elmo_Plaza_sésamo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/elmo1_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elmo1_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Elmo – Plaza sésamo crema" class="inputPersonaje" id="elmo1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Castor crema" data-nombre="Castor_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/castor_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/castor_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Castor crema" class="inputPersonaje" id="castor"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Elefante crema" data-nombre="Elefante_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/elefante_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/elefante_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Elefante crema" class="inputPersonaje" id="elefante"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Caballo crema" data-nombre="Caballo_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/caballo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/caballo_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Caballo crema" class="inputPersonaje" id="caballo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cerdito crema" data-nombre="Cerdito_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/cerdo_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/cerdo_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Cerdito crema" class="inputPersonaje" id="cerdo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Unicornio crema" data-nombre="Unicornio_crema" data-adorno="<?php echo $urlSitio; ?>/img/svg/unicornio_crema_arriba.svg" data-d="<?php echo $urlSitio; ?>/img/svg/unicornio_crema.svg" class="inputradioPersonaje" type="radio">
								<span data-toggle="tooltip" data-placement="top" title="Unicornio crema" class="inputPersonaje" id="unicornio"></span></label></li>

						</ul>
						<div id="accordion">
							<div class="card pie">
								<div class="card-header pie" id="headingOne">
									<div class="mb-0 tituloPiezas">
										<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><img src="<?php echo $urlSitio; ?>/img/Despiece/ojos.png">Ojos</h5>
									</div>
								</div>
								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<ul class="card-body" id="lista_ojos">
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
										<!-- <li class="lst_piezas"><label><input data-sel="ojo_sel" 
											data-adorno="<?php //echo $urlSitio; ?>/img/svg/ojo_9.svg" 
											data-d="<?php //echo $urlSitio; ?>/img/svg/ojo_9.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="ojo_9"></span></label></li> -->
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
								</div>
							</div>

							<div class="card pie">
								<div class="card-header pie" id="headingTwo">
									<div class="mb-0 tituloPiezas">
										<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><img src="<?php echo $urlSitio; ?>/img/Despiece/boca.png">Bocas <img src="<?php echo $urlSitio; ?>/img/Despiece/nariz.png">Narices</h5>
									</div>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<ul class="card-body" id="lista_boca">
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
									
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_1.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_1.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_1"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_2.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_2.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_2"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_3.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_3.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_3"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_4.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_4.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_4"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_5.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_5.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_5"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_6.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_6.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_6"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_7.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_7.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_7"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_8.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_8.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_8"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_9.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_9.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_9"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_10.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_10.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_10"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_11.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_11.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_11"></span></label></li>
										<li class="lst_piezas"><label><input data-sel="boca_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/nariz_12.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/nariz_12.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="nariz_12"></span></label></li>
									</ul>
								</div>
							</div>

	<!-- 						<div class="tituloPiezas">
								<h5><img src="<?php //echo $urlSitio; ?>/img/Despiece/nariz.png">Narices</h5>
							</div>
							<ul id="lista_nariz">
								
							</ul> -->

							<div class="card pie">
								<div class="card-header pie" id="headingThree">
									<div class="mb-0 tituloPiezas">
										<h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><img src="<?php echo $urlSitio; ?>/img/Despiece/oreja.png">Orejas</h5>
									</div>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<ul class="card-body" id="lista_oreja">
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

										<li class="lst_piezas"><label><input data-sel="oreja_sel" 
											data-adorno="<?php echo $urlSitio; ?>/img/svg/oreja_17.svg" 
											data-d="<?php echo $urlSitio; ?>/img/svg/oreja_17.svg" class="inputradioPieza" type="radio">
											<span  class="inputPieza" id="oreja_17"></span></label></li>	
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="colorFond">
						<div class="tituloTexto">
							<h5 class="txt_fondandt">Colores de fondant</h5>
							<h5 class="txt_crema">Colores de crema</h5>
						</div>
						<ul class="contenedorinputs" id="color_fondo">
							<li><label><input data-color-cr="#daa40a" class="inputradioColorPie" type="radio" name="color" value="amarilloFnd">
								<span class="inputColorFondo" id="amarilloFondo"></span></label></li>
							<li><label><input data-color-cr="#e86e08" class="inputradioColorPie" type="radio" name="color" value="naranjaFnd" >
								<span class="inputColorFondo" id="naranjaFondo"></span></label></li>
							<li><label><input data-color-cr="#e60909" class="inputradioColorPie" type="radio" name="color" value="rojoFnd" >
								<span class="inputColorFondo" id="rojoFondo"></span></label></li>
							<li><label><input data-color-cr="#d80675" class="inputradioColorPie" type="radio" name="color" value="fucsiaFnd" >
								<span class="inputColorFondo" id="fucsiaFondo"></span></label></li>
							<li><label><input data-color-cr="#750173" class="inputradioColorPie" type="radio" name="color" value="moradoFnd" >
								<span class="inputColorFondo" id="moradoFondo"></span></label></li>
							<li><label><input data-color-cr="#031658" class="inputradioColorPie" type="radio" name="color" value="azulOscuroFnd" >
								<span class="inputColorFondo" id="azulOscuroFondo"></span></label></li>
							<li><label><input data-color-cr="#0c488e" class="inputradioColorPie" type="radio" name="color" value="azulFnd" >
								<span class="inputColorFondo" id="azulFondo"></span></label></li>
							<li><label><input data-color-cr="#068fb9" class="inputradioColorPie" type="radio" name="color" value="azulClaroFnd" >
								<span class="inputColorFondo" id="azulClaroFondo"></span></label></li>
							<li><label><input data-color-cr="#028262" class="inputradioColorPie" type="radio" name="color" value="verdeClaroFnd" >
								<span class="inputColorFondo" id="verdeClaroFondo"></span></label></li>
							<li><label><input data-color-cr="#148440" class="inputradioColorPie" type="radio" name="color" value="verdeOscuroFnd" >
								<span class="inputColorFondo" id="verdeOscuroFondo"></span></label></li>
							<li><label><input data-color-cr="#8eb916" class="inputradioColorPie" type="radio" name="color" value="verdeFnd" >
								<span class="inputColorFondo" id="verdeFondo"></span></label></li>
							<li><label><input data-color-cr="#d8cc1e" class="inputradioColorPie" type="radio" name="color" value="amarilloClaroFnd" >
								<span class="inputColorFondo" id="amarilloClaroFondo"></span></label></li>
							<li><label><input data-color-cr="#383737" class="inputradioColorPie" type="radio" name="color" value="negroFnd" >
								<span class="inputColorFondo" id="negroFondo"></span></label></li>
							<li><label><input data-color-cr="#ccc" class="inputradioColorPie" type="radio" name="color" value="blancoFnd" >
								<span class="inputColorFondo" id="blancoFondo"></span></label></li>
							<li><label><input data-color-cr="#bbbaba" class="inputradioColorPie" type="radio" name="color" value="grisFnd" >
								<span class="inputColorFondo" id="grisFondo"></span></label></li>
							<li><label><input data-color-cr="#a06832" class="inputradioColorPie" type="radio" name="color" value="cafeFnd" >
								<span class="inputColorFondo" id="cafeFondo"></span></label></li>
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
					<div class="adicionales">
						<div class="tituloTexto">
							<h5>
								Seleccione adicional
							</h5>
						</div>
						<ul>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Barquillo" data-nombre="Barquillo" data-d="<?php echo $urlSitio; ?>/img/svg/barquillo_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/barquillo_crema.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Barquillo" class="inputCremasAdicional" id="barquillo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Cereza" data-nombre="Cereza" data-d="<?php echo $urlSitio; ?>/img/svg/cereza_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/cereza.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Cereza" class="inputCremasAdicional" id="cereza"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="chocolatine chocoline" data-nombre="chocolatine_chocoline" data-d="<?php echo $urlSitio; ?>/img/svg/choco_jet_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/choco_jet.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="chocolatine chocoline" class="inputCremasAdicional" id="choco_jet"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Copo de nieve en fondant" data-nombre="Copo_de_nieve_en_fondant" data-d="<?php echo $urlSitio; ?>/img/svg/copo_nieve_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/copo_nieve.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Copo de nieve en fondant" class="inputCremasAdicional" id="copo_nieve"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Galleta festival" 
								data-nombre="Galleta_festival" data-d="<?php echo $urlSitio; ?>/img/svg/festival_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/festival.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Galleta festival" class="inputCremasAdicional" id="festival"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Fresa" data-nombre="Fresa" data-d="<?php echo $urlSitio; ?>/img/svg/fresa_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/fresa.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Fresa" class="inputCremasAdicional" id="fresa"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Fresa con chocolate" data-nombre="Fresa_con_chocolate" data-d="<?php echo $urlSitio; ?>/img/svg/fresa_chocolate_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/fresa_chocolate.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Fresa con chocolate" class="inputCremasAdicional" id="fresa_chocolate"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Barra chocolate kinder" data-nombre="Barra_chocolate_kinder" data-d="<?php echo $urlSitio; ?>/img/svg/mini_jumbo_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/mini_jumbo.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Barra chocolate kinder" class="inputCremasAdicional" id="mini_jumbo"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Galletas morenitas nestlé" data-nombre="Galletas_morenitas_nestlé" data-d="<?php echo $urlSitio; ?>/img/svg/waffer_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/waffer.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Galletas morenitas nestlé" class="inputCremasAdicional" id="waffer"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Troquel Corazon" data-nombre="Troquel_Corazon" data-d="<?php echo $urlSitio; ?>/img/svg/corazon_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/corazon.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Troquel Corazon" class="inputCremasAdicional" id="corazon"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Troquel Estrella" data-nombre="Troquel_Estrella" data-d="<?php echo $urlSitio; ?>/img/svg/estrella_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/estrella.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Troquel Estrella" class="inputCremasAdicional" id="estrella"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Troquel Flor" data-nombre="Troquel_Flor" data-d="<?php echo $urlSitio; ?>/img/svg/flor_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/flor.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Troquel Flor" class="inputCremasAdicional" id="flor"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Troquel mariposa" data-nombre="Troquel_mariposa" data-d="<?php echo $urlSitio; ?>/img/svg/mariposa_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/mariposa.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Troquel mariposa" class="inputCremasAdicional" id="mariposa"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Troquel minie" data-nombre="Troquel_minie" data-d="<?php echo $urlSitio; ?>/img/svg/mini_mouse_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/mini_mouse.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Troquel minie" class="inputCremasAdicional" id="mini_mouse"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Troquel piña" data-nombre="Troquel_piña" data-d="<?php echo $urlSitio; ?>/img/svg/piña_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/piña.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Troquel piña" class="inputCremasAdicional" id="pinia"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas medianas azul perlado" data-nombre="Bolitas_medianas_azul_perlado" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_azules_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_azules.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas medianas azul perlado" class="inputCremasAdicional" id="bolas_azules"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas grandes azul perlado" data-nombre="Bolitas_grandes_azul_perlado" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_azules_claras_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_azules_claras.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas grandes azul perlado" class="inputCremasAdicional" id="bolas_azules_claras"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas medianas blanco perlado" data-nombre="Bolitas_medianas_blanco_perlado" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_blancas_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_blancas.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas medianas blanco perlado" class="inputCremasAdicional" id="bolas_blancas"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas rosadas, lilas y blancas" data-nombre="Grageas_rosadas_lilas_y_blancas" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_colores_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_colores.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas rosadas, lilas y blancas" class="inputCremasAdicional" id="bolas_colores"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas verde limón, 
								verde pasto y naranjas" data-nombre="Grageas_verde_limón,_verde_pasto_y_naranjas" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_colores1_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_colores1.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas verde limón, 
									verde pasto y naranjas" class="inputCremasAdicional" id="bolas_colores1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas blancas, rosadas y rojas" data-nombre="Grageas_blancas_rosadas_y_rojas" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_colores2_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_colores2.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas blancas, rosadas y rojas" class="inputCremasAdicional" id="bolas_colores2"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas blancas, verdes y rojas" data-nombre="Grageas_blancas_verdes_y_rojas" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_colores3_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_colores3.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas blancas, verdes y rojas" class="inputCremasAdicional" id="bolas_colores3"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas blancas, rosadas, rojas y azules" data-nombre="Grageas_blancas_rosadas_rojas_y_azules" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_colores4_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_colores4.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas blancas, rosadas, rojas y azules" class="inputCremasAdicional" id="bolas_colores4"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas amarillas, azules y rojas" data-nombre="Grageas_amarillas_azules_y_rojas" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_colores5_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_colores5.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas amarillas, azules y rojas" class="inputCremasAdicional" id="bolas_colores5"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas medianas rosa" data-nombre="Bolitas_medianas_rosa" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_fucsias_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_fucsias.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas medianas rosa" class="inputCremasAdicional" id="bolas_fucsias"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas medianas plateadas" data-nombre="Bolitas_medianas_plateadas" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_grises_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_grises.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas medianas plateadas" class="inputCremasAdicional" id="bolas_grises"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas medianas rosa pastel" data-nombre="Bolitas_medianas_rosa_pastel" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_rosadas_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_rosadas.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas medianas rosa pastel" class="inputCremasAdicional" id="bolas_rosadas"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas grandes en dos tonos de verde" data-nombre="Bolitas_grandes_en_dos_tonos_de_verde" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_verdes_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_verdes.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas grandes en dos tonos de verde" class="inputCremasAdicional" id="bolas_verdes"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Grageas en verde claro perlado" data-nombre="Grageas_en_verde_claro_perlado" data-d="<?php echo $urlSitio; ?>/img/svg/bolas_verdes_claras_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/bolas_verdes_claras.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Grageas en verde claro perlado" class="inputCremasAdicional" id="bolas_verdes_claras"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Srinkles de chocolate" data-nombre="Srinkles_de_chocolate" data-d="<?php echo $urlSitio; ?>/img/svg/chocolate_rallado_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/chocolate_rallado.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Srinkles de chocolate" class="inputCremasAdicional" id="chocolate_rallado"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="								Sprinkles de corazones amarillas, 
								verdes, azules, lilas, naranjas y fucsias" data-nombre="Sprinkles_de_corazones_amarillas,_verdes,_azules,_lilas,_naranjas_y_fucsias" data-d="<?php echo $urlSitio; ?>/img/svg/corazones_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/corazones.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Sprinkles de corazones amarillas, 
									verdes, azules, lilas, naranjas y fucsias" class="inputCremasAdicional" id="corazones"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Vela y letrero metalizado “feliz cumpleaños”" data-nombre="Vela_y_letrero_metalizado_“feliz_cumpleaños”
										" data-d="<?php echo $urlSitio; ?>/img/svg/cumpleaños_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/cumpleaños.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Vela y letrero metalizado “feliz cumpleaños”" class="inputCremasAdicional" id="cumpleanios"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Sprinkles de estrellas en tonos pastel" data-nombre="Sprinkles_de_estrellas_en_tonos_pastel" data-d="<?php echo $urlSitio; ?>/img/svg/estrellas_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/estrellas.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Sprinkles de estrellas en tonos pastel" class="inputCremasAdicional" id="estrellas"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Vela y letrero metalizado “feliz dia”" data-nombre="Vela_y_letrero_metalizado_“feliz_dia”" data-d="<?php echo $urlSitio; ?>/img/svg/feliz_dia_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/feliz_dia.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Vela y letrero metalizado “feliz dia”" class="inputCremasAdicional" id="feliz_dia"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Circulos planos azules, verdes, amarillos, rojos y naranjas" data-nombre="Circulos_planos_azules,_verdes,_amarillos,_rojos_y_naranjas" data-d="<?php echo $urlSitio; ?>/img/svg/m&m_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/m&m.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Circulos planos azules, verdes, amarillos, rojos y naranjas" class="inputCremasAdicional" id="mym"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Minichips" data-nombre="Minichips" data-d="<?php echo $urlSitio; ?>/img/svg/minichips_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/minichips.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Minichips" class="inputCremasAdicional" id="minichips"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas doradas" data-nombre="Bolitas_doradas" data-d="<?php echo $urlSitio; ?>/img/svg/nips_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/nips.svg" class="inputradioAdicional" type="radio">
									<span class="inputCremasAdicional" id="nips"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Circulos planos tonos pastel, azules, blancos, naranjas, verdes, rosadas y amarillas" 
								data-nombre="Circulos_planos_tonos_pastel,_azules,_blancos,_naranjas,_verdes,_rosadas_y_amarillas" 
								data-d="<?php echo $urlSitio; ?>/img/svg/sparkies_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/sparkies.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Circulos planos tonos pastel, azules, blancos, naranjas, verdes, rosadas y amarillas" class="inputCremasAdicional" id="sparkies"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Circulos planos tonos fucsia, aguamarina, verde limón" data-nombre="Circulos_planos_tonos_fucsia,_aguamarina,_verde_limón" data-d="<?php echo $urlSitio; ?>/img/svg/sparkies1_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/sparkies1.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Circulos planos tonos fucsia, aguamarina, verde limón" class="inputCremasAdicional" id="sparkies1"></span></label></li>
							<li><label><input data-toggle="tooltip" data-placement="top" title="Bolitas rosadas, cereza, moradas y verdes" data-nombre="Bolitas_rosadas,_cereza,_moradas_y_verdes" data-d="<?php echo $urlSitio; ?>/img/svg/sparkies2_crema.svg" data-adorno="<?php echo $urlSitio; ?>/img/svg/sparkies2.svg" class="inputradioAdicional" type="radio">
									<span data-toggle="tooltip" data-placement="top" title="Bolitas rosadas, cereza, moradas y verdes" class="inputCremasAdicional" id="sparkies2"></span></label></li>
							
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
			<!-- </div>
		</div>
	</div> -->
	<div class="modal fade" id="formularioPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" id="formulario_pago">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Datos para pago</h5>
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
						<input name="extra1" id="extra1" type="hidden" value=""  maxlength="1000000000000000">
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
