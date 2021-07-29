<?php
session_start();
include_once('d:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');
$r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idh']);
?>
<!-- se muestra resultado de busqueda -->
	<div class="container-fluid" id="rtabusca" style="background-color:#ECF0BF; margin : 0 auto !important; padding: 0 !important; ">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 col-md-12 col-lg-12 quitar1">
					<h3>
						<?php echo $r[0]->nombOrg; ?>
					</h3>
					<span style="text-align:justify;">
						<?php echo $r[0]->desGeneral1; ?>
					</span>
					<br>
					<span style="text-align:justify;">
						<?php echo $r[0]->desGeneral2; ?>
					</span>
				</div>
			</div><br>
			<!-- se traen los servicios -->
			<?php
			$lservicios = "";
			$rservicios = tbOrganizacionData::getServicesHotel($_REQUEST['idh']);
			?>
			<div class="row ">
				<div class="col-sm-4 col-md-4 col-lg-4 quitar1">
					<?php if (count($rservicios) > 0) : ?>
						<div class="flexslider">
							<ul class="slides">
								<?php foreach ($rservicios as $img) :
									$lservicios .= $img['Servicios'] . ",";
									$ruta1 = "images/imghoteles/imgDefaultServices/" . trim($img['namedefault']);
									$ruta2 = "images/imghoteles/dir" . $_REQUEST['idh'] . "/imgServicios/" . $img['nameimagen'];;
									$nfile = empty(trim($img['nameimagen'])) ? $ruta1 : $ruta2;
								?>
									<li>
										<img class="img-thumbnail" src="<?php echo $nfile; ?>" alt="NO hay imagen">
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php else : ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-8 col-md-8 col-lg-8">
					<div class="card">
						<div class="card-body">
							<h3>Nuestros Servicios</h3><br>
							<p class="text-justify">
								<?php echo $lservicios;		?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Se traen las instalaciones -->
			<?php
			$linstlacion = "";
			$rsint = tbOrganizacionData::getInstalacionHotel($_REQUEST['idh']);
			if (count($rsint) > 0) {
				foreach ($rsint as $img) {
					$linstlacion .=  $img['instalacion'] . ", ";
				}
			?>
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<div class="card">
							<div class="card-body">
								<h3>Nuestros Instalaciones</h3><br>
								<p class="text-justify">
									<?php echo $linstlacion; ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="flexslider">
							<ul class="slides">
								<?php foreach ($rsint as $img) {
									$ruta1 = "images/imghoteles/imgDefaultinstalacion/" . trim($img['namedefault']);
									$ruta2 = "images/imghoteles/dir" . $_REQUEST['idh'] . "/imgInstalacion/" . $img['namefile'];;
									$nfile = empty(trim($img['namefile'])) ? $ruta1 : $ruta2;
								?>
								<li>
									<img class="img-thumbnail" src="<?php echo $nfile; ?>" alt="NO hay imagen">
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			<?php  } ?>
			<!-- se taren los accesos -->
			<?php
			$lstAccesos = "";
			$racceso = tbOrganizacionData::getAccesosHotel($_REQUEST['idh']);
			if (count($racceso) > 0) {
			?>
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="flexslider">
							<ul class="slides">
								<?php foreach ($racceso as $img) :
									$lstAccesos .=  $img['desAccesibilidad'] . ", ";
									$ruta1 = "images/imghoteles/imgDefaultAcceso/" . trim($img['namedefault']);
									$ruta2 = "images/imghoteles/dir" . $_REQUEST['idh'] . "/imgAccesos/" . $img['namefile'];
									$nfile = empty(trim($img['namefile'])) ? $ruta1 : $ruta2;
								?>
								<li>
									<img class="img-fluid img-thumbnail" src="<?php echo $nfile; ?>" alt="Sin Imagen ?>">
								</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8">
						<div class="card">
							<div class="card-body">
								<h3>Nuestros Accesos</h3><br>
								<p class="text-justify">
									<?php echo $lstAccesos;	?>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
			<!-- se traen las habitaciones -->
			<?php
				function createROWS($rshabitacion, $c)
				{
					global $nn;
					$j = 0;
					$ruta1 = "images/imghoteles/imgDefaultHabitacion/";
					$ruta2 = "images/imghoteles/dir" . $_REQUEST['idh'] . "/imgHabitacion/";					
					$srow ='<div class="row">';				
					while ($j <= 3){
						$j++;
						$nn = $nn + 1;
						if($nn < $c)
						{	
							$srow .= '
							<div class="col-md-3 col-sm-3">
								<div class="price-block">
									<div class="price-gd-top flexslider">
									
										<!-- <div class="flexslider"> -->
											<ul class="slides">';															
												if(empty(trim($rshabitacion[$nn]['namefile1'])) and (empty(trim($rshabitacion[$nn]['namefile1']))))
												{
													$srow .= '
														<li>
															<img class="img-fluid img-thumbnail" src="'. $ruta1 . $rshabitacion[$nn]['namedefault'].'">
														</li>';
												}else {
													$srow .= '
														<li>
															<img class="img-fluid img-thumbnail" src="' . $ruta2.$rshabitacion[$nn]['namefile1'] .'">
														</li>
														<li>
															<img class="img-fluid img-thumbnail" src="'. $ruta2.$rshabitacion[$nn]['namefile2'] . '">
														</li>';										
												}
											$srow .= '
											</ul>	
										<!-- </div> -->
										<h4>'.$rshabitacion[$nn]['nomtipo'].'</h4>
									</div>
									<div class="price-gd-bottom">
										<div>
											<span>Cantidad:&nbsp;</span><input type="number" name="hab' .$rshabitacion[$nn]['idtipoHab'] . '" min="0" style="width:45px;margin-top:10px;"/>
										</div>
										<!--
										<span class="price-list">
											<ul>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</span>
										-->
										<div class="price-selet">
											<h3><span>$'.$rshabitacion[$nn]['preciohabitacion'].'</span></h3>
											
										</div>
										
									</div>
								</div>
							</div>';
						}
					}
					$srow.= '</div>';
					return $srow;
				}
				$lsHabitacion = "";
				$rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idh']);			
				$nr = count($rshabitacion);			
				$nn = -1;
				echo "<h3>Habitaciones</h3>";
				echo "<form action='index.php?view=reservation.php' method='post'/>";
				echo "<input type='hidden' name='idh' value=" . $_REQUEST['idh'] . ">" ;
				if (count($rshabitacion) > 0) 
				{
					$resto  = count($rshabitacion) % 4 ;
					$entero =	intdiv(count($rshabitacion) , 4);					
					$tb = "";
					$fin= 0;				
					$fin = ($resto == 0) ? $entero : $entero + 1;					
					for ($i = 1; $i <= $fin; $i++) {
						$tb.= createROWS($rshabitacion, $nr);					
					}
					echo $tb;
				}
			?>
			<!--                                                       -->
			<!-- ***************************************************** -->
			<!-- -->
			<div class="row">
				<div class="col-md-12 col-sm-12">	
					<button type="submit" name="reservar" class="btn-widther">Reservar</button></form>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--
	<div class="copy">
		<p>© 2021 <a href="index.php">GRAMTour</a> </p>
	</div>
	-->
	<!-- //smooth scrolling -->
	<script>
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
		$('.flexslider').flexslider({
			animation: "fade",
			controlNav: false, // quitar los botones de "abajo" para navegar-desplazar
			animationSpeed: 600
		});
	</script>
</body>

</html>