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
    <a href="../empaque.php" class="logo">
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
                $usuariorun=$_SESSION['USUARIO']['USU_RUN'];
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
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../imagenes/logo.jpg" class="img-circle" alt="User Image">
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
        <li class="header">MENÚ</li>
        <li class="treeview">
          <a href="../empaque.php">
            <i class="fa fa-home"></i> <span>Home</span> <!-- La class de aquí es para el icono -->
          </a>
        </li>
        <!-- Menú faltas -->
        <li class="active treeview">
          <a href="#">
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
            <li><a href="mis_justificaciones.php"><i class="fa fa-circle-o"></i>Mis justificaciones</a></li>
            <li><a href="crear_justificaciones.php"><i class="fa fa-circle-o"></i>Crear justificaciones</a></li>
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
    <section class="content-header">
      <h1>
        Mis faltas
        <?php 
          $fecha=date("Y")."-".date("m")."-".date("d");
          $sql = "SELECT tur_pinicio, tur_ptermino FROM turno WHERE '$fecha' BETWEEN TUR_PINICIO and TUR_PTERMINO;";  
          $respuesta = $con -> query($sql);
          if($row = $respuesta -> fetch_assoc()){
            echo "<small>"."Desde el ".$row["tur_pinicio"]." hasta el ".$row["tur_ptermino"]."</small>";
          }
        ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../empaque.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Mis Faltas</li>
      </ol>
    </section>
    <section class="content-header">
      

      <div class="col-xs-9">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h2 class="box-title">Indice de faltas</h2><small> El máximo son 15 puntos</small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                  $sql = "SELECT SUM(tfa_valor)
                          FROM tur_fal, falta, tipo_falta 
                          WHERE tufa_usuario=$usuariorun and tufa_falta=fal_id and fal_estado!=2 and fal_tipofalta = tfa_id;";  
                  $respuesta = $con -> query($sql);

                  if($row = $respuesta -> fetch_assoc()){
                    $puntaje=$row["SUM(tfa_valor)"];
                  }
                  
                  if($puntaje<5){ ?>
                    <div class="progress">
                      <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 34%">
                      </div>
                    </div>
                  <?php } ?>
                  

                  <?php if($puntaje>=5 && $puntaje<=10){ ?>
                    <div class="progress">
                        <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 58%">                      
                      </div>
                    </div>
                  <?php } ?>
                  

                  <?php if($puntaje>10 && $puntaje<15){ ?>
                    <div class="progress">
                      <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      </div>
                    </div>
                  <?php }    
                ?>
                <?php if($puntaje>=15){ ?>
                    <div class="progress">
                      <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> Has superado el máximo de faltas
                      </div>
                    </div>
                  <?php }    
                ?>      

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <div class="col-xs-3"> 
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-pencil-square-o"></i>

            <h3 class="box-title">Puntaje total de faltas</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <center><?php echo "<h3>".$puntaje."</h3>" ?></center>
            
          </div>
      </div>

    </section>
   <?php
      $con = new mysqli($servidor, $usuario, $password, $bd);
      $con->set_charset("utf8");
        global $con;
        $sql = "SELECT TUFA_FECHA, ttu_nombre, emp_nombre, sup_local, usu_run, USU_NOMBRES, usu_apat, usu_amat, tfa_nombre, tfa_valor,  est_tipo
                FROM tur_fal, usuario, empresa, supermercado, falta, tipo_falta, turno, tipo_turno, estado
                WHERE tufa_usuario=usu_run and usu_run=$usuariorun and TUFA_TURNO=tur_id and TUFA_FALTA=fal_id and fal_tipofalta=tfa_id and usu_supermerc=sup_id and sup_empresa=emp_id and tur_ttu=ttu_id and fal_estado=est_id;

    ";
        $respuesta = $con -> query($sql);
        $filas = mysqli_num_rows($respuesta);
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faltas personales</h3>

              <div class="box-tools">
                <!--<div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>-->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Fecha</th>
                  <th>Turno</th>
                  <th>Empresa</th>
                  <th>Local</th>
                  <th>RUN</th>
                  <th>Nombres</th>
                  <th>Apellido Paterno</th>
                  <th>Falta</th>
                  <th>Valor</th>
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
                            echo "<td>", $result["tfa_nombre"],"</td>" ;
                            echo "<td>", $result["tfa_valor"],"</td>" ;
                            if($result["est_tipo"]=="Aceptado"){
                              echo '<td><span class="label label-success">Aceptado</span></td>';
                            }elseif($result["est_tipo"]=="Rechazado"){
                              echo '<td><span class="label label-danger">Rechazado</span></td>';
                            }elseif($result["est_tipo"]=="Pendiente"){
                              echo '<td><span class="label label-primary">Pendiente</span></td>';
                            }
                            echo "</tr>";
                        }
                  }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
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
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
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
