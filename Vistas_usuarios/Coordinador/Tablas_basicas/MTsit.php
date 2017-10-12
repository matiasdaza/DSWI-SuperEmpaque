<?php
include ('../../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";


if (isset($_POST['enviar']))
{
    if(isset($_POST['sit'])){
        $sit = $_POST['sit'];    
    }
    if(isset($_POST['sitid'])){
        $sitid = $_POST['sitid'];    
    }
    if($_POST['enviar']==1){ // 1 para Agregar falta
        $sql = "INSERT INTO SITUACION(sit_id, sit_nombre) VALUES  (NULL, '$sit')";
        mysqli_query($con, $sql);
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tsit.php');
            //echo $sql;
       
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==2){ // 1 para Agregar falta
        $sql="DELETE FROM SITUACION WHERE sit_id=$sit";
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tsit.php');
        
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==3){ // 1 para Agregar falta
       $sql="UPDATE SITUACION SET sit_nombre='$sit' WHERE sit_id=$sitid";
       if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tsit.php');
            //echo $sql;
        
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }

    }
}
?>