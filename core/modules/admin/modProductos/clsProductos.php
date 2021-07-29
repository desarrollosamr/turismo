<?php
include_once("../modpublicos/conexion.php");
class clsProductos {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagproductos('$flag','$criterio','$pagina','$registro')";
    $sel = $con->execute($sql);
    //$traido = mysqli_num_rows($sel);
    $traido = $con->get_num_rows();
    $data =[];
    if ($traido != 0) 
    {
      while ($row = $con->fetch_row($sel)) 
      {
        if ($flag == 1)  { $data[] = $row; }
        else {
          $data = $row['total'];      
        }        
      }
    }
    $con->close_db();
    return $data;
  }
  function newproducto($data){
    $con = new Conect_MySql();
    //$rst=array();
    $nom = $data['nameprod'];
    $uni = $data['cbounimedida'];
    $imp = $data['imptoprod'];
    $pre = $data['priceprod'];
    $stk = $data['stockprod'];
    $iva = $data['ivaprod'];    
    $query = "CALL SP_newProducto('$nom', $uni, $imp, $pre, $iva, $stk)";
    $rst = mysqli_fetch_array($con->execute($query));
    $con->close_db();
    //$rst = $con->execute($query);
    //$rst['x'] ='ok';
    return $rst['xx'];
  }
   function onestateHabitacion($id){
    $con = new Conect_MySql();
    $query = "CALL SP_onestateHabitacion($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
  function updateProductos($data){     
    $con  = new Conect_MySql();
    $id   = $data['action'];
    $nomp = strtoupper(trim($_REQUEST['nameprod']));
    $unip = $_REQUEST['cbounimedida'];
    $impp = $_REQUEST['imptoprod'];
    $prep = $_REQUEST['priceprod'];
    $ivap = $_REQUEST['ivaprod'];
    $canp = $_REQUEST['stockprod'];
/*
(IN `pcriterio` INT,  IN `pnom` VARCHAR(80),  IN `punidad` float, 
		IN `pimpto` float,   IN `pprecio` float, IN  `piva` float, IN  `pcan` int)
*/
    //$sql1 = "SELECT COUNT(*) as xx FROM tbproductos WHERE nomproducto = '$nomp' and idproducto  != $id";
    //$rst = mysqli_fetch_array($con->execute($sql1));
    $query = "CALL sp_updaterecordproducto($id, '$nomp', $unip, $impp, $prep, $ivap, $canp)";
    $rst = mysqli_fetch_array($con->execute($query));
    $con->close_db();   
    return $rst['xx'];
  }
   
  function onedeletestateHabitacion($id){
    $con = new Conect_MySql();
    $query = "CALL SP_onestateHabitacion($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
  }
  function statusstateHabitacion($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updatestateHabitacion($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
  }
  function fillcbounidad()
  {
    $con = new Conect_MySql();
    $query = "Select * from tbundmedida";
    //$query = "CALL sp_allstateHabitacion()";
    $rst   = $con->execute($query);
    $cbo="";
    $cbo.= "
      <select name='cbounimedida' id='cbounimedida' class='form-control'>
        <option value='0'>Seleccione</option>";
        foreach ($rst as $value) {
          $cbo.= "<option value='" . $value['idUnidadm'] . "'>" . $value['nomUnidadm'] ."</option>";
          }
    $cbo.="</select>";
    $con->close_db();  
    return $cbo;
  }
  function fillcbotypeHabitacion()
  {
    $con = new Conect_MySql();
    //$query = "CALL sp_alltypehabitacion()";
    $query = "Select * from tbtypohabitacion";
    $rst   = $con->execute($query);
    $cbo = "";
    $cbo .= "
      <select name='cbotyperoom' id='cbotyperoom' class='form-control'>
        <option value='0'>Seleccione</option>";
    foreach ($rst as $value) {
      $cbo .= "<option value='" . $value['idtipoHab'] . "'>" . $value['nomTipo'] . "</option>";
    }
    $cbo .= "</select>";
    $con->close_db();  
    return $cbo;
  }
  function generacombomobiliario($n)
  {
    $obj = new clsHabitacion();
    $array = $obj->fillcbo1();
    return $array;
  }
  
  function fillcbo1()
  {
    $con = new Conect_MySql();
    $query = "select a.idMobiliario, a.nomMobiliario from tbmobiliario a;";
    $rst   = $con->execute($query);
    $cbo = "";
    $cbo .= "
      <select name='cbomov' id='cbomov' class='form-control'>
        <option value=0>Seleccione</option>";
    foreach ($rst as $value) {
      $cbo .= "<option value='" . $value['idMobiliario'] . "'>" . $value['nomMobiliario'] . "</option>";
    }
    $cbo .= "</select>";
    $con->close_db();  
    return $cbo;    
    //  select a.idtemp, a.idMobiliario, a.nomMobiliario from tbmobiliario;  
  } 
  function generaTemporal($m, $n){
    $con = new Conect_MySql();
    $nrohab = $m['nhh'];
    $keyhab = $m['nh'];
    $nommob = $m['ntxt'];
    $keymob = $m['vcbo'];
    $canmob = $m['ct'];
    $query = "CALL SP_newTemporal($nrohab, $keyhab,'$nommob', $keymob, $canmob, $n)";
    $rst   = $con->execute($query);
    return $rst;    
  }
  function generafrm($m, $n)
  {
    $con = new Conect_MySql();
    $nn = $n;
    switch($n)    {
      case 1 :      
        $nrohab = $m['nhh'];
        $keymob = $m['vcbo'];
      break;
      case 2:
        $nn=1;
        $nrohab = $m['nrohab'];
        $keymob = $m['nro'];
      break;
    }       
    $query = "CALL SP_readTemporal($nrohab, $keymob, $nn)";
    $rst   = $con->execute($query);
    return $rst;

  }
  function deleteTemporal($m, $n){
    $con = new Conect_MySql();
    $nrohab = $m['action'];
    $keyhab = $m['nro'];
    $query = "Delete from tmpmobiliario where keyhab = $keyhab and nrohab= $nrohab";
    $rst   = $con->execute($query);    
    return $rst;
    //return $query;
  }

  function deleteregistroTemporal($m, $n)
  {
    $con = new Conect_MySql();
    $idborrar = $m['action'];
    $keyhab   = $m['keyhab'];
    $keyhab   = $m['nrohab'];    
    $query = "CALL sp_deleteTemporal($idborrar, $keyhab, $n)";
    //$query = "Delete from tmpmobiliario where idtmp = $idborrar";
    $rst   = $con->execute($query);
    return $rst;
    //return $query;
  }
  function generarelacion($m)
  {
    $con = new Conect_MySql();
    $keyhab = $m['keyhav'];
    $nrohab = $m['nhav'];
    $query = "CALL sp_pasarelacion($keyhab, $nrohab)";    
    $rst   = $con->execute($query);
    return $rst;
    //return $query;
  }  
  function viewMoviliario($m){
    $con = new Conect_MySql();
    $nrohab = $m['nhav'];
    $keyhab = $m['keyhav'];
    $query = "CALL sp_viewmobiliario($keyhab, $nrohab)";
    //$rst   = $con->execute($query);
    $rst = $con->execute($query);
  //  return $rst;
    $traido = $con->get_num_rows();   
    $data = [];    
    if ($traido != 0) {
      while ($row = $con->fetch_row($rst)) {
        $data[] = $row;
      }
    }
    $con->close_db();
    return $data;
  }
}


