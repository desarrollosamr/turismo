<?php

// Class Databse

class  Database1{
	public static $db1;
	public static $con1;
	function Database(){
		$this->user="root";$this->pass="the_reborn";$this->host="127.0.0.1";$this->ddbb="bdbasehotel1";
		//$this->user="minucia";$this->pass="minucia2911";$this->host="188.121.44.69";$this->ddbb="minucia";
	}

	function connect(){
		$con1 = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con1;
	}

	public static function getCon(){
		if(self::$con1==null && self::$db==null){
			self::$db1 = new Database1();
			self::$con1 = self::$db1 ->connect();
		}
		return self::$con1;
	}
	
}

//$con = mysqli_connect("localhost","root","the_reborn","bdbasehotel1") or die(mysqli_error());
?>