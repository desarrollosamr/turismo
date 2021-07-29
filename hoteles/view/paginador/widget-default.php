<?php
  //$path= __FILE__;
  
  global $p;
  global $x;
  $x ="";
  //$x = "core/modules/" . Module::$module . "/model/";
  //$p = "core/modules/" . Module::$module . "/view/paginador/widget-default.php";
  $p = "core/modules/ventas/view/paginador/widget-default.php";
?>
<script type="text/javascript">
  function buscarproductos(cr, pa, re) {
    url = '<?php echo $p; ?>'; //'listado.php';
    //url = 'listado.php';
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
        console.log(r);
        $('#listado').html(r);
      }
    });
  }
</script>
<div class="row">
  <div class="col-md-12">
    <div class="btn-group pull-right">
      <a href="index.php?view=home" class="btn btn-info"><i class="fa fa-home"></i> Regresar</a>
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-download"></i> Descargar <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="report/products-word.php">Word 2007 (.docx)</a></li>
      </ul>
      <a href="index.php?view=newproduct" class="btn btn-success"><i class="fa fa-cube"></i> Nuevo Producto</a>
    </div>
    <h1><i class='fa fa-reorder'></i> Lista de Productos</h1>
    <div class="clearfix"></div>
    <div class="row">
      <form>
        <div class="row">
          <div class="col-md-6">
            <input type="hidden" name="view" value="products">
            <input type="text" class="form-control" id="buscar" placeholder="Buscar por nombre/Apellido">
            <!-- <input type="text" name="product" class="form-control">-->
          </div>
          <div class="col-md-3">
            <button type="button" class="btn btn-primary mb-2" onclick="buscarproductos($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">
              <i class="glyphicon glyphicon-search"></i> Buscar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div id="listado" class="table-responsive-md" style="height:100%; overflow:scroll;">
      <?php include_once('widget-default1.php'); ?>
    </div>
  </div>
</div>
<!-- <br><br><br><br><br><br><br><br><br><br> -->

