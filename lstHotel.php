<?php
//session_start();
/*
  if (!isset($_REQUEST['action'])){
  	//session_destroy();
		echo '<meta http-equiv="refresh" content="1;url=index.php">';  	
  	//header("location:index.php");
    exit;
  }
  */
include_once "allfrontend/modelfron/municipiosData.php";
include_once "allfrontend/modelfron/categoryData.php";
include_once "allfrontend/modelfron/tbhotelClienteData.php";
include_once "allfrontend/modelfron/tbOrganizacionData.php";
//print_r($_SESSION);
include_once 'Admin/modpublicos/conexion.php';

//$r=tbOrganizacionData::getbuscaHotel(39, 2);
$xx = mt_rand(1, 2);
$tbusca = "datoshotel";
$tbltkn =  "tkna" . ((mt_rand(1, 2) == 1) ? date("His") . (time() + 1) . mt_rand(001, 500) : (time() + 1) . mt_rand(0001, 1000) . date("Hsi"));
$tbltmp =  "tknb" . ((mt_rand(1, 2) == 1) ? date("sHi") . mt_rand(501, 999) . (time() + 1) : mt_rand(1001, 9999) . date("iHs") . (time() + 1));
global $idciudad;
global $tnegocio;
$idciudad = $_REQUEST['bmuni'];
$tnegocio = $_REQUEST['bcate'];
$rtemporal = tbOrganizacionData::getdatahotelbasica($_REQUEST['bmuni'], $_REQUEST['bcate'], $tbltkn, $tbltmp);
$nrorgtos = count($rtemporal);

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
	<!-- <link href="css/icomoon.css"  rel="stylesheet">	-->
	<link href="css/bootstrap431/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- <link href="fonts1/flaticon/font/flaticon.css" rel="stylesheet">	-->
	<!--<link href="pruebasmenu/style01.css" rel="stylesheet">	   -->
	<!-- 	<link rel="stylesheet" href="pruebas/lightbox2-dev/lightbox2-dev/dist/css/lightbox.css"> -->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
	<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<style type="text/css">
		.quitar {
			padding: 0px 0px 5px 7px !important;
			/*margin-bottom: 0px !important; */
			margin: 0 auto !important;
		}

		.namehotel {
			padding: 0px 15px !important;
			color: red;
			font-size: larger;
		}

		.styledato {
			padding: 0px 25px !important;
			text-align: justify;
			margin: 0 auto !important;
		}

		.dos {
			display: flex;
			flex-direction: column;
			/* flex-wrap: nowrap; */
		}

		.quitaflex {
			display: flex;
		}

		.stylerow {
			border-style: solid;
			border-color: #AAB7B8;
		}
	</style>
</head>

<body>
	<!-- header -->
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
	<div class="w3_navigation">
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
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
	<div class="container-fluid" id="rtabusca" style="clear:both;background-color: #E2F7F4; margin : 0 auto !important;                                               padding: 0 !important; ">
		<div class="container" id="lstHotel">
			<?php include_once("listahotel.php"); ?>
			<div class="quitaflex"></div>
		</div>
		<div class="quitaflex"> </div>
	</div> <!-- fin container-fluid> -->
	<!-- ***************** -->
	<!-- **** Modales **** -->
	<!-- ***************** -->
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
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 quitar">
							<img class="img-fluid img-thumbnail" src="images/imgHoteles/hot3/hot31.jpg" alt="" />
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 quitar">
							<img class="img-fluid img-thumbnail" src="images/imgHoteles/hot3/hot31.jpg" alt="" />
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 quitar">
							<img src="images/imgHoteles/hot3/hot31.jpg" alt="" />
						</div>
					</div>
					<form role="form" autocomplete="off" name="frm" id="frm" method="post" action="">
						<div id="stodo" class="tab-pane ctx" style="background-color:red;">
							<form method="post" class="colorlib-form">
								<div class="row">
									<div class="col-md-1">

									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>
											<div class="form-field">
												<input type="text" id="fx00" name="fx00" class="form-control  f1" placeholder="Check-in date">
											</div>
										</div>
									</div>
									<div class="col-md-3">
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
	<!--	<script type="text/javascript" src="css/bootstrap431/js/popper.js"></script>		 -->
	<script type="text/javascript" src="css/bootstrap431/js/bootstrap.js"></script>
	<!--  <script src="pruebas/lightbox2-dev/lightbox2-dev/dist/js/lightbox.js"></script> -->
	<!-- //smooth scrolling -->
	<script>
		/*
    lightbox.option({
			'showImageNumberLabel':false,
			'disableScrolling' : true,

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
	</script>
</body>

</html>