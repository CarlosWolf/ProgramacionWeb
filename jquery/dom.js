$(document).ready(function(){

// Parent
	 $('#tercera').parent().css({
	 	background: '#5856d4'
	 });

// Parents
	 $('#tercera').parents();

// Children
	 //$('#padre').children().fadeOut(500);
	 $('#padre').children('#tercera').fadeOut(1000);

// Find
	 $('#contenedor').find('div.cajon').slideUp();

// Siblings
	 //Elementos hermanos
	 //$('#tercera').siblings().fadeOut(1500);

// Next - Prev
	$('#tercera').prevAll().css({
		background: '#000'
	});

});