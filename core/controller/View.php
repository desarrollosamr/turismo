<?php

class View {
	public static function load($view){
		// Module::$module;
		if(!isset($_GET['view'])){
			include "core/modules/".Module::$module."/view/".$view."/widget-default.php";
		}else{
			if(View::isValid()){
				include "core/modules/".Module::$module."/view/".$_GET['view']."/widget-default.php";				
			}else{
				View::Error("<b>404 No se encuentra/b> Vista <b>".$_GET['view']."</b> carpeta  !!");
			}
		}
	}

	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/modules/".Module::$module."/view/".$_GET['view']."/widget-default.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

}



?>