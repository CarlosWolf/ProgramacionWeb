$(document).ready(function(){

// .text()
	// $('#titulo').text('Encabezado Modificado con Jquery');

// .html()
	$('#titulo').html('<u>Encabezado Modificado con Jquery</u>');

// .val()
	var nombre = $('#nombre');
	nombre.on('change', function(){
		$('#titulo').text(nombre.val());
	});
	
// .attr()
	$('#enlace').text('WolfTechMex.com');
	$('#enlace').attr('href', 'https://www.facebook.com/WolfTechMex');
	
	// Multiples atributos.
	/*$('#enlace').attr({
		'class': 'azul',
		'target': '_blank'
	});	*/

});