<?php
include ('../../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";


if (isset($_POST['enviar']))
{
    if(isset($_POST['cest'])){
        $cest = $_POST['cest'];    
    }
    if(isset($_POST['cestid'])){
        $cestid = $_POST['cestid'];    
    }
    if($_POST['enviar']==1){ // 1 para Agregar falta
        $sql = "INSERT INTO CASAESTUDIOS(cest_id, cest_nombre)
                    VALUES  (NULL, '$cest')";
        mysqli_query($con, $sql);
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tcest.php');
       
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==2){ // 1 para Agregar falta
        $sql="DELETE FROM CASAESTUDIOS WHERE cest_id=$cest";
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tcest.php');
        
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==3){ // 1 para Agregar falta
       $sql="UPDATE CASAESTUDIOS SET cest_nombre='$cest' WHERE cest_id=$cestid";
       if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tcest.php');
        
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }

    }
}
?>