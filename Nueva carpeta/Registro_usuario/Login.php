<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<br/>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<form action="validarLogin.php" method="POST"><!--  action = lugar dodne envias la informacion de los input, method = siempre post -->
				<input type="text" name="txtUsuario" placeholder="Nombre Usuario" class="form-control" required> <br/>
				<input type="password" name="txtPassword" placeholder="Contraseña" class="form-control" required> <br/>

				<input type="submit" name="btnEnviar" value="Enviar" class="btn btn-success btn-block">
			</form>
		</div>
	</div>
</div>






	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>