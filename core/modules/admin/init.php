<?php
// init.php
// archivo iniciarlizador del modulo
// librerias requeridas
// * Database
// * Session
date_default_timezone_set('America/Bogota');

include "core/model/UserData.php";
include "core/model/ConfigurationData.php";
include "core/model/BoxData.php";
include "core/model/categoryData.php";
include "core/model/deptosData.php";
include "core/model/municipiosData.php";
include "core/model/ReservasData.php";
include "core/model/subcategoryData.php";
include "core/model/tbhotelClienteData.php";
include "core/model/tbOrganizacionData.php";
//include "core/controller/Executor.php";
//include "core/controller/Database.php";
session_start();
ob_start();

Module::loadLayout();

?>