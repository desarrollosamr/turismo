<?php
$edse = SellData::getById($_GET["id"]); ?>
<div class="row">
	<div class="col-md-8">
	<h1><small>Editar recaudos de reserva No.: </small><?php echo $_GET["id"] ?></h1>
  <?php if(isset($_COOKIE["prdupd"])):?>
    <p class="alert alert-info">La informacion del producto se ha actualizado exitosamente.</p>
  <?php setcookie("prdupd","",time()-18600); endif; ?>
	<br><br>
	<form class="form-horizontal" method="post" id="editsell" enctype="multipart/form-data" action="index.php?view=updatesell" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Efectivo</label>
    <div class="col-md-8">
      <input type="text" name="money" class="form-control" id="money" value="<?php echo $edse->monto_e; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Tarjeta 1</label>
    <div class="col-md-8">
     <input type="text" name="tarjeta1" class="form-control" id="tarjeta1" value="<?php echo $edse->monto_t; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">Tarjeta 2</label>
    <div class="col-md-8">
     <input type="text" name="tarjeta2" class="form-control" id="tarjeta2" value="" disabled="disabled">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
    <input type="hidden" name="sell_id" value="<?php echo $_GET["id"]; ?>">
      <button type="submit" class="btn btn-success">Actualizar venta</button>
    </div>
  </div>
</form>

<br><br><br><br><br><br><br><br><br>
	</div>
</div>
<script>
$(".form-control").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        //.replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});
</script>