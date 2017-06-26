 <?php
    include ('../../Conexion/conexion.php');
     $sql = "SELECT SUM(tfa_valor)
             FROM tur_fal, falta, tipo_falta 
             WHERE tufa_usuario=18117885 and tufa_falta=fal_id and fal_estado!=2 and fal_tipofalta = tfa_id;";  
     $respuesta = $con -> query($sql);
     if($row = $respuesta -> fetch_assoc()){
       $puntaje=$row["SUM(tfa_valor)"];
     }
     
     echo "<h1>".$puntaje."</h1>";

?>