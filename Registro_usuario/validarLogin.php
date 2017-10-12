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
		if(isset($_SESSION['USUARIO'])){
            if($_SESSION['USUARIO']['USU_TIPOUSUARIO']==1){
            	session_start();
              //$_SESSION['USUARIO']=$nombreUsuario;
              header('location: ../vistas_usuarios/coordinador.php');
            }
            if($_SESSION['USUARIO']['USU_TIPOUSUARIO']==2){
              session_start();
              //$_SESSION['USUARIO']=$nombreUsuario;
              header('location: ../vistas_usuarios/encargado.php');
            }
            if($_SESSION['USUARIO']['USU_TIPOUSUARIO']==3){
              session_start();
              //$_SESSION['USUARIO']=$nombreUsuario;
              header('location: ../vistas_usuarios/empaque.php');
            }
        }
	}
	else
	{
		header('location: login.html');

		
	}

?>