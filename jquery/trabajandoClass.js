$(document).ready(function(){

	$('#boton').on('click', function(){
		 //$(this).addClass('naranja');//agregar clase
		 //$(this).removeClass('boton');// quitar clase
		 $(this).toggleClass('naranja');// alternar clase, si no tiene le pone y si tiene se la quita
		
		$(this).css({
			'height': '400px',
			'width': '400px'
		});
	});

});