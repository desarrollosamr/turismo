<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("location:../index.php");
}
include_once("../modpublicos/conexion.php");
//include_once('conexion.php');
$con = new Conect_MySql();
// $nom = ucfirst(trim($data['nomstateReserva']));
//$query = "CALL SP_getinfoHotel()";
$query = "Select * From tbinfohotel";
$rst = mysqli_fetch_array($con->execute($query));
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
  .mx-auto {
    /*display: flex;*/
    /*display: flex; el cual vuelve al contenedor un elemento flex*/
    align-items: center;
    /*justify-content: center; le decimos a los elementos del contenedor flex que se ubiquen al centro del eje principal eje horizontal*/
    justify-content: center;
    /*align-items: center; estamos diciendo que queremos que los elementos dentro del contenedor flex se ubiquen en el centro del eje secundario eje vertical*/
    min-height: 100vh;
    /*min-height: 100vh; que significa tome como altura mínima del contenedor el total del alto de la ventana del navegador web utilizado.*/
  }
</style>

<body class="bg-primary">
  <!--  <div id="wrapper" style="background: #FEF9E7;"> -->
  <!-- ojo, tare la barra(menu) donde dice ADMIN
    encerrar todo en un div con clase    -->
  <?php include_once("../modpublicos/menuarriba.php"); ?>

  <!-- ojo, colocar aca(si se desea, las opciones para menu derecha) 
    encerrar todo en un div con clase
    -->
  <?php //include_once("../modpublicos/menuderecha.php"); 
  ?> 

  <!-- <div id="page-inner" style="margin: 1px 20px 10px 0px; padding: 1px 10px 10px 0px;"> -->
  <div class="container mx-auto">
    <!--<div class=""> -->

      <div class="row" style="background: #E1B3B3; margin-left:0px;border-right-width: 0px;border-right-style: solid;margin-right: 0px;">
        <div class="col-lg-12 col-md-12">
          <h1 class="page-header" style="border-bottom: 0px; margin-bottom:5px;">Datos <small>generales de la empresa</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="panel panel-default" style="padding: 0px 0px 0px 0px !important; margin-bottom: 0px;">
            <div class="panel-body">
              <!-- <div class="panel-group" id="accordion">	-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Nit: <span> 123456789012345</span>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="panel panel-default" style="padding: 0px 0px 0px 0px !important; margin-bottom: 0px;">
            <div class="panel-body">
              <!-- <div class="panel-group" id="accordion">	-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Telefono: <span> 123456789012345</span>
                    <!-- <a href="#" type="button" class="btn btn-success btnew">
                      <i class="fa fa-plus fa-spin"> </i> Crear estado habitaci&oacute;n
                      <i class="fa fa-gear fa-fw"></i> </a> -->
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="panel panel-default" style="padding: 0px 0px 0px 0px !important; margin-bottom: 0px;">
            <div class="panel-body" style="padding: 4px 4px 4px 4px;">
              <!-- <div class="panel-group" id="accordion">	-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Nombre: <span> 12345678901234567890123456789012345</span>
                    <!-- <a href="#" type="button" class="btn btn-success btnew">
                      <i class="fa fa-plus fa-spin"> </i> Crear estado habitaci&oacute;n
                      <i class="fa fa-gear fa-fw"></i> </a> -->
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="panel panel-default" style="padding: 0px 0px 0px 0px !important; margin-bottom: 0px;">
            <div class="panel-body">
              <!-- <div class="panel-group" id="accordion">	-->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    Correo: <span> 123456789012345123456789012345123456789012345</span>
                    <!-- <a href="#" type="button" class="btn btn-success btnew">
                      <i class="fa fa-plus fa-spin"> </i> Crear estado habitaci&oacute;n
                      <i class="fa fa-gear fa-fw"></i> </a> -->
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" row" style="background: #E1B3B3; margin-left:0px;border-right-width: 0px;border-right-style: solid;margin-right: 0px;">
        <div class="col-md-12 col-md-12">
          <h1 class="page-header" style="border-bottom: 0px; margin-bottom:5px;">Datos <small>generales de la empresa</small></h1>
        </div>
      </div>
    <!-- </div> -->
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
      /*
      var winSize = {
        wheight: $(window).height(),
        wwidth: $(window).width()
      };
      var modSize = {
        mheight: $("<?php echo '#modal' . $ntype; ?>").height(),
        mwidth: $("<?php echo '#modal' . $ntype; ?>").width()
      };
      $("<?php //echo '#modal' . $ntype; 
          ?>").css({
        //'background-color': '#ccc',
        'padding-top': ((winSize.wheight - (modSize.mheight / 2)) / 2),
      });*/
      /* $("<?php//echo '#modal' . $ntype; ?>").modal({
         backdrop: false,
         keyboard: false
       });*/
    }
    /*------------------------------------------------------------------------------------------------------------ */


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
                mysweet("Exito: Estado Actualizado", "success");
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
                mysweet("Exito: Ocupacion almacenada", "success");
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


    function fillformulario(id) {
      $("#action").val(id);
      $('#nameundMedida').val($('#nom' + id).html());
    }

    function fillrow(id) {
      $('#nom' + id).html($('#nameundMedida').val());
    }
  </script>
</body>

</html>