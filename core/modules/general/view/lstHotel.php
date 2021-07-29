<?php
include_once('C:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');
session_start();
$xx = mt_rand(1, 2);
$tbusca = "datoshotel";
$tbltkn =  "tkna" . ((mt_rand(1, 2) == 1) ? date("His") . (time() + 1) . mt_rand(001, 500) : (time() + 1) . mt_rand(0001, 1000) . date("Hsi"));
$tbltmp =  "tknb" . ((mt_rand(1, 2) == 1) ? date("sHi") . mt_rand(501, 999) . (time() + 1) : mt_rand(1001, 9999) . date("iHs") . (time() + 1));
global $idciudad;
global $tnegocio;
global $nrorgtos;
$idciudad = $_REQUEST['bmuni'];
$tnegocio = $_REQUEST['bcate'];
$rtemporal = tbOrganizacionData::getdatahotelbasica($_REQUEST['bmuni'], $_REQUEST['bcate'], $tbltkn, $tbltmp);
$nrorgtos = count($rtemporal);

?>
	<!-- se muestra resultado de busqueda -->
	<div class="container-fluid" id="rtabusca" style="clear:both;background-color: #E2F7F4; margin : 0 auto !important;padding: 0 !important; ">
		<div class="container" id="lstHotel">
			<?php include_once("listahotel.php"); ?>
			<div class="quitaflex"></div>
		</div>
		<div class="quitaflex"> </div>
	</div> <!-- fin container-fluid> -->
	<script type="text/javascript" src="../../../../css/bootstrap431/js/bootstrap.js"></script>
	<script>
		function buscaRecord(cr, pa, re) {
			url = "<?php echo 'listahotel.php' ?>";
			data = {
					cr: cr,
					pa: pa,
					re : re,
					cn: <?php echo $nrorgtos; ?>,
					ci: <?php echo $idciudad; ?>,
					tn: <?php echo $tnegocio; ?>
				},
				$.ajax({
					type: "POST",
					url: url,
					data: data,
					success: function(r) {
						if (r != "error") {
							$('#lstHotel').html(r);
						} else {
							mysweet("NO hay registro con ese dato", "error");
						}
					}
				});
		}
		$("a[id*=myBt]").click(function(e) {
			e.preventDefault();
			var sdate = $(this).attr("vv");
			$("#myModal3").modal({
				backdrop: "static"
			});
		});
		$("button[id*=btR]").click(function(e) {
			e.preventDefault();
			var sdate = $(this).attr("vv");
			$("#mymodal0").modal({
				backdrop: "static"
			});
		});
		$("button[id*=bhr]").click(function(e) {
			e.preventDefault();
			var sdate = $(this).attr("vv");
			$("#myModal5").modal({
				backdrop: "static"
			});
		});
		$("button").click(function() {
			if ($(this).data('destino') == 'guardar') {} else {
				$("#myModal3").modal('hide');
			}
		});
		$(document).ready(function() {
			$('img[data-toggle="popover"]').popover();
		});
	</script>
</body>

</html>