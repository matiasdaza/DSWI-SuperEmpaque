<?php
include ('../conexion/conexion.php');
session_start();
//echo "Pase por aquí";

if (isset($_POST['enviar']))
{
        $run = $_POST['run'];
        $nombres = $_POST['nombres'];
        $apat=$_POST['apat'];
        $amat=$_POST['amat'];
        echo $run." ".$nombres;
        /*echo " ".$fecha;
        $sql = "INSERT INTO falta(fal_tipofalta, fal_estado)
                    VALUES  ($tfal,'1')";
                     //fal_id es auto increment, por lo que no se agrega, agregamos el id del tipo de falta y estado es por defecto "pentiende" (1)
        mysqli_query($con, $sql);
        $falta=mysqli_insert_id($con);  //Saca el último id ingresado               
        //echo " ojoo".$aux."ojoo ";

        $sql = "INSERT INTO usu_tur(utur_usuario, utur_turno)
                    VALUES  ($usuario,$turno)"; //Como tur_fal depende de usu_tur, se llena primero esta tabla.
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            //header('location: agregar_falta_a.php');
       
        } 
        else
        {
            //echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            //header('location: agregar_falta_r.php');
        }            
        $sql = "INSERT INTO tur_fal(tufa_usuario, tufa_turno, tufa_falta, tufa_fecha)
                    VALUES ($usuario, $turno, $falta, '$fecha')"; //Se agrega usuario, turno, falta y fecha.
        echo "PRUEBA 3";
        if($con -> query($sql)) //$con -> query($sql) = True or false
        {
            //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
            header('location: agregar_falta_a.php');
       
        } 
        else
        {
            //echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
            header('location: agregar_falta_r.php');
        }
        */
}
?>