$(window).load(function()
{
	$(function () 
	{
	        $('[data-toggle="tooltip"]').tooltip();
   });
})

$(document).ready(function() 
{
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
		$(path).css('fill',relleno);
		$(path2).css('fill',relleno);
		$(path3).css('fill',relleno);
		$(path4).css('fill',relleno);
		$("#txtRelleno").text(rellenoSel);

	});

	$('.inputradioPersonajeCake').click(function()
	{
		var decoracion = document.getElementById("cakeSel").getSVGDocument().getElementById("Capa_2");
		
		i = $(this).attr("data-adorno");
		

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
        	$(this).removeAttr('checked');
        });
	});

})