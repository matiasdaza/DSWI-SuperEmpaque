<?php


	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "superempaque";

	$con = new mysqli($servidor, $usuario, $password, $bd);
	$con->set_charset("utf8");
	echo "<h1> Reporte </h1> <br></br>";
    global $con;
    $sql = "SELECT TUFA_FECHA, ttu_nombre, emp_nombre, sup_local, usu_run, USU_NOMBRES, usu_apat, usu_amat, tfa_nombre, tfa_valor,  est_tipo 		FROM tur_fal, usuario, empresa, supermercado, falta, tipo_falta, turno, tipo_turno, estado
			WHERE tufa_usuario=usu_run and TUFA_TURNO=tur_id and TUFA_FALTA=fal_id and fal_tipofalta=tfa_id and usu_supermerc=sup_id and sup_empresa=emp_id and tur_ttu=ttu_id and fal_estado=est_id;
";
    $respuesta = $con -> query($sql);
    $filas = mysqli_num_rows($respuesta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<!-- Parte necesaria para el boostrap -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.9, maximun-scale=1.0, minium-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Parte necesaria para el boostrap -->
</head>

<body>
	<div class="container">
		<div class="table-responsive">
		<table class="table table-bordered table-hover ">
			<tr class="info">
				<th>Fecha</th>
				<th>Turno</th>
				<th>Empresa</th>
				<th>Local</th>
				<th>Run</th>
				<th>Nombres</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Falta</th>
				<th>Puntaje</th>
				<th>Estado</th>
				
			</tr>
			<?php	
			if($filas > 0)
		    {
		        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que se encuentre
			    {
		        
		            echo "<tr>";
		            echo "<td>", $result["TUFA_FECHA"], "</td>";
		            echo "<td>", $result["ttu_nombre"],"</td>";
		            echo "<td>", $result["emp_nombre"], "</td> ";
		            echo "<td>", $result["sup_local"],"</td>" ;
		            echo "<td>", $result["usu_run"],"</td>" ;
		            echo "<td>", $result["USU_NOMBRES"],"</td>" ;
		            echo "<td>", $result["usu_apat"],"</td>" ;
		            echo "<td>", $result["usu_amat"],"</td>" ;
		            echo "<td>", $result["tfa_nombre"],"</td>" ;
		            echo "<td>", $result["tfa_valor"],"</td>" ;
		            echo "<td>", $result["est_tipo"],"</td>" ;
		            echo "</tr>";
		        }
			}
			?>
			

		</table>
		</div>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-lasted.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
