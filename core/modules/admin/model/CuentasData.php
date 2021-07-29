<?php
class CuentasData {
	public static $tablename = "cuentas";

	public function getUser(){ return UserData::getById($this->user_id);}
	
	public function CuentasData(){
		$this->name = "";
		$this->saldo_inicial = 0;
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into categoria_iyg (name,saldo_inicial,created_at,user_id) ";
		$sql .= "value (\"$this->name\",$this->saldo_inicial,$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",saldo_inicial=$this->saldo_inicial where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new CuentasData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->saldo_inicial = $r['saldo_inicial'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by name";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CuentasData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$data->saldo_inicial = $r['saldo_inicial'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CuentasData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$data->saldo_inicial = $r['saldo_inicial'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


}

?>