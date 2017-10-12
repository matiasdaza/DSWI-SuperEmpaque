<?php

    include ('../../conexion/conexion.php');
    session_start();


    if (isset($_POST['enviar']))
    {
             if(isset($_POST['usuid'])){
                $usuid    =$_POST['usuid'];
            }
            if(isset($_POST['run'])){
                $run    =$_POST['run'];
            }
            if(isset($_POST['nombres'])){
                $nombres    =$_POST['nombres'];
            }
            if(isset($_POST['apat'])){
                $apat    =$_POST['apat'];
            }
            if(isset($_POST['amat'])){
                $amat    =$_POST['amat'];
            }
            if(isset($_POST['edad'])){
                $edad    =$_POST['edad'];
            }
            if(isset($_POST['correo'])){
                $correo    =$_POST['correo'];
            }
            if(isset($_POST['fono'])){
                $fono    =$_POST['fono'];
            }
            if(isset($_POST['cest'])){
                $cest    =$_POST['cest'];
            }if(isset($_POST['sit'])){
                $sit    =$_POST['sit'];
            }
            if(isset($_POST['gen'])){
                $gen    =$_POST['gen'];
            }
            if(isset($_POST['com'])){
                $com    =$_POST['com'];
            }
            if(isset($_POST['tusu'])){
                $tusu    =$_POST['tusu'];
            }
            if(isset($_POST['sup'])){
                $sup    =$_POST['sup'];
            }
            $sql = "UPDATE USUARIO SET USU_RUN=$run , USU_NOMBRES='$nombres', USU_APAT='$apat', USU_AMAT='$amat', USU_EDAD=$edad, USU_CORREO='$correo', USU_TELEFONO='$fono', USU_CASAESTUDIO=$cest, USU_SITUACION=$sit, USU_GENERO=$gen,USU_COMUNA=$com,USU_TIPOUSUARIO=$tusu, USU_SUPERMERC=$sup WHERE USU_RUN=$usuid;";
            echo $sql;
            if($con -> query($sql)) //$con -> query($sql) = True or false
            {
                //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
                header('location: Modificar_usuarios.php');
           
            } 
            else
            {
                echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
                //header('location: agregar_falta_r.php');
            }
            
    }
?>
