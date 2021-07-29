<?php
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Database.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Executor.php');
class categoryData 
{
	public static $tablename = "tbCateroiaFron";

	public function categoryData()
	{		
		$this->id   = 0;
		$this->iconCategory = "";
		$this->nomCategory  = "";
		$this->description  = "";
		$this->created_at   = "now()";
		$this->pidepersona  = 0;
		$this->pidefecha    = 0;
		$this->pidelugar    = 0;
		$this->n            = 0;
	}

	public function add_client()
	{
		$sql = "insert into ".self::$tablename. "(name,lastname,address1,email1,phone1,kind,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->address1\",\"$this->email1\",\"$this->phone1\",1,$this->created_at)";
		Executor::doit($sql);
	}

	public function add_provider()
	{
		$sql = "insert into person (name,lastname,address1,email1,phone1,kind,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->address1\",\"$this->email1\",\"$this->phone1\",2,$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id)
	{
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del()
	{
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	// partiendo de que ya tenemos creado un objecto categoryData previamente utilizamos el contexto
	public function update()
	{
		$sql = "update ".self::$tablename." set name=\"$this->name\",email1=\"$this->email1\",address1=\"$this->address1\",lastname=\"$this->lastname\",phone1=\"$this->phone1\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_client()
	{
		$sql = "update ".self::$tablename." set name=\"$this->name\",email1=\"$this->email1\",address1=\"$this->address1\",lastname=\"$this->lastname\",phone1=\"$this->phone1\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_provider()
	{
		$sql = "update ".self::$tablename." set name=\"$this->name\",email1=\"$this->email1\",address1=\"$this->address1\",lastname=\"$this->lastname\",phone1=\"$this->phone1\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id)
	{
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new categoryData();
		while($r = $query[0]->fetch_array()){
			$data->id  = $r['id'];
			$data->doctorName = $r['doctorName'];
			$data->idSpecial  = $r['idSpecial'];
			$data->address    = $r['address'];
			$data->docFees    = $r['docFees'];
			$data->contactno  = $r['contactno'];
			$data->docEmail   = $r['docEmail'];
			$data->password   = $r['password'];
			$data->imgMedico  = $r['imgMedico'];
			$data->creationDate = $r['creationDate'];
			$data->updationDate = $r['updationDate'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new categoryData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->email = $r['email1'];
			$array[$cnt]->username = $r['username'];
			$array[$cnt]->phone1 = $r['phone1'];
			$array[$cnt]->address1 = $r['address1'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getClients()
	{
		$sql = "select * from ".self::$tablename." where kind=1 order by name,lastname";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new categoryData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->email1 = $r['email1'];
			$array[$cnt]->phone1 = $r['phone1'];
			$array[$cnt]->address1 = $r['address1'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getProviders()
	{
		$sql = "select * from ".self::$tablename." where kind=2 order by name,lastname";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new categoryData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->email1 = $r['email1'];
			$array[$cnt]->phone1 = $r['phone1'];
			$array[$cnt]->address1 = $r['address1'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getLike($q)
	{
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new categoryData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->mail = $r['email1'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllmedicosByPage($start_from,$limit,$inicio)
	{
		if ($inicio<>""){
			//$sql = "select * from ".self::$tablename." where id>=$start_from and name like '".$inicio."%' order by name limit $limit";
			$sql = "select * from ".self::$tablename." where ((name like '%".$inicio."%' or  lastname like '%".$inicio."%' or id like '".$inicio."') and kind=1) order by name limit $start_from,$limit";		
		}else{
			//$sql = "select * from ".self::$tablename." where id>=$start_from order by name limit $limit";
			$sql = "select * from ".self::$tablename." where kind=1 order by name limit $start_from,$limit";
		}
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new categoryData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->email1 = $r['email1'];
			$array[$cnt]->phone1 = $r['phone1'];
			$array[$cnt]->address1 = $r['address1'];
			$cnt++;
		}
		return $array;
	}

	/**/

	public static function countMedicos($inicio)
  {
	    $str = "";
  		$str = "select count(*) as n from " . self::$tablename . " where doctorname like '%" . $inicio . "%' or id like '%" . $inicio . "%'";
	    $query = Executor::doit($str);

    	$r = $query[0]->fetch_array();
    	return $r['n'];
  }
		public static function getAllpaginate($inicio, $pag, $rgtro)
	{
		$str="";
		if ($inicio <> "") {
			$str = "select * from " . self::$tablename . " where doctorname like '%" . $inicio . "%' 
			or doctorApellido like '%" . $inicio . "%'
			or id like '%" . $inicio ."%' order by doctorname desc limit " . $pag . "," . $rgtro;			
		} else {
			$str = "select * from " . self::$tablename ." order by doctorname desc limit " . $pag . "," . $rgtro;
		}
		//echo $str;
    	//die();
		$query = Executor::doit($str);
		$array = array();
		$cnt = 0;
		while ($r = $query[0]->fetch_array()) {
			$array[$cnt] = new categoryData();
			$array[$cnt]->cons = strval($cnt);
			$array[$cnt]->id  = $r['id'];
			$array[$cnt]->doctorName = $r['doctorName'];
			$array[$cnt]->doctorApellido = $r['doctorApellido'];			
			$array[$cnt]->idSpecial  = $r['idSpecial'];
			$array[$cnt]->address    = $r['address'];
			$array[$cnt]->docFees    = $r['docFees'];
			$array[$cnt]->contactno  = $r['contactno'];
			$array[$cnt]->docEmail   = $r['docEmail'];
			$array[$cnt]->password   = $r['password'];
			$array[$cnt]->imgMedico  = $r['imgMedico'];
			$array[$cnt]->creationDate = $r['creationDate'];
			$array[$cnt]->updationDate = $r['updationDate'];
			//$array[$cnt]->nomSpecial   = $r['nomSpecial'];
			$cnt++;
		}
		return $array;
	}
  
	/*
	$this->   = 0;
	$this->nomEmpresa  = "";
	$this->      = "";
	$this->  = "";

	$this->  = "";
	$this->  = "";
	$this->  = "";
	$this->= "";
	$this->= "";
	$this->  = "";

	*/
	/* */

	public static function getrecord()
	{
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new categoryData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->idempresa  = $r['idempresa'];
			$array[$cnt]->nomEmpresa = $r['nomEmpresa'];
			$array[$cnt]->nroNit     = $r['nroNit'];
			$array[$cnt]->dirEmpresa = $r['dirEmpresa'];
			$array[$cnt]->TelEmpresa = $r['TelEmpresa'];
			$array[$cnt]->desEmpresa = $r['desEmpresa'];
			$array[$cnt]->imgEmpresa = $r['imgEmpresa'];
			$array[$cnt]->correoEmpresa = $r['correoEmpresa'];
			$array[$cnt]->simbolo_moneda = $r['simbolo_moneda'];
			$array[$cnt]->nombreMoneda = $r['nombreMoneda'];
			$cnt++;
		}
		return $array;
	}

	public static function getComboCategory()
	{
		$sql = "select * from ".self::$tablename." where estado = 1";
		//$query = Executor::doit($sql);
		$cnx= dbcon();		
		$rr =mysqli_query($cnx,$sql);
		$array1 = array();
		$cn = 0;
		while($rx = mysqli_fetch_array($rr)){
			$array1[$cn] = new categoryData();
			$array1[$cn]->cons     = $cn;
			$array1[$cn]->id   = $rx['id'];
			$array1[$cn]->iconCategory= $rx['iconCategory'];
			$array1[$cn]->nomCategory= $rx['nomCategory'];
			$cn++;
		}
		return $array1;
	}

	public static function getventanaBuscar()
	{
		$ss="";
		$sql="";
		$ssql = "select * from ".self::$tablename." where estado = 1";
		$ss  ="Select a.*, (select count(*) from tbsubcategoria b where a.id = b.idcategoria) ";
		$ss.= "as n FROM ".self::$tablename." a";
		//$query = Executor::doit($sql);
		$cnx= dbcon();		
		$rr =mysqli_query($cnx,$ss);
		$array1 = array();
		$cn = 0;
		while($rx = mysqli_fetch_array($rr)){
			$array1[$cn] = new categoryData();
			$array1[$cn]->cons     = $cn;
			$array1[$cn]->id       = $rx['id'];
			$array1[$cn]->iconCategory= $rx['iconCategory'];
			$array1[$cn]->nomCategory= $rx['nomCategory'];
			$array1[$cn]->pidepersona= $rx['pidepersona'];
			$array1[$cn]->pidefecha  = $rx['pidefecha'];
			$array1[$cn]->pidelugar  = $rx['pidelugar'];		
			$array1[$cn]->n= $rx['n'];	
			$cn++;
		}		
		return $array1;
	}
	public static function getCategoryxTipo($id)
	{
		$sql = "select * from ".self::$tablename." where estado = 1 and id=$id";
		//$query = Executor::doit($sql);
		$cnx= dbcon();		
		$rr =mysqli_query($cnx,$sql);
		$array1 = array();
		$cn = 0;
		while($rx = mysqli_fetch_array($rr)){
			$array1[$cn] = new categoryData();
			$array1[$cn]->cons     = $cn;
			$array1[$cn]->id   = $rx['id'];
			$array1[$cn]->iconCategory= $rx['iconCategory'];
			$array1[$cn]->nomCategory= $rx['nomCategory'];
			$cn++;
		}
		return $array1;
	}	
}

?>