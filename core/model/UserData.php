<?php
include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');
 
class UserData {
	public static $tablename = "tbl_users";

	public function Userdata(){
		$this->name = "";
		//$this->lastname = "";
		$this->username = "";
		$this->email = "";
		//$this->image = "";
		$this->password = "";
		$this->mobile = "";
		$this->roleid = 0;
		$this->isActive = 0;
		$this->created_at = "NOW()";
		$this->updated_at = "NOW()";
	}

	public function add(){
		$sql = "insert into user (name,username,email,password,mobile,roleid,isActive,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->username\",\"$this->email\",\"$this->password\",\"$this->mobile\",$this->roleid,$this->isActive,$this->created_at)";
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

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",username=\"$this->username\",email=\"$this->email\",mobile=\"$this->mobile\",roleid=$this->roleid, isActive=\"$this->isActive\",updated_at=$this->updated_at where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_pass_by_email(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where email=\"$this->email\"";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			//$data->lastname = $r['lastname'];
			$data->username = $r['username'];
			$data->is_admin = $r['roleid'];
			$data->is_active = $r['isActive'];
			$data->is_seller = $r['mobile'];
			$data->email = $r['email'];
			$data->password = $r['password'];
			$data->created_at = $r['created_at'];
			$data->updated_at = $r['updated_at'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->lastname = $r['username'];
			$array[$cnt]->email = $r['email'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			//$array[$cnt]->lastname = $r['lastname'];
			$array[$cnt]->email = $r['email'];
			$array[$cnt]->username = $r['username'];
			$array[$cnt]->is_active = $r['isActive'];
			$array[$cnt]->is_admin = $r['roleid'];
			$array[$cnt]->is_seller = $r['mobile'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$data->updated_at = $r['updated_at'];
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
			$array[$cnt] = new UserData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->name = $r['name'];
			$array[$cnt]->mail = $r['mail'];
			$array[$cnt]->password = $r['password'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}
}
?>