<?php
session_start();
if (!isset($_SESSION["usuario"])) header("Location:../index.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php include_once("../public/modulos/headlink.php"); ?>
  <style type="text/css">
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
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-md colbarra">
      <div class="navbar-brand barraTitulo" href="#">
        Tipo Documentos
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
          <input type="text" class="form-control" id="buscar" placeholder="Buscar por nombre/Apellido">
        </div>
        <button type="button" class="btn btn-primary mb-2" onclick="buscarobjMunicipios($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">Buscar</button>
      </form>
    </nav>
    <div id="listado" class="table-responsive-md" style="height:95%; overflow:scroll;">
      <?php include 'listado.php'; ?>
    </div>
  </div>
  <?php include_once("../public/modulos/footer.php"); ?>
  <?php include_once("../public/modulos/footerlink.php"); ?>
</body>

</html>
<<script language='javascript'>>
  $(document).ready(function() {

  });
  $("#pagActual").click(function(e) {
    var npag = $("#pag").attr("xx");
    //var npag =$('#cboNumReg').val()
    mysweet("Pagina a imprimir->" + npag, "success")
  });
  $("#Todos").click(function(e) {
    mysweet("Se imprimen todos", "success")
  });
</script>
<<script language='javascript'>>
  function buscarobjMunicipios(cr, pa, re) {
    url = 'listado.php';
    data = {
      cr: cr,
      pa: pa,
      re: re
    };
    $.ajax({
      type: "POST",
      url: url,
      data: data,
      success: function(r) {
        $('#listado').html(r);
      }
    });
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
</script>