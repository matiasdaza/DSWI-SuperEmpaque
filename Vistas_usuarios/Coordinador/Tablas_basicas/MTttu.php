<?php
include ('../../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";


if (isset($_POST['enviar']))
{
    if(isset($_POST['ttu'])){
        $ttu = $_POST['ttu'];    
    }
    if(isset($_POST['ttuid'])){
        $ttuid = $_POST['ttuid'];    
    }
    if($_POST['enviar']==1){ // 1 para Agregar falta
        $sql = "INSERT INTO TIPO_TURNO(ttu_id, ttu_nombre) VALUES  (NULL, '$ttu')";
        mysqli_query($con, $sql);
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tttu.php');
            //echo $sql;
       
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==2){ // 1 para Agregar falta
        $sql="DELETE FROM TIPO_TURNO WHERE ttu_id=$ttu";
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tttu.php');
        
        } 
        else
        {
            echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }
    }
    if($_POST['enviar']==3){ // 1 para Agregar falta
       $sql="UPDATE TIPO_TURNO SET ttu_nombre='$ttu' WHERE ttu_id=$ttuid";
       if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: Tttu.php');
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