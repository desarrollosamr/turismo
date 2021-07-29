<?php 

include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');
 

class tbOrganizacionData
{ 
  public static $tablename='tbOrganizacion';

  public function tbOrganizacionData()
  {
    $this->idOrg = 0;
    $this->nitDni = "";
    $this->nroPisos = 0;
    $this->desGeneral1 = "";
    $this->desGeneral2 = "";
    $this->idCiudad = 0;
    $this->nombOrg = "";
    $this->dirbOrg = "";
    $this->noTelf1 = "";
    $this->noTelf2 = "";
    $this->emailOrg = "";
    $this->nroHabXpiso = 0;
    $this->aforoPersonas = 0;
    $this->rutaImagen = "";
    $this->status = 0;
    $this->admon = "";
    $this->admontel = "";
  } // fin del Metodo CONSTRUCTOR 
  public function add()
  { // metodo add, complementar
    $str = "insert into " . self::$tablename . "(nitDni, nroPisos, desGeneral1, desGeneral2, idCiudad, nombOrg, dirbOrg, noTelf1, noTelf2, emailOrg, nroHabXpiso, aforoPersonas, rutaImagen, status, admon, admontel)";
    $str .= " values ('$this->nitDni', $this->nroPisos, '$this->desGeneral1', '$this->desGeneral2', $this->idCiudad, '$this->nombOrg', '$this->dirbOrg', '$this->noTelf1', '$this->noTelf2', '$this->emailOrg', $this->nroHabXpiso, $this->aforoPersonas, '$this->rutaImagen', $this->status, '$this->admon', '$this->admontel');";
    $this->uc=Executor::doit($str);
  } // fin metodo add, complementar
 
  public static function delById($id) 
  { // se genera el metodo borra por ID, complementar
     $sql = "delete from ".self::$tablename." where idOrg=$id";
     Executor::doit($sql);
  } // fin metodo delById, complementar
 
  // metodo add usando procedure  
  public function addTbOrganizacion()
  {  
    $str="";
    $str = "Call spnew_tbOrganizacion('$this->nitDni', $this->nroPisos, '$this->IdDescripcionTr', $this->IdCiudad, '$this->nombOrg', '$this->dirbOrg', '$this->noTelf1', '$this->noTelf2', '$this->emailOrg', '$this->idTipoTr', '$this->idredsocialtr', $this->nroHabXpiso, $this->aforoPersonas, '$this->idServicioTr', '$this->idInstalacionTr', '$this->idAccesibilidadTr', '$this->rutaImagen', $this->status);";
    $rr =mysqli_query($cnx,$str);  
    $row=mysqli_fetch_array($rr);  
    return $row['rta'];
  } // fin metodo addtbOrganizacion

  public static function oneTbOrganizacion($id)
  {
    $str = "";
    $str = "select * from " . self::$tablename . " where idOrg=$id";
    $query = Executor::doit($str);
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = new tbOrganizacionData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idOrg = $rx['idOrg'];
      $array1[$cn]->nitDni = $rx['nitDni'];
      $array1[$cn]->nroPisos = $rx['nroPisos'];
      $array1[$cn]->desGeneral1 = $rx['desGeneral1'];
      $array1[$cn]->desGeneral2 = $rx['desGeneral2'];
      $array1[$cn]->idCiudad = $rx['idCiudad'];
      $array1[$cn]->nombOrg = $rx['nombOrg'];
      $array1[$cn]->dirbOrg = $rx['dirbOrg'];
      $array1[$cn]->noTelf1 = $rx['noTelf1'];
      $array1[$cn]->noTelf2 = $rx['noTelf2'];
      $array1[$cn]->emailOrg = $rx['emailOrg'];
      $array1[$cn]->nroHabXpiso = $rx['nroHabXpiso'];
      $array1[$cn]->aforoPersonas = $rx['aforoPersonas'];
      $array1[$cn]->rutaImagen = $rx['rutaImagen'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }  // fin del Ciclo
    return $array1;
  }  // fin del Metodo(oneTbOrganizacion)
 
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
    $query = Executor::doit($str);
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) 
    {
      $array1[$cn] = new tbOrganizacionData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idOrg = $rx['idOrg'];
      $array1[$cn]->nitDni = $rx['nitDni'];
      $array1[$cn]->nroPisos = $rx['nroPisos'];
      $array1[$cn]->desGeneral1 = $rx['desGeneral1'];
      $array1[$cn]->desGeneral2 = $rx['desGeneral2'];
      $array1[$cn]->idCiudad = $rx['idCiudad'];
      $array1[$cn]->nombOrg = $rx['nombOrg'];
      $array1[$cn]->dirbOrg = $rx['dirbOrg'];
      $array1[$cn]->noTelf1 = $rx['noTelf1'];
      $array1[$cn]->noTelf2 = $rx['noTelf2'];
      $array1[$cn]->emailOrg = $rx['emailOrg'];
      $array1[$cn]->nroHabXpiso = $rx['nroHabXpiso'];
      $array1[$cn]->aforoPersonas = $rx['aforoPersonas'];
      $array1[$cn]->rutaImagen = $rx['rutaImagen'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }  // fin del Ciclo
    return $array1;
  }  // fin del Metodo(getAllpaginate)  

  public static function getbuscaHotel($idciu, $idcat)
  {
    $ss="";
    $ss = "select distinct a.* from tbhotelCliente a, tbrelhotelcategoria b where a.idciudad = $idciu and a.idnithotel =  b.idnithotel and b.idcategoria = $idcat and a.status = 1" ;
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) {    
      $array1[$cn] = new tbOrganizacionData();
      $array1[$cn]->cons   = $cn;
      $array1[$cn]->idOrg = $rx['idOrg'];
      $array1[$cn]->nitDni = $rx['nitDni'];
      $array1[$cn]->nroPisos = $rx['nroPisos'];
      $array1[$cn]->desGeneral1 = $rx['desGeneral1'];
      $array1[$cn]->desGeneral2 = $rx['desGeneral2'];
      $array1[$cn]->idCiudad = $rx['idCiudad'];
      $array1[$cn]->nombOrg = $rx['nombOrg'];
      $array1[$cn]->dirbOrg = $rx['dirbOrg'];
      $array1[$cn]->noTelf1 = $rx['noTelf1'];
      $array1[$cn]->noTelf2 = $rx['noTelf2'];
      $array1[$cn]->emailOrg = $rx['emailOrg'];
      $array1[$cn]->nroHabXpiso = $rx['nroHabXpiso'];
      $array1[$cn]->aforoPersonas = $rx['aforoPersonas'];
      $array1[$cn]->rutaImagen = $rx['rutaImagen'];
      $array1[$cn]->status = $rx['status'];
      $cn++;
    }  // fin del Ciclo  
    return $array1;

  } 

  public static function deletebuscaHoteles($tk, $tbusca)
  { 
    $ss="";
    $ss = "delete from tbtmpgeneral where tokenuser=  '$tk' and tipoprocess = '$tbusca';";
    $query = Executor::doit($ss);
    $array1 = array();
    return $array1;
  } 

  public static function getpaginartmp($idciu,$tipo, $pag, $rgtro)
  {
    $ss = "Select a.idorg, a.nitdni, a.nomborg, a.dirborg, a.desgeneral1, a.desgeneral2, a.rutaimagen 
          from tborganizacion a, tbrelorgtiponegocio b
            where a.idorg = b.idOrg  and b.idtipotr = $tipo 
            and b.status = 1 and a.idciudad = $idciu limit " . $pag . "," . $rgtro;
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;
    while($rx = $query[0]->fetch_array()){
      $array1[$cn] = $rx;
      $cn++;
    }
    return $array1;
  }  // fin del Metodo(getpaginartmp)    
      
  public static function getbuscarHoteles($idciu, $tk, $tbusca)
  {
    /* trae las organizaciones que estan en una ciudad */
    $ss = "";
    $ss = "Select a.* from tbtiponegociotr a where a.idtipotr in 
      (select distinct b.idtipotr from tbrelorgtiponegocio b , tborganizacion c  where b.idorg = c.idorg and c.idciudad = $idciu) 
      and a.status = 1 order by a.idTipoTr";       
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = $rx;
      $cn++;
    }
    return $array1;
  }

  public static function getdatahotelbasica($idciu, $tipo, $token, $tbtemp)
  {
    $ss = "Select a.idorg, a.nitdni, a.nomborg, a.dirborg, a.desgeneral1, a.desgeneral2, a.rutaimagen 
            from tborganizacion a, tbrelorgtiponegocio b
          where a.idorg = b.idOrg  and b.idtipotr = $tipo and b.status = 1 and a.idciudad = $idciu";   
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = $rx;
      $cn++;
    }
    return $array1;
  }
  
  public static function getServicesHotel($idhotel)
  {
    $ss = "select  b.descServicio as Servicios, a.nameimagen,b.namedefault 
           from tbrelOrgServicios a, tbServiciosTr b  
          where (a.idorg= $idhotel) and (a.idServicioTr = b.idServicioTr) ;";
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;    
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = $rx;
      $cn++;
    } 
    return $array1;
  }
  public static function getInstalacionHotel($idhotel)
  {
    $ss ="select a.idorg, a.namefile, b.namedefault, b.desInstalacion as instalacion 
            from tbrelOrgInstalacion a, TbInstalacionesTr b  
          where (a.idorg= $idhotel) and (a.idInstalacionTr = b.idInstalacionTr);";
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = $rx;
      $cn++;
    }
    return $array1;
  }
  public static function getAccesosHotel($idhotel)
  { 
    $ss = "select  b.namedefault, b.desAccesibilidad, a.namefile  
            from tbrelOrgAccesibilidad a, TbAccesibilidadTr b  
          where (a.idorg= $idhotel) and (a.idAccesibilidadTr = b.idAccesibilidadTr);";
    $query = Executor::doit($ss);
    $array1 = array();
    $cn = 0;    
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = $rx;
      $cn++;
    } 
    return $array1;
  }
  public static function getHabitacionHotel($idhotel)
  {
    $ss = "select  a.idtipoHab, a.preciohabitacion, a.namefile1, a.namefile2, b.namedefault, b.nomtipo 
            from tbreltypohabitacionhotel a, tbtypohabitacion b
          where (a.idorg= $idhotel) and (a.idtipoHab = b.idtipoHab) and(a.status=1)";
    $query = Executor::doit($ss);      
    $array1 = array();
    $cn = 0;
    while ($rx = $query[0]->fetch_array()) {
      $array1[$cn] = $rx;
      $cn++;
    }
    return $array1;
  }   
}

?>
