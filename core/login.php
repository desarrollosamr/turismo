<?php


include_once('/home/u669320997/domains/gramtour.com.co/public_html/core/controller/Database.php');

include_once('/home/u669320997/domains/gramtour.com.co/public_html/core/controller/Executor.php');

include_once('/home/u669320997/domains/gramtour.com.co/public_html/core/model/UserData.php');
include_once('/home/u669320997/domains/gramtour.com.co/public_html/core/controller/Session.php');



$pepper = '023c9hp9433249ptry23p4rt3hfwed';

if (Session::getUID()=="") {
	$user = $_POST['email'];
	$pass = $_POST['password'];
	$p_peppered = hash_hmac("sha256", $pass, $pepper);

	$sql = "select * from tbl_users where email= '".$user."'  and isActive=0";
	$query = Executor::doit($sql);
	$found = false;
	$userid = null;
	while($r = $query[0]->fetch_array()){
		$found = true ;
		$p_hashed = $r['password'];
		$userid = $r['id'];
	}
	if (password_verify($p_peppered, $p_hashed)) {
		session_start();
		$_SESSION['user_id']=$userid ;
		$u = UserData::getById(Session::getUID());
		$nusuactual = $u->name;
		echo "success" . $nusuactual;
	}else {
		echo "error";
	}
}else{
	print "<script>window.location='../../../index.php';</script>";
}
?>
