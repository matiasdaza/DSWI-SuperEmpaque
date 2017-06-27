<?php

    include ('../../conexion/conexion.php');
    session_start();

    $passa=$_POST['passactual'];
    $passn=$_POST['passnueva'];
    $usuariorun=$_SESSION['USUARIO']['USU_RUN'];

    $sql="UPDATE USUARIO SET USU_CONTRASENIA='$passn' WHERE USU_RUN='$usuariorun' and USU_CONTRASENIA='$passa'";
    if($con -> query($sql)) //$con -> query($sql) = True or false
            {
                echo '<h1>La falta se ha ingresado correctamente</h1>'; 
                //header('location: agregar_falta_a.php');
                header('location: cambiocontrasenia.php');
           
            } 
            else
            {
                echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
                //header('location: agregar_falta_r.php');
            }

?>