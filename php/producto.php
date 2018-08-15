<?php 

	include_once "conexion.php"; 

	$user = $_POST['user'];
	$password = $_POST['password'];

	// ECRIPTIACION DE CONTRASEÑA
	$passwordHash = PASSWORD_HASH($password, PASSWORD_DEFAULT);
	// INSERTAR LOS DATOS EN LA BASE DE DATOS
	$insertar = "INSERT INTO datos VALUES ('','$user', '$passwordHash')";

	$resultado = mysqli_query($conexion, $insertar) or die ("Error al insertar los registros");

	mysqli_close($conexion);

	// echo "Servidor: Datos obtenidos del formulario <br>";
	// echo "usuario: $user <br>";
	// echo "contraseña: $password <br>";

 ?>