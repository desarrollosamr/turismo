<?php
if(isset($_GET['recuperarcontra']))
{
        $body="";
        //$mysqli="";
            $email = $mysqli->real_escape_string($_POST['Correo']);
            if (trim($email) == null ){
                echo 
                "<script>
                Swal.fire({
                    icon: 'warning',
                    html: '<h3>Todos los campos son obligatorios.</h3>',
                    allowOutsideClick: false,
                    background: '#fff',
                    confirmButtonColor: '#FC3E3E',
                    confirmButtonText: 'Cerrar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.history.back();
                    }
                  });
                  </script>";}
                  else{
                    define("KEY","ankali");
                    define("COD","AES-128-ECB");
                    $correoencript=openssl_encrypt($email,COD,KEY);
                    $xx=$email;
                    
                    $sql = $mysqli->query("SELECT Nombre, Documento FROM usuarios where Correo = '$email'");
                    
                    $row = $sql->fetch_array();
                    $count = $sql->num_rows;
                    
            if($count ==1){
                $ndocencript=openssl_encrypt($row['Documento'],COD,KEY);
    
                //$act =  $mysqli->query("UPDATE usuarios WHERE Correo = '$email'");
                $body =  '
                <center style="min-width:580px;width:100%">
                    <table style="Margin:0 auto;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                        <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top">
                                <td height="15px" style="Margin:0;border-collapse:collapse!important;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:10px;font-weight:400;line-height:10px;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
    
                        <table align="center" class="m_-3617184912195535673container" style="Margin:0 auto;background:#fff;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:10px;text-align:center;vertical-align:top;width:580px;margin-left:10px!important;margin-right:10px!important">
                        <tbody>
                            <tr style="padding:0;text-align:left;vertical-align:top">
                                <td style="Margin:0;border-collapse:collapse!important;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                    <table class="m_-3617184912195535673row m_-3617184912195535673header-v2" style="background-color:#fff;background-image:none;background-position:top left;background-repeat:repeat;border-bottom:1px solid #efeef1;border-collapse:collapse;border-spacing:0;display:table;margin:10px 0 15px 0;padding:0;text-align:left;vertical-align:top;width:100%"> 
                                        <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <th class="m_-3617184912195535673small-12 m_-3617184912195535673columns" style="Margin:0 auto;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0!important;padding-left:20px;padding-right:20px;padding-top:0!important;text-align:left;width:560px">
                                                    <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                        <tbody>
                                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                                <th style="Margin:0; color:#322f37; font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left">
                                                                    <h1 style="text-align: center; font-family: cursive; ">ANKALI</h1>
                                                                    <hr style="height:3px;border:none;background:linear-gradient(274deg, #46c9d0d8, #6262e2d2 44%, #c862f7d8)">
                                                                </th>
                                                            </tbody>
                                                        </table>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
    
                                        <table class="m_-3617184912195535673row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                    <th class="m_-3617184912195535673small-12 m_-3617184912195535673columns" style="Margin:0 auto;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:18px;font-weight:500;line-height:1.3;margin:0 auto;padding:0;padding-bottom:0!important;padding-left:20px;padding-right:20px;padding-top:0!important;text-align:left;width:560px">
                                                        <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                            <tbody>
                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                    <th style="Margin:0;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:18px;font-weight:500;line-height:1.3;margin:0;padding:0;text-align:left">
                                                                        <h6 style="Margin:0;Margin-bottom:10px;color:inherit;font-family:Helvetica,Arial,sans-serif;font-size:18px;font-weight:500;line-height:1.3;margin:0;margin-bottom:0;padding:0;padding-bottom:0;text-align:center;word-wrap:normal;color:#9147ff">Hola'.' '.$row['Nombre'] .'</h6>
                                                                    </th>
                                                                    <th style="Margin:0;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0">
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
    
    
    
                                        <table class="m_-3617184912195535673row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                    <th class="m_-3617184912195535673small-12 m_-3617184912195535673columns" style="Margin:0 auto;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:300;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:20px;padding-right:20px;padding-top:10px;text-align:left;width:560px">
                                                        <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                                                            <tbody>
                                                                <tr style="padding:0;text-align:left;vertical-align:top">
                                                                    <th style="Margin:0;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:center">
                                                                        <p style="Margin:0;Margin-bottom:10px;font-family:Helvetica,Arial,Verdana,font-size:16px;font-weight:300;line-height:24px;margin:0;margin-bottom:0;padding:0;padding-bottom:0;text-align:center color:black;">¡Notamos que solicitaste restablecer tu contraseña en ANKALI! <br>Por favor haga clik en el botón para restablecer la contraseña: </p><br>
                                                                        <button style="background:linear-gradient(274deg, #46c9d0d8, #6262e2d2 44%, #c862f7d8); border: none; color: white; padding: 10px 20px; text-align: center;text-decoration: none;display: inline-block; text-transform: uppercase;font-size: 14px; "> 
                                                                            <a style="text-decoration:none;
                                                                            color:white;
                                                                            padding-top:15px;
                                                                            padding-bottom:15px;
                                                                            padding-left:60px;
                                                                            padding-right:60px; " href=" http://localhost/Proyecto-ANKALI/Vista/RestablecerContrasena.php?ABC='.$correoencript.'&ndoc='.$ndocencript.'"> Restablecer contraseña </a></button>
                                                                        <br><hr style="height:3px;border:none;background:linear-gradient(274deg, #46c9d0d8, #6262e2d2 44%, #c862f7d8)">
    
                                                                    </th>
                                                                    <th style="Margin:0;color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0">
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
    
    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <table align="center" class="m_-3617184912195535673container" style="Margin:0 auto;background:0 0!important;border-collapse:collapse;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:580px">
                                
                            <table align="center" style="background:0 0!important;border-collapse:collapse;border-spacing:0;margin:20px auto 0 auto;padding:0;text-align:inherit;vertical-align:top;width:580px">
                                <tbody>
                                            <th style="color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0">
                                                <p style="color:#322f37;font-family:Helvetica,Arial,Verdana,font-size:16px;font-weight:400;line-height:24px;margin:0;margin-top:5px;margin-bottom:10px;padding:0;padding-bottom:10px;text-align:center">
                                                    <small style="color:#706a7c;font-size:14px">© 2021 ANKALI, todos los derechos reservados</small>
                                                </p>
                                            </th>
                                            <th style="color:#322f37;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0!important;text-align:left;width:0"></th>
                                    </tbody>
                                </table>
                        </table>
                </center>';
            }else{
             echo "<script> 
                Swal.fire({
                    icon: 'error',
                    html: '<h3>Este correo no esta asociado a <br>ninguna cuenta.</h3>',
                    allowOutsideClick: false,
                    background: '#fff',
                    confirmButtonColor: '#FC3E3E',
                    confirmButtonText: 'Cerrar'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.history.back();
                    }
                  });
                </script>";
            }
            $mail = new PHPMailer(true);
    
        try {
            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );
            //Server settings
            $mail ->SMTPDebug = 0;
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'regalosankali@gmail.com';                     // SMTP username
            $mail->Password   = 'Ankali123*';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
            //Recipients
            $mail->setFrom($email);
            $mail->addAddress($email);     // Add a recipient
    
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'ANKALI';
            $mail->Body = $body;
    
            $mail->send();
            echo  
            "<script>
            Swal.fire({
                icon: 'success',
                html: '<h3>Correo enviado exitosamente</h3>',
                allowOutsideClick: false,
                background: '#fff',
                confirmButtonColor: '#FC3E3E',
                confirmButtonText: 'Cerrar'
              }).then((result) => {
                if (result.isConfirmed) {
                    window.history.back();
                }
              });
              </script>";
    
        } catch (Exception $e) {
           // echo "Error en el envio: {$mail->ErrorInfo}";
        } 
                  }
}
//RESTABLECER CONTRASEÑA--->CAMBIAR LA CONTRASEÑA
elseif(isset($_POST['restablecercontra']))
{
    define("KEY","ankali");
    define("COD","AES-128-ECB");
    
    $Correo=openssl_decrypt($_REQUEST['email'],COD,KEY);
    $Correo=($_REQUEST['email']);
    $Documento=openssl_decrypt($_REQUEST['ndoc'],COD,KEY);
    $email = $mysqli->real_escape_string($Correo);
    $psw=$_REQUEST['Contrasena'];
    
    if (trim($psw) == null ){
            echo 
            "<script>
            Swal.fire({
                icon: 'warning',
                html: '<h3>Todos los campos son obligatorios.</h3>',
                allowOutsideClick: false,
                background: '#fff',
                confirmButtonColor: '#FC3E3E',
                confirmButtonText: 'Cerrar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.history.back();
                }
            });
            </script>";
        }else{
            echo "<script>
            Swal.fire({
                icon: 'success',
                html: '<h3>Contraseña restablecida<br> correctamente.</h3>',
                allowOutsideClick: false,
                background: '#fff',
                confirmButtonColor: '#FC3E3E',
                confirmButtonText: 'Cerrar'
              }).then((result) => {
                if (result.isConfirmed) {
                    window.location='../index.php';
                }
              });
              </script>";
    $sql = $mysqli->query("UPDATE  usuarios SET Contrasena = '$psw'  where Documento = '$Documento'");
        }
}
?>