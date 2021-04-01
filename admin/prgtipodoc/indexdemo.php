    <?php
    session_start();
    if (!isset($_SESSION["usuario"])) header("Location:../index.php");
    $rutxx = "";
    if ($_SESSION["ruta"] == 0) {
      $_SESSION["ruta"] = 1;
      $rutxx = "../";
    }
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="utf-8">
      <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
      <title>sysJudicial - Consultorio Judicial</title>
      <meta name="description" content="Sistema juridico">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo $rutxx ?>font-awesome5.8.2/css/all.css">
      <!-- Ionicons -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
      <!-- Tempusdominus Bbootstrap 4 -->
      <!--    <link rel="stylesheet" href="public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
      <!-- iCheck -->
      <!--    <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
      <!-- JQVMap -->
      <!--    <link rel="stylesheet" href="public/plugins/jqvmap/jqvmap.min.css"> -->
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo $rutxx ?>public/dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <!--    <link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
      <!-- Daterange picker -->
      <!--    <link rel="stylesheet" href="public/plugins/daterangepicker/daterangepicker.css"> -->
      <!-- summernote -->
      <!--    <link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.css"> -->
      <!-- Google Font: Source Sans Pro -->
      <!-- jQuery -->
      <script src="<?php echo $rutxx ?>public/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="<?php echo $rutxx ?>public/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <!--    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
-->
      <!-- Bootstrap 4 -->
      <script src="<?php echo $rutxx ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <!--    <script src="public/plugins/chart.js/Chart.min.js"></script> -->
      <!-- Sparkline -->

      <!--     <script src="public/plugins/sparklines/sparkline.js"></script>   -->
      <!-- JQVMap -->
      <!--    <script src="public/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
      <!-- jQuery Knob Chart -->
      <!--    <script src="public/plugins/jquery-knob/jquery.knob.min.js"></script> -->
      <!-- daterangepicker -->
      <!--    <script src="public/plugins/moment/moment.min.js"></script> -->
      <!--    <script src="public/plugins/daterangepicker/daterangepicker.js"></script> -->
      <!-- Tempusdominus Bootstrap 4 -->
      <!--    <script src="public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
      <!-- Summernote -->
      <!--    <script src="public/plugins/summernote/summernote-bs4.min.js"></script> -->
      <!-- overlayScrollbars -->
      <!--    <script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
      <!-- AdminLTE App -->
      <script src="<?php echo $rutxx ?>public/dist/js/adminlte.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <!--    <script src="public/dist/js/pages/dashboard.js"></script> -->
      <!-- AdminLTE for demo purposes -->
      <!--    <script src="public/dist/js/demo.js"></script> -->
      <style type="text/css">
        .iframe-16-9 {
          position: relative;
          padding-bottom: 56.25%;
          padding-top: 35px;
          height: 0;
          overflow: hidden;
        }

        .iframe-16-9 iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }

        .colbarra {
          background: linear-gradient(#4A00E0, #8E2DE2);
          /*background: #A9CCE3;*/
        }

        .barraTitulo {
          color: #fff33b;
          font-size: 32px;
          font-weight: 600;
        }

        .colorIcono {
          background-color: #F8C471;
        }

        .div_acciones {
          display: -webkit-flex;
          display: -moz-flex;
          display: -ms-flex;
          display: -o-flex;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
      </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php
        //session_start();
        //global $ruta;
        //include_once $rutxx . "public/modulos/cabezote.php";
        /*echo "<pre>";
          echo "todas las variables GENERALES------>" . "<br>";
          print_r(get_defined_vars());
          echo ">----------LAS SESIONES------>" . "<br>";
          print_r($_SESSION);
          echo "<br>" . "request------>";
          print_r($_REQUEST);
          echo "</pre>";
          exit();*/
        //include_once $rutxx . "public/modulos/menu0.php";
        ?>
        <nav class="navbar navbar-expand-md colbarra">
          <div class="navbar-brand barraTitulo" href="#">
            Pruebas principal
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon colorIcono"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="navbar-nav">
              <a class="nav-item nav-link" title="Nuevo Registro" href="prueba00.php?id=0&x=2"><img src="../public/generales/header/user32x32.png" alt="imp32" /></a>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="btnpdf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../public/generales/header/pdf32x32.png" alt="pdf32" />
                  Crear PDF
                </button>
                <div class="dropdown-menu" aria-labelledby="btnpdf">
                  <a id="pagActual" class="dropdown-item" href="#">Pagina actual</a>
                  <a id="Todos" class="dropdown-item" href="#">Todos</a>
                </div>
              </div>
              <a class="nav-item nav-link" title="Ayuda" href="#"> <img src="../public/generales/header/hlp32x32.png" alt="hlp32" /></a>
              <a class="nav-item nav-link" title="Cerrar esta ventana" href="../indexppal.php"> <img src="../public/generales/header/exit32x32.png" alt="new32" /></a>
            </div>
          </div>
          <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="buscar" placeholder="Buscar por nombre">
            </div>
            <button type="button" class="btn btn-primary mb-2" onclick="buscarproductos($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">Buscar</button>
          </form>
        </nav>
        <div id="listado" class="table-responsive-md" style="height:95%; overflow:scroll;">
          <?php include 'listado.php';
          $_SESSION["ruta"] = 0;
          ?>
        </div>

        <?php
        //include_once "../public/modulos/inicio.php";
        include_once $rutxx . "public/modulos/footer.php";

        ?>
        <!-- Control Sidebar -->
        <aside id="abajo" class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
    </body>

    </html>