<?php

  include ('../../Conexion/conexion.php');
  // $con = new mysqli($servidor, $usuario, $password, $bd);
  //                       $con->set_charset("utf8");
  //                       global $con;
  $falta=$_POST['falta'];
  $row="";
  $sql = "SELECT jus_falcoment, est_tipo, est_id FROM usu_jus, falta, estado WHERE jus_falta=$falta and fal_id=$falta and fal_estado=est_id";
  
  $respuesta = $con -> query($sql);
  if($row = $respuesta -> fetch_assoc()){
    echo "<h3>".$row["jus_falcoment"]."</h3>";
    if($row["est_id"]==1){
      echo '<h5> Estado: <font color="#24AAFF">'.$row["est_tipo"].'</font> </h5>';  
    }
    if($row["est_id"]==2){
      echo '<h5> Estado: <font color="#12DE3E">'.$row["est_tipo"].'</font> </h5>';  
    }
    if($row["est_id"]==3){
      echo '<h5> Estado: <font color="#F2051C">'.$row["est_tipo"].'</font> </h5>';  
    }
  }
  

 ?>