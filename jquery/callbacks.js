$(document).ready(function(){

	/*Si no hay un callback los efectos se ejecutarian 
	al mismo tiempo que presionemos el boton*/

	$('#ejecutar').on('click', function(){
		$('.caja').slideUp(1000, function(){
			$(this).slideDown(1000);
		});
	});

});