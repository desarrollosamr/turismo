<?php
// el archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
require_once("core/autoload.php");

// cargamos el modulo iniciar.
if(!isset($_GET['module'])){
    Core::loadModule("general");
}else{
    Core::loadModule($_GET['module']);
}
?>