<?php
//include_once('conexion.php');
include_once("../modpublicos/conexion.php");
class clsunidadmedida {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagunidadMedida('$flag','$criterio','$pagina','$registro')";
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
  function newunidadMedida($data){
    $con = new Conect_MySql();
    $nom = ucfirst(trim($data['nameundMedida']));
    $query = "CALL SP_newunidadMedida('$nom')";
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['xx'];
  }
   function oneunidadMedida($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneunidadMedida($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
  function updateunidadMedida($data){     
    $con = new Conect_MySql();
    $id  = $data['action'];
    $nom = ucfirst(trim($data['nameundMedida']));
    $query = "CALL sp_updateunidadMedida($id, '$nom')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
  }
   
  function onedeleteunidadMedida($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneunidadMedida($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
  }
  function statusunidadMedida($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updateunidadMedida($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
  }
}

