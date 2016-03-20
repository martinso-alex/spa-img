var login = function(){
	$(document).on('click','#login-button', function(){
		$.ajax({
			type: "POST",
			url: 'mvc/controller/ControllerIndex.php',
			data: {func:'login'},
			success: function(data){
				//console.log(data);
				$('#content').html(data);
			},
			error: function(jqXHR,textStatus,errorThrown){
				console.log(errorThrown);
			}
		});
	});
}

$(document).ready(login);