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
  <!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
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
    <!-- ojo, tare la barra(menu) donde dice ADMIN
    encerrar todo en un div con clase    -->
    <?php include_once("../modpublicos/menuarriba.php"); ?>

    <!-- ojo, colocar aca(si se desea, las opciones para menu derecha) 
    encerrar todo en un div con clase
    -->
    <?php //include_once("../modpublicos/menuderecha.php"); 
    ?>

    <div id="page-inner" style="margin: 1px 20px 10px 5px; padding: 1px 10px 10px 10px;">
      <div class="container-fluid">
        <div class="row" style="background: #E1B3B3;">
          <div class="col-md-5 col-sm-5">
            <h1 class="page-header" style="border-bottom: 0px; margin-bottom:5px;">Unidades <small>de medida</small></h1>
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
        <?php $pgLogin = "logueo.php";
        $ntype = "mobiliario";
        $btnmodal = "nuevo"
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default" style="padding: 0px 15px 15px 15px !important;">
              <div class="panel-body">
                <!-- <div class="panel-group" id="accordion">	-->
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#" type="button" class="btn btn-success btnew">
                        <i class="fa fa-plus fa-spin"> </i> Crear estado habitaci&oacute;n
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
        <div class="modal-header" style="background-color: #F4D03F;border-radius: 5px;">
          <h4 id="titModal"> </h4>
          <!-- <img src="images/1.jpg" alt=" " class="img-responsive">-->
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="frm" action="#">
            <input type="hidden" name="action" id="action" value="">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="rtaAjax" id="rtaAjax" value="yes">
            <div class="form-group">
              <label for="nomDcto">Nombre</label>
              <input id="nameundMedida" name="nameundMedida" class="form-control" type="text" placeholder="Nombre del Medio" required>
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
    /* OJO-----
      aca aprendi a usar ajax con calback 
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
    //$(".b<?php// echo $btnmodal; ?>").click(function(e){

    /* -------------------------------------------------------------------------------------------------------- */
    /* revisar este ejemplo:(asi busque en google: centrar ventana modal bootstrap) https://codepen.io/mchimal/pen/eikpb */
    function centermodal() {
      var winSize = {
        wheight: $(window).height(),
        wwidth: $(window).width()
      };
      var modSize = {
        mheight: $("<?php echo '#modal' . $ntype; ?>").height(),
        mwidth: $("<?php echo '#modal' . $ntype; ?>").width()
      };
      $("<?php echo '#modal' . $ntype; ?>").css({
        //'background-color': '#ccc',
        'padding-top': ((winSize.wheight - (modSize.mheight / 2)) / 2),
      });
      /* $("<?php//echo '#modal' . $ntype; ?>").modal({
         backdrop: false,
         keyboard: false
       });*/
    }
    /*------------------------------------------------------------------------------------------------------------ */
    $(".btnew").click(function(e) {
      e.preventDefault();
      document.getElementById("frm").reset();
      $("#titModal").html("Nuevo " + "<span>Unidad de medida</span>"); //+ id);
      $('input').prop('disabled', false);
      $("#action").val("new");
      $("#id").val("<?php echo openssl_encrypt("new", COD, KEY); ?>");
      centermodal();
      $("<?php echo '#modal' . $ntype; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    });

    $(".saverecord").click(function(e) {
      e.preventDefault();
      let npi = $("#pphpagact").val();
      let npf = $("#cboNumReg").val();
      switch ($("#id").val()) {
        case '<?php echo openssl_encrypt("saveedit", COD, KEY); ?>':
          doAjax(function(serverResponse) {
            //console.log("saveedit-serverResponse--->" + serverResponse);
            switch (serverResponse) {
              case '0':
                fillrow($("#action").val());
                mysweet("Exito: Registro Actualizado", "success");
                break;
              case '1':
                mysweet("Error: Nombre ya existe", "error");
                break;
              case '2':
                mysweet("Error: Nombre no valido", "error");
                break;
            }
          });
          break;
        case '<?php echo openssl_encrypt("savedelete", COD, KEY); ?>':
          console.log(serverResponse);
          mysweet("Exito: Registro Eliminado", "success");
          break;
        case '<?php echo openssl_encrypt("new", COD, KEY); ?>':
          doAjax(function(serverResponse) {
            //console.log("*NEW**serverResponse--->" + serverResponse);
            switch (serverResponse) {
              case '0':
                $('#btcerrar').click();
                buscarobjMunicipios('', npi, npf);
                mysweet("Exito: Unidad medida almacenada", "success");
                break;
              case '1':
                mysweet("Error: Nombre ya existe", "error");
                break;
              case '2':
                mysweet("Error: Nombre no valido", "error");
                break;
            }
          });
          break;
      }
    });

    var valAjax = function(callback) {
      $.ajax({
        type: "POST",
        url: "prgAjax.php",
        data: $("#frm").serialize(),
        success: function(response) {
          //callback(response);
          callback(JSON.parse(response));
        }
      });
    };
    var doAjax = function(callback) {
      $.ajax({
        type: "POST",
        url: "prgAjax.php",
        data: $("#frm").serialize(),
        success: function(response) {
          //callback(response);
          callback(JSON.parse(response));
        }
      });
      // Nota que esta función ya no necesita devolver nada. Porque de eso se encarga nuestra función callback
    };

    function deletetype(id) {
      $("#titModal").html("Eliminar " + "<span>Unidad de medida</span>"); //+ id);
      $('input').prop('disabled', true);
      fillformulario(id);
      $("#id").val("<?php echo openssl_encrypt("savedelete", COD, KEY); ?>");
      centermodal();
      $("<?php echo '#modal' . $ntype; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }

    function fillformulario(id) {
      $("#action").val(id);
      $('#nameundMedida').val($('#nom' + id).html());
    }

    function fillrow(id) {
      $('#nom' + id).html($('#nameundMedida').val());
    }

    function editatype(id) {
      $("#titModal").html("Edici&oacute;n " + "<span>Unidad de medida</span>"); //+ id);
      $('input').prop('disabled', false);
      fillformulario(id);
      $("#id").val("<?php echo openssl_encrypt("saveedit", COD, KEY); ?>");
      centermodal();
      $("<?php echo '#modal' . $ntype; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }
  </script>
</body>

</html>