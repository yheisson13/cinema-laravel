$(document).ready(function() {
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/generos";

	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.genre+"</td><td class='text-center'><button class='btn btn-primary btn-sm'>Editar</button><button class='btn btn-danger btn-sm ml-2'>Eliminar</button></td></tr>");
		});
	});
});