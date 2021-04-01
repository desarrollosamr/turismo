<?php
  include_once 'clsestadohabitacion.php';
  session_start();  
  
  function valida($m){
    $sw = 0;
    $sw = (empty(trim($m['namestateh']))) ? 2  : $sw;
    return $sw;
  }
	if (!empty($_POST))  
	{ //$datosRecibidos="";
    $action = openssl_decrypt( $_REQUEST['id'], COD, KEY);    
    switch($action){       
      case 'new' :
        $swok =0;
        $swok = valida($_REQUEST);
        $obj = new clsestadohabitacion();
        if ($swok == 0) {  $swok = $obj->newstateHabitacion($_REQUEST); }
        echo json_encode($swok, JSON_UNESCAPED_UNICODE);      
        break;      
        //$obj = new clsmobiliario();
        //echo json_encode($obj->newstateHabitacion($_REQUEST), JSON_UNESCAPED_UNICODE);        
        //break;
      case 'saveedit':
        $swok = valida($_REQUEST);
        $obj = new clsestadohabitacion();  
        if ($swok == 0) {$swok = $obj->updatestateHabitacion($_REQUEST);}      
        echo json_encode($swok, JSON_UNESCAPED_UNICODE);
        break;
      case 'delete' :
        $obj = new clsestadohabitacion();
       // echo json_encode($obj->onestateHabitacion($_REQUEST['action']), JSON_UNESCAPED_UNICODE);
        //$m = $_REQUEST;
        //echo json_encode("delete", JSON_UNESCAPED_UNICODE);
        //echo json_encode($obj->updateTypoDocumento($id, $nom), JSON_UNESCAPED_UNICODE);
        break;
      case 'savedelete':
        echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
        die();
        break;
		  case 'validar':
        $obj = new clsestadohabitacion();
        //$arrayData = array();
        $swok = valida($_REQUEST);
        /*
        //if (empty(trim($_REQUEST['nomMobiliario']))) $swok = "1"        
        $swok = (!is_numeric(trim($_REQUEST['preMobiliario']))) ? 4 : $swok;     
        //$swok = (empty(trim($_REQUEST['preMobiliario']))) ? 4 : $swok;
        $swok = (empty(trim($_REQUEST['desMobiliario']))) ? 3: $swok;
        $swok = (empty(trim($_REQUEST['nomMobiliario']))) ? 2     : $swok;*/
        if ($swok == 0){
          $swok = $obj->newstateHabitacion(trim($_REQUEST['nomMobiliario']), 
                                      trim($_REQUEST['desMobiliario']), 
                                      $_REQUEST['preMobiliario']);
        }
        echo json_encode($swok, JSON_UNESCAPED_UNICODE);
        //die();
        break;
    }
    exit;	
  }
?>