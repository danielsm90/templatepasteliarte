$(document).on('ready', function(){
	//Click en la foto
	$('#foto1').on('click', function(){
		var src = $('#foto1 img').attr('src');
		var titulo = $('#foto1 img').attr('title');
		
		$('#foto img').attr('src',src);
		$('#titulo h2').text(titulo);
	});

	$('#foto2').on('click', function(){
		var src = $('#foto2 img').attr('src');
		var titulo = $('#foto2 img').attr('title');
		
		$('#foto img').attr('src',src);
		$('#titulo h2').text(titulo);
	});

	$('#foto3').on('click', function(){
		var src = $('#foto3 img').attr('src');
		var titulo = $('#foto3 img').attr('title');
		
		$('#foto img').attr('src',src);
		$('#titulo h2').text(titulo);
	});

	$('#foto4').on('click', function(){
		var src = $('#foto4 img').attr('src');
		var titulo = $('#foto4 img').attr('title');
		
		$('#foto img').attr('src',src);
		$('#titulo h2').text(titulo);
	});

	$('#foto5').on('click', function(){
		var src = $('#foto5 img').attr('src');
		var titulo = $('#foto5 img').attr('title');
		
		$('#foto img').attr('src',src);
		$('#titulo h2').text(titulo);
	});
});