<?php
include_once("../modpublicos/conexion.php");
class clstipodocumento {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagtipodocumento('$flag','$criterio','$pagina','$registro')";
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
   function newTypoDocumento($descripcion){
    $con = new Conect_MySql();
    $query = "CALL SP_newTypoDocumento('$descripcion')";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['xx'];
   }
   function oneTypoDocumento($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneTypoDocumento($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
   function updateTypoDocumento($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updateTypoDocumento($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }
   
   function onedeleteTypoDocumento($id){
    $con = new Conect_MySql();
    $query = "CALL SP_oneTypoDocumento($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
   function statusTypoDocumento($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updateTypoDocumento($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }


}

