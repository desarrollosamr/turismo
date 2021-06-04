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
include_once "../allfrontend/modelfron/tbOrganizacionData.php";
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
$rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idh']);
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVACION HOTEL Amanecer</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script type='text/javascript'>
   function toggleedadninos() {
     var nninos = document.getElementById('ninos');
     var e = document.getElementById('edadninos');
     if(nninos.value > 0){
        if(e.style.display == 'block') {
            e.style.display = 'none';
        } else if(e.style.display == 'none') {
            e.style.display = 'block';
        }
    } else {
        e.style.display = 'none';
     }
    }
   </script>
</head>
<body>
    <div id="wrapper">
        <!--
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Página principal</a>
                    </li>
					</ul>
            </div>
        </nav> -->
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
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
INFORMACION PERSONAL
                        </div>
                        <div class="panel-body">
						    <form name="form" method="post">
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
                              <div><ul>
                              <?php
                                    foreach ($_REQUEST as $clave => $valor) {
                                        $prehab=substr($clave,0,3);
                                        $codhab=substr($clave,3);
                                        if($prehab="hab" and $valor<>""){ 
                                                if ($codhab <> ""){ 
                                                    $codhab = $codhab*1 - 1; ?>
                                                    <li><?php echo $valor . " " . $rshabitacion[$codhab]['nomtipo']; ?></li>
                                                <?php
                                                }
                                        }
                                      }
                              ?>
                              </ul></div>
							  <div class="form-group">
                                    <label>* Adultos</label>
                                    <input type="number" name="adultos" required>
                              </div>
							  <div class="form-group">
                                    <label>Niños&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input type="number" name="ninos" id="ninos" min="0" onclick="toggleedadninos()";>
                              </div>
							  <div class="form-group" id="edadninos"  style="display: none;">
                                    <label>Edad del menor de los niños*</label>
                                    <input type="number" name="edadninos" required>
                              </div>
							  <div class="form-group">
                                            <label>Entrada</label>
                                            <input name="cin" type ="date" class="form-control">
                               </div>
							   <div class="form-group">
                                            <label>Salida</label>
                                            <input name="cout" type ="date" class="form-control">
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>VERIFICACIÓN HUMANA</h4>
                        <p>Escriba debajo de este código
 <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Ingrese el código aleatorio<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
                                $code1=$_POST['code1'];
                                $code=$_POST['code']; 
                                if($code1!="$code")
                                {
                                $msg="Código inválido"; 
							}
							else
							{
                                $con=mysqli_connect("localhost","root","","hotel");
                                $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                $rs = mysqli_query($con,$check);
                                $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                if($data[0] > 1) {
                                    echo "<script type='text/javascript'> alert('El usuario ya existe')</script>";
                                }
                                else
                                {
                                    $new ="Not Conform";
                                    $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                    if (mysqli_query($con,$newUser))
                                    {
                                        echo "<script type='text/javascript'> alert('Su solicitud de reserva ha sido enviada')</script>";
                                    }
                                    else
                                    {
                                        echo "<script type='text/javascript'> alert('Error al agregar usuario en la base de datos')</script>";
                                    }
                                }
							    $msg="Tu código es correcto";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
             </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
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
