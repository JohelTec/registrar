<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>biblioteca</title>
	<link rel="stylesheet" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/ajax.js"></script>
</head>
<body>
	<div class="content-principal" >
		<div class="content">
			<div class="image">
				<img src="img/logo.jpg" width="50%">
			</div>
			<div class="formulario">
				<form>
					<div class="cuadroTexto">
						<i class="fa fa-user-o fa-lg" aria-hidden="true"></i><input type="text" name="user" placeholder="Usuario" id="user" required>
					</div>
					<div class="cuadroTexto">
						<i class="fa fa-key fa-lg" aria-hidden="true"></i><input type="password" id="password" name="password" placeholder="Contraseña"  required>
					</div>
					<div>
						<button type="sumbit" value="Login">Login</button>
					</div>
					<i class="fa fa-spinner fa-spin" aria-hidden="true" id="cargar"></i>
				</form>
				<div id="mensaje">
				</div>
			</div>
			<div class="registrarse">
				<p><span class="white">No tienes una cuenta?</span> <a href=""><b>Regístrate</b></a></p>
			</div>
		</div>
	</div>
</body>
</html>