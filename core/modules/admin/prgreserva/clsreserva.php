<?php
//include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
//include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');
include_once('C:\xampp_new\htdocs\turismo\core\modules\admin\modpublicos\conexion.php');
class clsreserva {
  function listado($flag, $criterio, $pagina, $registro) {
    $con = new Conect_MySql();       
    $sql = "CALL sp_pagstatereserva('$flag','$criterio','$pagina','$registro')";
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
  function newReserva($data){
    $sql = "insert into ".self::$tablename." (sell_id,fecha,monto_e,monto_t1,monto_t2,user_id,created_at) ";
		$sql .= "values ($this->sell_id,'$this->fecha',$this->monto_e,$this->monto_t1,$this->monto_t2,$this->user_id,$this->created_at)";

		return Executor::doit($sql);

    $con = new Database();
    $nom = strtoupper(trim($data['nomstateReserva']));
    $query = "CALL SP_newstateReserva('$nom')";
    $rst = mysqli_fetch_array($con->execute($query));
    return $rst['xx'];
  }

   function updatestateReserva($data){     
    $con = new Conect_MySql();
    $id  = $data['action'];
    $nom = strtoupper(trim($data['nomstateReserva']));
    $query = "CALL sp_updatestateReserva($id, '$nom')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }
   
   function onedeletestateReserva($id){
    $con = new Conect_MySql();
    $query = "CALL SP_onestateReserva($id)";
    //$sel = $con->execute($query);    
    $rst = mysqli_fetch_array($con->execute($query));    
    //$rst = mysqli_fetch_array($sel);    
    return $rst['nomtipoDoc'];
   }
   function statusstateReserva($id, $descripcion){
    $con = new Conect_MySql();
    $query = "CALL sp_updatestateReserva($id,'$descripcion')";      
    $rst = mysqli_fetch_array($con->execute($query));    
    return $rst['xx'];
   }


}

