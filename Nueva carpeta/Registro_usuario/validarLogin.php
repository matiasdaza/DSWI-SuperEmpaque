<?php 

	include ('../conexion/conexion.php');
	session_start();

	$nombreUsuario = $_POST['txtUsuario'];
	$password = $_POST['txtPassword'];

	$consulta = "SELECT * FROM usuario WHERE usu_correo = '$nombreUsuario' AND usu_contrasenia = '$password'";
	$resultado = $con -> query ($consulta);

	if(mysqli_num_rows($resultado) > 0)
	{
		$result = $resultado -> fetch_assoc();
		$_SESSION['USUARIO'] = $result;
		header('location: ../index.php');
	}
	else
	{
		header('location: login.php');

		
	}

?>