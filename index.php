<!DOCTYPE html>
<html>

<head>
	<title>spa img</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="mvc/view/css/bootstrap.min.css">
	<script src="mvc/view/js/jquery.min.js"></script>
	<script src="mvc/view/js/bootstrap.min.js"></script>
</head>

<body>

	<div id="content">

		<link rel="stylesheet" type="text/css" href="mvc/view/css/index.css">
		<script src="mvc/view/js/index.js"></script>

		<div id="login-box">

			<div id="logo">
				<span id="logo-first-part">[spa]</span><span id="logo-second-part">img</span>
			</div>

			<form id="login-form" role="form">
				<div class="form-group">
					<label for="usr">Usuario:</label>
					<input type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
					<label for="pas">Senha:</label>
					<input type="password" class="form-control" id="pas">
				</div>
				<div id="login-button"><strong>Log in</strong></div>
			</form>

		</div>

		<div id="alert-login"></div>
		
		<img id="gato" src="img/gato2.png" alt="gato">

	</div>

</body>

</html>