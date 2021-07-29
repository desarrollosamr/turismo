<?php
/*include_once('D:\xampp_new\htdocs\turismo\core\controller\Session.php');
include_once('C:\xampp_new\htdocs\turismo\core\model\UserData.php');
include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');*/
$pepper = '023c9hp9433249ptry23p4rt3hfwed';
if (Session::getUID()=="") {
	$user = $_POST['email'];
	$pass = $_POST['password'];
	$p_peppered = hash_hmac("sha256", $pass, $pepper);

	$sql = "select id, password from tbl_users where email= '".$user."'  and isActive=0";
	//$sql = "select * from tbl_users where email= '".$user."'  and password= '".$pass."' and isActive=0";
	
	$query = Executor::doit($sql);
	$found = false;
	$userid = null;
	$msg="Error:";
	while($r = $query[0]->fetch_array()){
		$found = true ;
		$p_hashed = $r['password'];
		$userid = $r['id'];
	}
	if ($found and password_verify($p_peppered, $p_hashed)) {
	//if($found==true) {
		session_start();
		$_SESSION['user_id']=$userid ;
		$u = UserData::getById(Session::getUID());
		$nusuactual = $u->name;
		echo "success" . $nusuactual;
		//print "<script>window.location='../../../index.php';</script>";
	}else if(!found) {
		msg .= $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
    El documento de identidad no se encuentra registrado !</div>';
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
