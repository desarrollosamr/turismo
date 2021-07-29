<?php
//include_once('conexion.php');
include_once("../modpublicos/conexion.php");
class clsmedio {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagmedioreserva('$flag','$criterio','$pagina','$registro')";
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
  function newMedyoreserva($data){
    $con = new Conect_MySql();
    $nom = strtoupper(trim($data['nomMedyo']));
    $query = "CALL SP_newMedyoreserva('$nom')";
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['xx'];
  }

   function updateMedyoreserva($data){     
    $con = new Conect_MySql();
    $id  = $data['action'];
    $nom = strtoupper(trim($data['nomMedyo']));
    $query = "CALL sp_updateMedyoreserva($id, '$nom')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }
   
   function onedeleteMedyoreserva($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneMedyoreserva($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
   function statusMedyoreserva($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updateMedyoreserva($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }


}

