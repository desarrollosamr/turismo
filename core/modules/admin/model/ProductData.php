<?php
class ProductData {
	public static $tablename = "product";
	public $dn;
	public function ProductData(){

		$this->name = "";
		$this->description = "";
		$this->price_in = "";
		$this->price_out = "";
		$this->unit = "";
		$this->user_id = "";
		$this->category_id = "0";
		$this->talla_id = "0";
		$this->color_id = "0";
		$this->inventary_min = "0";
		$this->created_at = "NOW()";
	}

	public function getCategory(){ return CategoryData::getById($this->category_id);}
	public function getTalla(){ return TallaData::getById($this->talla_id);}
	public function getColor(){ return ColorData::getById($this->color_id);}

	public function add(){
		
		$sql = "insert into product (name,description,price_in,price_out,user_id,unit,category_id,talla_id,color_id,inventary_min,created_at) ";
		$sql .= "values (\"$this->name\",\"$this->description\",\"$this->price_in\",\"$this->price_out\",\"$this->user_id\",\"$this->unit\",\"$this->category_id\",\"$this->talla_id\",\"$this->color_id\",\"$this->inventary_min\",$this->created_at)";
		$this->dn=Executor::doit($sql);
	}
	
	public function add_with_image(){
		$sql = "insert into product (image,name,description,price_in,price_out,user_id,unit,category_id,talla_id,color_id,inventary_min,created_at) ";
		$sql .= "values (\"$this->image\",\"$this->name\",\"$this->description\",\"$this->price_in\",\"$this->price_out\",$this->user_id,\"$this->unit\",$this->category_id,$this->talla_id,$this->color_id,$this->inventary_min,$this->created_at)";

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

// partiendo de que ya tenemos creado un objecto ProductData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",price_in=\"$this->price_in\",price_out=\"$this->price_out\",unit=\"$this->unit\",category_id=$this->category_id,talla_id=$this->talla_id,color_id=$this->color_id,inventary_min=\"$this->inventary_min\",description=\"$this->description\" where id=$this->id";

		Executor::doit($sql);
	}

	public function del_category(){
		$sql = "update ".self::$tablename." set category_id=NULL where id=$this->id";
		Executor::doit($sql);
	}

	public function del_talla(){
		$sql = "update ".self::$tablename." set talla_id=NULL where id=$this->id";
		Executor::doit($sql);
	}

	public function del_color(){
		$sql = "update ".self::$tablename." set color_id=NULL where id=$this->id";
		Executor::doit($sql);
	}


	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ProductData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->price_in = $r['price_in'];
			$data->price_out = $r['price_out'];
			$data->image = $r['image'];
			$data->unit = $r['unit'];
			$data->user_id = $r['user_id'];
			$data->category_id = $r['category_id'];
			$data->talla_id = $r['talla_id'];
			$data->color_id = $r['color_id'];
			$data->description = $r['description'];
			$data->inventary_min = $r['inventary_min'];
			$data->is_active = $r['is_active'];
			$found = $data;
			break;
		}
		return $found;
	}



	public static function getAll($inicio){
		if ($inicio<>""){
			$sql = "select * from ".self::$tablename." where name like '%".$inicio."%' or id like '".$inicio."'  order by name";
		}else{
			$sql = "select * from ".self::$tablename." order by name";
		}

		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ProductData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->user_id = $r['user_id'];

			$array[$cnt]->category_id = $r['category_id'];
			$array[$cnt]->talla_id = $r['talla_id'];
			$array[$cnt]->color_id = $r['color_id'];
			$array[$cnt]->is_active = $r['is_active'];
			$array[$cnt]->description = $r['description'];
			$array[$cnt]->inventary_min = $r['inventary_min'];

			$cnt++;
		}
		return $array;
	}


	public static function getAllByPage($start_from,$limit,$inicio){
		if ($inicio<>""){
			//$sql = "select * from ".self::$tablename." where id>=$start_from and name like '".$inicio."%' order by name limit $limit";
			$sql = "select * from ".self::$tablename." where name like '%".$inicio."%' or id like '".$inicio."' order by name limit $start_from,$limit";		
		}else{
			//$sql = "select * from ".self::$tablename." where id>=$start_from order by name limit $limit";
			$sql = "select * from ".self::$tablename." order by name limit $start_from,$limit";

		}
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ProductData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->category_id = $r['category_id'];
			$array[$cnt]->talla_id = $r['talla_id'];
			$array[$cnt]->color_id = $r['color_id'];
			$array[$cnt]->description = $r['description'];
			$array[$cnt]->inventary_min = $r['inventary_min'];
			$array[$cnt]->is_active = $r['is_active'];

			$cnt++;
		}
		return $array;
	}


	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where name like '%$p%' or id like '$p'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ProductData();
			$array[$cnt]->cons = $cnt;
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->inventary_min = $r['inventary_min'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->talla_id = $r['talla_id'];
			$array[$cnt]->color_id = $r['color_id'];
			$cnt++;
		}
		return $array;
	}



	public static function getAllByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){ 
			$array[$cnt] = new ProductData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByCategoryId($category_id){
		$sql = "select * from ".self::$tablename." where category_id=$category_id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ProductData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByColorId($color_id){
		$sql = "select * from ".self::$tablename." where color_id=$color_id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ProductData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByTallaId($talla_id){
		$sql = "select * from ".self::$tablename." where talla_id=$talla_id order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ProductData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->price_in = $r['price_in'];
			$array[$cnt]->price_out = $r['price_out'];
			$array[$cnt]->unit = $r['unit'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->user_id = $r['user_id'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}



}

?>