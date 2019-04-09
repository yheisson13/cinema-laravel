$(document).ready(function() {
	Carga();
});

function Carga() {
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/generos";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key, value){
			tablaDatos.append("<tr><td>"+value.genre+"</td><td class='text-center'><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#exampleModal'>Editar</button><button class='btn btn-danger btn-sm ml-2'>Eliminar</button></td></tr>");
		});
	});
}

function Mostrar(btn){
	var route = "http://localhost:8000/genero/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#genre").val(res.genre);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#genre").val();
	var route = "http://localhost:8000/genero/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: "PUT",
		dataType: 'json',
		data: {genre: dato},
		success: function(){
			Carga();
			$("#exampleModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});