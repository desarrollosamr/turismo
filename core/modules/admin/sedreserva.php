<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once('C:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');
$r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idhotel']);
if (count($r) > 0) {
    foreach ($r as $hot) {
        $lnomorg =  $hot->nombOrg;
    } 
}              
$rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idhotel']);

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
     if(nninos.value > 0) {
        if (e.style.display == 'block') {
            e.style.display = 'none';
        } else if (e.style.display == 'none') {
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
                    <p class="list_caption">Confirmación de la reserva</p>
                </div>
            </nav>
        </div>
    </div>

    <?php
        if(isset($_POST['submit']))
        {
            $code1=$_POST['code1'];
            $code=$_POST['code']; 
            $detres = $_POST['rooms'];
            $detres = unserialize(stripslashes($_POST['rooms']));
            if($code1!="$code")
            {
                $msg="Código inválido"; 
            }
            else
            {
                $con=mysqli_connect("localhost","root","the_reborn","bdbasehotel1");
                $newres="INSERT INTO `tbregistroreserva`(`idorg`, `fecReserva`, `fecRegistro`, `fecSalida`, `idestadoReserva`, `idCedula`, `canAdultoRegistrada`, `canMenorRegistrada`, `edadmenor`, `status`,`nodays`) VALUES ('$_POST[idhotel]',now(),'$_POST[cin]','$_POST[cout]',1,'$_POST[dni]','$_POST[adultos]','$_POST[ninos]','$_POST[edadninos]',1,datediff('$_POST[cout]','$_POST[cin]'))";
                if (mysqli_query($con,$newres))
                {
                    $last_id = $con->insert_id; 
                    foreach($detres as list($codigo,$cantidad)){
                        $codres = intval($codigo)+1;
                        $newdetres="insert into `tbdetalleregistroreserva`(`idregistro`, `idtipohab`, `canSolicitada`, `canConfirmada`, `subtotal`, `status`) values ($last_id,$codres,$cantidad,0,0,1)"; 
                        $exito=mysqli_query($con,$newdetres);
                    }
                    $newperson = "insert into `tbpersonas`(`idnroDoc`,`nomPersona`,`apePersona`,`telPersona`,`correoPersona`,`status`) values ($_POST[dni],'$_POST[fname]','$_POST[lname]',$_POST[phone],'$_POST[email]',1)";
                    $np=mysqli_query($con,$newperson);

                    require('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\Exception.php');
                    require('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\PHPMailer.php');
                    require('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\SMTP.php');

                    $phpmailer = new PHPMailer();
                    $phpmailer->isSMTP();
                    $phpmailer->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        ));
                    $phpmailer->SMTPDebug = 0;
                    //$phpmailer->Host = 'smtp.gmail.com';
                    $phpmailer->Host = gethostbyname('smtp.gmail.com');
                    //$phpmailer->Host = 'smtp.mailtrap.io';
                    $phpmailer->SMTPAuth = true;
                    $phpmailer->Port = 465;
                    //$phpmailer->Port = 2525;
                    $phpmailer->SMTPSecure = 'ssl';
                    $phpmailer->Username = 'desarrollosamr@gmail.com';
                    $phpmailer->Password = 'desarrollos2020';
                    //$phpmailer->Username = '184d2af668eeed';
                    //$phpmailer->Password = '6534d980dd5a4c';
                    $phpmailer->setFrom('reservas@gramtour.com', 'GRAMTOUR Reservas');
                    //$phpmailer->setFrom('info@mailtrap.io', 'Mailtrap');
                    $phpmailer->addReplyTo('gbarriosf@gmail.com', 'Mailtrap');
                    $phpmailer->addAddress($_POST['email'], $_POST['fname']." ".$_POST['lastname']);
                    $phpmailer->addCC('cc1@example.com', 'Elena');
                    $phpmailer->Subject = 'Solicitud de reserva exitosa';
                    $phpmailer->isHTML(true);
                    $mailContent = '<table style="width: 100%;"><tbody><tr><td rowspan="8" style="width: 38.2831%;"><img src="../../../images/estilo/turistas.jpg" style="width: 299px;" class="fr-fic fr-dib"></td><td colspan="4" style="width: 61.5393%;"><h2 id="isPasted" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; color: rgb(53, 53, 53); font-size: 40px; font-weight: 600; line-height: 1.5; font-style: normal; text-align: center; ">&iexcl;Felicidades, <span style="color: rgb(235, 107, 86);">'. $_POST[fname] . '&nbsp;' . $_POST[lastname] . '</span>!</h2><p>Su reserva en el hospedaje <strong><span style="color: rgb(41, 105, 176);">' . $lnomorg . '</span></strong> est&aacute; registrada y en proceso de validaci&oacute;n. Pronto recibir&aacute;s un mensaje de confirmaci&oacute;n en caso de verificarse la disponibilidad de tu solicitud.</p></td></tr><tr><td colspan="2" style="width: 30.8005%; background-color: rgb(84, 172, 210);"><div style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Fecha de ingreso </span></strong></div></td><td colspan="2" style="width: 30.8005%; background-color: rgb(26, 188, 156);"><div style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Fecha de salida</span></strong></div></td></tr><tr><td colspan="2" style="width: 30.7425%;"><div data-empty="true" style="text-align: center;"><strong>' . $_POST[cin] . '</strong></div></td><td colspan="2" style="width: 30.8585%;"><div data-empty="true" id="isPasted" style="text-align: center;">' . $_POST[cout] . '</div></td></tr><tr><td style="width: 15.3712%;"><br></td><td style="width: 15.3712%;"><br></td><td style="width: 15.4292%;"><br></td><td style="width: 15.4292%;"><br></td></tr><tr><td style="width: 15.3712%;"><img src="../../../images/estilo/adulto.png" style="width: 53px;" class="fr-fic fr-dib"></td><td style="width: 15.3712%;"><div data-empty="true" style="text-align: center;"><span style="font-size: 18px;">' . $_POST[adultos] . '</span></div></td><td style="width: 15.4292%;"><img src="../../../images/estilo/nino.jpg" style="width: 52px;" class="fr-fic fr-dib"></td><td style="width: 15.4292%;"><div data-empty="true" id="isPasted" style="text-align: center;"><span style="font-size: 18px;">' . $_POST[ninos] . '</span></div></td></tr><tr><td colspan="2" style="width: 30.7425%;"><br></td><td colspan="2" style="width: 30.8585%;"><br></td></tr><tr><td colspan="4" style="width: 61.6009%; background-color: rgb(84, 172, 210);"><div data-empty="true" style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Habitaciones</span></strong></div><div style="text-align: center;"></div></td></tr><tr><td colspan="2" style="width: 30.7425%;"><br></td><td colspan="2" style="width: 30.8585%;"><br></td></tr></tbody></table><p><br></p>';
                    $phpmailer->Body = $mailContent;
                    if($phpmailer->send()){
                        echo 'El mensaje ha sido enviado';
                    }else{
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $phpmailer->ErrorInfo;
                    }   

?>
                    <div class="jumbotron">
                        <h1 class="display-3">Reserva exitosa</h1>
                        <br>
                        <p class="lead">Estimado señor(a):<span style="font-weight:bold"> <?php echo $_POST['fname'] . " " . $_POST['lname']; ?></span></p>
                        <hr class="my-4">
                        <p>Su reserva para el hospedaje:<span style="font-weight:bold"> <?php echo $lnomorg;?></span> ha sido registrada.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="../../../index.php" role="button">Finalizar</a>
                        </p>
                    </div>    
    <?php
                }
                else
                {
    ?>
                    <div class="jumbotron">
                        <h1 class="display-3">Problema al registrar su reserva</h1>
                        <p class="lead">Ha habido un problema al registrara su reserva, por favor, intente nuevamente más tarde.</p>
                        <hr class="my-4">
                        <p>Haga clic en el siguiente enlace si desea modificar su reserva</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>    
    <?php
                }
            }
        }
    ?>
</body>
</html>