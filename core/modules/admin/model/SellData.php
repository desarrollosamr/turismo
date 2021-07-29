<?php
class SellData {
	public static $tablename = "sell";
	
	//public function SellData(){
		//$this->created_at = "NOW()";
	//}
	
	public function getPerson(){ return PersonData::getById($this->person_id);}
	public function getUser(){ return UserData::getById($this->user_id);}
	public function getSeller(){ return UserData::getById($this->seller);}

	public function add(){
		$sql = "insert into ".self::$tablename." (user_id,tipo_pago,monto_e,monto_t,seller,created_at) ";
		$sql .= "values ($this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,$this->seller,$this->created_at)";

		return Executor::doit($sql);
	}

	public function add_re(){
		$sql = "insert into ".self::$tablename." (user_id,tipo_pago,monto_e,monto_t,operation_type_id,created_at) ";
		$sql .= "values ($this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,1,$this->created_at)";

		return Executor::doit($sql);
	}

	public function add_reserva(){
		$sql = "insert into ".self::$tablename." (person_id,user_id,tipo_pago,monto_e,monto_t,operation_type_id,created_at) ";
		$sql .= "values ($this->person_id,$this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,5,$this->created_at)";

		return Executor::doit($sql);
	}


	public function add_cambioout(){
		$sql = "insert into ".self::$tablename." (person_id,user_id,tipo_pago,monto_e,monto_t,operation_type_id,created_at) ";
		$sql .= "values ($this->person_id,$this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,4,$this->created_at)";
		return Executor::doit($sql);
	}
	
	public function add_cambioin(){
		$sql = "insert into ".self::$tablename." (person_id,user_id,tipo_pago,monto_e,monto_t,operation_type_id,created_at) ";
		$sql .= "values ($this->person_id,$this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,3,$this->created_at)";

		return Executor::doit($sql);
	}
	
	public function add_with_client(){
		$sql = "insert into ".self::$tablename." (person_id,user_id,tipo_pago,monto_e,monto_t,seller,created_at) ";
		$sql .= "values ($this->person_id,$this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,$this->seller,$this->created_at)";
		return Executor::doit($sql);
	}

	public function add_re_with_client(){
		$sql = "insert into ".self::$tablename." (person_id,operation_type_id,user_id,tipo_pago,monto_e,monto_t,created_at) ";
		$sql .= "values ($this->person_id,1,$this->user_id,'$this->tipo_pago',$this->monto_e,$this->monto_t,$this->created_at)";

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

	public function update_box(){
		$sql = "update ".self::$tablename." set box_id=$this->box_id where id=$this->id";
		Executor::doit($sql);
	}

	public function update_pago(){
		$sql = "update ".self::$tablename." set monto_e=$this->monto_e,monto_t=$this->monto_t,tipo_pago='".$this->tipo_pago."' where id=$this->id";

		Executor::doit($sql);
	}	 
	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new SellData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->user_id = $r['user_id'];
			$data->person_id = $r['person_id'];
			$data->created_at = $r['created_at'];
			$data->tipo_pago = $r['tipo_pago'];
			$data->monto_e = $r['monto_e'];
			$data->monto_t = $r['monto_t'];
			$data->operation_type_id = $r['operation_type_id'];
			$data->seller = $r['seller'];
			$found = $data;
			break;
		}
		return $found;
	}



	public static function getSells(){
		$sql = "select * from ".self::$tablename." where operation_type_id=2 or operation_type_id=4 or operation_type_id=5 or operation_type_id=7 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->tipo_pago = $r['tipo_pago'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}

	public static function getSellsByDate($start,$end){
		$sql = "select * from ".self::$tablename." where (date(created_at) >= \"$start\" and date(created_at) <= \"$end\") and (operation_type_id=2 or operation_type_id=4 or operation_type_id=5 or operation_type_id=7) order by created_at desc";
		if($start == $end){
		$sql="select * from ".self::$tablename." where date(created_at) = \"$start\" and (operation_type_id=2 or operation_type_id=4 or operation_type_id=5 or operation_type_id=7) order by created_at desc";
		}
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->tipo_pago = $r['tipo_pago'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}
	
		public static function getReservas(){
		$sql = "select * from ".self::$tablename." where operation_type_id=5 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->tipo_pago = $r['tipo_pago'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}


	public static function getSellsUnBoxed(){
		$sql = "select * from ".self::$tablename." where (operation_type_id=2 or operation_type_id=5 or operation_type_id=4) and box_id is NULL order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}

	public static function getByBoxId($id){
		$sql = "select * from ".self::$tablename." where (operation_type_id=2 or operation_type_id=5 or operation_type_id=4 or operation_type_id=7) and box_id=$id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
		    $array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->tp = $r['tipo_pago'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}

	public static function getRes(){
		$sql = "select * from ".self::$tablename." where operation_type_id=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
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
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}

	public function cancelar_reserva($id){
		$sql = "update ".self::$tablename." set operation_type_id=7 where id=$id";
		Executor::doit($sql);
	}
	
	public static function getByClientId($id){
		$sql = "select * from ".self::$tablename." where person_id=$id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new SellData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->person_id = $r['person_id'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$array[$cnt]->monto_e = $r['monto_e'];
			$array[$cnt]->monto_t = $r['monto_t'];
			$array[$cnt]->seller = $r['seller'];
			$cnt++;
		}
		return $array;
	}
}

?>