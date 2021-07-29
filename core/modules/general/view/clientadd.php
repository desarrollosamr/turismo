<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$pepper = '023c9hp9433249ptry23p4rt3hfwed';
$password = $_POST['password'];
$p_peppered = hash_hmac("sha256", $password, $pepper);
$p_hashed = password_hash($p_peppered, PASSWORD_BCRYPT);
$nomborg = $_POST['nombOrg'];
$emailorg = $_POST['emailOrg'];
$admonhotel =  $_POST['admontel'];

$roleid = 4;
$isactive = 1;
include_once('C:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');
if(count($_POST)>0){
	$user = new tbOrganizacionData();
	$user->nitDni = $_POST['nit'];  
	$user->nroPisos = $_POST['nroPisos'];  
	$user->desGeneral1 = $_POST['desGeneral1'];  
	$user->desGeneral2 = $_POST['desGeneral2'];  
	$user->idCiudad = $_POST['idCiudad'];  
	$user->nombOrg = $_POST['nombOrg'];  
	$user->admon = $_POST['admon']; 
	$user->admontel = $_POST['admontel'] ; 		
	$user->dirbOrg = $_POST['dirbOrg'];  
	$user->noTelf1 = $_POST['noTelf1'];  
	$user->noTelf2 = $_POST['noTelf2'];  
	$user->emailOrg = $_POST['emailOrg'];  
	$user->password = $p_peppered;  
	$user->nroHabXpiso = $_POST['nroHabXpiso'];  
	$user->aforoPersonas = $_POST['aforoPersonas'];  
	$user->rutaImagen = $_POST['rutaImagen'];  
	$user->status = $_POST['status'];  
	$user->add();
	$ulcli=$user->uc[1];
	
	$con=mysqli_connect("localhost","root","the_reborn","bdbasehotel1");
	$buscli = "SELECT * FROM tbl_users WHERE emailOrg=='" . $emailorg . "' and roleid=4";
  	$result = mysqli_query($con,$sql);
	if(!$result){
		$sql = mysqli_prepare($con,'INSERT INTO tbl_users(name,email,password,mobile,roleid,isActive)
		VALUES (?, ?, ?, ?, ?, ?)'); //definir sentencia sql
		mysqli_stmt_bind_param($sql, 'sssiiis', $nomborg, $emailorg, $password, $admonhotel, $roleid, $isactive);
		$sql->execute();
	}else{

	}

	require_once('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\Exception.php');
	require_once('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\PHPMailer.php');
	require_once('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\SMTP.php');

	$phpmailer = new PHPMailer();
	$phpmailer->isSMTP();
	$phpmailer->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		));
	$phpmailer->SMTPDebug = 2;
	//$phpmailer->Host = 'smtp.gmail.com';
	$phpmailer->Host = gethostbyname('smtp.hostinger.com');
	//$phpmailer->Host = 'smtp.mailtrap.io';
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 465;
	//$phpmailer->Port = 2525;
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->Username = 'reservas@gramtour.com.co';
	$phpmailer->Password = 'Desarrollos2020';
	//$phpmailer->Username = '184d2af668eeed';
	//$phpmailer->Password = '6534d980dd5a4c';
	$phpmailer->setFrom('reservas@gramtour.com.co', 'GRAMTOUR Reservas');
	//$phpmailer->setFrom('info@mailtrap.io', 'Mailtrap');
	$phpmailer->addReplyTo('gbarriosf@gmail.com', 'Mailtrap'); 
	$phpmailer->addAddress($_POST['emailOrg'], $_POST['nombOrg'].": ".$_POST['admon']);

	$phpmailer->Subject = 'Confirmación de registro';
	$phpmailer->isHTML(true);
	$mailContent = '<table style="width: 60%;">
	<thead><tr><th style="color:white;background-color:darkblue;text-align:center;font-size:18px;font-weight:bold;">GRAMTour Gestión de oferta turística</tr></th></thead>
	<tbody>
	<tr><td>&nbsp;</td></tr>
	<tr><td>¡Bienvenido a GRAMTour.com, tu mejor elección para la gestión de tu negocio hotelero!</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Agradecemos tu confianza en nuestros servicios de gestión turística. Esperamos brindarte la mejor asesoría en el aseguramiento de una excelente gestión de tu negocio.</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Activa tu cuenta e inicia sesión para que puedas configurar los servicios, instalaciones y demás aspectos de tu negocio. </td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td style="text-align: center";><a href="https://localhost/turismo/index.php?view=creapass.php&client=' . $emailorg . '&clientid=' . $ulcli . '">Activar</a></td></tr>
	</tbody></table>
	';
	
	$phpmailer->Body = $mailContent;
	if($phpmailer->send()){
		echo '<script type="text/javascript">
		swal.fire({
			position: "center",
			title: "Mensaje de confirmación enviado<br>Por favor, revise su buzón de correo",
			showConfirmButton: true,
			allowOutsideClick: false,
			allowEscapeKey: false,
			icon: "success",
			confirmButtonText: "Cerrar"
		});
		</script>
		';
	}else{
		echo 'Hubo algún problema al enviar el mensaje de confirmación.';
		echo 'Error: ' . $phpmailer->ErrorInfo;
	}  
	//print "<script>window.location='index.php?view=clienthome.php';</script>";
}
?>