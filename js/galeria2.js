$(document).ready(function(){
	$('.foto').click(function(){
		var src = $(this).children('img')[0].src;
		$('#foto img').attr('src',src);
	});
})