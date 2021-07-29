<?php
include_once('controller/Session.php');
if(Session::getUID()!=""){
	$vista = "display: block";
 }else{
	$vista = "display: none";
	$usuario = Session::getUID();
 }
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- <script type="text/javascript" src="/turismo/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/turismo/js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="/turismo/js/sweetalert2/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="/turismo/js/jBox.all.js"></script>
	<link href="/turismo/css/jBox.all.css" rel="stylesheet" type="text/css"> -->

	<script type="text/javascript">
		$(document).ready(function() {
			// Tooltip above and centered, this is the default setting
			//$('.DemoTooltipAbove').jBox('Tooltip');
			// Tooltip to the left
			$('.salir').jBox('Tooltip', {
				position: {
					x: 'left',
					y: 'center'
				},
				outside: 'x', 
				theme: 'TooltipDark'
			});
			$('.login-password').jBox('Tooltip', {
				position: {
					x: 'center',
					y: 'bottom'
				},
				theme: 'TooltipDark'
			});

		});
	</script>

	<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".btn btn-lg btn-primary btn-block", function(e){
		e.stopPropagation();
	});
	</script> 
</head>
<body>
	
<div class="banner-top" style="background-color: bisque;">
		<div class="social-bnr-agileits">
			<ul class="social-menu">
				<li><a href="https://facebook.com/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://instagram.com/"><i class="fa fa-instagram"></i> </a></li>
				<li><a href="https://youtube.com/"><i class="fa fa-youtube"></i> </a></li>
				<li><span style="color: #3b5998;font-size: 20px;font-weight: bold;">GRAM<span style="color: red;font-size: 20px;font-weight: bold;">Tour</span> Clientes Corporativos</span></li>
			</ul>
		</div>
		
		<div class="contact-bnr-w3-agile">
										
		<nav class="navbar navbar-default">
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li id="salir" style="<?php echo $vista; ?>"><a href="logout.php" alt="Salir"><span class="salir" title="Salir"><i class="fa fa-sign-out" aria-hidden="true"></i></span></a></li>
							<li id="usuactual" class="usuactual"><i class="fa fa-user" aria-hidden="true"></i><?php echo " " . $u->name; ?></li>
							<li class="dropdown menu__item">
								<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4"><i class="fa fa-caret-down" aria-hidden="true"></i>Ingresar</a>
								<div class="dropdown-menu action-form">
									<form id="frmlogin" method="post">
									<!--	
									<p class="hint-text">Ingresa con tu cuenta de redes sociales</p>
										<div class="form-group social-btn clearfix">
											<a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i> Facebook</a>
											<a href="#" class="btn btn-secondary twitter-btn float-right"><i class="fa fa-twitter"></i> Twitter</a>
										</div>
										<div class="or-seperator"><b>o</b></div>  -->
										<div class="form-group">
											<label for="email"><i class="fa fa-envelope"></i></label>
											<input type="text" name="email" id="email" placeholder="Email" required="required">
										</div>
										<div class="form-group">
											<label for="password"><i class="fa fa-unlock"></i></label>
											<input type="password" name="password" id="password" placeholder="Password" required="required">
										</div>
										<input type="hidden" name="login" value="TRUE">
										<button type="button" id="go" class="btn btn-lg btn-primary btn-block">Ingresar</button>
										
										<div class="text-center mt-2">
											<a href="#">Olvidó su clave?</a>
										</div>
									</form>
								</div>
							</li>
							<li><a href="mailto:info@facturacionweb.site" style="text-transform: lowercase;"><i class="fa fa-envelope" aria-hidden="true"></i>desarrollosamr@gmail.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>302-417-4010</li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
</div>
<script type="text/javascript">
jQuery('#go').on('click',function() {
    jQuery.ajax({
       url:'/turismo/hoteles/view/login.php',
       type:'POST',
       data: jQuery('#frmlogin').serialize()
    }).then(function(response) { 
		console.log(response.substring(0,7));
		if (response.substring(0,7)=='success'){
			swal.fire({
				position: 'center',
				title: 'Ingreso exitoso',
				showConfirmButton: true,
				allowOutsideClick: false,
				allowEscapeKey: false,
				icon: 'success',
				confirmButtonText: 'Cerrar'
			});
			document.getElementById("usuactual").innerHTML='<i class="fa fa-user" aria-hidden="true"></i>'+response.substring(7);
			document.getElementById("salir").style.display="block";
			//		window.location='index.php';
			
		} else if (response=='error') {
			swal.fire({
				position: 'center',
				title: 'El email o la clave son inválidas',
				showConfirmButton: true,
				allowOutsideClick: false,
				allowEscapeKey: false,
				icon: 'error',
				confirmButtonText: 'Cerrar'
			});
		}
    });
});
</script>
<script type="text/javascript">
jQuery('#gor').on('click',function() {
    jQuery.ajax({
       url:'../hoteles/Registro.php',
       type:'POST',
       data: jQuery('#frmregister').serialize()
    }).then(function(response) {
		console.log(response.length);
		var respuesta =  response.substring(0,8);
		var respues = respuesta.substring(2);
		if (response.substring(2)=='success'){
			swal.fire({
				position: 'center',
				title: 'Registro exitoso',
				showConfirmButton: true,
				allowOutsideClick: false,
				allowEscapeKey: false,
				icon: 'success',
				confirmButtonText: 'Cerrar'
			});
		} else if (respues=='Error:') {
			swal.fire({
				position: 'center',
				title: response.substring(8),
				showConfirmButton: true,
				allowOutsideClick: false,
				allowEscapeKey: false,
				icon: 'error',
				confirmButtonText: 'Cerrar'
			});
		}
		$("#frmregister")[0].reset();
    });
});
</script>