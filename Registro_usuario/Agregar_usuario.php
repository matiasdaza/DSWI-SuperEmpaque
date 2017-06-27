<?php

    include ('../conexion/conexion.php');
    session_start();


    if (isset($_POST['enviar']))
    {
            $run    =$_POST['run'];
            $nombres=$_POST['nombres'];
            $apat   =$_POST['apat'];
            $amat   =$_POST['amat'];
            $edad   =$_POST['edad'];
            $correo =$_POST['correo'];
            $pass   =$_POST['pass'];
            $fono   =$_POST['fono'];
            $cest   =$_POST['cest'];
            $sit    =$_POST['sit'];
            $gen    =$_POST['gen'];
            $com    =$_POST['com'];
            $tusu   =$_POST['tusu'];
            $sup    =$_POST['sup'];
            echo $sup;
            $sql = "INSERT INTO USUARIO (usu_run, usu_nombres, usu_apat, usu_amat, usu_edad, usu_correo, usu_contrasenia, usu_telefono, usu_casaestudio, usu_situacion, usu_genero, usu_comuna, usu_tipousuario, usu_supermerc) 
                    
                    VALUES ($run,'$nombres', '$apat', '$amat', $edad, '$correo', '$pass', '$fono', $cest, $sit, $gen, $com, $tusu, $sup)";
            echo $sql;
            if($con -> query($sql)) //$con -> query($sql) = True or false
            {
                echo '<h1>La falta se ha ingresado correctamente</h1>'; 
                header('location: registro.php');
           
            } 
            else
            {
                echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
                header('location: registro.php');
                //header('location: agregar_falta_r.php');
            }
            
    }
?>
