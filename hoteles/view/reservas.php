<?php
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
}else{
	header("location:index.php?view=login_register_page.php&action=login");
}
?>
<script type="text/javascript">
function paginar(cr, pa, re) {
	  alert(cr + '' + pa + '' + re);
      codsearch = $('#buscar').val();
      $('#buscar').val("");
      /*if (cr==""){
          mysweet("No se puede dejar vacio", "error");
        }else{*/
      // alert("cr="+cr+"\n pa="+pa+"\re="+re);
      url = "listado.php",
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
</script>
<div class="row" style="background: #2467cc;">
	<div class="col-md-5 col-sm-5">
	<h1 class="page-header" style="border-bottom: 0px; margin-bottom:5px; color:white;">Actividades <small></small></h1>
	</div>
	<div class="col-md-7 col-sm-7" style="padding-top:15px;padding-bottom:15px;">
	<form id="frmsearch" name="frmsearch" action="#" class="form-inline navbar-right">
		<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9" style="align-items:right">
			<input type="text" class="form-control" style="width: 100%;" id="buscar" placeholder="Buscar ">
			</div>
			<div class="col-md-3 col-sm-3">
			<button id="btnbus" type="button" class="btn btn-primary btn-block" x="bus" onclick="buscarobjMunicipios($('#buscar').val(), $('#pphpagact').val(), $('#cboNumReg').val())">Buscar</button>
			</div>
		</div>
		</div>
	</form>
	</div>
</div>
<div class="row">&nbsp;</div>
<div class="row">
	<div class="border border-primary col-md-12">
		<div id="listado" class="table-responsive-md">
			<?php include 'listareservas.php'; ?>
		</div>

	</div>
</div>
<div class="row">
	<div class="col-md-12">
	</div>
</div>
