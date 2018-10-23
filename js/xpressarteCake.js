$(window).load(function()
{
	$(function () 
	{
	        $('[data-toggle="tooltip"]').tooltip();
   });
})

$(document).ready(function() 
{
	var precio = 25000;
	var i;
	var n;
	var saborSel;
	var rellenoSel;

	$('.inputSaborCake').click(function()
	{
		saborSel = $(this).val(); 
		var sabor = $(this).attr('data-color-sabor');
		var path = document.getElementById("cake_1").getSVGDocument().getElementsByClassName("cls-11");
		var path2 = document.getElementById("cakeSeleccionado").getSVGDocument().getElementsByClassName("cls-11");
		var path3 = document.getElementById("cake_1").getSVGDocument().getElementsByClassName("cls-2");
		var path4 = document.getElementById("cakeSeleccionado").getSVGDocument().getElementsByClassName("cls-2");
		$("#txtSabor").text(saborSel);
		$(path).css('fill',sabor);
		$(path2).css('fill',sabor);
		$(path3).css('fill',sabor);
		$(path4).css('fill',sabor);
		// $(sabor).css('fill',$(this).attr('data-color-sabor'));

	});

	$('.inputRellenoCake').click(function()
	{
		var relleno = $(this).attr('data-color-relleno');
		rellenoSel = $(this).val();
		var path = document.getElementById("cake_1").getSVGDocument().getElementsByClassName("cls-4");
		var path2 = document.getElementById("cakeSeleccionado").getSVGDocument().getElementsByClassName("cls-4");
		var path3 = document.getElementById("cake_1").getSVGDocument().getElementsByClassName("cls-3");
		var path4 = document.getElementById("cakeSeleccionado").getSVGDocument().getElementsByClassName("cls-3");
		var path5 = document.getElementById("cake_1").getSVGDocument().getElementsByClassName("cls-16");
		var path6 = document.getElementById("cakeSeleccionado").getSVGDocument().getElementsByClassName("cls-16");
		var path7 = document.getElementById("cake_1").getSVGDocument().getElementsByClassName("cls-5");
		var path8 = document.getElementById("cakeSeleccionado").getSVGDocument().getElementsByClassName("cls-5");
		$(path).css('fill',relleno);
		$(path2).css('fill',relleno);
		$(path3).css('fill',relleno);
		$(path4).css('fill',relleno);
		$(path5).css('fill',relleno);
		$(path6).css('fill',relleno);
		$(path7).css('fill',relleno);
		$(path8).css('fill',relleno);
		$("#txtRelleno").text(rellenoSel);

	});

	$('.inputradioPersonajeCake').click(function()
	{
		var decoracion = document.getElementById("cakeSel").getSVGDocument().getElementById("Capa_2");
		
		i = $(this).attr("data-adorno");
		n = $(this).attr("data-nombre");

		$.get($(this).attr('data-d'), function(data)
		{
			$(decoracion).html(data.getElementById("Capa_2"));
		});
	});

	$('#aplicar_dis_cake').on('click', function() 
	{
		$('.disenios:checked').each(function() 
        {
        	$(this).siblings('.cantidad_cake').attr('src', i);
        	$(this).siblings('.cantidad_cake').attr('data-nombre', n);
        	$(this).removeAttr('checked');
        });
	});

	var hora;
	var hoy;
	var codigo;
	var sign;
	var apiKey;
	var dataPersonaje;
	var pord;

	$("#infoCake").on('click', function()
	{
		prod = "cake"
		$('.disenios').each(function()
		{
			
			var arrayTorta = [];
			dataPersonaje = $(this).siblings('.cantidad_cake').attr('data-nombre');
			
		})

		arrayTorta = 
		{
			'flavor': saborSel,
			'filling': rellenoSel,
			'cake': dataPersonaje
		}
		console.log(arrayTorta);

		var jsonArray = JSON.stringify(arrayTorta);
		var base = btoa(jsonArray);

		hora = new Date
    	hoy = Date.parse(hora.getFullYear() + (hora.getMonth()+1) + hora.getDate() + hora.getHours() + hora.getMinutes() + 
    		hora.getSeconds())

    	$("#amount").val(precio);
    	$("#extra1").val(jsonArray);
    	$("#extra2").val(prod);
    	$("#referenceCode").val(hoy);
    	apiKey = '4Vj8eK4rloUd272L48hsrarnUA';
    	sign = apiKey + '~' + $("#merchantId").val() + '~' + $("#referenceCode").val() + '~' + $("#amount").val() + '~' + 
    	$("#currency").val();
    	codigo = md5(sign);
    	$("#signature").val(codigo)


	})

})