<?php
include_once('autoload.php');
include_once('init.php');
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Framework para gestión de pruebas académicas">
    <meta name="author" content="Gabriel Barrios">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIGPA - Sistema de Gestión de pruebas académicas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/jBox.all.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/daterangepicker.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
	<style>
        .navbar-custom {
            background-color: #2467cc;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: green;
        }
    </style>
	<script src="js/jquery-3.6.0.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="js/jBox.all.js"></script>

    <script src="js/scripts.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script>
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".action-buttons .dropdown-menu", function(e){
		e.stopPropagation();
	});
	</script>
</head>

<body>
	<!-- header -->
	<?php 
		include_once("header.php");  
		if(!isset($_GET['view'])){
			include "portada.php";
		}else{
			$valid=false;
			if(file_exists($file = $_GET['view'])){
				include($_GET['view']);				
			}else{
				echo "<b>404 No se encuentra/b> Vista <b>".$_GET['view']."</b> carpeta  !!";
			}
		}
	?>
	<!-- footer -->
	<?php 
		include_once("footer.php"); 
		if(Session::getUID()!=""){
 			echo "<script type='text/javascript'>document.getElementById('salir').style.display='block';</script>";
		}
	?>
	

</body>

</html>