<?php


	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "superempaque";

	$con = new mysqli($servidor, $usuario, $password, $bd);
	$con->set_charset("utf8");
	echo "<h1> Usuarios </h1> <br></br>";
    global $con;
    $sql = "SELECT * FROM usuario";
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
				<th>#RUN</th>
				<th>Nombres</th>
				<th>Apellid paterno</th>
				<th>Correo</th>
				
			</tr>
			<?php	
			if($filas > 0)
		    {
		        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que se encuentre
			    {
		            echo "<tr>";
		            echo "<th>", $result["USU_RUN"], "</th>";
		            echo "<th>", $result["USU_NOMBRES"],"</th>";
		            echo "<th>", $result["USU_APAT"], "</th> ";
		            echo "<th>", $result["USU_CORREO"],"</th>" ;
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
