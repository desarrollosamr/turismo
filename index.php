<?php
	/*
	session_start();
	$_SESSION['banner'] = (isset($_SESSION['banner'])) ? $_SESSION['banner'] : 'start'; 
	include('Admin/modpublicos/conexion.php');
	*/
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
		<script type="text/javascript">
		 window.history.forward(1);
		</script>			
	<!-- //for-mobile-apps -->
  <link href="css/icomoon.css"  rel="stylesheet">	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/chocolat.css"  rel="stylesheet" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" property="" />
	<link href="css/jquery-ui.css" rel="stylesheet"/>
	<link href="css/swipebox.css" rel="stylesheet">	
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="fonts1/flaticon/font/flaticon.css" rel="stylesheet">	
	<!--<link href="pruebasmenu/style01.css" rel="stylesheet">	   -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->
	<style type="text/css">
	.nav-tabs{
		border: none;
		border-bottom-color: currentcolor;
		border-bottom-style: none;
		border-bottom-width: medium;
		border-bottom: none;
		-webkit-transition: 0.3s;
		-o-transition: 0.3s;
		transition: 0.3s;
	}
	.sobre:hover, .sobre:focus {
		color: #db1313 !important;
		text-decoration: none;
		/*background-color: #2416c7 !important; */
	}
	</style>
</head>

<body >
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

	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>AMANECER</h4>
									<h3>Sabemos lo que amas</h3>
									<p>Bienvenido a nuestros hoteles</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>AMANECER</h4>
									<h3>Quédate con amigos y familias</h3>
									<p>Ven y disfruta un momento precioso con nosotros</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>AMANECER</h4>
									<h3>Desea unas vacaciones lujosas?</h3>
									<p>Obtenga alojamiento hoy</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>			
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	
	<?php //include_once  "modgeneral/modbusca.php"  ?>
	<?php  include_once "modgeneral/modbusca1.php"  ?>
	<?php // include_once "modgeneral/servicios.php"  ?>
	<?php // include_once "modgeneral/intermedio.php" ?>
	<?php // include_once "modgeneral/acercade.php"   ?>
	<?php //include_once "modgeneral/teams.php"    ?>
	<?php //include_once "modgeneral/teamsMejorado.php" ?>
	<?php //include_once "modgeneral/visitantes.php" ?>

	<?php include_once "modgeneral/galerias.php" ?>
	<!-- aca empeizan las tarifas -->	
	<?php include_once "modgeneral/tarifas.php" ?>
	<?php //include_once "modgeneral/publicidad.php" ?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>SOL <span>SUBIR</span></h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>Sabemos lo que amas</h5>
					<p>Ofrecer a los huéspedes vistas únicas y encantadoras desde sus habitaciones con sus comodidades excepcionales, hace que Star Hotel sea uno de los mejores en su tipo. Pruebe nuestro menú de comida, servicios increíbles y un personal amable mientras esté aquí..</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //Modal para sesion -->
	<div class="modal fade" id="<?php echo 'modal' . $nSesion; ?>" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal">&times;</button> -->
					<h4>Inicio <span>Sesion</span></h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="correo">Correo</label>
							<input id="correo" name="correo" class="form-control" type="email" placeholder="Correo electrónico">
						</div>
						<div class="form-group">
							<label for="palabraSecreta">Contraseña</label>
							<input id="palabraSecreta" name="palabraSecreta" class="form-control" type="password" placeholder="Contraseña">
						</div>
						<a href="#">Contraseña olvidada</a>
						<div class="form-row">
							<div class="form-group col-md-6">
								<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cerrar</button>
							</div>
							<div class="form-group col-md-6">
								<button type="submit" class="btn btn-primary btn-block">Entrar</button>
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

	<!-- contact -->
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contáctenos</h4>
					<p class="contact-agile2">Inscribete a nuestros boletines</p>
					<form method="post" name="sentMessage" id="contactForm">
						<div class="control-group form-group">
							<label class="contact-p1">Nombre completo:</label>
							<input type="text" class="form-control" name="name" id="name" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Número de teléfono:</label>
							<input type="tel" class="form-control" name="phone" id="phone" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Dirección de correo electrónico:</label>
							<input type="email" class="form-control" name="email" id="email" required>
							<p class="help-block"></p>
						</div>
						<input type="submit" name="sub" value="Enviar" class="btn btn-primary">
					</form>
					<?php
					if (isset($_POST['sub'])) {
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$approval = "Not Allowed";
						$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";
						if (mysqli_query($con, $sql))
							echo "OK";
					}
					?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4>Conectate con nosotros</h4>
				<p class="contact-agile1"><strong>Teléfono :</strong>304 588 6029</p>
				<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:info@facturacionweb.site">desarrollosamr@gmail</a></p>
				<p class="contact-agile1"><strong>Direccion :</strong> Medelll&iacute;n, Colombia</p>
				<div class="social-bnr-agileits footer-icons-agileinfo">
					<ul class="social-icons3">
						<li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook icon-border facebook"> </a></li>
						<li><a href="https://twitter.com/" target="_blank" class="fa fa-twitter icon-border twitter"> </a></li>
						<li><a href="https://plus.google.com/u/0/" target="_blank" class="fa fa-google-plus icon-border googleplus"> </a></li>
					</ul>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62879.681806229746!2d-84.14836462783931!3d9.935612431138155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e49edef4b3eb%3A0xc8956f3f7bdc3793!2sRadisson+San+Jose-Costa+Rica+Hotel+moderno+con+2%E2%80%A6!5e0!3m2!1ses!2ssv!4v1517008417899"></iframe>
				<!-- Parque+del+Café/@4.5390253,-75.7718392,17z/data=!3m1!4b1!4m5!3m4!1s0x8e385ef825fa221d:0xd35336082b9ca116!8m2!3d4.5390253!4d-75.7696505 -->
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!3m1!4b1!4m5!3m4!1s0x8e385ef825fa221d:0xd35336082b9ca116!8m2!3d4.5390253!4d-75.7696505" ></iframe>	 -->
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- /contact -->
	<div class="copy">
		<p>© 2018 <a href="index.php">AMENECER</a> </p>
	</div>
	<!--/footer -->
	<!-- js -->
	<!-- <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>  -->

	<!-- contact form -->
	<script src="js/jqBootstrapValidation.js"></script>
	<!-- /contact form -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- gallery popup -->

	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript">
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<script src="js/main.js"></script>
	<script src="js/easy-responsive-tabs.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("<?php echo '.' . $nSesion; ?>").click(function(e) {
				e.preventDefault();
				//$("<?php echo '#modal' . $nSesion; ?>").modal("show");  
				$("<?php echo '#modal' . $nSesion; ?>").modal({
					backdrop: 'static',
					keyboard: false
				});
				// $('#myModal').modal({backdrop: 'static', keyboard: false})			
			});
		});
	</script>
	<!--//tabs-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});

    $('.f1').datepicker({      
      dateFormat: 'yy-mm-dd',
      changeMonth:true, 
      changeYear:true ,  
      firstDay: 1,
      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 
                    'Mayo', 'Junio',  'Julio', 'Agosto', 
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 
                        'May', 'Jun', 'Jul', 'Ago', 
                        'Sep', 'Oct', 'Nov', 'Dic'],  
      dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'] 
      });
	</script>
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- //smooth scrolling -->
</body>

</html>