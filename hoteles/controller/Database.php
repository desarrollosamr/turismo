<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="root";$this->pass="the_reborn";$this->host="127.0.0.1";$this->ddbb="bdbasehotel1";
		//$this->user="minucia";$this->pass="minucia2911";$this->host="188.121.44.69";$this->ddbb="minucia";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
