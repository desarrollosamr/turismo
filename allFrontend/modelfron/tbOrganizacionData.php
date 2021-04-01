<?php 
 include_once 'Executor.php';
 include_once 'db.php';

 class tbOrganizacionData
 { 
   public static $tablename='tbOrganizacion';
 
  public function tbOrganizacionData()
  {
    $this->idOrg=0;
    $this->nitDni="";
    $this->nroPisos=0;
    $this->IdDescripcionTr="";
    $this->IdCiudad=0;
    $this->nombOrg="";
    $this->dirbOrg="";
    $this->noTelf1="";
    $this->noTelf2="";
    $this->emailOrg="";
    $this->idTipoTr="";
    $this->idredsocialtr="";
    $this->nroHabXpiso=0;
    $this->aforoPersonas=0;
    $this->idServicioTr="";
    $this->idInstalacionTr="";
    $this->idAccesibilidadTr="";
    $this->rutaImagen="";
    $this->status=0;
  } // fin del Metodo CONSTRUCTOR 
  public function add() 
  { // metodo add, complementar
    $str = "insert into ".self::$tablename."(nitDni, nroPisos, IdDescripcionTr, IdCiudad, nombOrg, dirbOrg, noTelf1, noTelf2, emailOrg, idTipoTr, idredsocialtr, nroHabXpiso, aforoPersonas, idServicioTr, idInstalacionTr, idAccesibilidadTr, rutaImagen, status)";
    $str.= " values ('$this->nitDni', $this->nroPisos, '$this->IdDescripcionTr', $this->IdCiudad, '$this->nombOrg', '$this->dirbOrg', '$this->noTelf1', '$this->noTelf2', '$this->emailOrg', '$this->idTipoTr', '$this->idredsocialtr', $this->nroHabXpiso, $this->aforoPersonas, '$this->idServicioTr', '$this->idInstalacionTr', '$this->idAccesibilidadTr', '$this->rutaImagen', $this->status);";
  } // fin metodo add, complementar
 
  public static function delById($id) 
  { // se genera el metodo borra por ID, complementar
     $sql = "delete from ".self::$tablename." where idOrg=$id";
  } // fin metodo delById, complementar
 
  // metodo add usando procedure  
  public function addTbOrganizacion()
  {  
    $str="";
    $cnx= dbcon();
    $str = "Call spnew_tbOrganizacion('$this->nitDni', $this->nroPisos, '$this->IdDescripcionTr', $this->IdCiudad, '$this->nombOrg', '$this->dirbOrg', '$this->noTelf1', '$this->noTelf2', '$this->emailOrg', '$this->idTipoTr', '$this->idredsocialtr', $this->nroHabXpiso, $this->aforoPersonas, '$this->idServicioTr', '$this->idInstalacionTr', '$this->idAccesibilidadTr', '$this->rutaImagen', $this->status);";
    $rr =mysqli_query($cnx,$str);  
    $row=mysqli_fetch_array($rr);  
    return $row['rta'];
  } // fin metodo addtbOrganizacion
 
   public static function oneTbOrganizacion($id)
  {
    $str="";
    $str = "select * from ".self::$tablename." where idOrg=$id";
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $array1 = array();
    $cn = 0;
    while ($rx = mysqli_fetch_array($rr))
    { 
      $array1[$cn] = new tbOrganizacionData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idOrg = $rx['idOrg'];
      $array1[$cn]->nitDni = $rx['nitDni'];
      $array1[$cn]->nroPisos = $rx['nroPisos'];
      $array1[$cn]->IdDescripcionTr = $rx['IdDescripcionTr'];
      $array1[$cn]->IdCiudad = $rx['IdCiudad'];
      $array1[$cn]->nombOrg = $rx['nombOrg'];
      $array1[$cn]->dirbOrg = $rx['dirbOrg'];
      $array1[$cn]->noTelf1 = $rx['noTelf1'];
      $array1[$cn]->noTelf2 = $rx['noTelf2'];
      $array1[$cn]->emailOrg = $rx['emailOrg'];
      $array1[$cn]->idTipoTr = $rx['idTipoTr'];
      $array1[$cn]->idredsocialtr = $rx['idredsocialtr'];
      $array1[$cn]->nroHabXpiso = $rx['nroHabXpiso'];
      $array1[$cn]->aforoPersonas = $rx['aforoPersonas'];
      $array1[$cn]->idServicioTr = $rx['idServicioTr'];
      $array1[$cn]->idInstalacionTr = $rx['idInstalacionTr'];
      $array1[$cn]->idAccesibilidadTr = $rx['idAccesibilidadTr'];
      $array1[$cn]->rutaImagen = $rx['rutaImagen'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }  // fin del Ciclo
    return $array1;
  }  // fin del Metodo(getRecordById)
 
  public static function countTbOrganizacion($inicio)// metodo contar registros para paginar
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
   } // fin del metodo  countTbOrganizacion
 
 public static function pageTbOrganizacion($inicio, $pag, $rgtro)
  {
    $str="";
    $str = "select * from ".self::$tablename;
    if (trim($inicio) <> "")
    {
    // ojo cambiar las xxx por campo de busqueda 
      $str.= " Where xxxxx like '%$inicio%'";
      $str.= "     or xxxxx like '%$inicio%'";
    } 
    $str .= " order by xxxxx  desc limit " . $pag . "," . $rgtro;
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $array1 = array();
    $cn = 0;
    while ($rx = mysqli_fetch_array($rr))
    { 
      $array1[$cn] = new tbOrganizacionData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idOrg = $rx['idOrg'];
      $array1[$cn]->nitDni = $rx['nitDni'];
      $array1[$cn]->nroPisos = $rx['nroPisos'];
      $array1[$cn]->IdDescripcionTr = $rx['IdDescripcionTr'];
      $array1[$cn]->IdCiudad = $rx['IdCiudad'];
      $array1[$cn]->nombOrg = $rx['nombOrg'];
      $array1[$cn]->dirbOrg = $rx['dirbOrg'];
      $array1[$cn]->noTelf1 = $rx['noTelf1'];
      $array1[$cn]->noTelf2 = $rx['noTelf2'];
      $array1[$cn]->emailOrg = $rx['emailOrg'];
      $array1[$cn]->idTipoTr = $rx['idTipoTr'];
      $array1[$cn]->idredsocialtr = $rx['idredsocialtr'];
      $array1[$cn]->nroHabXpiso = $rx['nroHabXpiso'];
      $array1[$cn]->aforoPersonas = $rx['aforoPersonas'];
      $array1[$cn]->idServicioTr = $rx['idServicioTr'];
      $array1[$cn]->idInstalacionTr = $rx['idInstalacionTr'];
      $array1[$cn]->idAccesibilidadTr = $rx['idAccesibilidadTr'];
      $array1[$cn]->rutaImagen = $rx['rutaImagen'];
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

  public static function getbuscaHoteles($idciu, $tk, $tbusca)
  { 
  /* trae las organizaciones que estan en una ciudad */
  // $tbusca = "hotel";
  // $tk     =  date("H:i:s").mt_rand().date("H:i:s");
  $ss="";
  //   $ss = "Call genera00($idciu, '$tk', '$tbusca')";
  $ss = "Select a.* from tbtiponegociotr a where a.idtipotr in (select mid(b.idtipotr, locate(a.idtipotr,
                  b.idtipotr,length(a.idtipotr)), length(a.idtipotr)) from tborganizacion b where idciudad = $idciu) 
                  order by a.idTipoTr";  
  $cnx= dbcon();    
  $rr =mysqli_query($cnx,$ss);
  $array1 = array();
  $cn = 0;
  //$array1= mysqli_fetch_array($rr);
  while($rx = mysqli_fetch_array($rr)){
    $array1[$cn] = $rx;
    $cn++;
  }
  return $array1;
  }
  public static function deletebuscaHoteles($tk, $tbusca)
  { 
    $ss="";
    $ss = "delete from tbtmpgeneral where tokenuser=  '$tk' and tipoprocess = '$tbusca';";
    $cnx= dbcon();    
    $rr =mysqli_query($cnx,$ss);
    $array1 = array();
    //$cn = 0;
    /*
    while($rx = mysqli_fetch_array($rr)){
      $array1[$cn] = $rx;
      $cn++;
    }*/
    return $array1;
  } 


  public static function getdatatemporal($idciu, $tipo, $token, $tbtemp)
  { 
  /* trae las organizaciones que estan en una ciudad */
  // $tbusca = "hotel";
  // $tk     =  date("H:i:s").mt_rand().date("H:i:s");
  $ss="";
  $ss = "Call xxTablas($idciu, $tipo, '$token', '$tbtemp')";
  echo "(tbOrganizacionData.php)->getdatatemporal"."<br>";  
  /*
        echo "<br>";
        echo "(tbOrganizacionData.php)->getdatatemporal"."<br>";
        echo "idciu->".$idciu."<br>";
        echo "tipo->".$tipo."<br>";        
        echo "token->".$token."<br>";        
        echo "tbtemp->".$tbtemp."<br>";        
        echo "ss->".$ss."<br>";           
        echo "<pre>";
        print_r($_REQUEST);
        //print_r($r);
        echo "</pre>";
   */
  $cnx= dbcon();    
  $rr =mysqli_query($cnx,$ss);
  $array1 = array();
  $cn = 0;
  // echo "tbOrganizacionData"."<br>";
//  print_r($rr);
//  exit;  

  //$array1= mysqli_fetch_array($rr);

  while($rx = mysqli_fetch_array($rr)){
    $array1[$cn] = $rx;
    $cn++;
  }
  return $array1;
  
  // return $rr;
  } 
 public static function getpaginartmp($tbltmp, $inicio, $pag, $rgtro)
  {
    $str="";
    $str = "select * from ".$tbltmp." limit " . $pag . "," . $rgtro;
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $array1 = array();
    $cn = 0;
    while($rx = mysqli_fetch_array($rr)){
      $array1[$cn] = $rx;
      $cn++;
    }
    return $array1;
  }  // fin del Metodo(getAllpaginate)  
  public static function cuentatmp($tbltkn, $criterio)// metodo contar registros para paginar
  {
    $str="";
   // ojo cambiar las xxx  por el campo que se requiere
    $str = "select count(*) as n from " . $tbltkn;
    $cnx = dbcon();
    $rr = mysqli_query($cnx, $str);
    $query = Executor::doit($str);
    $r = $query[0]->fetch_array();
    return $r['n'];
   } // fin del metodo  countTbOrganizacion  
   
}
?>
