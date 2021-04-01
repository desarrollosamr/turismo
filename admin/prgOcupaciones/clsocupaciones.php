<?php
include_once("../modpublicos/conexion.php");
class clsocupaciones {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagOcupaciones('$flag','$criterio','$pagina','$registro')";
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
  function newOcupaciones($data){
    $con = new Conect_MySql();
    $nom = strtoupper(trim($data['nomocupaciones']));
    $query = "CALL SP_newOcupaciones('$nom')";
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['xx'];
  }
   function oneOcupaciones($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneOcupaciones($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
  function updateOcupaciones($data){     
    $con = new Conect_MySql();
    $id  = $data['action'];
    $nom = strtoupper(trim($data['nomocupaciones']));
    $query = "CALL sp_updateOcupaciones($id, '$nom')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
  }
   
  function onedeleteOcupaciones($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneOcupaciones($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
  }
  function statusOcupaciones($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updateOcupaciones($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
  }
}

