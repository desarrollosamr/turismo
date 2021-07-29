<?php
include "config/config.php";

// Class Databse

class  Database{

  public $con;

  // Construct Class
  public function __construct(){

    if (!isset($this->con)) {
      try {
        $link = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME, );
        $link->exec("SET CHARACTER SET utf8");
        $this->con  =  $link;
      } catch (mysqli_sql_exception $e) {
        die("Error de conexión...".$e->getMessage());
      }
    }
  }
}

//$con = mysqli_connect("localhost","root","the_reborn","bdbasehotel1") or die(mysqli_error());
?>