<?php
if(isset($_REQUEST['action'])){
	$action = $_REQUEST['action'];
}
include_once('C:\xampp_new\htdocs\pruebas\frontend\controller\Database.php');
include_once('C:\xampp_new\htdocs\pruebas\frontend\controller\Executor.php');
$con=new mysqli("localhost","root","the_reborn","pruebas");
$sql="select * from grados order by nombre_grado";
$result = $con->query($sql);
?>
    <div class="main">
<?php
if($action=="registration"){
?>
<script language="javascript">
	$(document).ready(function(){
	    $("#ugrado1").on('change', function () {
	        $("#ugrado1 option:selected").each(function () {
	            var id_grado = $(this).val();
	            $.post("comprobarestudiante.php", { id_grado: id_grado }, function(data) {
	                $("#ucurso1").html(data);
	            });			
	        });
	   });
	});
</script>



		</form>
	</div>
</li>

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Registro</h2>
					<form method="post" id="frmregister1" autocomplete="off">
						<div class="form-group">
							<label for="documento"><i class="fa fa-user"></i></label>
							<input type="text" name="uname" id="uname" required="required" placeholder="Nombre">
							<span id="estadousuario"></span> 
						</div>
						<div class="form-group">
							<label for="uemail"><i class="fa fa-envelope"></i></label>
							<input type="text" name="uemail" id="uemail" required="required" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="ucel"><i class="fa fa-phone"></i></label>
							<input type="text" name="ucel" id="ucel" required="required" placeholder="Número telefónico">
						</div>
						<div class="form-group">
							<label for="upass"><i class="fa fa-lock"></i></label>
							<span class="login-password" title="Al menos 4 caracteres,<br> 1 número, 1 minúscula"><input type="password" id="upass" name="upass" required="required" placeholder="Password"></span>
						</div>
						<div class="form-group">
							<label for="nombre"><i class="fa fa-lock"></i></label>
							<input type="password" id="cupass" name="cupass" required="required" placeholder="Confirm Password">
						</div>
						<div class="form-group">
							<label class="form-check-label">
						</div>
						<input type="hidden" name="registro" value="TRUE">
						<button type="button" id="gor" class="btn btn-lg btn-primary btn-block" disabled>Registrar</button>
					</form>
                </div>
                <div class="signup-image">
                    <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                    <a href="index.php?view=login_register_page.php&action=login" class="signup-image-link">Ya estoy registrado</a>
                </div>
            </div>
        </div>
    </section>
<?php
}else{
?>
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="img/5188350.jpg" alt="Ingresar"></figure>
                    <a href="index.php?view=login_register_page.php&action=registration" class="signup-image-link">Crear una cuenta</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Ingresar</h2>
					<form id="frmlogin1" method="post">
						<div class="form-group">
							<label for="email"><i class="fa fa-credit-card"></i>&nbsp; </label>
							<input type="text" class="form-control" name="email" id="email1" placeholder="Documento" required="required">
						</div>
						<div class="form-group">
							<label for="password"><i class="fa fa-unlock"></i>&nbsp;</label>
							<input type="password" class="form-control" name="password" id="password1" placeholder="Password" required="required">
						</div>
						<input type="hidden" name="login" value="TRUE">
						<button type="submit" id="golo" class="btn btn-lg btn-primary btn-block">Ingresar</button>
						
						<div class="text-center mt-2">
							<a href="#">Olvidó su clave?</a>
						</div>
					</form>
                </div>
            </div>
        </div>
    </section>

</div>
<script type="text/javascript">
jQuery('#golo').on('click',function() {
	var datos = jQuery('#frmlogin1').serialize();
	if ($( "#email1" ).val()!="" && $( "#password1" ).val()!="") {

		jQuery.ajax({
		   url:'login.php',
		   type:'POST',
		   data: datos
		}).then(function(response) { 
			alert(response);
			var respuesta =  response.substring(0,6);
			var respues = respuesta.substring(2);
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
				document.getElementById("usuactual").innerHTML='<a class="nav-link"  href="#" alt="Salir"><i class="fa fa-user" aria-hidden="true"></i>'+response.substring(7)+'</a>';
				document.getElementById("salir").style.display="block";
				//		window.location='index.php';
				
			} else if (respuesta=='Error:') {
				swal.fire({
					position: 'center',
					title: response.substring(6),
					showConfirmButton: true,
					allowOutsideClick: false,
					allowEscapeKey: false,
					icon: 'error',
					confirmButtonText: 'Cerrar'
				});
			}
		});
	}else{
		swal.fire({
			position: 'center',
			title: 'Todos los campos son obligatorios',
			showConfirmButton: true,
			allowOutsideClick: false,
			allowEscapeKey: false,
			icon: 'error',
			confirmButtonText: 'Cerrar'
		});
	}
});
</script>
<script type="text/javascript">
jQuery('#gore').on('click',function() {
	var datos = jQuery('#frmregister1').serialize();
	if ($( "#uemail" ).val()!="" && $( "#uname" ).val()!="" && $( "#upass" ).val()!="" && $( "#cupass" ).val()!="" && $( "#ucel" ).val()!="") {
		jQuery.ajax({
		   url:'Registro.php',
		   type:'POST',
		   data: datos
		}).then(function(response) {
			var respuesta =  response.substring(0,8);
			console.log(respuesta);
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
			} else if (respuesta.substring(2)=='Error:') {
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
	}else{
		swal.fire({
			position: 'center',
			title: 'Todos los campos son obligatorios',
			showConfirmButton: true,
			allowOutsideClick: false,
			allowEscapeKey: false,
			icon: 'error',
			confirmButtonText: 'Cerrar'
		});
	}
});
</script>

<script>
  function comprobarUsuario() {
	jQuery.ajax({
	url: "comprobarestudiante.php",
	data:"documento="+$("#udoc").val(),
	type: "POST",
	success:function(data){
		if(data != "[]"){
			swal.fire({
			position: 'center',
			title: 'El estudiante ya está registrado',
			showConfirmButton: true,
			allowOutsideClick: false,
			allowEscapeKey: false,
			icon: 'error',
			confirmButtonText: 'Cerrar'
			});
		}
	},
	error:function (){
	}
	});
  }   
</script>
<?php
}
?>