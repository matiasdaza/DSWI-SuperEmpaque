<?php
include ('../../conexion/conexion.php');
session_start();

	$modificar=$_POST['modificar'];
	$usuario=$_POST['usuario'];
	$turno=$_POST['turno'];
	$tfal=$_POST['tfal'];
	$fecha=date("Y")."-".date("m")."-".date("d");
	if (isset($_POST['enviar'])){
		$sql="INSERT INTO falta(fal_tipofalta, fal_estado)
                    VALUES  ($tfal,'1')";
        mysqli_query($con, $sql);
        $falta=mysqli_insert_id($con);            
		if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            //header('location: Modificar_falta.php');
            //echo $sql;
        
        } 
        else
        {
            echo $sql;
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }

		$sql="UPDATE tur_fal SET tufa_usuario=$usuario, tufa_turno=$turno, tufa_falta=$falta, tufa_fecha='$fecha' WHERE tufa_falta=$modificar;";
		if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Modificar_falta.php');
            //echo $sql;
        
        } 
        else
        {
            echo $sql;
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
	}

?>