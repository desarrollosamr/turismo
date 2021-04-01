<?php
  include_once 'clsunidadmedida.php';
  session_start();  
  
  function valida($m){
    $sw = 0;
    $sw = (empty(trim($m['nameundMedida']))) ? 2  : $sw;
    return $sw;
  }
	if (!empty($_POST))  
	{ 
    $action = openssl_decrypt( $_REQUEST['id'], COD, KEY);    
    switch($action){       
      case 'new' :
        $swok =0;
        $swok = valida($_REQUEST);
        $obj = new clsunidadmedida();
        if ($swok == 0) {  $swok = $obj->newunidadMedida($_REQUEST); }
        echo json_encode($swok, JSON_UNESCAPED_UNICODE);      
        break;      
        //$obj = new clsmobiliario();
        //echo json_encode($obj->newunidadMedida($_REQUEST), JSON_UNESCAPED_UNICODE);        
        //break;
      case 'saveedit':
        $swok = valida($_REQUEST);
        $obj = new clsunidadmedida();  
        if ($swok == 0) {$swok = $obj->updateunidadMedida($_REQUEST);}      
        echo json_encode($swok, JSON_UNESCAPED_UNICODE);
        break;
      case 'delete' :
        $obj = new clsunidadmedida();
       // echo json_encode($obj->oneunidadMedida($_REQUEST['action']), JSON_UNESCAPED_UNICODE);
        //$m = $_REQUEST;
        //echo json_encode("delete", JSON_UNESCAPED_UNICODE);
        //echo json_encode($obj->updateTypoDocumento($id, $nom), JSON_UNESCAPED_UNICODE);
        break;
      case 'savedelete':
        echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
        die();
        break;
		  case 'validar':
        $obj = new clsunidadmedida();
        //$arrayData = array();
        $swok = valida($_REQUEST);
        /*
        //if (empty(trim($_REQUEST['nomMobiliario']))) $swok = "1"        
        $swok = (!is_numeric(trim($_REQUEST['preMobiliario']))) ? 4 : $swok;     
        //$swok = (empty(trim($_REQUEST['preMobiliario']))) ? 4 : $swok;
        $swok = (empty(trim($_REQUEST['desMobiliario']))) ? 3: $swok;
        $swok = (empty(trim($_REQUEST['nomMobiliario']))) ? 2     : $swok;*/
        if ($swok == 0){
          $swok = $obj->newunidadMedida(trim($_REQUEST['nomMobiliario']), 
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