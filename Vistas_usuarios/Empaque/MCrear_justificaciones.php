<?php
	include ('../../conexion/conexion.php');
	session_start();

	if (isset($_POST['enviar']))
	{
		$comentario = $_POST['comentario'];
		$falta = $_POST['falta'];
		$fecha=date("Y")."-".date("m")."-".date("d");

		$falta=$_POST['falta'];
		$row="";
		$sql = "SELECT tufa_usuario FROM tur_fal WHERE tufa_falta=$falta";
		  
		$respuesta = $con -> query($sql);
		if($row = $respuesta -> fetch_assoc()){
		  $usuario=$row["tufa_usuario"];
		}

		$sql = "INSERT INTO USU_JUS(jus_falcoment, jus_falta, jus_fecha, jus_tjus, jus_usuario)
                    VALUES  ('$comentario', $falta, '$fecha', 1, $usuario )";

        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            //header('location: agregar_falta_a.php');
       
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }                        

	}


?>
