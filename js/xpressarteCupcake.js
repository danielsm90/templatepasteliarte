$(window).load(function(){
	
	// $(rellenoLoad).hide();
	// $(abiertoLoad).hide();
	// $(puntosLoad).hide();
	// $(capAbiertoLoad).hide();


	

		
	$(function () 
	{
        $('[data-toggle="tooltip"]').tooltip();
    });

	inicializarAnimaciones()

	$(window).scroll(function(){
		var element = $("#cup")
		var capSubir = document.getElementById("cup").getSVGDocument().getElementsByClassName("cupSubir");
		var sombra = document.getElementById("cup").getSVGDocument().getElementById("sombra");
		$(sombra).css('transform-origin', 'center')

		var windowHeight = $(window).scrollTop()
		var contenido2 = element.offset()
		contenido2 = contenido2.top

		var moveIn = windowHeight - contenido2

		var sombreScale = Math.abs(moveIn/100)

		for (var i = 0; i < capSubir.length; i++) {
			if( windowHeight >= contenido2 ){
				$(capSubir[i]).css('transform', 'translateY('+(-moveIn)+'px)')
				$(sombra).css('opactiy', '0.1')
				// $(sombra).css('transform', 'scaleX('+sombreScale+')')
			}else{
				$(capSubir[i]).css('transform', 'translateY(0)')
				$(sombra).css('opactiy', '0.3')
				// $(sombra).css('transform', 'scaleX(1)')
			}
		}
	})

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
	var tamanioSeleccionado = 'Standard';
	var saborSel;
	var rellenoSel;
	var i; 
	var n;
	var resultado;
	var bandera;
	var capacillo, capacilloHex

	var desnudo = 2500, relleno = 1000, cremChis, tapaPlana = 3500, letra, piezasPre, piezasAd, cantidad = 1, piezasAdi

    var precioInicial, precioTotal;

    var cantTxtId = $('#cantidadStandard').children('.slider').val()
    var contTxt = $('#cantidadStandard').children('div').children('button[value="'+cantTxtId+'"]').attr('id')

    var array = [];
		
	var cont = 0;

	var cup1 = document.getElementById("cup1")
	
	for (var i = 1; i <= contTxt; i++) 
	{
		nuevo = i
		
		nuevo = $('<label class="image-checkbox"><div class"piezas_ad"></div><div class="txt"></div><img class="cantidad_cpk" src="'+url+'/img/Despiece/circulo.png" /><br><input class="disenios" type="checkbox" value="sel_'+i+'" /></label>');		

		array.push(nuevo);	
		cont++;			
	}
	$('.numeroCup').html(array);

    $('#cantidadSel').html(contTxt)

    var msj_txt;


	$('#txt_mensaje').keypress(function(e)	
	{
		// alert("Pulsaste la tecla con código: "+String.fromCharCode(e.which));
		if($(this).val().length < 10)
		{
			
			resultado =  $(this).val() + String.fromCharCode(e.which);
			msj_txt = cup1.getSVGDocument().getElementById("texto");
			$(msj_txt).html("<text id='msj' x='100' y='250' font-size='100' fill='"+ color_letra + "'>"+ resultado + "</text>");			
			bandera =  "texto";
			if(e.which == 32)
			{
				// $('#textocup').html(resultado + '<br>');
			}
		}
		// // console.log(resultado);
		// $(this).text(String.fromCharCode(e.which));
		// var texto =  $(`<text x=20 y=150
  		// 					style="font: bold 2em 'comic sans ms';fill: aqua; stroke: blue; stroke-width: 2px;">
  		// 					Primer texto svg</text>`)
		//  document.getElementById("cup1").getSVGDocument().getElementById("Capa_1").createElement(texto)
		
	});

	$("#range_tamanio").change(function()
	{
		var valor = $(this).val()
		if(valor == '10'){
			$('#mini').trigger('click')
		}else if (valor == '20'){
			$('#stan').trigger('click')
		}
	})

	$("#range_cantidad_mini").change(function()
	{
		var valor = $(this).val()
		if(valor == '10'){
			$('#mini').trigger('click')
		}else if (valor == '20'){
			$('#stan').trigger('click')
		}
	})

	$("#range_cantidad_stan").change(function()
	{
		var valor = $(this).val()
		$(this).siblings('div').children('button.cantidadSeleccionada[value="'+valor+'"]').trigger('click')
		
	})

	$('#txt_mensaje1').keypress(function(e)	
	{
		// alert("Pulsaste la tecla con código: "+String.fromCharCode(e.which));
		if($(this).val().length < 1)
		{
			
			resultado =  $(this).val() + String.fromCharCode(e.which);
			msj_txt = cup1.getSVGDocument().getElementById("texto");
			$(msj_txt).html("<text id='msj' x='100' y='250' font-size='100' fill='"+ color_letra + "'>"+ resultado + "</text>");			
			bandera =  "texto";
			// if(e.which == 32)
			// {
			// 	$('#textocup').html(resultado + '<br>');
			// }
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
		if(tamanioSeleccionado == 'Standard')
		{
			piezasPre = 3000;
		}
		else
		{
			piezasPre = 2000;
		}
		
		var decoracion = cup1.getSVGDocument().getElementById("Capa_1");
		
		i = $(this).attr("data-adorno");

		$(cup1).attr('data-adorno', i)
		n = $(this).attr("data-nombre");
		$(cup1).attr('data-nombre', n)
		

		$.get($(this).attr('data-d'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_1"));
		});
	});

	$('.btn_seleccion_p').click(function()
	{
		var decoracion = cup1.getSVGDocument().getElementById("Capa_1");
		

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
		if(tamanioSeleccionado == 'Standard')
		{
			piezasAd = 1000;
		}
		else
		{
			piezasAd = 500;
		}
		var data_sel = $(this).attr('data-sel');
		
		i = $(this).attr("data-adorno");


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
				decoracionOjos = cup1.getSVGDocument().getElementById("ojos");
				$(decoracionOjos).html(data.getElementById("Capa_3"));
				$(cup1).attr("data-ojos", i);
			}
			else if(data_sel == 'boca_sel')
			{
				decoracionBocas = cup1.getSVGDocument().getElementById("bocas");
				$(decoracionBocas).html(data.getElementById("Capa_3"));
				$(cup1).attr("data-bocas", i);
			}
			else if(data_sel == 'nariz_sel')
			{
				decoracionNarices = cup1.getSVGDocument().getElementById("narices");
				$(decoracionNarices).html(data.getElementById("Capa_3"));
				$(cup1).attr("data-narices", i);
			}
			else if(data_sel == 'oreja_sel')
			{
				decoracionOrejas = cup1.getSVGDocument().getElementById("orejas");
				$(decoracionOrejas).html(data.getElementById("Capa_3"));
				$(cup1).attr("data-orejas", i);
			}
			
		});
	});

	var dec

	$('.inputradioAdicional').click(function()
	{
		piezasAdi = 1000;
		console.log($(this).siblings("span").css("background"))
		colorCrema_1 = cup1.getSVGDocument().getElementsByClassName("colorcls-1");
		colorCrema_2 = cup1.getSVGDocument().getElementsByClassName("colorcls-2");
		dec = cup1.getSVGDocument().getElementById("adicional1");
		i = $(this).attr("data-adorno");
		$.get($(this).attr('data-d'), function(data)
		{
			$(dec).html(data.getElementById("Capa_2"));
			$(colorCrema_1).css('fill', color_crema1);
			$(colorCrema_2).css('fill', color_crema2);
			$(cup1).attr("data-ad", i);
		});
		
	});

	$('#mini').click(function(){
		desnudo = 1500
		relleno = 0
		cantidad = 12
		rellenoSel = undefined

		if($('.btn_seleccion_p.active').attr('id') == 'fondant_sel')
		{
			tapaPlana = 2000;
		}
		else
		{
			tapaPlana = 1500;
		}

		var array = [];
		
		var cont = 0;
		
		for (var i = 1; i <= cantidad; i++) 
		{
			nuevo = i
			
			nuevo = $('<label class="image-checkbox"><div class"piezas_ad"></div><div class="txt"></div><img class="cantidad_cpk" src="'+url+'/img/Despiece/circulo.png" /><br><input class="disenios" type="checkbox" value="sel_'+i+'" /></label>');		

			array.push(nuevo);	
			cont++;
			
			$("#cantidadSel").text(cantidad);			
		}
		$('.numeroCup').html(array);

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
		$('#mini').attr('disabled', true);
		$('#stan').removeAttr('disabled')
	});

	$('.item_relleno').click(function(){
		$('.item_relleno').removeClass('active')
		$(this).toggleClass('active')
	})	

	$('#noRelleno').click(function()
	{
	   
	    relleno = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
		$(relleno).hide('slow');
		abierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st77");
		$(abierto).hide('slow');
		puntos = document.getElementById("cup").getSVGDocument().getElementsByClassName("st66");
		$(puntos).hide('slow');
		capAbierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
		$(capAbierto).hide('slow');
		$('.rellenoSeleccionado').hide('slow');
	});

	$('#relleno').click(function()
	{
		relleno = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
		$(relleno).show('slow');
		abierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st77");
		$(abierto).show('slow');
		puntos = document.getElementById("cup").getSVGDocument().getElementsByClassName("st66");
		$(puntos).show('slow');
		capAbierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
		$(capAbierto).show('slow');
		// $('#relleno img').attr("src","../img/Despiece/relleno_seleccionado.png");
		// $('#noRelleno img').attr("src","../img/Despiece/sin_relleno.png");

	});

	$('#stan').click(function(){
		relleno = 1000
		desnudo = 2500
		if($('.btn_seleccion_p.active').attr('id') == 'fondant_sel')
		{
			tapaPlana = 3500;
		}
		else
		{
			tapaPlana = 1500;
		}
		cantidadId = parseInt( $('#cantidadStandard').children('.slider').val() )
		cantidad = parseInt( $('#cantidadStandard').children('div').children('button[value="'+cantidadId+'"]').attr('id') )
		rellenoSel = $('input:radio[name=saborRelleno]:checked').val();

		var array = [];
		
		var cont = 0;
		
		for (var i = 1; i <= cantidad; i++) 
		{
			nuevo = i
			
			nuevo = $('<label class="image-checkbox"><div class"piezas_ad"></div><div class="txt"></div><img class="cantidad_cpk" src="'+url+'/img/Despiece/circulo.png" /><br><input class="disenios" type="checkbox" value="sel_'+i+'" /></label>');		

			array.push(nuevo);	
			cont++;
			
			$("#cantidadSel").text(cantidad);			
		}
		$('.numeroCup').html(array);

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
		$('#stan').attr('disabled', true);
		$('#mini').removeAttr('disabled');
	});

	var col = '';
	var y = $('input:radio[name=color]:checked').siblings('span').css('backgroundColor');
	col = hexc(y);
	capacillo = $('.inputradio:checked').attr('value')
	capacilloHex = col
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
	
	var color = ''; 
	var colorBarra;

	$('.inputradio').click(function()
	{
		
		var path = document.getElementById("cup").getSVGDocument().getElementsByClassName("st3");
		capAbierto = document.getElementById("cup").getSVGDocument().getElementsByClassName("st9");
		
		
		var x = $(this).siblings('span').css('backgroundColor');
		color = hexc(x);
		colorBarra = $(this).attr('data-color-bar');
		capacillo = $(this).attr('value')
		capacilloHex = color
		$(path).css('transition', '.25s')
		$(path).css('fill',color);
		$(capAbierto).css('transition', '.25s')
		$(capAbierto).css('fill',color);

		var barras = document.getElementById("cup").getSVGDocument().getElementsByClassName("st5");
		$(barras).css('fill', colorBarra);

		console.log(capacillo)

		
	});

	$('.listo').click(function()
	{
		$("#info_sel").show();
		setTimeout(cargarCupSel, 800);
		
	});

	function cargarCupSel()
	{
		console.log(color);
		var fondo = document.getElementById("cpkSeleccionado").getSVGDocument().getElementById("SVGID_1_");
		var capSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st9");
		var rellenoSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st8");
		var abiertoSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st77");
		var puntosSel = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st66");
		$(fondo).hide();
		$(capSel).hide();
		$(rellenoSel).hide();
		$(abiertoSel).hide();
		$(puntosSel).hide();

		var capacillo_color = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st3");
		$(capacillo_color).css('fill',color);

		var color_sabor = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st6");
		$(color_sabor).css('fill', sabor);

		var barras1 = document.getElementById("cpkSeleccionado").getSVGDocument().getElementsByClassName("st5");
		$(barras1).css('fill', colorBarra);

		$(capacillo_color).css('transition', '.25s')
		$(barras1).css('transition', '.25s')
		$(color_sabor).css('transition', '.25s')
	}

	$("#al_horno").click(function()
	{
		
		$("#dec").show();
		setTimeout(cargarCupDecorar, 800);
		// $(".loader").toggleLeft('slow');
		$(".loader").fadeIn(800);
		setTimeout(outHorn, 4000)

	});

	function outHorn(){
		$(".loader").fadeOut(800);
	}

	function cargarCupDecorar()
	{
		var idSvgSup = document.getElementById("cup1")
		var rellenoLoad = idSvgSup.getSVGDocument().getElementsByClassName("st8");
		var abiertoLoad = idSvgSup.getSVGDocument().getElementsByClassName("st77");
		var puntosLoad = idSvgSup.getSVGDocument().getElementsByClassName("st66");
		var capAbiertoLoad = idSvgSup.getSVGDocument().getElementsByClassName("st9");
		var fondo = idSvgSup.getSVGDocument().getElementById("SVGID_1_");
		var decoracion = idSvgSup.getSVGDocument().getElementById("Capa_1");
		$(rellenoLoad).hide();
		$(abiertoLoad).hide();
		$(puntosLoad).hide();
		$(capAbiertoLoad).hide();
		$(fondo).hide();
		console.log(decoracion)
		$.get($(".btn_adornos.active").attr('data-sel'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_1"));
		});

		var path3 = cup1.getSVGDocument().getElementsByClassName("st156");
		$(path3).css('transition', '.25s')
		$(path3).css('fill',sabor);

		var path = cup1.getSVGDocument().getElementsByClassName("st62");
		$(path).css('transition', '.25s')
		$(path).css('fill',color);

		var barras2 = cup1.getSVGDocument().getElementsByClassName("st93");
		$(barras2).css('fill', colorBarra);


	}

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

	$('.cantidadSeleccionada').click(function(){
		var z = $(this).val();
		cantidad = parseInt( $(this).attr("id") );
		var array = [];
		
		var cont = 0;

		$(this).parent('div').siblings('.slider').val(z);
		
		for (var i = 1; i <=cantidad; i++) 
		{
			nuevo = i
			
			nuevo = $('<label class="image-checkbox"><div class"piezas_ad"></div><div class="txt"></div><img class="cantidad_cpk" src="'+url+'/img/Despiece/circulo.png" /><br><input class="disenios" type="checkbox" value="sel_'+i+'" /></label>');		

			array.push(nuevo);	
			cont++;
			
			$("#cantidadSel").text(cantidad);			
		}
		$('.numeroCup').html(array);

	});

	function eliminarPiezasAd(t)
	{
		t.siblings(".ojo_ad").remove();
		t.siblings(".boca_ad").remove();
		t.siblings(".nariz_ad").remove();
		t.siblings(".oreja_ad").remove();
		t.siblings("#adic").remove();
		t.siblings(".cantidad_cpk").removeAttr("data-ojos");
		t.siblings(".cantidad_cpk").removeAttr("data-bocas");
		t.siblings(".cantidad_cpk").removeAttr("data-narices");
		t.siblings(".cantidad_cpk").removeAttr("data-orejas");
		t.siblings(".cantidad_cpk").removeAttr("data-mensaje");
		t.siblings(".cantidad_cpk").removeAttr("data-precio-ojos");
		t.siblings(".cantidad_cpk").removeAttr("data-precio-bocas");
		t.siblings(".cantidad_cpk").removeAttr("data-precio-narices");
		t.siblings(".cantidad_cpk").removeAttr("data-precio-orejas");
		t.siblings(".cantidad_cpk").removeAttr("data-precio-pred");
		t.siblings(".cantidad_cpk").removeAttr("data-precio-mensaje");
		t.siblings(".cantidad_cpk").removeAttr("data-adorno");
		t.siblings(".cantidad_cpk").removeAttr("data-ad");



	}

	function eliminarPiezas()
	{
		$('#cup1').removeAttr("data-ojos");
		$('#cup1').removeAttr("data-bocas");
		$('#cup1').removeAttr("data-narices");
		$('#cup1').removeAttr("data-orejas");
		$('#cup1').removeAttr("data-adorno");
		$('#cup1').removeAttr("data-ad");
	}

	$('#aplicar_dis').on('click', function() 
	{
		var cupOj, cupBo, cupNa, cupOr, cupAd
        var diseniados = new Array();

        $('.disenios:checked').each(function() 
        {

            diseniados.push($(this).val());
            if(bandera == "texto")
        	{
        		eliminarPiezasAd($(this));
        		$(this).siblings('.txt').children().remove();	
        		$(this).siblings('.cantidad_cpk').attr('src', url + '/img/Despiece/circulo.png');
        		$(this).siblings('.txt').append('<p>'+resultado+ '</p>');
        		$(this).siblings('.cantidad_cpk').attr('data-mensaje', resultado);
        		$(this).siblings('.cantidad_cpk').attr('data-precio', letra);

        	}
        	else if(bandera == "foto")
        	{
        		eliminarPiezasAd($(this));
        		$(this).siblings('.txt').children().remove();
        		$(this).siblings('.cantidad_cpk').attr('src', $(cup1).attr('data-adorno'));
        	}
        	else if(bandera == "piezas")
        	{
        		eliminarPiezasAd($(this));
        		$(this).siblings('.txt').children().remove();
        		$(this).siblings('.cantidad_cpk').attr('src', url + '/img/Despiece/circulo.png');

        		cupOj = $(cup1).attr("data-ojos");
        		if (typeof cupOj !== typeof undefined && cupOj !== false) 
        		{
	        		
	        		$(this).parent('.image-checkbox').append('<img class="ojo_ad" src="'+ $(cup1).attr('data-ojos')+'"/>');
	        		$(this).siblings('.cantidad_cpk').attr('data-ojos', $(cup1).attr('data-ojos'));
	        		$(this).siblings('.cantidad_cpk').attr('data-precio', piezasAd);
        		}

        		cupBo = $(cup1).attr("data-bocas");
        		if (typeof cupBo !== typeof undefined && cupBo !== false) 
        		{
	        		$(this).parent('.image-checkbox').append('<img class="boca_ad" src="'+ $(cup1).attr('data-bocas')+'"/>');
	        		$(this).siblings('.cantidad_cpk').attr('data-bocas', $(cup1).attr('data-bocas'));
	        		$(this).siblings('.cantidad_cpk').attr('data-precio', piezasAd);
        		}

        		cupNa = $(cup1).attr("data-narices");
        		if (typeof cupNa !== typeof undefined && cupNa !== false) 
        		{
	        		$(this).parent('.image-checkbox').append('<img class="nariz_ad" src="'+ $(cup1).attr('data-narices')+'"/>');
	        		$(this).siblings('.cantidad_cpk').attr('data-narices', $(cup1).attr('data-narices'));
	        		$(this).siblings('.cantidad_cpk').attr('data-precio', piezasAd);
        		}

        		cupOr = $(cup1).attr("data-orejas");
        		if (typeof cupOr !== typeof undefined && cupOr !== false) 
        		{
	        		$(this).parent('.image-checkbox').append('<img class="oreja_ad" src="'+ $(cup1).attr('data-orejas')+'"/>');
	        		$(this).siblings('.cantidad_cpk').attr('data-orejas', $(cup1).attr('data-orejas'));
	        		$(this).siblings('.cantidad_cpk').attr('data-precio', piezasAd);
	        	}
        		

        	}
        	else if(bandera == "crema")
        	{
        		eliminarPiezasAd($(this));
        		$(this).siblings('.cantidad_cpk').attr('src', $(cup1).attr('data-adorno'));
        		cupAd = $(cup1).attr('data-ad');
        		if (typeof cupAd !== typeof undefined && cupAd !== false) 
        		{
        			piezasPre += piezasAdi
	        		$(this).parent('.image-checkbox').append('<img id="adic" src="'+ $(cup1).attr('data-ad')+'"/>');
	        		$(this).siblings('.cantidad_cpk').attr('data-ad', $(cup1).attr('data-ad'));
	        	}
	        	$(this).siblings('.cantidad_cpk').attr('data-adorno', $(cup1).attr('data-adorno'));
	        	$(this).siblings('.cantidad_cpk').attr('data-precio', piezasPre);

        	}

        	else
        	{
        		eliminarPiezasAd($(this));
        		
	        	$(this).siblings('.cantidad_cpk').attr('src', $(cup1).attr('data-adorno'));
	        	$(this).siblings('.cantidad_cpk').attr('data-adorno', $(cup1).attr('data-adorno'));
	        	$(this).siblings('.cantidad_cpk').attr('data-nombre', $(cup1).attr('data-nombre'));
	        	$(this).siblings('.cantidad_cpk').attr('data-precio', piezasPre);
	        	$(this).siblings('.cantidad_cpk').css('{width: 45px; height: 45px}' );
	        	$(this).siblings('.txt').children().remove();
        	}
        	$(this).removeAttr('checked');
        });

        // $('.cantidad_cpk').attr('src', 'imagenes/Despiece/'+i);
    });

	var prod;

    $("#info").on('click', function()
    {
    	prod = "cupcake"
    	precioInicial =  (desnudo + relleno + tapaPlana) * cantidad;
    	console.log("PI: " + precioInicial);
    	console.log("des: "+ desnudo);
    	console.log("rell: "+ relleno);
    	console.log("tap: "+ tapaPlana);
    	console.log("cant: "+ cantidad);
    	var disSrc, disDataAd, disDataOj, disDataBo, disDataNa, disDataOr, disDataMe, disDataAdi,
    	preOj = 0, preBo = 0, preNa = 0, preOr = 0, precioAdorno = 0, prePie =0, preLet = 0, preAd = 0;
    	var arrayCupcakes = [], arrayFinal = [], arrayCaract = [];
    	console.log(prePie);
    	var i = 0;
    	var arrayEachCC = []

    	$('.disenios').each(function()
    	{
    		i++;
    		
   //  		disSrc = $(this).siblings('.cantidad_cpk').attr('src')
			// if (typeof disSrc !== typeof undefined && disSrc !== false) {
			// 	arrayEachCC.push(disSrc)
			// }


			disDataAd = $(this).siblings('.cantidad_cpk').attr('data-nombre')
			if (typeof disDataAd !== typeof undefined && disDataAd !== false) {
				arrayEachCC.push(disDataAd)
				prePie += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
				
			}
			// else
			// {
			// 	piezasPre = 0;
			// }

			disDataOj = $(this).siblings('.cantidad_cpk').attr('data-ojos')
			if (typeof disDataOj !== typeof undefined && disDataOj !== false) {
				arrayEachCC.push(disDataOj)
				preOj += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
			}
			// else
			// {
			// 	preOj = 0;
			// }

			disDataBo = $(this).siblings('.cantidad_cpk').attr('data-bocas')
			if (typeof disDataBo !== typeof undefined && disDataBo !== false) {
				arrayEachCC.push(disDataBo)
				preBo += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
			}
			// else
			// {
			// 	preBo = 0;
			// }

			disDataNa = $(this).siblings('.cantidad_cpk').attr('data-narices')
			if (typeof disDataNa !== typeof undefined && disDataNa !== false) {
				arrayEachCC.push(disDataNa)
				preNa += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
			}
			// else
			// {
			// 	preNa = 0;

			// }

			disDataOr = $(this).siblings('.cantidad_cpk').attr('data-orejas')
			if (typeof disDataOr !== typeof undefined && disDataOr !== false) {
				arrayEachCC.push(disDataOr)
				preOr += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
			}
			// else
			// {
			// 	preOr = 0;
			// }

			disDataMe = $(this).siblings('.cantidad_cpk').attr('data-mensaje')
			if (typeof disDataMe !== typeof undefined && disDataMe !== false) {
				arrayEachCC.push(disDataMe)
				preLet += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
				
			}

			disDataAdi = $(this).siblings('.cantidad_cpk').attr('data-ad');
			if (typeof disDataMe !== typeof undefined && disDataMe !== false) 
			{
				arrayEachCC.push(disDataAdi)
				preAd += parseInt($(this).siblings('.cantidad_cpk').attr('data-precio'));
			}

		

			arrayCupcakes.push(arrayEachCC)

			arrayCaract = {
    		'numero' : i,
    		'Caracter' : arrayEachCC

    		}
    	});


		piezasAd = preOj + preBo + preNa + preOr;
		precioAdorno = prePie + piezasAd + preLet + preAd;
		precioTotal = precioInicial + precioAdorno;
		console.log(preOj);
		console.log(prePie)
		console.log(preLet);

    	arrayFinal = {
    		'quantity': cantidad,
    		'flavor': saborSel,
    		'filling': rellenoSel,
    		'type': tamanioSeleccionado,
    		'total': precioTotal,
    		'capacillo': {
    			'name': capacillo,
    			'value': capacilloHex
    		},
    		'cupcakes': arrayEachCC

    	}

    	var jsonArray = JSON.stringify(arrayFinal);
    	var base = btoa(jsonArray);
    	var dec = atob(base);

    	hora = new Date
    	hoy = Date.parse(hora.getFullYear() + (hora.getMonth()+1) + hora.getDate() + hora.getHours() + hora.getMinutes() + hora.getSeconds())
    	// hoy = new Date(hora.getFullYear(), hora.getMonth());
    	console.log("dia: " + Date())
    	console.log('Array: ', arrayFinal)
    	console.log('Array1: ', jsonArray)
    	$("#amount").val(precioTotal);
    	$("#extra1").val(jsonArray);
    	$("#extra2").val(prod);
    	$("#referenceCode").val(hoy);
    	apiKey = '4Vj8eK4rloUd272L48hsrarnUA';
    	sign = apiKey + '~' + $("#merchantId").val() + '~' + $("#referenceCode").val() + '~' + $("#amount").val() + '~' + 
    	$("#currency").val();
    	console.log(sign);
    	codigo = md5(sign);
    	console.log("signature: " + codigo)
    	$("#signature").val(codigo)

    	console.log("extra: " + base);
    	console.log("extra1: " + dec);

    	
    	
    });
	
    var sabor;
    var hora;
    var hoy;
    var sign;
    var codigo;
    var apiKey;

	$('.inputSabor').click(function()
	{
		saborSel = $(this).val(); 
		sabor = $(this).attr('data-color-sabor');
		var path = document.getElementById("cup").getSVGDocument().getElementsByClassName("st6");
		var path2 = document.getElementById("cup").getSVGDocument().getElementsByClassName("st77");
		
		// var x = $(this).siblings('span').css('backgroundColor');
		// var y = $(this).val();
		// sabor = hexc(x);
		$("#txtSabor").text(saborSel);
		$(path).css('transition', '.25s')
		$(path).css('fill',sabor);
		$(path2).css('transition', '.25s')
		$(path2).css('fill',sabor);
		
		// $(sabor).css('fill',$(this).attr('data-color-sabor'));

	});

	var color_letra;
	var col_sel

	$('.inputradioLetra').click(function(){
		color_letra = $(this).siblings('span').css('backgroundColor');
		col_sel = cup1.getSVGDocument().getElementById("msj");
		console.log(col_sel);
		$(col_sel).attr('fill', color_letra);
		// $(msj_txt).getElementById("msj").attr('fill', color_letra);
	});

	$('.inputradioCrema').click(function()
	{
		var color_fon = $(this).siblings('span').css('backgroundColor');
		var path = cup1.getSVGDocument().getElementsByClassName("fonst0");
		$(path).css('fill', color_fon);

	});

	$('.inputradioColorPie').click(function()
	{
		var color_fondo = $(this).siblings('span').css('backgroundColor');
		var color_fon_cr;
		var path;
		var path2;
		if(tipo == "fondant")
		{
			path = cup1.getSVGDocument().getElementsByClassName("fonst0")
		}
		else
		{
			color_fon_cr = $(this).attr('data-color-cr');
			console.log(color_fon_cr)
			path = cup1.getSVGDocument().getElementsByClassName("cre1cls-1")
			path2 = cup1.getSVGDocument().getElementsByClassName("cre1cls-2")
		}

		$(path).css('fill', color_fondo);
		$(path2).css('fill', color_fon_cr);
	});

	$('.inputRelleno').click(function()
	{
		var relleno = $(this).attr('data-color-relleno');
		rellenoSel = $(this).val();
		var path = document.getElementById("cup").getSVGDocument().getElementsByClassName("st8");
		// var x = $(this).siblings('span').css('backgroundColor');
		// var y = $(this).val();
		// relleno = hexc(x);
		$(path).css('transition', '.25s')
		$(path).css('fill',relleno);
		$("#txtRelleno").text(rellenoSel);

	});

	var color_crema1;
	var color_crema2;
	var colorCrema_1;
	var colorCrema_2;

	$('.inputradioCremas').click(function()
	{
		piezasPre = 1000;
		color_crema1 = $(this).attr('data-cr');
		color_crema2 = $(this).attr('data-cr1');
		i = $(this).attr('data-adorno');
		$(cup1).attr('data-adorno', i)
		var colorCrema1 = cup1.getSVGDocument().getElementsByClassName("crst12");
		var colorCrema2 = cup1.getSVGDocument().getElementsByClassName("crst89");
		colorCrema_1 = cup1.getSVGDocument().getElementsByClassName("colorcls-1");
		colorCrema_2 = cup1.getSVGDocument().getElementsByClassName("colorcls-2");
		$(colorCrema1).css('fill', color_crema1);
		$(colorCrema2).css('fill', color_crema2);
		$(colorCrema_1).css('fill', color_crema1);
		$(colorCrema_2).css('fill', color_crema2);
	});

	var tipo = 'fondant'
	var cir;
	var fond;
	

	$('#btn_crema').click(function()
	{
		bandera = "crema";
		eliminarPiezas()
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		resultado = " ";
		$("#txt_mensaje").val(resultado);
		$(msj_txt).html("<text>" + resultado + "</text>");
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
		eliminarPiezas();
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
		$(dec).children().remove();
		$("#txt_mensaje").val(resultado);
		$(msj_txt).html("<text>" + resultado + "</text>");
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
		$('.colorFond').hide()

	});

	$('#btn_mensaje').click(function()
	{
		if(tamanioSeleccionado == 'Standard')
		{
			letra = 3000;
			$(".texto").show();
			$(".texto1").hide();
		}
		else
		{
			letra = 500;
			$(".texto1").show();
			$(".texto").hide();
		}

		
		eliminarPiezas();
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		$(dec).children().remove();
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
		$('.colorFond').hide();
	});

	$('#btn_foto').click(function()
	{
		eliminarPiezas();
		bandera = "foto"
		resultado = " ";
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		$(dec).children().remove();
		$("#txt_mensaje").val(resultado);
		$(msj_txt).html("<text>" + resultado + "</text>");
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
		$('.colorFond').hide();
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
		if(tamanioSeleccionado == 'Standard')
		{
			tapaPlana = 3500;
		}
		else
		{
			tapaPlana = 2000;
		}
		eliminarPiezas();
		bandera = "imagen"
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();

		tipo = "fondant"
		$("#personajes").show();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();
		$('.colorFond').hide();

		$('#personajes').show()
		$('#prediseniado').addClass('active')
		$('.fondant_adornos').css('display', 'flex')
		$('.fondant_adornos').css('flex-wrap', 'wrap')
	});

	$('#crema_sel').click(function()
	{
		tapaPlana = 1500;
		eliminarPiezas();
		bandera = "imagen"
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();

		tipo = "crema"
		$("#personajes").show(); 
		$(".fondant_adornos").hide();
		$(".crema_adornos").show();
		$('#lista_ojos').hide();
		$('#lista_boca').hide();
		$('#lista_nariz').hide();
		$('#lista_oreja').hide();
		$('.tituloPiezas').hide();
		$('.colorFond').hide();

		$('#personajes').show()
		$('#prediseniado').addClass('active')
		$('.crema_adornos').css('display', 'flex')
		$('.crema_adornos').css('flex-wrap', 'wrap')

	});

	$('#piezas').click(function()
	{
		bandera = "piezas"
		if(tipo == 'crema')
		{
			$(".txt_crema").show();
			$(".txt_fondandt").hide();

		}
		else
		{
			$(".txt_fondandt").show();
			$(".txt_crema").hide();
		}
		$('#lista_ojos').show();
		$('.tituloPiezas').show();
		$('#lista_boca').show();
		$('#lista_nariz').show();
		$('#lista_oreja').show();
		$('.colorFond').show();
		$(".fondant_adornos").hide();
		$(".crema_adornos").hide();

		var decoracion = cup1.getSVGDocument().getElementById("Capa_1");
		

		$.get($(".btn_seleccion_p.active").attr('data-imagen'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_2"));
		});
	});

	$('#prediseniado').click(function()
	{
		eliminarPiezas();
		bandera = "imagen"
		$(decoracionOjos).children().remove();
		$(decoracionBocas).children().remove();
		$(decoracionNarices).children().remove();
		$(decoracionOrejas).children().remove();
		$("#cup1").removeAttr('data-ojos');
		$("#cup1").removeAttr('data-bocas');
		$("#cup1").removeAttr('data-narices');
		$("#cup1").removeAttr('data-orejas');
		$('.colorFond').hide();

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
        $(cup1).attr("data-adorno", result)
    }

})

function inicializarAnimaciones(){
	$('.tamanio').css('animation-name', 'showLeft')
	$('.cantidad').css('animation-name', 'showLeft')
	$('.colores').css('animation-name', 'showLeft')
	$('.precio').css('animation-name', 'showBottom')
	$('.sabores').css('animation-name', 'showBottom')
	$('.rellenos').css('animation-name', 'showBottom')
}

function recalcularPrecio(desnudo, relleno, cantidad, tapaPlana){

	return (desnudo + relleno + tapaPlana) * cantidad
	
}