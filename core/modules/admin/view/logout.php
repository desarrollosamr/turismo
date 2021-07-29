<?php
session_start();
//unset($_SESSION["user"]);
setcookie(session_name(), '', 100);
session_destroy();
$_SESSION = array();

print "<script>window.location='../../../index.php';</script>";
?>