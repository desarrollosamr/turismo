<?php
class OperationData {
	public static $tablename = "operation";

	public function OperationData(){

		$this->product_id = "";
		$this->q = "";
		$this->d = "";
		$this->cut_id = "";
		$this->operation_type_id = "";
		//$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (product_id,q,d,operation_type_id,sell_id,created_at) ";
		$sql .= "values ($this->product_id,$this->q,$this->d,$this->operation_type_id,$this->sell_id,$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto OperationData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set product_id=\"$this->product_id\",q=\"$this->q\",d=\"$this->d\" where id=$this->id";
		Executor::doit($sql);
	}
	public function update_cambio(){
		$sql = "update ".self::$tablename." set cambio_id=$this->cambio_id where id=$this->id";
		Executor::doit($sql);		
	}
	public function cancelar_reserva($id){
		$sql = "update ".self::$tablename." set operation_type_id=7 where sell_id=$id";
		Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new OperationData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->product_id = $r['product_id'];
			$data->q = $r['q'];
			$data->d = $r['d'];
			$data->cut_id = $r['cut_id'];
			$data->operation_type_id = $r['operation_type_id'];
			$data->sell_id = $r['sell_id'];
			$data->created_at = $r['created_at'];
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
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$cnt++;
		}
		return $array;
	}



	public static function getAllByDateOfficial($start,$end){
 		$sql = "select * from ".self::$tablename." where date(created_at) >= \"$start\" and date(created_at) <= \"$end\" order by created_at desc";
		if($start == $end){
		 $sql = "select * from ".self::$tablename." where date(created_at) = \"$start\" order by created_at desc";
		}

		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->is_oficial = $r['is_oficial'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByDateOfficialBP($product, $start,$end){
 		$sql = "select * from ".self::$tablename." where date(created_at) >= \"$start\" and date(created_at) <= \"$end\" and product_id=$product order by created_at desc";
		if($start == $end){
		 $sql = "select * from ".self::$tablename." where date(created_at) = \"$start\"  and product_id=$product order by created_at desc";
		}
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByDateOfficialBS($venta, $start,$end){
 		$sql = "select * from ".self::$tablename." where date(created_at) >= \"$start\" and date(created_at) <= \"$end\" and sell_id=$venta order by created_at desc";
		if($start == $end){
		 $sql = "select * from ".self::$tablename." where date(created_at) = \"$start\"  and sell_id=$venta order by created_at desc";
		}
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public function getProduct(){
		return ProductData::getById($this->product_id);
	}
	public function getProductById($id){
		return ProductData::getById($id);
	}
	public function getOperationType(){
		return OperationTypeData::getById($this->operation_type_id);
	}


////////////////////////////////////////////////////////////////////
	public static function getQ($product_id,$cut_id){
		$q=0;
		$operations = self::getAllByProductIdCutId($product_id,$cut_id);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}


	public static function getQYesF($product_id){
		$q=0;
		$operations = self::getAllByProductId($product_id);
		$input_id = OperationTypeData::getByName("entrada")->id; 
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id or $operation->operation_type_id==3){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id or $operation->operation_type_id==4 or $operation->operation_type_id==5){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}
	
	public static function getReservado($product_id){
		$r=0;
		$operations = self::getAllByProductId($product_id);
		foreach($operations as $operation){
			if($operation->operation_type_id==5){ $r+=$operation->q; }
		}
		// print_r($data);
		return $r;
	}

	public static function getQNoF($product_id,$cut_id){
		$q = self::getQ($product_id,$cut_id);
		$f = self::getQYesF($product_id,$cut_id);
		return $q-$f;

	}


	public static function getAllByProductIdCutId($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByProductId($product_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id  order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getAllByProductIdCutIdOficial($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and is_oficial=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByProductIdCutIdUnOficial($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and is_oficial=0 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->is_oficial = $r['is_oficial'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getAllProductsBySellId($sell_id){
		$sql = "select * from ".self::$tablename." where sell_id=$sell_id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getAllByProductIdCutIdYesF($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and is_oficial=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
						$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
		$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

////////////////////////////////////////////////////////////////////
	public static function getOutputQ($product_id,$cut_id){
		$q=0;
		$operations = self::getOutputByProductIdCutId($product_id,$cut_id);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}

	public static function getOutputQYesF($product_id){
		$q=0;
		$operations = self::getOutputByProductId($product_id);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}

	public static function getOutputQNoF($product_id,$cut_id){
		$q=0;
		$operations = self::getOutputByProductIdCutIdNoF($product_id,$cut_id);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}


	public static function getOutputByProductIdCutId($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and operation_type_id=2 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getOutputByProductId($product_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and operation_type_id=2 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

////////////////////////////////////////////////////////////////////
	public static function getInputQ($product_id,$cut_id){
		$q=0;
		$operations = self::getInputByProductIdCutId($product_id,$cut_id);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}

	public static function getInputQYesF($product_id){
		$q=0;
		$operations = self::getInputByProductId($product_id);
		$input_id = OperationTypeData::getByName("entrada")->id;
		$output_id = OperationTypeData::getByName("salida")->id;
		foreach($operations as $operation){
			if($operation->operation_type_id==$input_id){ $q+=$operation->q; }
			else if($operation->operation_type_id==$output_id){  $q+=(-$operation->q); }
		}
		// print_r($data);
		return $q;
	}


	public static function getInputByProductIdCutId($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and operation_type_id=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getInputByProductId($product_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and operation_type_id=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getInputByProductIdCutIdYesF($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and is_oficial=1 and operation_type_id=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getInputByProductIdCutIdNoF($product_id,$cut_id){
		$sql = "select * from ".self::$tablename." where product_id=$product_id and cut_id=$cut_id and is_oficial=0 and operation_type_id=1 order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new OperationData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->product_id = $r['product_id'];
			$array[$cnt]->q = $r['q'];
			$array[$cnt]->d = $r['d'];
			$array[$cnt]->cut_id = $r['cut_id'];
			$array[$cnt]->operation_type_id = $r['operation_type_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}
////////////////////////////////////////////////////////////////////////////


}

?>