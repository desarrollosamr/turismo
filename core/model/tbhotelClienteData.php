<?php 
 include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
 include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');
 
 class tbhotelClienteData
 { 
   public static $tablename='tbhotelCliente';
 
  public function tbhotelClienteData()
  {
    $this->idnitHotel=0;
    $this->nitHotel="";
    $this->idCiudad=0;
    $this->nomHotel="";
    $this->dirHotel="";
    $this->telHotel1="";
    $this->telHotel2="";
    $this->correoHotel="";
    $this->tipoHotel=0;
    $this->Administrador="";
    $this->idRedes=0;
    $this->aforo=0;
    $this->tipoHabitaciones=0;
    $this->status=0;
  } // fin del Metodo CONSTRUCTOR 
  public function add() 
  { // metodo add, complementar
    $str = "insert into ".self::$tablename."(nitHotel, idCiudad, nomHotel, dirHotel, telHotel1, telHotel2, correoHotel, tipoHotel, Administrador, idRedes, aforo, tipoHabitaciones, status)";
    $str.= " values ('$this->nitHotel', $this->idCiudad, '$this->nomHotel', '$this->dirHotel', '$this->telHotel1', '$this->telHotel2', '$this->correoHotel', $this->tipoHotel, '$this->Administrador', $this->idRedes, $this->aforo, $this->tipoHabitaciones, $this->status);";
  } // fin metodo add, complementar
 
  public static function delById($id) 
  { // se genera el metodo borra por ID, complementar
     $sql = "delete from ".self::$tablename." where idnitHotel=$id";
  } // fin metodo delById, complementar
 
  // metodo add usando procedure  
  public function addTbhotelCliente()
  {  
    $str="";
    $cnx= dbcon();
    $str = "Call spnew_tbhotelCliente('$this->nitHotel', $this->idCiudad, '$this->nomHotel', '$this->dirHotel', '$this->telHotel1', '$this->telHotel2', '$this->correoHotel', $this->tipoHotel, '$this->Administrador', $this->idRedes, $this->aforo, $this->tipoHabitaciones, $this->status);";
    $rr =mysqli_query($cnx,$str);  
    $row=mysqli_fetch_array($rr);  
    return $row['rta'];
  } // fin metodo addtbhotelCliente
 
  public static function oneTbhotelCliente($id)
  {
    $str="";
    $str = "select * from ".self::$tablename." where idnitHotel=$id";
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $array1 = array();
    $cn = 0;
    while ($rx = mysqli_fetch_array($rr))
    { 
      $array1[$cn] = new tbhotelClienteData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idnitHotel = $rx['idnitHotel'];
      $array1[$cn]->nitHotel = $rx['nitHotel'];
      $array1[$cn]->idCiudad = $rx['idCiudad'];
      $array1[$cn]->nomHotel = $rx['nomHotel'];
      $array1[$cn]->dirHotel = $rx['dirHotel'];
      $array1[$cn]->telHotel1 = $rx['telHotel1'];
      $array1[$cn]->telHotel2 = $rx['telHotel2'];
      $array1[$cn]->correoHotel = $rx['correoHotel'];
      $array1[$cn]->tipoHotel = $rx['tipoHotel'];
      $array1[$cn]->Administrador = $rx['Administrador'];
      $array1[$cn]->idRedes = $rx['idRedes'];
      $array1[$cn]->aforo = $rx['aforo'];
      $array1[$cn]->tipoHabitaciones = $rx['tipoHabitaciones'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }  // fin del Ciclo
    return $array1;
  }  // fin del Metodo(getRecordById)
 
  public static function countTbhotelCliente($inicio)// metodo contar registros para paginar
  {
    $str="";
   // ojo cambiar las xxx  por el campo que se requiere
    $str = "select count(*) as n from " . self::$tablename;
    if (trim($inicio) <> "")
    { // ojo cambiar las xxx por campo de busqueda
      $str.= " where xxxxx  like '%$inicio%'";
      $str.= "    or xxxxx  like '%$inicio%'";
    } 
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $query = Executor::doit($str);
    $r = $query[0]->fetch_array();
    return $r['n'];
   } // fin del metodo  countTbhotelCliente
 
  public static function pageTbhotelCliente($inicio, $pag, $rgtro)
  {
    $str="";
    $str = "select * from ".self::$tablename;
    if (trim($inicio) <> "")
    {
    // ojo cambiar las xxx por campo de busqueda 
      $str.= " Where xxxxx like '%$inicio%'";
      $str.= "	   or xxxxx like '%$inicio%'";
    } 
    $str .= " order by xxxxx  desc limit " . $pag . "," . $rgtro;
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $array1 = array();
    $cn = 0;
    while ($rx = mysqli_fetch_array($rr))
    { 
      $array1[$cn] = new tbhotelClienteData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idnitHotel = $rx['idnitHotel'];
      $array1[$cn]->nitHotel = $rx['nitHotel'];
      $array1[$cn]->idCiudad = $rx['idCiudad'];
      $array1[$cn]->nomHotel = $rx['nomHotel'];
      $array1[$cn]->dirHotel = $rx['dirHotel'];
      $array1[$cn]->telHotel1 = $rx['telHotel1'];
      $array1[$cn]->telHotel2 = $rx['telHotel2'];
      $array1[$cn]->correoHotel = $rx['correoHotel'];
      $array1[$cn]->tipoHotel = $rx['tipoHotel'];
      $array1[$cn]->Administrador = $rx['Administrador'];
      $array1[$cn]->idRedes = $rx['idRedes'];
      $array1[$cn]->aforo = $rx['aforo'];
      $array1[$cn]->tipoHabitaciones = $rx['tipoHabitaciones'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }  // fin del Ciclo
    return $array1;
  }  // fin del Metodo(getAllpaginate)
  public static function getbuscaHotel($idciu, $idcat)
  {
    //include_once "categoryData.php";  
    $ss="";
    $ss = "select distinct a.* from tbhotelCliente a, tbrelhotelcategoria b where a.idciudad = $idciu and a.idnithotel =  b.idnithotel and b.idcategoria = $idcat and a.status = 1" ;
    $cnx= dbcon();    
    $rr =mysqli_query($cnx,$ss);
    $array1 = array();
    $cn = 0;
    while($rx = mysqli_fetch_array($rr)){
      $array1[$cn] = new tbhotelClienteData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idnitHotel = $rx['idnitHotel'];
      $array1[$cn]->nitHotel = $rx['nitHotel'];
      $array1[$cn]->idCiudad = $rx['idCiudad'];
      $array1[$cn]->nomHotel = $rx['nomHotel'];
      $array1[$cn]->dirHotel = $rx['dirHotel'];
      $array1[$cn]->telHotel1 = $rx['telHotel1'];
      $array1[$cn]->telHotel2 = $rx['telHotel2'];
      $array1[$cn]->correoHotel = $rx['correoHotel'];
      $array1[$cn]->tipoHotel = $rx['tipoHotel'];
      $array1[$cn]->Administrador = $rx['Administrador'];
      $array1[$cn]->idRedes = $rx['idRedes'];
      $array1[$cn]->aforo = $rx['aforo'];
      $array1[$cn]->tipoHabitaciones = $rx['tipoHabitaciones'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }   
    return $array1;

  }   
}
?>
