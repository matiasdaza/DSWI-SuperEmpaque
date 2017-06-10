<?php
include ('../../conexion/conexion.php');
session_start();
//echo "Pase por aquí";

if (isset($_POST['enviar']))
{
        foreach ($_POST['Eliminar'] as $ojo) {
            echo $ojo;
        }
        $fecha=date("Y")."-".date("m")."-".date("d");
        //echo " ".$fecha;
        //$sql = "INSERT INTO falta(fal_tipofalta, fal_estado)
        //            VALUES  ($tfal,'1')";
                     //fal_id es auto increment, por lo que no se agrega, agregamos el id del tipo de falta y estado es por defecto "pentiende" (1)
}