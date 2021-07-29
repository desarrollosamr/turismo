<?php
class CambiosData {
	public static $tablename = "cambios";
	
	//public function CambioData(){
	//	$this->created_at = "NOW()";
	//}
	
	public function getUser(){ return UserData::getById($this->user_id);}

	public function add(){
		$sql = "insert into ".self::$tablename." (user_id,venta_in,venta_out,motivo,created_at) ";
		$sql .= "values ($this->user_id,$this->venta_in,$this->venta_out,'$this->motivo',$this->created_at)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new CambiosData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->user_id = $r['user_id'];
			$data->venta_in = $r['venta_in'];
			$data->venta_out = $r['venta_out'];
			$data->motivo = $r['motivo'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getCambios(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CambiosData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->venta_in = $r['venta_in'];
			$array[$cnt]->venta_out = $r['venta_out'];
			$array[$cnt]->motivo = $r['motivo'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id<=$start_from limit $limit";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->venta_in = $r['venta_in'];
			$array[$cnt]->venta_out = $r['venta_out'];
			$array[$cnt]->motivo = $r['motivo'];
			$cnt++;
		}
		return $array;
	}

	public function getEntra(){
		return OperationData::getAllProductsBySellId($this->venta_in);
	}
	
	public function getSale(){
		return OperationData::getAllProductsBySellId($this->venta_out);
	}

}

?>