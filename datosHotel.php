<?php
session_start();
/*
  if (!isset($_REQUEST['action'])){
  	//session_destroy();
		echo '<meta http-equiv="refresh" content="1;url=index.php">';  	
  	//header("location:index.php");
    exit;
  }
  */
/*
  include_once "allfrontend/modelfron/municipiosData.php";
	include_once "allfrontend/modelfron/categoryData.php";	
	include_once "allfrontend/modelfron/tbhotelClienteData.php";
	*/
include_once "allfrontend/modelfron/tbOrganizacionData.php";
//include_once "bdcon.php";
//$images = get_imgs();
//print_r($_SESSION);
/*echo "Datos recibidos->"."<br>";
	print_r($_REQUEST);
	echo "<br>";
	*/
//include('Admin/modpublicos/conexion.php');
//echo "Datos del hotel con ID(" . $_REQUEST['idh'] . ")....";
//$r=tbhotelClienteData::getbuscaHotel($_REQUEST['bmuni'], $_REQUEST['bcate']);
$r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idh']);
//echo "prgAjax->(buscarhotel) dentro del switch";
//echo $_REQUEST['bmuni']."<br>";
//echo $_REQUEST['bcate']."<br>";	
//echo "<pre>";
//print_r($_REQUEST);
//print_r($r);
//echo "</pre>";
//die();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>publiTour prueba</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort, Campestre, Fincas, Hotel, turismo" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- //for-mobile-apps -->
	<!--  <link href="css/icomoon.css"  rel="stylesheet">	 -->
	<link href="css/bootstrap431/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/flexslider/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- lightbox2 -->
	<!-- <link rel="stylesheet" href="pruebas/lightbox2-dev/lightbox2-dev/dist/css/lightbox.css"> -->
	<!-- fuentes de google(descargar) -->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="css/flexslider/flexslider.js"></script>
	<script type="text/javascript" src="css/bootstrap431/js/popper.js"></script>
	<script type="text/javascript" src="css/bootstrap431/js/bootstrap.js"></script>
	<style type="text/css">
		.quitar {
			padding: 0px 5px 0px 5px !important;
			/*margin-bottom: 0px !important; */
			margin: 0 auto !important;
		}
	</style>
</head>
<body>
	<!-- header -->
	<!--
	<div class="banner-top">
		<div class="social-bnr-agileits">
			<ul class="social-icons3">
				<li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook icon-border facebook"> </a></li>
				<li><a href="https://twitter.com/" target="_blank" class="fa fa-twitter icon-border twitter"> </a></li>
				<li><a href="https://plus.google.com/u/0/" target="_blank" class="fa fa-google-plus icon-border googleplus"> </a></li>
			</ul>
		</div>
		<div class="contact-bnr-w3-agile">
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@facturacionweb.site">desarrollosamr@gmail.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>321-230-4261</li>			
				<li class="s-bar">
					<div class="search">
						<input class="search_box" type="checkbox" id="search_box">
						<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
						<div class="search_form">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder=" " required=" " />
								<input type="submit" value="Search">
							</form>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
  -->
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-collapse-1">
						<span class="sr-only">Palanca de navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php"> Hotel <span>diario</span>
							<p class="logo_w3l_agile_caption">Disfruta tu descanso</p>
						</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<?php $pgLogin = "logueo.php";
				$nSesion = "sesion";
				$nmodal
				?>
				<div class="collapse navbar-collapse navbar-right" id="bs-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<!-- <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Casa</a></li> -->
							<!--	<li class="menu__item"><a href="#team" class="menu__link scroll">Equipo</a></li> -->
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Galería</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Habitaciones</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contáctenos</a></li>
							<!-- <li class="menu__item"><a href="#about" class="menu__link scroll">Registrarse</a></li>		 -->
							<li class="dropdown menu__item">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Registro
									<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Admin">Ingresar</a></li>
									<li><a class="<?php echo $nSesion ?>" href="#">Inicia sesion(modal)</a></li>
									<li><a href="<?php echo $pgLogin; ?>">Registrase</a></li>
									<!-- <li><a href="<?php //echo $pgLogin; 
																		?>">Page 1-3</a></li> -->
								</ul>
							</li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">Acerca de</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
	<!-- se muestra resultado de busqueda -->
	<div class="container-fluid" id="rtabusca" style="background-color:#ECF0BF; margin : 0 auto !important; padding: 0 !important; ">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 col-md-12 col-lg-12 quitar">
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
				<div class="col-sm-4 col-md-4 col-lg-4 quitar">
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
						<!--						<img class="img-fluid img-thumbnail" src="https://placeimg.com/640/480/arch" /> -->
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
							<!--						<img class="img-fluid img-thumbnail" src="https://placeimg.com/640/480/arch" /> -->
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
											<h3><span>$</span>'.$rshabitacion[$nn]['preciohabitacion'].'</h3>
											<a href="admin/reservation.php"> Reservar ahora</a>
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
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- fin container-fluid> -->
	<!-- modal(myModal3) -->
	<div class="modal fade" id="myModal3" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title"><strong>Nueva</strong> especialidad</h3>
				</div>
				<div class="modal-body" style="background-color:#D9F7F0">
					<form role="form" autocomplete="off" name="frm" id="frm" method="post" action="">
						<fieldset>
							<label>Nombre Especialidad</label>
							<input type="text" id="nomSpecial" name="nomSpecial" class="form-control" placeholder="Ingrese Nombre Especializaci&oacute;n" pattern="[a-zA-Z]" required="">
						</fieldset>
						<br>
						<button type="submit" name="submit" class="btn btn-primary" title="Guardar registro" id="save" data-destino="guardar" value="save">
							<i class="fa fa-save"></i> Guardar
						</button>
						<button type="button" class="btn btn-danger" title="Cancelar el proceso" id="cancel" data-destino="cancela">
							<i class="fa fa-times-circle"></i> Cerrar
						</button>

					</form>
				</div>
				<div class="modal-footer"> </div>
			</div>
		</div>
	</div>
	<!-- -->
	<div class="modal fade" id="mymodal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<form action="index.php" method="post">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Hola</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Bienvenido a la ventana modal Boostrap 4</h4>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Escribe tu email...">
							<small id="emailHelp" class="form-text text-muted">Escribe tu email. Esto es un ejemplo. Tu email no queda registrado en ningun lugar.</small>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<button type="submit" name="submitSave" class="btn btn-primary">Guardar cambios</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- -->
	<div class="modal fade" id="myModal5" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="padding: 7px 30px 2px 30px;">
					<h3 class="modal-title"><strong>Nueva</strong> especialidad</h3>
				</div>
				<div class="modal-body" style="background-color:#D9F7F0">



					<div id="stodo" class="tab-pane fade in active ctx" style="background-color:red;">
						<form method="post" class="colorlib-form">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>
										<div class="form-field">
											<input type="text" id="location" class="form-control" placeholder="Search Location">
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>
										<div class="form-field">
											<input type="text" id="fx00" name="fx00" class="form-control  f1" placeholder="Check-in date">
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>
										<div class="form-field">
											<input type="text" id="fx01" name="f01x" class="form-control  f1" placeholder="Check-out date">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>
										<div class="form-field">
											<select name="people" id="people" class="form-control">
												<option value="#">1</option>
												<option value="#">2</option>
												<option value="#">3</option>
												<option value="#">4</option>
												<option value="#">5+</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<input type="submit" op="1" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
								</div>
							</div>
						</form>
					</div>



					<form role="form" autocomplete="off" name="frm" id="frm" method="post" action="">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 thumbnail">
								<a href="images/imgHoteles/hot3/hot31.jpg" data-lightbox="hot3" data-title="col3 imagen1.">
									<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
								</a>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 thumbnail">
								<a href="images/imgHoteles/hot3/hot31.jpg" data-lightbox="hot3" data-title="col3 imagen1.">
									<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
								</a>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 thumbnail">
								<a href="images/imgHoteles/hot3/hot31.jpg" data-lightbox="hot3" data-title="col3 imagen1.">
									<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
								</a>
							</div>
						</div>
						<div id="stodo" class="tab-pane fade in active ctx" style="background-color:red;">
							<form method="post" class="colorlib-form">
								<div class="row">
									<div class="col-md-3">

									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>
											<div class="form-field">
												<input type="text" id="fx00" name="fx00" class="form-control  f1" placeholder="Check-in date">
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>
											<div class="form-field">
												<input type="text" id="fx01" name="f01x" class="form-control  f1" placeholder="Check-out date">
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>
											<div class="form-field">
												<select name="people" id="people" class="form-control">
													<option value="#">1</option>
													<option value="#">2</option>
													<option value="#">3</option>
													<option value="#">4</option>
													<option value="#">5+</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<input type="submit" op="1" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
									</div>
								</div>
							</form>
						</div>
						<fieldset>
							<label>Nombre Especialidad</label>
							<input type="text" id="nomSpecial" name="nomSpecial" class="form-control" placeholder="Ingrese Nombre Especializaci&oacute;n" pattern="[a-zA-Z]" required="">
						</fieldset>
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 thumbnail">
								<a href="images/imgHoteles/hot3/hot31.jpg" data-lightbox="hot3" data-title="col3 imagen1.">
									<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
								</a>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 thumbnail">
								<a href="images/imgHoteles/hot3/hot31.jpg" data-lightbox="hot3" data-title="col3 imagen1.">
									<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
								</a>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 thumbnail">
								<a href="images/imgHoteles/hot3/hot31.jpg" data-lightbox="hot3" data-title="col3 imagen1.">
									<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
								</a>
							</div>
						</div>
						<br>
						<button type="submit" name="submit" class="btn btn-primary" title="Guardar registro" id="save" data-destino="guardar" value="save">
							<i class="fa fa-save"></i> Guardar
						</button>
						<button type="button" class="btn btn-danger" title="Cancelar el proceso" id="cancel" data-destino="cancela">
							<i class="fa fa-times-circle"></i> Cerrar
						</button>

					</form>
				</div>
				<div class="modal-footer"> </div>
			</div>
		</div>
	</div>
	<!-- -->
	<div class="copy">
		<p>© 2018 <a href="index.php">AMENECER</a> </p>
	</div>
	<!-- <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script> -->

	<!-- <script src="pruebas/lightbox2-dev/lightbox2-dev/dist/js/lightbox.js"></script> -->
	<!-- //smooth scrolling -->
	<script>
		/*
		lightbox.option({
			'showImageNumberLabel': false,
			'disableScrolling': true,
			'resizeDuration': 150,
			'wrapAround': true
		});
		*/
		/*   
		$("#myBtn3").click(function() { 
			//alert("me pulsastes");		  
		  $("#myModal3").modal({
		    backdrop: "static"
		  });
		});
		*/
		$("a[id*=myBt]").click(function(e) {
			e.preventDefault();
			var sdate = $(this).attr("vv");
			//alert("ggjhjgj");
			$("#myModal3").modal({
				//  $("#mymodal0").modal({
				backdrop: "static"
			});
			/*var fdata = $("#frm1").serialize();
			var xdpto = $("#buscadpto").val();
			var xmuni = $("#buscamuni").val();
			var stipo = $("#buscatipo").val();*/
		});
		$("button[id*=btR]").click(function(e) {
			e.preventDefault();
			var sdate = $(this).attr("vv");
			//alert("ggjhjgj");
			/*var fdata = $("#frm1").serialize();
			var xdpto = $("#buscadpto").val();
			var xmuni = $("#buscamuni").val();
			var stipo = $("#buscatipo").val();*/
			$("#mymodal0").modal({
				//  $("#mymodal0").modal({
				backdrop: "static"
			});
		});
		$("button[id*=bhr]").click(function(e) {
			e.preventDefault();
			var sdate = $(this).attr("vv");
			//alert("ggjhjgj");
			/*var fdata = $("#frm1").serialize();
			var xdpto = $("#buscadpto").val();
			var xmuni = $("#buscamuni").val();
			var stipo = $("#buscatipo").val();*/
			$("#myModal5").modal({
				//  $("#mymodal0").modal({
				backdrop: "static"
			});
		});
		$("button").click(function() {
			if ($(this).data('destino') == 'guardar') {} else {
				//alert('Cerrar');
				$("#myModal3").modal('hide');
			}
		});
		$(document).ready(function() {
			$('img[data-toggle="popover"]').popover();
			//$("img[id*=myRese]").popover();
		});


		$('.flexslider').flexslider({
			animation: "fade",
			controlNav: false, // quitar los botones de "abajo" para navegar-desplazar
			animationSpeed: 600
			//slideshowSpeed: 1600
		});
	</script>
</body>

</html>