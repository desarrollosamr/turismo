<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrator </title>
  <!-- Bootstrap Styles-->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FontAwesome Styles-->
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Morris Chart Styles-->
  <!-- <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />  -->
  <!-- Custom Styles-->
  <link href="../assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <script src="../../sweetalert2/sweetalert2.all.min.js"></script>
</head>
<style type="text/css">
  .div_acciones {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .centro {
    text-align: center;
  }
</style>

<body>
  <div id="wrapper" style="background: #B3C9E1;">

    <nav class="navbar navbar-default top-navbar" role="navigation">
      <div class="navbar-header">
        <!-- activar cuando en el menu existan varias opciobes(laterales)
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Navegación de palanca</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="../home.php"> <?php echo $_SESSION["user"]; ?> </a>
      </div>

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a></li>
            <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a></li>
            <li class="divider"></li>
            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
          </ul> <!-- /.dropdown-user -->
        </li> <!-- /.dropdown -->
      </ul>
    </nav>

    <!-- ojo, colocar aca(si se desea, las opciones para menu derecha)
    <nav class="navbar-default navbar-side" role="navigation" style="background-color: #d61414bf;">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li><a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Estado</a></li>        
   <li><a href="prueba00.php?id=0&x=2"> <i class="fa fa-desktop"></i> Nuevo Registro </a></li>
          <li><a href="messages.php"><i class="fa fa-desktop"></i> Boletines informativos</a></li>
          <li><a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Reserva de habitacion</a></li>
          <li><a href="payment.php"><i class="fa fa-qrcode"></i> Pago</a></li>
          <li><a  href="profit.php"><i class="fa fa-qrcode"></i> Lucro</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
        </ul>
      </div>
    </nav>      
    -->

    <div id="page-inner" style="margin: 1px 20px 10px 5px; padding: 1px 10px 10px 10px;">
      <div class="container-fluid">
        <div class="row" style="background: #E1B3B3;">
          <div class="col-md-5 col-sm-5">
            <h1 class="page-header" style="border-bottom: 0px; margin-bottom:5px;">Tipos <small>Documentos </small></h1>
          </div>
          <div class="col-md-7 col-sm-7" style="padding-top:15px;">
            <form id="frmsearch" name="frmsearch" action="#" class="form-inline navbar-right">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-sm-9" style="align-items:right">
                    <input type="text" class="form-control" style="width: 100%;" id="buscar" placeholder="Buscar por descripcion del tipo">
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button id="btnbus" type="button" class="btn btn-primary btn-block" x="bus" onclick="buscarobjMunicipios($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">Buscar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div> <!-- /. ROW  -->
        <?php/*
          include ('../db.php');
          $sql = "select * from roombook";
          $re = mysqli_query($con,$sql);
          $c =0;
          while($row=mysqli_fetch_array($re) )
          {
            $new = $row['stat'];
            $cin = $row['cin'];
            $id = $row['id'];
            if($new=="Not Conform")
            {
              $c = $c + 1;
            }
          }		*/
				?>
        <?php $pgLogin = "logueo.php";
        $ntype = "typedocumento";
        $btnmodal = "1"
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default" style="padding: 0px 15px 15px 15px !important;">
              <div class="panel-body">
                <!-- <div class="panel-group" id="accordion">	-->
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#" type="button" class="btn btn-success b1">
                        <i class="fa fa-plus fa-spin"> </i> Nuevo Tipo documento
                        <i class="fa fa-gear fa-fw"></i> </a>
                    </h4>
                  </div>
                  <div id="listado" class="table-responsive-md">
                    <?php include 'listado.php'; ?>
                  </div>
                </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="<?php echo 'modal' . $ntype; ?>" tabindex="-1" role="dialog">
    <!-- Modal1 -->
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="titModal"> <span>Tipo documento</span></h4>
          <!-- <img src="images/1.jpg" alt=" " class="img-responsive">-->
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="frm" action="#">
            <input type="hidden" name="action" id="action" value="">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="rtaAjax" id="rtaAjax" value="yes">
            <div class="form-group">
              <label for="nomDcto">Nombre</label>
              <input id="nomDcto" name="nomDcto" class="form-control" type="text" placeholder="Descripcion del tipo Documento" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <button type="button" id="btcerrar" class="btn btn-danger btn-block" data-dismiss="modal">Cancelar</button>
              </div>
              <div class="form-group col-md-6">
                <button type="submit" id="save" name="save" class="btn btn-primary btn-block saverecord">Confirmar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <br>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Scripts-->
  <!-- jQuery Js -->
  <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
  <!--
  <script src="../assets/js/jquery-1.10.2.js"></script>
  -->
  <!-- Bootstrap Js -->
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- Metis Menu Js -->
  <script src="../assets/js/jquery.metisMenu.js"></script>
  <!-- Morris Chart Js -->
  <!--
  <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
  <script src="../assets/js/morris/morris.js"></script> -->
  <!-- Custom Js -->
  <!-- <script src="../assets/js/custom-scripts.js"></script> -->
  <script type="text/javascript">
    /* de aca aprendi a usar ajax con calback 
      // --https://carlosvillu.com/como-devolver-la-respuesta-de-una-llamada-ajax/   
    */
    function buscarobjMunicipios(cr, pa, re) {
      let codsearch = $('#buscar').val();
      $('#buscar').val("");
      /*if (cr==""){
          mysweet("No se puede dejar vacio", "error");
        }else{*/
      // alert("cr="+cr+"\n pa="+pa+"\re="+re);
      url = "<?php echo 'listado.php' ?>";
      data = {
          cr: cr,
          pa: pa,
          re: re
        },
        $.ajax({
          type: "POST",
          url: url,
          data: data,
          success: function(r) {
            if (r != "error") {
              $('#listado').html(r);
            } else {
              mysweet("NO hay registro con ese dato", "error");
            }
          }
        });
      /*}*/
    }

    function mysweet(titulo, icono) {
      Swal.fire({
        title: titulo,
        icon: icono,
        showConfirmButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false
      });
    }
    
    //$(document).ready(function() {
    //$(".b<?php echo $btnmodal; ?>").click(function(e){
    $(".b1").click(function(e) {
      e.preventDefault();
      $("#nomDcto").prop('disabled', false);
      $("#action").val("new");
      $('#nomDcto').val("");
      $("#id").val("<?php echo openssl_encrypt("new", COD, KEY); ?>");
      $("#titModal").html("Nuevo " + "<span>Tipo documento</span>");
      $("<?php echo '#modal' . $ntype; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    });
    
    $(".saverecord").click(function(e) {
      e.preventDefault();
      let nuevo = $('#nomDcto').val();
      if ($('#nomDcto').val().length < 1) {
        mysweet("No puede dejar este campo vacio", "error");
      } else {
        doAjax(function(serverResponse) {
          //console.log( "serverResponse->"+ serverResponse + "myvar->"+myvar);
          if (serverResponse > 0) {
            mysweet("Error: Nombre repetido", "error");
          } else {
            //let myvar = $("#id").val();                   
            switch ($("#id").val()) {
              case '<?php echo openssl_encrypt("saveedit", COD, KEY); ?>':
                $("#nom" + $("#action").val()).text(nuevo);
                mysweet("Exito: Tipo actualizado", "success");
                break;
              case '<?php echo openssl_encrypt("savedelete", COD, KEY); ?>':
                console.log(serverResponse);
                mysweet("Exito: Registro Eliminado", "success");
                break;
              case '<?php echo openssl_encrypt("new", COD, KEY); ?>':
                mysweet("Exito: Tipo almacenado", "success");
                break;
            }
          }
        });
        $('#nomDcto').val("");
        $('#btcerrar').click();
        //$("<?php echo '#modal' . $ntype; ?>").modal("slow");
      }
    });

    function deletetype(id) {
      $("#action").val(id);
      //$('#nomDcto').val("");
      $("#id").val("<?php echo openssl_encrypt("delete", COD, KEY); ?>");
      $("#nomDcto").prop('disabled', true);
      $("#titModal").html("Eliminar " + "<span>Tipo documento</span>"); //+ id);
      doAjax(function(serverResponse) {
        $('#nomDcto').val(serverResponse);
        $("#id").val("<?php echo openssl_encrypt("savedelete", COD, KEY); ?>");
        //console.log( serverResponse );
      });
      $("<?php echo '#modal' . $ntype; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }

    function editatype(id) {
      $("#nomDcto").prop('disabled', false);
      $("#action").val(id);
      $('#nomDcto').val("");
      $("#id").val("<?php echo openssl_encrypt("edit", COD, KEY); ?>");
      $("#titModal").html("Edicion " + "<span>Tipo documento</span>");// + id);
      doAjax(function(serverResponse) {
        $('#nomDcto').val(serverResponse);
        $("#id").val("<?php echo openssl_encrypt("saveedit", COD, KEY); ?>");
        //console.log( serverResponse );
      });
      $("<?php echo '#modal' . $ntype; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }
    var doAjax = function(callback) {
      $.ajax({
        type: "POST",
        url: "ajaxtypo.php",
        data: $("#frm").serialize(),
        success: function(response) {
          //callback(response);
          callback(JSON.parse(response));
        }
      });
      // Nota que esta función ya no necesita devolver nada. Porque de eso se encarga nuestra función callback
    };
  </script>
</body>
</html>