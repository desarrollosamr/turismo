
<?php
$pepper = '023c9hp9433249ptry23p4rt3hfwed';
$name = $_POST['uname'];
$email = $_POST['uemail'];
$pass = $_POST['upass'];
$p_peppered = hash_hmac("sha256", $pass, $pepper);
$p_hashed = password_hash($p_peppered, PASSWORD_BCRYPT);
$cpass = $_POST['cupass'];
$cel = $_POST['ucel'];
$rol = 3;
$isactive = 0;
//$created = date("Y-m-d H:i:s");
$msg = "Error:";
//CONTROLADOR
if(isset($_POST['registro']))
{
  if ($name == "" || $email == "" || $cel == "" || $pass == "") {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    Todos los campos son obligatorios !</div>';
    echo $msg;
  }elseif (!filter_var($cel,FILTER_SANITIZE_NUMBER_INT)) {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    Solo se permiten números en el campo Número de teléfono !</div>';
    echo $msg;
  }elseif(strlen($pass) < 4) {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    La clave debe tener al menos 4 caracteres !</div>';
    echo $msg;
  }elseif(!preg_match("#[0-9]+#",$pass)) {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    La clave debe contener al menos 1 número !</div>';
    echo $msg;
  }elseif(!preg_match("#[a-z]+#",$pass)) {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    La clave debe contener al menos una letra minúscula !</div>';
    echo $msg;
  }elseif(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    La dirección de correo no es válida !</div>';
    echo $msg;
  }elseif ($pass != $cpass) {
    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    Las contraseñas no coinciden !</div>';
    echo $msg;
 }else{
    $con=new mysqli("localhost","u669320997_gramtour","Desarrollos2020","u669320997_bdbasehotel1");
	$sql="INSERT INTO tbl_users(name,email,password,mobile,roleid,isActive)
    VALUES ('$name', '$email', '$p_hashed', $cel, $rol, $isactive)";
    /*$sql = $con->prepare('INSERT INTO tbl_users(name,email,password,mobile,roleid,isActive)
    VALUES (?, ?, ?, ?, ?, ?)'); 
    $sql->bind_param('sssiii', $name, $email, $p_hashed, $cel, $rol, $isactive);
	print_r($sql->error);    */
	if($result = $con -> query($sql)){
        //$sql->execute();
          echo "success";
    } else {
        echo "error";
    }    
  }
}
?>