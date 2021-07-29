<?php
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Session.php');
//include_once('d:\xampp_new\htdocs\turismo\core\model\UserData.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Database.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Executor.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\model\tbOrganizacionData.php');
$pepper = '023c9hp9433249ptry23p4rt3hfwed';
if (Session::getUID()=="") {
	$user = $_POST['email'];
	$pass = $_POST['password'];
	$p_peppered = hash_hmac("sha256", $pass, $pepper);

	$sql = "select idOrg, nombOrg, password from tborganizacion where emailOrg= '".$user."'  and status=1";
	
	$query = Executor::doit($sql);
	$found = false;
	$userid = null;
	$msg="Error:";
	while($r = $query[0]->fetch_array()){
		$found = true ;
		$p_hashed = $r['password'];
		$userid = $r['idOrg'];
		$nomborg = $r['nombOrg'];
	}
	if ($found and password_verify($p_peppered, $p_hashed)) {
		session_start();
		$_SESSION['user_id']=$userid ;
		$u = tbOrganizacionData::oneTbOrganizacion($userid);
		$nusuactual = $u->nombOrg;
		echo "success" . $nomborg;
	}else if(!found) {
		$msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    El email no se encuentra registrado !</div>';
		echo $msg;
	}else {
		$msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
		Las contraseñas no coinciden !</div>';
		echo $msg;
	}
}else{
	print "<script>window.location='index.php';</script>";
}
?>
