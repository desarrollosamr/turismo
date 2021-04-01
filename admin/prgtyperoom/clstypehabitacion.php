<?php
include_once("../modpublicos/conexion.php");
class clstypehabitacion {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagtypehabitacion('$flag','$criterio','$pagina','$registro')";
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
  function newtypeHabitacion($data){
    $con = new Conect_MySql();
    $nom = strtoupper(trim($data['nametype']));
    $des = strtoupper(trim($data['destype']));    
    $query = "CALL SP_newtypeHabitacion('$nom','$des')";
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['xx'];
  }

  function updatetypeHabitacion($data){     
    $con = new Conect_MySql();
    $id  = $data['action'];    
    $nom = strtoupper(trim($data['nametype']));
    $des = strtoupper(trim($data['destype']));    
    $query = "CALL sp_updatetypeHabitacion($id, '$nom','$des')";
    $rst = mysqli_fetch_array($con->execute($query));    
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
}

