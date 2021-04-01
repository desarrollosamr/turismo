<?php
//include_once('conexion.php');
include_once("../modpublicos/conexion.php");
class clsmobiliario {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_paginamobiliario('$flag','$criterio','$pagina','$registro')";
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
  function newMoviliario($data){
    $con = new Conect_MySql();
    $nom = strtoupper(trim($data['nomMobiliario']));
    $des = strtoupper(trim($data['desMobiliario']));
    $pre = $data['preMobiliario'];
    $query = "CALL SP_newMobiliario('$nom','$des', $pre)";
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['xx'];
  }
   function oneMobiliario($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneMobiliario($id)";   
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['nomtipoDoc'];
   }
   function updateMobiliario($data){     
    $con = new Conect_MySql();
    $id  = $data['action'];
    $nom = strtoupper(trim($data['nomMobiliario']));
    $des = strtoupper(trim($data['desMobiliario']));
    $pre = $data['preMobiliario'];    
    $query = "CALL sp_updateMobiliario($id, '$nom','$des', $pre)";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }
   
   function onedeleteMobiliario($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneMobiliario($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
   function statusMobiliario($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updateMobiliario($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }


}

