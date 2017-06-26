<?php
include ('../../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";


if (isset($_POST['enviar']))
{
    if(isset($_POST['tusu'])){
        $tusu = $_POST['tusu'];    
    }
    if(isset($_POST['tusuid'])){
        $tusuid = $_POST['tusuid'];    
    }
    if($_POST['enviar']==1){ // 1 para Agregar falta
        $sql = "INSERT INTO TIPO_USUARIO(tus_id, tus_tipo) VALUES  (NULL, '$tusu')";
        mysqli_query($con, $sql);
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Ttusu.php');
            //echo $sql;
       
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==2){ // 1 para Agregar falta
        $sql="DELETE FROM TIPO_USUARIO WHERE tus_id=$tusu";
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Ttusu.php');
        
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==3){ // 1 para Agregar falta
       $sql="UPDATE TIPO_USUARIO SET tus_tipo='$tusu' WHERE tus_id=$tusuid";
       if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Ttusu.php');
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