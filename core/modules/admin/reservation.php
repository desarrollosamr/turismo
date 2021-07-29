<?php
//include_once('C:\xampp_new\htdocs\turismo\core\modules\admin\usuarios\lib\Session.php');
//include_once('C:\xampp_new\htdocs\turismo\core\modules\admin\usuarios\classes\Users.php');
//Session::CheckSession();
//session_start();
include_once('C:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');
/*
  if (!isset($_REQUEST['action'])){
  	//session_destroy();
      <meta http-equiv="refresh" content="0;URL='http://thetudors.example.com/'" />
		echo '<meta http-equiv="refresh" content="1;url=index.php">';  	
  	//header("location:index.php");
    exit;
  }
  */

if (isset($_REQUEST['idh'])){
   $r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idh']);
   $rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idh']);
}else{
    $r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idhotel']);
    $rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idhotel']);
}

?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVACIÓN GRAMTour</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href="fonts/Oswald/static/Oswald-Light.ttf" rel="stylesheet">
	<link href="fonts/Oswald/static/Oswald-Regular.ttf" rel="stylesheet">
	<link href="fonts/Oswald/static/Oswald-Bold.ttf" rel="stylesheet">

	<!-- <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet"> -->
	<link href="fonts/Federo/Federo-Regular.ttf" rel="stylesheet">

	<!-- <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->
	<link href="fonts/Lato/Lato-Light.ttf" rel="stylesheet">
	<link href="fonts/Lato/Lato-Regular.ttf" rel="stylesheet">
	<link href="fonts/Lato/Lato-Bold.ttf" rel="stylesheet">
	<link href="fonts/Lato/Lato-Black.ttf" rel="stylesheet">
   <script type='text/javascript'>
   function toggleedadninos() {
     var nninos = document.getElementById('ninos');
     var e = document.getElementById('edadninos');
     if(nninos.value > 0){
        if(e.style.display == 'none') {
            e.style.display = 'block';
        }
    } else {
        e.style.display = 'none';
     }
    }
   </script>
</head>
<body>
    <div class="w3_navigation">
        <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <h1>
                        <a class="navbar-brand" href="index.php"> GRAM <span>Tour</span>
                            <p class="logo_w3l_agile_caption">Gestión de oferta turística</p>
                        </a>
                    </h1>
                </div>
                <div class="navbar-header navbar-right">
                    <p class="list_caption">Detalles de la reserva</p>
                </div>
            </nav>
        </div>
    </div>

    <div id="wrapper">
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVACIÓN <small>
                            <?php if (count($r) > 0) {
				foreach ($r as $hot) {
					$lnomorg =  $hot->nombOrg;
				} echo $lnomorg; }              ?>
                            </small>
                        </h1>
                    </div>
                </div> 
            <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        INFORMACION PERSONAL
                    </div>
                    <div class="panel-body">
                        <form name="form" method="post" action="sedreserva.php">
                            <input type="hidden" name="idhotel" value="<?php echo $_REQUEST['idh']; ?>">
                            <div class="form-group">
                                <label>* Número de identificación</label>
                                <input name="dni" type="number" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Nombre</label>
                                <input name="fname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Apellidos</label>
                                <input name="lname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Email</label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Numero telefonico</label>
                                <input name="phone" type ="text" class="form-control" required>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        INFORMACIÓN DE RESERVA
                    </div>
                    <div class="panel-body">
                        <div>Usted está reservando:</div>
                        <div><ul style="border: 2px solid red">
                            <?php
                                $detres = array();
                                $ch = 0;
                                foreach ($_REQUEST as $clave => $valor) {
                                    $prehab=substr($clave,0,3);
                                    $codhab=substr($clave,3);
                                    if($prehab="hab" and $valor<>""){ 
                                        if ($codhab <> ""){ 
                                            $codhab = $codhab*1 - 1; 
                                            $detres[$ch][0]=$codhab;
                                            $detres[$ch][1]=$valor;?>
                                            <li><?php echo $valor . " " . $rshabitacion[$codhab]['nomtipo']; ?></li>
                                            <?php
                                        }
                                    }
                                    $ch++;
                                }
                                $arreglo = htmlspecialchars(serialize($detres));
                            ?>
                        <input type="hidden" name="rooms" value="<?php echo $arreglo;?>" />
                        </ul></div>
                        <div class="form-group">
                            <label>* Adultos</label>
                            <input type="number" name="adultos" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Niños&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" name="ninos" id="ninos" min="0" class="form-control" onclick="toggleedadninos()";>
                        </div>
                        <div class="form-group" id="edadninos"  style="display: none;">
                            <label>* Edad del menor de los niños</label>
                            <input type="number" name="edadninos" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>* Entrada</label>
                            <input name="cin" type ="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>* Salida</label>
                            <input name="cout" type ="date" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="well">
                    <h4>VERIFICACIÓN HUMANA</h4>
                    
                    <p>Ingrese el siguiente código aleatorio en la caja de texto abajo</p>
                    <p><span  style="font-size:14px; font-weight:bold; background-color:#358; padding: 5px; color:white;"><?php $Random_code=rand(1000,9999); echo$Random_code; ?></span></p>
                    <input  type="text" name="code1" title="random code" />
                    <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                    <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
