<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once('/home/u669320997/domains/gramtour.com.co/public_html/core/modules/general/model/tbOrganizacionData.php');
$r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idhotel']);
if (count($r) > 0) {
    foreach ($r as $hot) {
        $lnomorg =  $hot->nombOrg;
    } 
}              
$rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idhotel']);


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
                $con=mysqli_connect("localhost","u669320997_gramtour","Desarrollos2020","u669320997_bdbasehotel1");
                $newres="INSERT INTO `tbregistroreserva`(`idorg`, `idusuario`, `fecReserva`, `fecRegistro`, `fecSalida`, `idestadoReserva`, `idCedula`, `canAdultoRegistrada`, `canMenorRegistrada`, `edadmenor`, `status`,`nodays`) VALUES ('$_POST[idhotel]','$u->id',now(),'$_POST[cin]','$_POST[cout]',1,'$_POST[dni]','$_POST[adultos]','$_POST[ninos]','$_POST[edadninos]',1,datediff('$_POST[cout]','$_POST[cin]'))";
                if (mysqli_query($con,$newres))
                {
                    $last_id = $con->insert_id; 
                    foreach($detres as list($codigo,$cantidad)){
                        $codres = intval($codigo)+1;
                        $newdetres="insert into `tbdetalleregistroreserva`(`idregistro`, `idtipohab`, `canSolicitada`, `canConfirmada`, `subtotal`, `status`) values ($last_id,$codres,$cantidad,0,0,1)"; 
                        $exito=mysqli_query($con,$newdetres);
                    }
                    if ($_POST['siPersonaExiste']=="no"){
                        $newperson = "insert into `tbpersonas`(`idnroDoc`,`nomPersona`,`apePersona`,`telPersona`,`correoPersona`,`status`) values ($_POST[dni],'$_POST[fname]','$_POST[lname]',$_POST[phone],'$_POST[email]',1)";
                        $np=mysqli_query($con,$newperson);
                    }

					require_once('/home/u669320997/domains/gramtour.com.co/public_html/vendor/phpmailer/phpmailer/src/Exception.php');
					require_once('/home/u669320997/domains/gramtour.com.co/public_html/vendor/phpmailer/phpmailer/src/PHPMailer.php');
					require_once('/home/u669320997/domains/gramtour.com.co/public_html/vendor/phpmailer/phpmailer/src/SMTP.php');

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
                    $phpmailer->addAddress($_POST['email'], $_POST['fname']." ".$_POST['lastname']);
                    $phpmailer->addCC('cc1@example.com', 'Elena');
                    $phpmailer->Subject = 'Solicitud de reserva exitosa';
                    $phpmailer->isHTML(true);
                    $mailContent = '<table style="width: 60%;">
                    <tbody>
                        <tr>
                            <td colspan="2" style="width: 60%;"><h2 id="isPasted" style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; color: rgb(53, 53, 53); font-size: 40px; font-weight: 600; line-height: 1.5; font-style: normal; text-align: center; ">&iexcl;Felicidades, <span style="color: rgb(235, 107, 86);">'. $_POST['fname'] . '&nbsp;' . $_POST['lname'] . '</span>!</h2><p>Su reserva en el hospedaje <strong><span style="color: rgb(41, 105, 176);">' . $lnomorg . '</span></strong> est&aacute; registrada y en proceso de validaci&oacute;n. Pronto recibir&aacute;s un mensaje de confirmaci&oacute;n en caso de verificarse la disponibilidad de tu solicitud.</p></td>
                        </tr>
                        <tr>
                            <td style="width: 30%; background-color: rgb(84, 172, 210);"><div style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Fecha de ingreso </span></strong></div></td>
                            <td style="width: 30%; background-color: rgb(26, 188, 156);"><div style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Fecha de salida</span></strong></div></td>
                        </tr>
                        <tr>
                            <td style="width: 30%;"><div data-empty="true" style="text-align: center;"><strong>' . $_POST['cin'] . '</strong></div></td>
                            <td style="width: 30%;"><div data-empty="true" id="isPasted" style="text-align: center;">' . $_POST['cout'] . '</div></td>
                        </tr>
                        <tr>
                            <td style="width: 30%; background-color: rgb(26, 188, 156);"><div style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Adultos</span></strong></div></td>
                            <td style="width: 30%; background-color: rgb(84, 172, 210);"><div style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Niños</span></strong></div></td>
                        <tr>
                            <td style="width: 30%;"><div data-empty="true" style="text-align: center;"><span style="font-size: 18px;">' . $_POST['adultos'] . '</span></div></td>
                            <td style="width: 30%;"><div data-empty="true" id="isPasted" style="text-align: center;"><span style="font-size: 18px;">' . $_POST['ninos'] . '</span></div></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="width: 60%; background-color: rgb(84, 172, 210);"><div data-empty="true" style="text-align: center;"><strong><span style="color: rgb(255, 255, 255);">Habitaciones</span></strong></div><div style="text-align: center;"></div></td>
                        </tr>';
                        
                        foreach($detres as list($codigo,$cantidad)){
                            $codres = intval($codigo)+1;
                            $nomhab = $rshabitacion[$codres]['nomtipo'];
                            $mailContent .= '<tr>
                                                <td style="width: 10%;">' . $codres . '</td>
                                                <td style="width: 50%;">' . $nomhab . '</td>
                                            </tr>';
                        }
                    $mailContent .= '</tbody>
                    </table>';
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

?>
                    <div class="jumbotron">
                        <h1 class="display-3">Reserva exitosa</h1>
                        <br>
                        <p class="lead">Estimado señor(a):<span style="font-weight:bold"> <?php echo $_POST['fname'] . " " . $_POST['lname']; ?></span></p>
                        <hr class="my-4">
                        <p>Su solicitud de reserva para el hospedaje:<span style="font-weight:bold"> <?php echo $lnomorg;?></span> ha sido registrada.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="index.php" role="button">Finalizar</a>
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