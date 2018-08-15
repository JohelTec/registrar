$(document).ready(function(){
	enviarDatos();
});
function enviarDatos(){
	$('form').submit(function(e){
		e.preventDefault();
		var frm = $(this).serialize();
		$.ajax({
			method: "POST",
			url: "./php/producto.php",
			data: frm,
			beforeSend: function(){
				$('#cargar').css('display','inline');
			}
		})
		// CONEXION REALIZADA TRAE DE PHP
		.done(function(info){
			$('#mensaje').html(info);
		})
		// CONEXION FALLIDA 
		.fail(function(){ // false
			$('span').html("Falso");

		})
		// SIEMPRE SE VA EJECUTAR 
		.always(function(){
			setTimeout(function(){
				$("#cargar").hide();
			},2000);
		});
	});
}