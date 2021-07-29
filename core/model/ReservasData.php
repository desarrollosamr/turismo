<?php
include_once('D:\xampp_new\htdocs\turismo\core\controller\Database.php');
include_once('D:\xampp_new\htdocs\turismo\core\controller\Executor.php');
 

class ReservasData {
	public static $tablename = "tb registroreserva";
	
	public function reservasData()
	{		
		$this->idRegistro = 0;
		$this->idhotel  = 0;
		$this->fecReserva = "";
		$this->fecRegistro = "";
		$this->fecSalida = "";
		$this->idestadoReserva = 1;
		$this->idCedula = 0;
		$this->canAdultosRegistrada = 0;
		$this->canMenorRegistrada = 0;
		$this->edadMenorRegistrada = 0;
		$this->status = 1;
		$this->nrodias = 0;
	}
	
	public function add(){
		$sql = "insert into ".self::$tablename." (`idorg`, `fecReserva`, `fecRegsitro`, `fecSalida`, `idestadoReserva`, `idCedula`, `canAdultoRegistrada`, `canMenorRegistrada`, `edadMenorRegistrada`, `status`,`nodays`) ";
		$sql .= "values ($this->idhotel,$this->fecReserva,$this->fecRegistro,$this->fecSalida,$this->idestadoReserva,$this->idCedula,$this->canAdultosRegistrada,$this->canMenorRegistrada,$this->edadmenorRegistrada,$this->status,$this->nrodias)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where idRegistro=$id";
		Executor::doit($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where idRegistro=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ReservasData();
		while($r = $query[0]->fetch_array()){
			$data->idRegistro = $r['idRegistro'];
			$data->idhotel = $r['idorg'];
			$data->fecReserva = $r['user_id'];
			$data->fecRegistro = $r['venta_in'];
			$data->fecSalida = $r['venta_out'];
			$data->idestadoReserva = $r['motivo'];
			$data->idCedula = $r['idCedula'];
			$data->canAdultoRegistrada = $r['canAdultoRegistrada'];
			$data->canMenorRegistrada  = $r['canMenorRegistrada'];
			$data->edadMenorRegistrada  = $r['edadMenorRegistrada'];
			$data->status  = $r['status'];
			$data->nrodias  = $r['nrodias'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getReservas(){
		$sql = "select * from ".self::$tablename." order by fecRegistro desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ReservasData();
			$array[$cnt]->idhotel = $r['idorg'];
			$array[$cnt]->fecReserva = $r['user_id'];
			$array[$cnt]->fecRegistro = $r['venta_in'];
			$array[$cnt]->fecSalida = $r['venta_out'];
			$array[$cnt]->idestadoReserva = $r['motivo'];
			$array[$cnt]->idCedula = $r['idCedula'];
			$array[$cnt]->canAdultoRegistrada = $r['canAdultoRegistrada'];
			$array[$cnt]->canMenorRegistrada  = $r['canMenorRegistrada'];
			$array[$cnt]->edadMenorRegistrada  = $r['edadMenorRegistrada'];
			$array[$cnt]->status  = $r['status'];
			$array[$cnt]->nrodias  = $r['nrodias'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where idRegistro<=$start_from limit $limit";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new ReservasData();
			$array[$cnt]->idhotel = $r['idorg'];
			$array[$cnt]->fecReserva = $r['user_id'];
			$array[$cnt]->fecRegistro = $r['venta_in'];
			$array[$cnt]->fecSalida = $r['venta_out'];
			$array[$cnt]->idestadoReserva = $r['motivo'];
			$array[$cnt]->idCedula = $r['idCedula'];
			$array[$cnt]->canAdultoRegistrada = $r['canAdultoRegistrada'];
			$array[$cnt]->canMenorRegistrada  = $r['canMenorRegistrada'];
			$array[$cnt]->edadMenorRegistrada  = $r['edadMenorRegistrada'];
			$array[$cnt]->status  = $r['status'];
			$array[$cnt]->nrodias  = $r['nrodias'];
			$cnt++;
		}
		return $array;
	}
}

?>