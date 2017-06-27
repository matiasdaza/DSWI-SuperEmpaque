<?php 
include ('../conexion/conexion.php');
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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
              <img src="../imagenes/logo.jpg" class="user-image" alt="User Image">
              <?php
              if(isset($_SESSION['USUARIO'])){
                echo "<span>".$_SESSION['USUARIO']['USU_NOMBRES']."</span>";
              }
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../imagenes/logo.jpg" class="img-circle" alt="User Image">
                <?php
                    $tipousuario="Coordinador";
                    echo "<p>".$_SESSION['USUARIO']['USU_NOMBRES']." - ".$tipousuario."</p>";
                ?>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              <center>
                <div class="pull-left">
                  <a href="empaque/CambioContrasenia.php" class="btn btn-default btn-flat">Cambiar contraseña</a>
                </div>
                <div class="pull-right">
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
     
      <!--Menú home -->
      <ul class="sidebar-menu">
        <li class="header">Menú</li>
        <li class="active treeview">
          <a href="Coordinador.php">
            <i class="fa fa-home"></i> <span>Home</span> <!-- La class de aquí es para el icono -->
          </a>
        </li>
        <!-- Menú faltas -->
        <li class="treeview">
          <a href="empaque/mis_faltas.php">
            <i class="fa fa-exclamation"></i>
            <span>Mis faltas</span>
          </a>
        </li>
        <!-- Menú Justificaciones -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i>
            <span>Justificaciones</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="empaque/Mis_justificaciones.php"><i class="fa fa-circle-o"></i>Mis justificaciones</a></li>
            <li><a href="empaque/Crear_justificaciones.php"><i class="fa fa-circle-o"></i>Crear Justificaciones</a></li>
          </ul>
        </li>

        <li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <a class="btn btn-app">
                <i class="fa fa-edit"></i> Edit
              </a>
    </section>-->
    <section class="content-header">
      <h1>
        Reportes
        <?php 
          $fecha=date("Y")."-".date("m")."-".date("d");
          $sql = "SELECT tur_pinicio, tur_ptermino FROM turno WHERE '$fecha' BETWEEN TUR_PINICIO and TUR_PTERMINO;";  
          $respuesta = $con -> query($sql);
          if($row = $respuesta -> fetch_assoc()){
            echo "<small>"."Desde el ".$row["tur_pinicio"]." hasta el ".$row["tur_ptermino"]."</small>";
          }
        ?>
        <small></small>
      </h1>
      <a href="../pdf/ReporteGlobal.php" class="btn">
        <i  class="fa fa-download"></i> Descargar
      </a>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol>
    </section>

   <?php
      $con = new mysqli($servidor, $usuario, $password, $bd);
      $con->set_charset("utf8");
        global $con;
        $sql = "SELECT TUFA_FECHA, ttu_nombre, emp_nombre, sup_local, usu_run, USU_NOMBRES, usu_apat, usu_amat, tfa_nombre, tfa_valor,  est_tipo FROM tur_fal, usuario, empresa, supermercado, falta, tipo_falta, turno, tipo_turno, estado WHERE est_id!=2 and tufa_usuario=usu_run and TUFA_TURNO=tur_id and TUFA_FALTA=fal_id and fal_tipofalta=tfa_id and usu_supermerc=sup_id and sup_empresa=emp_id and tur_ttu=ttu_id and fal_estado=est_id and'$fecha' BETWEEN TUR_PINICIO and TUR_PTERMINO;";
        $respuesta = $con -> query($sql);
        $filas = mysqli_num_rows($respuesta);
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reportes globales</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
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
                </tr>
                </thead>

                <tbody>
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
                          echo "</tr>";
                      }
                }
                ?>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
