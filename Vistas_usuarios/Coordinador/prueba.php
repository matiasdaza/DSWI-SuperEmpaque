<?php
	
	include ('../../conexion/conexion.php');
	session_start();

	if (isset($_POST['enviar']))
	{
		$opc=$_POST['enviar'];
		$falta=$_POST['falta'];
		echo $opc." ".$falta;
		$sql = "UPDATE falta SET FAL_ESTADO = $opc WHERE FAL_ID = $falta;";

        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            //header('location: agregar_falta_a.php');
       
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }  
	}
?>