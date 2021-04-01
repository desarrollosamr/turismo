<?php
include_once (isset($path)? $path : '').'Database.php';
class Executor {
	public static function doit($sql){
		$con = Database::getCon();
		return array($con->query($sql),$con->insert_id);
	}
}
?>