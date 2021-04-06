<?php
function dbcon(){
  $host = 'localhost';
	$usr = 'root';
	$psw = '';
	$db = 'bdbasehotel1';
	$conection = @mysqli_connect($host,$usr,$psw,$db);
	//$cnx = @mysqli_connect($host,$usr,$psw,$db);
	if(!$conection){
		echo "Error en la conexión,(bdbasehotel1) no existe....";
		die();
		exit();
	}
  	return $conection;    
}
  //$con = mysqli_connect("localhost","root","","") or die(mysql_error());
?>