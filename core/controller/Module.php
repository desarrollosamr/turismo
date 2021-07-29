<?php

class Module {
	public static $module;
	public static $view;
	public static $message;

	public static function setModule($module){
		self::$module = $module;
	}

	public static function loadLayout(){
		include "core/modules/".Module::$module."/view/layout.php";
	}

	// validacion del modulo
	public static function isValid(){
		$valid = false;
		$folder = "core/modules/".Module::$module;
			if(is_dir($folder)){
				$valid=true;
			}else { 
				self::$message= "<b>404 No se encuentra</b> Modulo <b>".Module::$module."</b> carpeta  !!"; 
			}
		return $valid;
	}

	public static function Error(){
		echo self::$message;
		die();
	}
}
?>