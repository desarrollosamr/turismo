<?php
class Producto {
  function listado($flag, $criterio, $pagina, $registro) {
    
    $sel = PersonData::sp_paginadorprueba2200($flag,$criterio,$pagina,$registro);
    //$traido = mysqli_num_rows($sel);
    $traido = count($sel);
    echo $traido;
    $data =[];
    if ($traido != 0) 
    {
        if ($flag == 1)  { 
          $data[] = $sel; 
        } else {
          $data = $traido;      
        }        
    }
    return $data;
  }
  function getcount(){
  	$sel = PersonData::counttotalrows();
  	return $sel;
  }
}
?>
