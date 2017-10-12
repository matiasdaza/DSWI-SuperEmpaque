<?php

  include ('../../Conexion/conexion.php');
  // $con = new mysqli($servidor, $usuario, $password, $bd);
  //                       $con->set_charset("utf8");
  //                       global $con;
  $falta=$_POST['falta'];
  $row="";
  $sql = "SELECT jus_falcoment FROM usu_jus WHERE jus_falta=$falta";
  
  $respuesta = $con -> query($sql);
  if($row = $respuesta -> fetch_assoc()){
    echo "<h3>".$row["jus_falcoment"]."</h3>";
  }
  

 ?>