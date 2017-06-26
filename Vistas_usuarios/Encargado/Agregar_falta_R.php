<?php 
include ('../../conexion/conexion.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>¡Súper Empaque!</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="coordinador.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>E</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>¡Súper</b>Empaque!</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../imagenes/logo.jpg" class="user-image" alt="User Image">
              <?php
              if(isset($_SESSION['USUARIO'])){
                echo "<span>".$_SESSION['USUARIO']['USU_NOMBRES']."</span>";
              }
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../imagenes/logo.jpg" class="img-circle" alt="User Image">
                <?php
                    $tipousuario="Coordinador";
                    echo "<p>".$_SESSION['USUARIO']['USU_NOMBRES']." - ".$tipousuario."</p>";
                ?>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              <center>
                <div>
                  <a href="../registro_usuario/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </center>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../imagenes/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
            if(isset($_SESSION['USUARIO'])){
              echo "<p>".$_SESSION['USUARIO']['USU_NOMBRES']." ".$_SESSION['USUARIO']['USU_APAT']."</p>";
            }
          ?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENÚ</li>
        <li class="treeview">
          <a href="Coordinador.php">
            <i class="fa fa-home"></i> <span>Home</span> <!-- La class de aquí es para el icono -->
            <!-- <span class="pull-right-container"> esto es para que se despliegue el menú -->
            <!-- <i class="fa fa-angle-left pull-right"></i>-->
            <!--</span>-->
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-exclamation"></i>
            <span>Faltas</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="agregar_falta.php"><i class="fa fa-circle-o"></i>Agregar Falta</a></li>
            <li><a href="Eliminar_falta.php"><i class="fa fa-circle-o"></i> Eliminar Falta</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Modificar Falta</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="Crear_turnos.php">
            <i class="fa fa-calendar-check-o "></i> <span>Crear turnos</span> <!-- La class de aquí es para el icono -->
            <!-- <span class="pull-right-container"> esto es para que se despliegue el menú -->
            <!-- <i class="fa fa-angle-left pull-right"></i>-->
            <!--</span>-->
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="box-body">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        La falta no ha podido ser registrada, porfavor intentalo de nuevo.
        <?php
          echo "<h1>".mysqli_error($con)."</h1>";
        ?>
      </div>
    </div>

    <section class="content-header">
      <h1>
        Agregar Faltas
        <small>de empaques</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../coordinador.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="">Faltas</a></li>
        <li class="active">Agregar faltas</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Falta</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="M_agregar_falta.php" method="POST" method="POST" role="form">
                <!-- select -->
                <div class="form-group">
                  <label>Usuario</label>
                  <select name="usuario" required class="form-control">
                    <option></option>
                    <?php
                      $con = new mysqli($servidor, $usuario, $password, $bd);
                      $con->set_charset("utf8");
                      global $con;
                      //echo "<p>",$hola=date("Y").date("m").date("d"),"</p>";
                      $sql = "SELECT * FROM usuario";
                      $respuesta = $con -> query($sql);
                      $filas = mysqli_num_rows($respuesta);
                      if($filas > 0)
                      {
                          while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que se encuentre
                        { 
                              echo "<option value=".$result["USU_RUN"].">".$result["USU_NOMBRES"], " ", $result["USU_APAT"], "</option>";
                          }
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Turno</label>
                  <select name="turno" required class="form-control">
                    <option></option>
                    <?php
                      $fecha=date("Y")."-".date("m")."-".date("d");
                      $con = new mysqli($servidor, $usuario, $password, $bd);
                      $con->set_charset("utf8");
                      global $con;
                      //echo "<p>",$hola=date("Y").date("m").date("d"),"</p>";
                      $sql = "SELECT TUR_ID, TTU_NOMBRE ,TUR_FECHA  FROM turno, tipo_turno WHERE TUR_TTU=TTU_ID and '$fecha' BETWEEN TUR_PINICIO and TUR_PTERMINO";
                      $respuesta = $con -> query($sql);
                      $filas = mysqli_num_rows($respuesta);
                      if($filas > 0)
                      {
                          while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que se encuentre
                        {
                              echo "<option value=".$result["TUR_ID"].">".$result["TTU_NOMBRE"], " ", $result["TUR_FECHA"], "</option>";
                          }
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Falta</label>
                  <select name="tfal" required class="form-control">
                    <option></option>
                    <?php
                      $con = new mysqli($servidor, $usuario, $password, $bd);
                      $con->set_charset("utf8");
                      global $con;
                      //echo "<p>",$hola=date("Y").date("m").date("d"),"</p>";
                      $sql = "SELECT * FROM tipo_falta";
                      $respuesta = $con -> query($sql);
                      $filas = mysqli_num_rows($respuesta);
                      if($filas > 0)
                      {
                          while($result = $respuesta -> fetch_assoc()) //fetch_assoc() = devuelve un arreglo asociativo con el row en el que se encuentre
                        { 
                              echo "<option value=".$result["TFA_ID"].">".$result["TFA_NOMBRE"]."</option>";
                          }
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Fecha de ingreso de la falta</label>
                  <input type="text" class="form-control" placeholder=<?php $fecha=date("Y")."-".date("m")."-".date("d"); //Fecha del día donde se ingresa la falta
                      echo $fecha;
                ?> disabled>
                </div>
                <div class="col-xs-4"> 
                <button type="submit" name="enviar" class="btn btn-primary btn-block btn-flat" value="1">Agregar</button>
                </div>
                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
