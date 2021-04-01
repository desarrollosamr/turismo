<?php
session_start();
//unset($_SESSION["user"]);

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();

header("location:../");
?>