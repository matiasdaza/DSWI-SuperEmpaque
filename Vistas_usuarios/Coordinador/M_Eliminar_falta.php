<?php
include ('../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";

if (isset($_POST['enviar'])){
    if($_POST['enviar']==2){ // 1 para Agregar falta
        foreach ($_POST['Eliminar'] as $eliminar) {
            $sql="DELETE FROM TUR_FAL WHERE TUFA_FALTA=$eliminar";
            if($con -> query($sql)) //$con -> query($sql) = True or false
            {
                //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
                header('location: Eliminar_falta_a.php');
           
            } 
            else
            {
                echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
                header('location: eliminar_falta_r.php');
            }
        }
        foreach ($_POST['Eliminar'] as $eliminar) {
            $sql="DELETE FROM falta WHERE fal_id=$eliminar";
            if($con -> query($sql)) //$con -> query($sql) = True or false
            {
                //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
                header('location: Eliminar_falta_a.php');
           
            } 
            else
            {
                echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
                header('location: eliminar_falta_r.php');
            }
        }
    }
    
}

?>