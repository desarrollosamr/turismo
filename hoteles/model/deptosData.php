<?php
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Database.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Executor.php');
 
class deptosData 
{
	public static $tablename = "tbdeptos";

	public function deptosData()
	{		
		$this->iddpto  = 0;
		$this->codDpto = 0;
		$this->nomDpto = "";
		$this->idpais  = 0;
		$this->status  = 0;
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

	// partiendo de que ya tenemos creado un objecto deptosData previamente utilizamos el contexto
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
		$data = new deptosData();
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
			$array[$cnt] = new deptosData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['iddpto'];
			$array[$cnt]->name = $r['nomDpto'];
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
			$array[$cnt] = new deptosData();
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
			$array[$cnt] = new deptosData();
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
			$array[$cnt] = new deptosData();
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


 	public static function getrecord()
	{
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new deptosData();
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
		$sql = "select * from ".self::$tablename." where status = 1";
		$query = Executor::doit($sql);
		$array1 = array();
		$cn = 0;
		while($rx = $query[0]->fetch_array()){
			$array1[$cn] = new deptosData();
			$array1[$cn]->cons     = $cn;
			$array1[$cn]->id   = $rx['id'];
			$array1[$cn]->iconCategory= $rx['iconCategory'];
			$array1[$cn]->nomCategory= $rx['nomCategory'];		

			$cn++;
		}
		return $array1;
	}

	public static function getAlldeptos()
	{
		$ss="";
		$ss = "select * from ".self::$tablename." where status = 1";
		$query = Executor::doit($ss);
		$array1 = array();
		$cn = 0;
		while($rx = $query[0]->fetch_array()){
			$array1[$cn] = new deptosData();
			$array1[$cn]->cons   = $cn;
			$array1[$cn]->iddpto = $rx['iddpto'];
			$array1[$cn]->codDpto= $rx['codDpto'];
			$array1[$cn]->nomDpto= $rx['nomDpto'];
			$array1[$cn]->idpais = $rx['idpais'];
			$array1[$cn]->status = $rx['status'];
			$cn++;
		}		
		return $array1;
	}
}

?>