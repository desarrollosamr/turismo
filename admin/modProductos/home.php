<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("location:../index.php");
}
/*define("BDW", "basehotel1");
  define("KEY", "tienda_curso_rodolfo_joya");  // ojo cambiar
  define("COD", "AES-128-ECB");*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrator </title>

  <!-- <script type="text/javascript" src="../../js/jquery-3.5.1.js"></script> 
  <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script> -->

  <!-- Bootstrap Styles-->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <!-- <link href="../assets/css/bootstrap40.min.css" rel="stylesheet" /> -->
  <!-- FontAwesome Styles-->
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Morris Chart Styles-->
  <!-- <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />  -->
  <!-- Custom Styles-->
  <link href="../assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <script src="../../sweetalert2/sweetalert2.all.min.js"></script>
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
</head>

<body>
  <div id="wrapper" style="background: #B3C9E1;">
    <!-- ojo, tare la barra(menu) donde dice ADMIN
    encerrar todo en un div con clase
    -->
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
            <h1 class="page-header" style="border-bottom: 0px; margin-bottom:5px;">Productos<small></small></h1>
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
        <?php
        $modnuevo = "new";
        $modnuevo = "new";
        $pgLogin = "logueo.php";
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
                      <a href="#" c="new" type="button" class="btn btn-success btnew">
                        <i class="fa fa-plus fa-spin"> </i> Crear Producto
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
  <!-- Modal ingresar -->
  <div class="modal fade" id="<?php echo 'modal' . $modnuevo; ?>" tabindex="-1" role="dialog">
    <!-- Modal1 -->
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #EF5ADF;border-radius: 5px;">
          <h4 id="titModal"> </h4>
        </div>
        <div class="modal-body">
          <form autocomplete="off" id="frm" action="#">
            <input type="hidden" name="action" id="action" value="">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="rtaAjax" id="rtaAjax" value="yes">
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Producto</label>
                <input id="nameprod" name="nameprod" class="form-control" type="text" placeholder="Nombre del producto" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Unidad Medida</label>
                <?php
                include_once("../modpublicos/conexion.php");
                $objrs = new clsProductos();
                $rs = $objrs->fillcbounidad();
                echo $rs;
                ?>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="nomDcto">Precio</label>
                <input id="priceprod" name="priceprod" class="form-control" type="text" placeholder="Precio venta" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Cantidad</label>
                <input id="stockprod" name="stockprod" class="form-control" type="text" placeholder="Precio venta" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="nomDcto">I.v.a</label>
                <input id="ivaprod" name="ivaprod" class="form-control" type="text" placeholder="IVA, sin punto" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Impuesto al consumo</label>
                <input id="imptoprod" name="imptoprod" class="form-control" type="text" placeholder="Precio venta" required>
              </div>
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


  <?php //include_once('modalmobiliario.php'); 
  ?>
  <!-- JS Scripts-->
  <!-- jQuery Js -->
  <!--  <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>
-->
  <script type="text/javascript" src="../../js/jquery-3.5.1.js"></script>
  <!-- <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>-->

  <!--
  <script src="../assets/js/jquery-1.10.2.js"></script>
  -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap Js -->
  <!--   <script src="../asset/js/popper.min.js"></script>-->
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
    var dataactual;
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


    /* -------------------------------------------------------------------------------------------------------- */
    /* revisar este ejemplo:(asi busque en google: centrar ventana modal bootstrap) https://codepen.io/mchimal/pen/eikpb */
    function centermodal() {
      var winSize = {
        wheight: $(window).height(),
        wwidth: $(window).width()
      };
      var modSize = {
        mheight: $("<?php echo '#modal' . $modnuevo; ?>").height(),
        mwidth: $("<?php echo '#modal'  . $modnuevo; ?>").width()
      };
      $("<?php echo '#modal' . $modnuevo; ?>").css({
        'padding-top': ((winSize.wheight - (modSize.mheight / 2)) / 2),
      });

    }
    /*------------------------------------------------------------------------------------------------------------ */

    $(".btnew").click(function(e) {
      e.preventDefault();
      document.getElementById("frm").reset();
      //var xx = $('#tr').attr("c")) + 1;
      $("#titModal").html("Nuevo " + "<span>Producto</span>"); //+ id);
      $('input').prop('disabled', false);
      $("#action").val("new");
      $("#id").val("<?php echo openssl_encrypt("new", COD, KEY); ?>");
      centermodal();
      $("<?php echo '#modal' . $modnuevo; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    });

    $(".saverecord").click(function(e) {
      e.preventDefault();
      var newAjax = function(datos, callback) {
        $.ajax({
          type: "POST",
          url: "prgAjax.php",
          data: datos,
          //data: $("#frm").serialize(),
          success: function(response) {
            console.log(response);
            //callback(response);
            callback(JSON.parse(response));
          }
        });
      };
      switch ($("#id").val()) {
        case '<?php echo openssl_encrypt("saveedit", COD, KEY); ?>':
          datos = $("#frm").serialize() + '&' + $.param(dataactual);
          newAjax(datos, function(serverResponse) {
            //console.log("saveedit-serverResponse--->" + serverResponse);
            if (serverResponse == 'ok') {
              let npi = $("#pphpagact").val();
              let npf = $("#cboNumReg").val();
              $('#<?php echo 'modal' . $modnuevo; ?>').modal('hide');
              buscarobjMunicipios('', npi, npf);
              mysweet("Exito: Producto Actualizado", "success");
            } else {
              mysweet("Error: " + serverResponse, "error");
            }
          });
          break;
        case '<?php echo openssl_encrypt("savedelete", COD, KEY); ?>':
          console.log(serverResponse);
          mysweet("Exito: Registro Eliminado", "success");
          break;
        case '<?php echo openssl_encrypt("new", COD, KEY); ?>':
          datos = $("#frm").serialize();
          newAjax(datos, function(serverResponse) {
            //console.log("*NEW**serverResponse--->" + serverResponse);
            if (serverResponse == 'ok') {
              let npi = $("#pphpagact").val();
              let npf = $("#cboNumReg").val();
              $('#<?php echo 'modal' . $modnuevo; ?>').modal('hide');
              buscarobjMunicipios('', npi, npf);
              mysweet("Exito: Producto almacenado", "success");
            } else {
              mysweet("Error: " + serverResponse, "error");
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
          callback(response);
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
          callback(response);
          callback(JSON.parse(response));
        }
      });
    };

    function deletetype(id) {
      $("#titModal").html("Eliminar " + "<span>Habitaci&oacute;n</span>"); //+ id);
      $('input').prop('disabled', true);
      fillformulario(id);
      $("#id").val("<?php echo openssl_encrypt("savedelete", COD, KEY); ?>");
      centermodal();
      $("<?php echo '#modal' . $modnuevo; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }

    function fillformulario(id) {
      $("#action").val(id);
      $('#namestateh').val($('#nom' + id).html());
    }

    function fillInput() {
      $('#nameprod').val(dataactual.namep);
      $('#priceprod').val(dataactual.price);
      $('#stockprod').val(dataactual.canty);
      $('#ivaprod').val(dataactual.iba);
      $('#imptoprod').val(dataactual.impo);
      $('#nameprod').val(dataactual.namep);
    }

    function datanow(d) {
      dataactual = {
        iba: $("#iva" + d).html(),
        impo: $("#imp" + d).html(),
        price: $("#pre" + d).html(),
        unime: $("#tipo" + d).html(),
        canty: $("#can" + d).html(),
        namep: $("#nom" + d).html()
      };
    }

    function editatype(d, id) {
      datanow(d);
      $("#titModal").html("Edici&oacute;n " + "<span>Productos</span>"); //+ id);
      $('input').prop('disabled', false);
      fillInput();
      $("#id").val(id);
      $("#action").val(d);
      centermodal();
      $("<?php echo '#modal' . $modnuevo; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }
  </script>
</body>

</html>