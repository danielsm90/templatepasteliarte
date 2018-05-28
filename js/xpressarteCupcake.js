$(window).load(function(){
	var rellenoLoad = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
	var abiertoLoad = document.getElementById("cup").getSVGDocument().getElementsByClassName("st77");
	var puntosLoad = document.getElementById("cup").getSVGDocument().getElementsByClassName("st66");
	var capAbiertoLoad = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
	var fondo = document.getElementById("cpkSeleccionado").getSVGDocument().getElementById("SVGID_1_");
	var capSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st9");
	var rellenoSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st8");
	var abiertoSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st77");
	var puntosSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st66");
	$(rellenoLoad).hide();
	$(abiertoLoad).hide();
	$(puntosLoad).hide();
	$(capAbiertoLoad).hide();
	$(fondo).hide();
	$(capSel).hide();
	$(rellenoSel).hide();
	$(abiertoSel).hide();
	$(puntosSel).hide();

	var idSvgSup = document.getElementById("cup1")
	var rellenoLoad = idSvgSup.getSVGDocument().getElementsByClassName("st8");
	var abiertoLoad = idSvgSup.getSVGDocument().getElementsByClassName("st77");
	var puntosLoad = idSvgSup.getSVGDocument().getElementsByClassName("st66");
	var capAbiertoLoad = idSvgSup.getSVGDocument().getElementsByClassName("st9");
	var fondo = idSvgSup.getSVGDocument().getElementById("SVGID_1_");

	var decoracion = idSvgSup.getSVGDocument().getElementById("Capa_1");
	console.log(decoracion)
	$.get($(".btn_adornos.active").attr('data-sel'), function(data)
	{
		$(decoracion).html(data.getElementById("Capa_1"));
	});

	$(rellenoLoad).hide();
	$(abiertoLoad).hide();
	$(puntosLoad).hide();
	$(capAbiertoLoad).hide();
	$(fondo).hide();
	
	$(function () 
	{
        $('[data-toggle="tooltip"]').tooltip();
    });

})


$(document).ready(function() {
	// body...

	// var a = [5];
	// a.push(1);
	// alert(a[0]);

	var url = document.querySelector('#urlSite').value

	var alto;
	var relleno;
	var abierto;
	var puntos;
	var capAbierto;
	var tamanio;
	var tamanioSeleccionado;
	var saborSel;
	var rellenoSel;
	var i; 
	var resultado;
	var bandera;

	$('#txt_mensaje').keypress(function(e)	
	{
		// alert("Pulsaste la tecla con código: "+String.fromCharCode(e.which));
		if($(this).val().length < 10)
		{
			
			resultado =  $(this).val() + String.fromCharCode(e.which);
			$('#textocup').html(resultado);
			bandera =  "texto";
			if(e.which == 32)
			{
				$('#textocup').html(resultado + '<br>');
			}
		}
		// // console.log(resultado);
		// $(this).text(String.fromCharCode(e.which));
		// var texto =  $(`<text x=20 y=150
  // 					style="font: bold 2em 'comic sans ms';fill: aqua; stroke: blue; stroke-width: 2px;">
  // 					Primer texto svg</text>`)
		//  document.getElementById("cup1").getSVGDocument().getElementById("Capa_1").createElement(texto)
		
	});


	$('.inputradioPersonaje').click(function()
	{
		var decoracion = document.getElementById("cup1").getSVGDocument().getElementById("Capa_1");
		
		i = $(this).attr("data-adorno");
		

		$.get($(this).attr('data-d'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_1"));
		});
	});

	$('.btn_seleccion_p').click(function()
	{
		var decoracion = document.getElementById("cup1").getSVGDocument().getElementById("Capa_1");
		

		$.get($(this).attr('data-imagen'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_2"));
		});
	});

	var decoracionOjos;
	var decoracionBocas;
	var decoracionNarices;
	var decoracionOrejas;

	$('.inputradioPieza').click(function()
	{
		var data_sel = $(this).attr('data-sel');
		
		// i = $(this).attr("data-adorno");

		$.get($(this).attr('data-d'), function(data)
		{
			// if(id_pie_sel != id_pie)
			// {
			// 	console.log("hola")
			// 	decoracion = document.getElementById("cup1").getSVGDocument().getElementById("Capa_3");
			// 	$(decoracion).html(data.getElementById("Capa_3"));
			// }
			if(data_sel == 'ojo_sel')
			{
				decoracionOjos = document.getElementById("cup1").getSVGDocument().getElementById("ojos");
				$(decoracionOjos).html(data.getElementById("Capa_3"));
			}
			else if(data_sel == 'boca_sel')
			{
				decoracionBocas = document.getElementById("cup1").getSVGDocument().getElementById("bocas");
				$(decoracionBocas).html(data.getElementById("Capa_3"));
			}
			else if(data_sel == 'nariz_sel')
			{
				decoracionNarices = document.getElementById("cup1").getSVGDocument().getElementById("narices");
				$(decoracionNarices).html(data.getElementById("Capa_3"));
			}
			else if(data_sel == 'oreja_sel')
			{
				decoracionOrejas = document.getElementById("cup1").getSVGDocument().getElementById("orejas");
				$(decoracionOrejas).html(data.getElementById("Capa_3"));
			}
			
		});
	});

	$('#mini').click(function()
	{
		tamanio = $(this).val();
		tamanioSeleccionado= $(this).attr("name");
		$('#cantidadMini').show();
		$('#cantidadStandard').hide();
		$('.rellenos').hide();
		$('.verRelleno').hide();
		// $('#footerExpressarte').css({"top":"100%"});
		$(this).parent('div').siblings('.slider').val(tamanio);
		$("#tamnioTxt").text(tamanioSeleccionado);
		$('#txtRelleno').hide();
		$('#rellenoTxt').hide();
		$("#cantidadSel").text("0");
	});

	$('.item_relleno').click(function(){
		$('.item_relleno').removeClass('active')
		$(this).toggleClass('active')
	})

	

	$('#noRelleno').click(function()
	{
	   
	    relleno = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
		$(relleno).hide();
		abierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st77");
		$(abierto).hide();
		puntos = document.getElementById("cup").getSVGDocument().getElementsByClassName("st66");
		$(puntos).hide();
		capAbierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
		$(capAbierto).hide();
		$('.rellenoSeleccionado').hide();
		
		

	});

	$('#relleno').click(function()
	{
		relleno = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
		$(relleno).show();
		abierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st77");
		$(abierto).show();
		puntos = document.getElementById("cup").getSVGDocument().getElementsByClassName("st66");
		$(puntos).show();
		capAbierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
		$(capAbierto).show();
		// $('#relleno img').attr("src","../img/Despiece/relleno_seleccionado.png");
		// $('#noRelleno img').attr("src","../img/Despiece/sin_relleno.png");

	});

	$('#stan').click(function()
	{
		tamanio = $(this).val();
		tamanioSeleccionado= $(this).attr("name");
		$('#cantidadMini').hide();
		$('#cantidadStandard').show();
		$('.rellenos').show();
		$('.verRelleno').show();
		$('.sabores').css('height',alto);
		// $('#footerExpressarte').css({"top":"120%"});
		$(this).parent('div').siblings('.slider').val(tamanio);
		$("#tamnioTxt").text(tamanioSeleccionado);
		$('#txtRelleno').show();
		$('#rellenoTxt').show();
		$("#cantidadSel").text("1");
	});

	var col = '';
	var y = $('input:radio[name=color]:checked').siblings('span').css('backgroundColor');
	col = hexc(y);
	$('.seleccion').css('fill',col);

	var sab;
	var s = $(this).attr('data-color-sabor');
	saborSel = $('input:radio[name=saborEstandar]:checked').val();
	// $(sab).css('fill', s);
	$("#txtSabor").text(saborSel);
	// $('.circulo').css('fill',sab);

	var rell;
	var r = $(this).attr('data-color-relleno');
	rellenoSel = $('input:radio[name=saborRelleno]:checked').val();
	// $(rell).css('fill', r);
	$("#txtRelleno").text(rellenoSel);
	// $('.seleccionRelleno').css('fill',rell);
	

	$('.inputradio').click(function()
	{
		var color = '';
		var path = document.getElementById("cup").getSVGDocument().getElementsByClassName("st3");
		capAbierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
		var path2 = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st3");
		var path3 = document.getElementById("cup1").getSVGDocument().getElementsByClassName("st62");
		var x = $(this).siblings('span').css('backgroundColor');
		color = hexc(x);
		$(path).css('fill',color);
		$(path2).css('fill',color);
		$(path3).css('fill',color);
		$(capAbierto).css('fill',color);

		var barras = document.getElementById("cup").getSVGDocument().getElementsByClassName("st5");
		$(barras).css('fill', $(this).attr('data-color-bar'));
		var barras1 = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st5");
		$(barras1).css('fill', $(this).attr('data-color-bar'));
		var barras2 = document.getElementById("cup1").getSVGDocument().getElementsByClassName("st93");
		$(barras2).css('fill', $(this).attr('data-color-bar'));
	});

	function hexc(colorval) 
	{
		var color = '';
	    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
	    delete(parts[0]);
	    for (var i = 1; i <= 3; ++i) {
	        parts[i] = parseInt(parts[i]).toString(16);
	        if (parts[i].length == 1) parts[i] = '0' + parts[i];
	    }
	    color = '#' + parts.join('');
	    return color;
	}

	var nuevo;

	$('.cantidadSeleccionada').click(function()
	{
		var z = $(this).val();
		var cantidad = $(this).attr("id");
		var array = [];
		
		var cx = 20;
		var cy = 10;
		var cont = 0;

		$(this).parent('div').siblings('.slider').val(z);
		
		for (var i = 1; i <=cantidad; i++) 
		{			
			//array[i];
			nuevo = i;

			// if(cont == 4)
			// {
			// 	cx = 10;
			// 	cy += 10;
			// 	cont = 0;

			// }

			// if(anterior < z)
			// {
			// 	alert("mayor");
			// }
			// else if(anterior>z)
			// {
			// 	alert("menor");
			// }
			
			nuevo = $('<label class="image-checkbox"><div class="txt"></div><img class="cantidad_cpk" src="'+url+'/img/Despiece/circulo.png" /><br><input class="disenios" type="checkbox" value="sel_'+i+'" /></label>');
			// cx += 10;
			

			array.push(nuevo);	
			cont++;
			
			$("#cantidadSel").text(cantidad);			
		}
		$('.numeroCup').html(array);
		// alert(z);
		//(array);
		
	});

	$('#aplicar_dis').on('click', function() 
	{
		
        var diseniados = new Array();

        $('.disenios:checked').each(function() 
        {

            diseniados.push($(this).val());
            if(bandera == "texto")
        	{
        		$(this).siblings('.txt').html(resultado);
        	}
        	else if(bandera == "foto")
        	{
        		$(this).siblings('.cantidad_cpk').attr('src', result);
        	}
        	else
        	{
	        	$(this).siblings('.cantidad_cpk').attr('src', i);
	        	$(this).siblings('.cantidad_cpk').css('{width: 45px; height: 45px}' );
	        	$(this).siblings('.txt').remove();
        	}
        	$(this).removeAttr('checked');
        	
        });

        // $('.cantidad_cpk').attr('src', 'imagenes/Despiece/'+i);
    });


	$('.inputSabor').click(function()
	{
		saborSel = $(this).val(); 
		var sabor = $(this).attr('data-color-sabor');
		var path = document.getElementById("cup").getSVGDocument().getElementsByClassName("st6");
		var path2 = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st6");
		var path3 = document.getElementById("cup1").getSVGDocument().getElementsByClassName("st156");
		// var x = $(this).siblings('span').css('backgroundColor');
		// var y = $(this).val();
		// sabor = hexc(x);
		$("#txtSabor").text(saborSel);
		$(path).css('fill',sabor);
		$(path2).css('fill',sabor);
		$(path3).css('fill',sabor);
		// $(sabor).css('fill',$(this).attr('data-color-sabor'));

	});

	$('.inputradioLetra').click(function(){
		var color_letra = $(this).siblings('span').css('backgroundColor');
		$('#textocup').css('color', color_letra);
	});

	$('.inputRelleno').click(function()
	{
		var relleno = $(this).attr('data-color-relleno');
		rellenoSel = $(this).val();
		var path = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
		// var x = $(this).siblings('span').css('backgroundColor');
		// var y = $(this).val();
		// relleno = hexc(x);
		$(path).css('fill',relleno);
		$("#txtRelleno").text(rellenoSel);

	});

	$('.inputradioCremas').click(function()
	{
		var color_crema1 = $(this).attr('data-cr');
		var color_crema2 = $(this).attr('data-cr1');
		i = $(this).attr('data-adorno');
		var colorCrema1 = document.getElementById("cup1").getSVGDocument().getElementsByClassName("crst12");
		var colorCrema2 = document.getElementById("cup1").getSVGDocument().getElementsByClassName("crst89");
		$(colorCrema1).css('fill', color_crema1);
		$(colorCrema2).css('fill', color_crema2);
	});

	var tipo = 'fondant'
	var cir;
	var fond;
	

	$('#btn_crema').click(function()
	{
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		bandera = "imagen"
		resultado = " ";
		$("#txt_mensaje").val(resultado);
		$('#textocup').html(resultado);
		$("#sel_cremas").show();
		$("#personajes").hide();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
		$("#opcionesTexto").hide();
		$("#sel_personajes").hide();
		$('.btn_seleccion_p').removeClass('active');
		$('#prev_circle').hide();
		$('#foto').hide();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();
	});

	$('#btn_personaje').click(function()
	{
		// cir = document.getElementById("cup1").getSVGDocument().getElementsByClassName("st157");
		// $(cir).hide();
		// fond = document.getElementById("cup1").getSVGDocument().getElementsByClassName("st156");
		// $(fond).css('fill', '#f8f9d2');
		bandera = "imagen"
		resultado = " ";
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		$("#txt_mensaje").val(resultado);
		$('#textocup').html(resultado);
		$("#sel_personajes").show();
		$("#opcionesTexto").hide();
		$("#sel_cremas").hide();
		$('.btn_seleccion_p').removeClass('active');
		$('#prev_circle').hide();
		$('#foto').hide();

		$('#fondant_sel').addClass('active')
		$('#personajes').show()
		$('#prediseniado').addClass('active')
		$('.fondant_adornos').css('display', 'flex')
		$('.fondant_adornos').css('flex-wrap', 'wrap')

	});

	$('#btn_mensaje').click(function()
	{
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		$("#sel_personajes").hide();
		$("#opcionesTexto").show();
		$("#sel_cremas").hide();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
		$("#sel_personajes").hide();
		$("#personajes").hide();
		$('.btn_seleccion_p').removeClass('active');
		$('#prev_circle').hide();
		$('#foto').hide();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();
	});

	$('#btn_foto').click(function()
	{
		bandera = "foto"
		resultado = " ";
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		$("#txt_mensaje").val(resultado);
		$('#textocup').html(resultado);
		$("#sel_personajes").hide();
		$("#opcionesTexto").hide();
		$("#sel_cremas").hide();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
		$("#sel_personajes").hide();
		$("#personajes").hide();
		$('.btn_seleccion_p').removeClass('active');
		$('#prev_circle').show();
		$('#foto').show();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();
	});

	$('.btn_adornos').click(function()
	{
		$('.btn_adornos').removeClass('active');
		$(this).addClass('active');
		var decoracion = document.getElementById("cup1").getSVGDocument().getElementById("Capa_1");
		$.get($(this).attr('data-sel'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_1"));
		});
	});

	$('.btn_per_pie').click(function()
	{
		$('.btn_per_pie').removeClass('active');
		$(this).addClass('active');
	});

	$('.btn_seleccion_p').click(function()
	{
		$('.btn_seleccion_p').removeClass('active');
		$('.btn_per_pie').removeClass('active');
		$(this).addClass('active');
	});

	$('#fondant_sel').click(function()
	{

		tipo = "fondant"
		$("#personajes").show();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();

		$('#personajes').show()
		$('#prediseniado').addClass('active')
		$('.fondant_adornos').css('display', 'flex')
		$('.fondant_adornos').css('flex-wrap', 'wrap')
	});

	$('#crema_sel').click(function()
	{
		tipo = "crema"
		$("#personajes").show(); 
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();

		$('#personajes').show()
		$('#prediseniado').addClass('active')
		$('.fondant_adornos').css('display', 'flex')
		$('.fondant_adornos').css('flex-wrap', 'wrap')

	});

	$('#piezas').click(function()
	{
		$('#lista_ojos').show();
		$('.tituloPiezas').show();
		$('#lista_boca').show();
		$('#lista_nariz').show();
		$('#lista_oreja').show();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
	});

	$('#prediseniado').click(function()
	{
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();

		if(tipo == "fondant")
		{
			$(".fondant_adornos").css('display', 'flex');
			$(".fondant_adornos").css('flex-wrap', 'wrap');
			$(".crema_adornos").hide();
			$('#lista_ojos').hide();
			$('#lista_boca').hide();
			$('#lista_nariz').hide();
			$('#lista_oreja').hide();
			$('.tituloPiezas').hide();
		}
		if(tipo == "crema")
		{
			$(".crema_adornos").css('display', 'flex');
			$(".crema_adornos").css('flex-wrap', 'wrap');
			$(".fondant_adornos").hide();
			$('#lista_ojos').hide();
			$('#lista_boca').hide();
			$('#lista_nariz').hide();
			$('#lista_oreja').hide();
			$('.tituloPiezas').hide();
		}
	});

	$('#cargarFoto').click(function(){
		$('#custom_foto').click();

	})

	$('#custom_foto').change(function(e){
		let target = e.target || e.srcElement
    
        if(target.value == 0){
            $('#prev_square').attr("src","imagenes/Despiece/cuadro_foto.png")
            $('#prev_circle').css("background-image", "url('imagenes/Despiece/prev_circle.png')")
        }else{
            addImage(e);
            $('#prev_circle').show();
        }
	})
	function addImage(e){
        var file = e.target.files[0],
        imageType = /image.*/

        if (!file.type.match(imageType))
            return

        var reader = new FileReader()
        reader.onload = fileOnload
        reader.readAsDataURL(file)
    }

    var result;

    function fileOnload(e) {
        result = e.target.result
        $('#prev_square').attr("src",result)
        $('#prev_circle').css("background-image", "url("+ result +")")
    }

})