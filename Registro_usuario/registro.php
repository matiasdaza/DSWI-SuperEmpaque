<?php 
include ('../conexion/conexion.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro de usuarios | ¡Súper Empaque!</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../Vistas_usuarios/coordinador.php"><b>¡Súper Empaque!</b></a>
  </div>

  <section class="content">
      <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="Agregar_usuario.php" method="POST" role="form">
                <!-- select -->

                <div class="form-group has-feedback">
                <label>RUN</label>
                <input name="run" type="text" class="form-control" placeholder="17567234"> 
              </div>
              <!-- /Agregar run-->

              <!-- Agregar Nombres-->
              <div class="form-group has-feedback">
                <label>Nombres</label>
                <input name="nombres" type="text" class="form-control" placeholder="">
                </div>
              <!-- /Agregar Nombres-->

              <!-- Agregar Apat-->
              <div class="form-group has-feedback">
                <label>Apellido Paterno</label>
                <input name="apat" type="text" class="form-control" placeholder="">
                </div>
              <!-- /Agregar Apat-->

              <!-- Agregar Amat-->
              <div class="form-group has-feedback">
                <label>Apellido Materno</label>
                <input name="amat" type="text" class="form-control" placeholder="">
                </div>
              <!-- /Agregar Amat-->

              <!-- Agregar Fecha de nacimiento-->
              <div class="form-group has-feedback">
                <label>Edad</label>
                <input name="edad" type="text" class="form-control" placeholder="">
                </div>
              <!-- /Agregar Fecha de nacimiento-->

              <!-- Agregar Correo -->
              <div class="form-group has-feedback">
                <label>Correo</label>
                <input name="correo" type="text" class="form-control" placeholder="">
                </div>
              <!-- /Correo-->

              <!-- Agregar Contraseña -->
              <div class="form-group has-feedback">
                <label>Contraseña</label>
                <input name="pass" type="text" class="form-control" placeholder="">
                </div>
              <!-- /Contraseña -->

              <!-- Agregar Telefono -->
              <div class="form-group has-feedback">
                <label>Teléfono</label>
                <input name="fono" type="text" class="form-control" placeholder="+56982956387">
                </div>
              <!-- /Telefono -->

              <div class="form-group">
                <label>Casa de estudios</label>
                <select name="cest" required class="form-control">
                  <option></option>
                  <?php
                    $sql = "SELECT * FROM CASAESTUDIOS";
                    $respuesta = $con -> query($sql);
                    $filas = mysqli_num_rows($respuesta);
                    if($filas > 0)
                    {
                        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que 
                      { 
                            echo "<option value=".$result["CEST_ID"].">".$result["CEST_NOMBRE"]."</option>";
                        }
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Situación académica</label>
                <select name="sit" required class="form-control">
                  <option></option>
                  <?php
                    $sql = "SELECT * FROM SITUACION";
                    $respuesta = $con -> query($sql);
                    $filas = mysqli_num_rows($respuesta);
                    if($filas > 0)
                    {
                        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que 
                      { 
                            echo "<option value=".$result["SIT_ID"].">".$result["SIT_NOMBRE"]."</option>";
                        }
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Género</label>
                <select name="gen" required class="form-control">
                  <option></option>
                  <?php
                    $sql = "SELECT * FROM GENERO";
                    $respuesta = $con -> query($sql);
                    $filas = mysqli_num_rows($respuesta);
                    if($filas > 0)
                    {
                        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que 
                      { 
                            echo "<option value=".$result["GEN_ID"].">".$result["GEN_TIPO"]."</option>";
                        }
                    }
                  ?>
                </select>
              </div>

               <div class="form-group">
                <label>Comuna</label>
                <select name="com" required class="form-control">
                  <option></option>
                  <?php
                    $sql = "SELECT * FROM COMUNA";
                    $respuesta = $con -> query($sql);
                    $filas = mysqli_num_rows($respuesta);
                    if($filas > 0)
                    {
                        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que 
                      { 
                            echo "<option value=".$result["COM_ID"].">".$result["COM_NOMBRE"]."</option>";
                        }
                    }
                  ?>
                </select>
              </div>

               <div class="form-group">
                <label>Tipo de usuario</label>
                <select name="tusu" required class="form-control">
                  <option></option>
                  <?php
                    $sql = "SELECT * FROM TIPO_USUARIO";
                    $respuesta = $con -> query($sql);
                    $filas = mysqli_num_rows($respuesta);
                    if($filas > 0)
                    {
                        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que 
                      { 
                            echo "<option value=".$result["TUS_ID"].">".$result["TUS_TIPO"]."</option>";
                        }
                    }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Supermercado</label>
                <select name="sup" required class="form-control">
                  <option></option>
                  <?php
                    $sql = "SELECT sup_id, emp_nombre, sup_local FROM SUPERMERCADO, EMPRESA WHERE sup_empresa=emp_id;";
                    $respuesta = $con -> query($sql);
                    $filas = mysqli_num_rows($respuesta);
                    if($filas > 0)
                    {
                        while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que 
                      { 
                            echo "<option value=".$result["sup_id"].">".$result["emp_nombre"]."-".$result["sup_local"]."</option>";
                        }
                    }
                  ?>
                </select>
              </div>
              


                
                <div class="form-group">
                </div>
                <div class="col-xs-4"> 
                <button type="submit" name="enviar" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div>
                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>

  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
