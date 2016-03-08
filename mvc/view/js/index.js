var login = function(){
	$.ajax({
		type: "POST",
		url: '/mvc/controller/',
		data: {func:'login'},
		success: function(data){
			$('').html(data);
		},
		error: function(jqXHR,textStatus,errorThrown){
			console.log(errorThrown);
		}
	});
}

$(document).ready(login);