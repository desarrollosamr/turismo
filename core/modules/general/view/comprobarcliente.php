<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/*include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');
$con1= Database::getCon();
echo var_dump($con1);*/
$mysqli = new mysqli("localhost", "root", "the_reborn", "bdbasehotel1");
//$mysqli->close();
if(!empty($_POST["clientemail"])) {
  $sql = "SELECT * FROM tborganizacion WHERE emailOrg='" . $_POST["clientemail"] . "'";
  $result = mysqli_query($mysqli,$sql);
  $rowcount=mysqli_num_rows($result);
  if($rowcount>0){
    echo '<script type="text/javascript">
	    swal.fire({
	        position: "center",
	        title: "Ya existe un cliente registrado con esta dirección de correo, por favor, intente con otra",
	        showConfirmButton: true,
	        allowOutsideClick: false,
	        allowEscapeKey: false,
	        icon: "success",
	        confirmButtonText: "Cerrar"
	    }).then((result) => {
	        if (result.isConfirmed) {
	            history.back()
	        };
	    })
	</script>';
  }else{
	require_once('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\Exception.php');
	require_once('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\PHPMailer.php');
	require_once('C:\xampp_new\htdocs\turismo\vendor\phpmailer\phpmailer\src\SMTP.php');
   // print "<script>window.location='index.php?view=clientnew.php&client=" . $_POST['clientemail'] . "';</script>";
   	$phpmailer = new PHPMailer();
	$phpmailer->isSMTP();
	$phpmailer->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		));
	$phpmailer->SMTPDebug = 0;
	$phpmailer->Host = gethostbyname('smtp.hostinger.com');
	$phpmailer->SMTPAuth = true;
	$phpmailer->Port = 465;
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->Username = 'reservas@gramtour.com.co';
	$phpmailer->Password = 'Desarrollos2020';
	$phpmailer->setFrom('reservas@gramtour.com.co', 'GRAMTOUR Reservas');
	$phpmailer->addReplyTo('gbarriosf@gmail.com', 'Mailtrap'); 
	$phpmailer->addAddress($_POST['clientemail']);

	$phpmailer->Subject = 'Confirmación de registro';
	$phpmailer->isHTML(true);
	$mailContent = '
		<h1>Hola!</h1>
		<p>Atendiendo a tu solicitud, te estamos haciendo llegar un ejemplar de nuestro contrato de prestación de servicios de intermediación hotelera. Revísalo, y si estás de acuerdo con los términos, por favor envíanoslo debidamente diligenciado y firmado, haciendo click en el siguiente enlace:</p>
		';
	$mailContent .= '<p>Si por el contrario, no estás de acuerdo con los términos del contrato, somos te agradecemos altamente dejarnos tus obervaciones en el siguiente enlace:</p>';
	$mailContent .= '<p>¡Recuerda! GRAMTOUR siempre estará dispuesto a asesorarte en tu elección.</p>';
	
	$phpmailer->Body = $mailContent;
	if($phpmailer->send()){
		$titulo = "Se envío un mensaje de confirmación a " . $_POST["clientemail"] . "<br>Por favor, revise su buzón de correo";
		echo '<script type="text/javascript">
		swal.fire({
			position: "center",
			title: "Se envío un mensaje de confirmación a ' . $_POST["clientemail"] . '<br>Por favor, revise su buzón de correo",
			showConfirmButton: true,
			allowOutsideClick: false,
			allowEscapeKey: false,
			icon: "success",
			confirmButtonText: "Cerrar"
		}).then((result) => {
	        if (result.isConfirmed) {
	            window.location="index.php"
	        };
	    })
		</script>';
	}else{
		echo 'Hubo algún problema al enviar el mensaje de confirmación.';
		echo 'Error: ' . $phpmailer->ErrorInfo;
	}  
	//print "<script>window.location='index.php';</script>";
}
}
?>