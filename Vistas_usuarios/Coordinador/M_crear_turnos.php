<?php
include ('../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";
$fecha=date("Y")."-".date("m")."-".date("d");
$pincio=$_POST['pinicio'];
$ptermino=$_POST['ptermino'];

if (isset($_POST['enviar'])){
    $sql="INSERT INTO TURNO(tur_fecha,tur_ttu,tur_supermer, tur_pinicio, tur_ptermino) VALUES ('$fecha', 1, 1, '$pincio', '$ptermino') ";
    echo $sql;
    if($con -> query($sql)) //$con -> query($sql) = True or false
    {
        //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
        //header('location: Eliminar_falta_a.php');
           
    } 
    else
    {
        echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
        //header('location: eliminar_falta_r.php');
    }    
    $sql="INSERT INTO TURNO(tur_fecha,tur_ttu,tur_supermer, tur_pinicio, tur_ptermino) VALUES ('$fecha', 2, 1, '$pincio', '$ptermino') ";
    echo $sql;
    if($con -> query($sql)) //$con -> query($sql) = True or false
    {
        //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
        //header('location: Eliminar_falta_a.php');
           
    } 
    else
    {
        echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
        //header('location: eliminar_falta_r.php');
    }
    $sql="INSERT INTO TURNO(tur_fecha,tur_ttu,tur_supermer, tur_pinicio, tur_ptermino) VALUES ('$fecha', 3, 1, '$pincio', '$ptermino') ";
    echo $sql;
    if($con -> query($sql)) //$con -> query($sql) = True or false
    {
        //echo '<h1>La falta se ha ingresado correctamente</h1>'; 
        //header('location: Eliminar_falta_a.php');
           
    } 
    else
    {
        echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
        //header('location: eliminar_falta_r.php');
    }     
    $sql="INSERT INTO TURNO(tur_fecha,tur_ttu,tur_supermer, tur_pinicio, tur_ptermino) VALUES ('$fecha', 4, 1, '$pincio', '$ptermino') ";
    echo $sql;
    if($con -> query($sql)) //$con -> query($sql) = True or false
    {
        echo '<h1>La falta se ha ingresado correctamente</h1>'; 
        //header('location: Eliminar_falta_a.php');
           
    } 
    else
    {
        echo '<br/><br/><br/>La sugerencia no fue ingresada, intente nuevamente. Error: '.mysqli_error($con);
        //header('location: eliminar_falta_r.php');
    }    
}

?>