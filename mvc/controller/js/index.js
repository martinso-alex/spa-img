var login = function(){
	$(document).on('click','#login-button', function(){
		console.log('login');//passou
		$.ajax({//nao passou
			type: "POST",
			url: 'mvc/controller/ControllerIndex.php',
			data: {func:'login'},
			success: function(data){
				$('#content').html(data);
			},
			error: function(jqXHR,textStatus,errorThrown){
				console.log(errorThrown);
			}
		});
	});
}

$(document).ready(login);