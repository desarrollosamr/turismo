<?php
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Database.php');
include_once('d:\xampp_new\htdocs\turismo\hoteles\controller\Executor.php');
class pruebasdata {
	public static $tablenombre = "tbregistroreserva";
	//public $dn;
	public function reservasdata(){
`idRegistro` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idorg` int(11) NOT NULL,
  `fecReserva` datetime NOT NULL,
  `fecRegistro` datetime NOT NULL,
  `fecSalida` datetime NOT NULL,
  `idestadoReserva` int(11) NOT NULL,
  `idCedula` int(11) NOT NULL,
  `canAdultoRegistrada` tinyint(4) NOT NULL DEFAULT 0,
  `canAdultoConfirmada` tinyint(4) NOT NULL DEFAULT 0,
  `canMenorRegistrada` tinyint(4) NOT NULL DEFAULT 0,
  `canMenorConfirmada` tinyint(4) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `edadmenor` int(11) NOT NULL,
  `nodays` int(11) NOT NULL
		$this->cons = "";
		$this->idRegistro = 0;
		$this->idusuario = 0;
		$this->idorg = 0;
		$this->fecReserva = "";
		$this->fecRegistro = "";
		$this->fecSalida = "";
		$this->idestadoReserva = 0;
		$this->idcedula = 0;
		$this->canAdultoRegistrada = 0;
		$this->canAdultoConfirmada = 0;
		$this->canMenorRegistrada = 0;
		$this->canMenorConfirmada = 0;
		$this->status = 0;
		$this->edadmenor = 0;
		$this->nodays = 0;
	}

	public function getgrado(){ return gradosdata::getById($this->grado);}
	public function getcurso(){ return cursosdata::getById($this->curso);}
	public function gettema(){ return temasdata::getById($this->tema);}
	public function getasignatura(){ return asignaturasdata::getById($this->asignatura);}

	public function add(){
		
		$sql = "insert into reservas (grado_prueba,curso_prueba,tema_prueba,num_preguntas_prueba,fecha_abre_prueba,fecha_cierra_prueba,ver_resultado_prueba,asignatura_prueba,nombre_prueba) ";
		$sql .= "values ($this->grado,$this->curso,\"$this->tema\",$this->numpreguntas,\"$this->fecha_abre\",\"$this->fecha_cierra\",$this->verresultados,$this->asignatura,\"$this->nombre\")";
		$this->dn=Executor::doit($sql);
	}
	
// partiendo de que ya tenemos creado un objecto pruebasData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablenombre." set nombre_prueba=\"$this->nombre\",curso_prueba=$this->curso,tema_prueba=$this->tema,num_preguntas_prueba=$this->numpreguntas,fecha_cierra_prueba=\"$this->fecha_cierra\",ver_resultado_prueba=$this->verresultados,asignatura_prueba=$this->asignatura,fecha_abre_prueba=\"$this->fecha_abre\",grado=$this->grado where id_prueba=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablenombre." where id_prueba=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new reservasdata();
		while($r = $query[0]->fetch_array()){
            $data->id = $r['id_prueba'];
            $data->nombre = $r['nombre_prueba'];
            $data->grado = $r['grado_prueba'];
            $data->curso = $r['curso_prueba'];
            $data->tema = $r['tema_prueba'];
            $data->numpreguntas = $r['num_preguntas_prueba'];
            $data->fecha_abre = $r['fecha_abre_prueba'];
            $data->fecha_cierra = $r['fecha_cierra_prueba'];
            $data->verresultados = $r['ver_resultados_prueba'];
            $data->asignatura = $r['asignatura_prueba'];
			$found = $data;
			break;
		}
		return $found;
	}

    public static function listado($flag, $criterio, $pagina, $registro) {
    	
        if($flag == 1){
        	$offset = ($pagina-1) * $registro;
            $sql = "SELECT
            pruebas.pruebas.id_prueba AS id, 
            pruebas.pruebas.nombre_prueba AS nombre, 
            pruebas.grados.nombre_grado AS grado, 
            pruebas.cursos.nombre_curso AS curso, 
            pruebas.temas.nombre_tema AS tema, 
            pruebas.asignaturas.nombre_asignatura AS asignatura, 
            pruebas.pruebas.fecha_abre_prueba AS abre, 
            pruebas.pruebas.fecha_cierra_prueba AS cierra, 
            pruebas.pruebas.num_preguntas_prueba AS numero,
            pruebas.pruebas.ver_resultado_prueba AS ver 
            FROM
            pruebas.pruebas
            INNER JOIN
            pruebas.grados
            ON 
                pruebas.pruebas.grado_prueba = pruebas.grados.id_grado
            INNER JOIN
            pruebas.cursos
            ON 
                pruebas.grados.id_grado = pruebas.cursos.grado_curso AND
                pruebas.pruebas.curso_prueba = pruebas.cursos.id_curso
            INNER JOIN
            pruebas.temas
            ON 
                pruebas.grados.id_grado = pruebas.temas.grado_tema AND
                pruebas.pruebas.tema_prueba = pruebas.temas.id_tema
            LEFT JOIN
            pruebas.asignaturas
            ON 
                pruebas.pruebas.asignatura_prueba = pruebas.asignaturas.id_asignatura 
            ORDER BY
                pruebas.fecha_abre_prueba desc
            LIMIT "
            	. $offset . "," . $registro
            ;
        }else{
		    $sql = "SELECT count(*) as total FROM pruebas"; 
        }	
        echo $sql;
        $con=new mysqli("localhost","root","the_reborn","pruebas");
        $result = $con->query($sql);
        $traido = mysqli_num_rows($result);
        $data =[];
	    if ($traido != 0) 
	    {
	      while ($row = mysqli_fetch_array($result)) 
	      {
	        if ($flag == 1)  { $data[] = $row; }
	        else {
	          $data = $row['total'];      
	        }        
	      }
	    }
	    return $data;
    }
    

    public static function getAll($inicio){
		if ($inicio<>""){
			$sql = "select * from ".self::$tablenombre." where nombre like '%".$inicio."%' or id like '".$inicio."'  order by nombre";
		}else{
			$sql = "select * from ".self::$tablenombre." order by nombre";
		}

		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new pruebasData();
			$array[$cnt]->cons = strval($cnt);
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->fecha_cierra = $r['fecha_cierra'];
			$array[$cnt]->verresultados = $r['verresultados'];
			$array[$cnt]->asignatura = $r['asignatura'];
			$array[$cnt]->is_active = $r['is_active'];
			$array[$cnt]->grado = $r['grado'];
			$array[$cnt]->inventary_min = $r['inventary_min'];

			$cnt++;
		}
		return $array;
	}

	public static function getAllExistent($inicio){
		if ($inicio<>""){
			$sql = "select * from ".self::$tablenombre." where nombre like '%".$inicio."%' or id like '".$inicio."'  order by nombre";
		}else{
			$sql = "select * from ".self::$tablenombre." order by nombre";
		}
		$query = Executor::doit($sql); 
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$q = OperationData::getQYesF($r['id']);
			if($q > 0){
				$array[$cnt] = new pruebasData();
				$array[$cnt]->cons = strval($cnt);
				$array[$cnt]->id = $r['id'];
				$array[$cnt]->nombre = $r['nombre'];
				$array[$cnt]->curso = $r['curso'];
				$array[$cnt]->tema = $r['tema'];
				$array[$cnt]->numpreguntas = $r['numpreguntas'];
				$array[$cnt]->image = $r['image'];
				$array[$cnt]->fecha_abre = $r['fecha_abre'];
				$array[$cnt]->fecha_cierra = $r['fecha_cierra'];
				$array[$cnt]->verresultados = $r['verresultados'];
				$array[$cnt]->asignatura = $r['asignatura'];
				$array[$cnt]->is_active = $r['is_active'];
				$array[$cnt]->grado = $r['grado'];
				$array[$cnt]->inventary_min = $r['inventary_min'];
				$cnt++;
			}
		}
		return $array;
	}

	public static function getAllByPage($start_from,$limit,$inicio){
		if ($inicio<>""){
			//$sql = "select * from ".self::$tablenombre." where id>=$start_from and nombre like '".$inicio."%' order by nombre limit $limit";
			$sql = "select * from ".self::$tablenombre." where nombre like '%".$inicio."%' or id like '".$inicio."' order by nombre limit $start_from,$limit";		
		}else{
			//$sql = "select * from ".self::$tablenombre." where id>=$start_from order by nombre limit $limit";
			$sql = "select * from ".self::$tablenombre." order by nombre limit $start_from,$limit";
		}
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new pruebasData();
			$array[$cnt]->cons = strval($cnt);
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->fecha_cierra = $r['fecha_cierra'];
			$array[$cnt]->verresultados = $r['verresultados'];
			$array[$cnt]->asignatura = $r['asignatura'];
			$array[$cnt]->grado = $r['grado'];
			$array[$cnt]->inventary_min = $r['inventary_min'];
			$array[$cnt]->is_active = $r['is_active'];

			$cnt++;
		}
		return $array;
	}

	public static function getAllByPageExistent(&$proexistent,$start_from,$limit,$inicio){
		/*if ($inicio<>""){
			//$sql = "select * from ".self::$tablenombre." where id>=$start_from and nombre like '".$inicio."%' order by nombre limit $limit";
			$sql = "select * from ".self::$tablenombre." where nombre like '%".$inicio."%' or id like '".$inicio."' order by nombre limit $start_from,$limit";		
		}else{
			//$sql = "select * from ".self::$tablenombre." where id>=$start_from order by nombre limit $limit";
			$sql = "select * from ".self::$tablenombre." order by nombre limit $start_from,$limit";

		}
		$query = Executor::doit($sql);
		*/
		$array = array();
		$cnt = 0;
		$objpruebas = array_slice($proexistent,$start_from,$limit);
		//while($r = $query[0]->fetch_array()){
		foreach($objpruebas as $item=>$data){
			$q=OperationData::getQYesF(intval($data->id));
			if($q>0){
				$array[$cnt] = new pruebasData();
				$array[$cnt]->cons = strval($cnt);
				$array[$cnt]->id = $data->id;
				$array[$cnt]->nombre = $data->nombre;
				$array[$cnt]->curso = $data->curso;
				$array[$cnt]->tema = $data->tema;
				$array[$cnt]->image = $data->image;
				$array[$cnt]->numpreguntas = $data->numpreguntas;
				$array[$cnt]->fecha_abre = $data->fecha_abre;
				$array[$cnt]->fecha_cierra = $data->fecha_cierra;
				$array[$cnt]->verresultados = $data->verresultados;
				$array[$cnt]->asignatura = $data->asignatura;
				$array[$cnt]->grado = $data->grado;
				$array[$cnt]->inventary_min = $data->inventary_min;
				$array[$cnt]->is_active = $data->is_active;
				$cnt++;
			}    
		}

		return $array;
	}

	public static function getLike($p){
		$sql = "select * from ".self::$tablenombre." where nombre like '%$p%' or id like '$p'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new pruebasData();
			$array[$cnt]->cons = strval($cnt);
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->inventary_min = $r['inventary_min'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->verresultados = $r['verresultados'];
			$array[$cnt]->asignatura = $r['asignatura'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllByUserId($fecha_abre){
		$sql = "select * from ".self::$tablenombre." where fecha_abre=$fecha_abre order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){ 
			$array[$cnt] = new pruebasData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllBygradoId($fecha_cierra){
		$sql = "select * from ".self::$tablenombre." where fecha_cierra=$fecha_cierra order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new pruebasData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllBytemaId($asignatura){
		$sql = "select * from ".self::$tablenombre." where asignatura=$asignatura order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new pruebasData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

	public static function getAllBycursoId($verresultados){
		$sql = "select * from ".self::$tablenombre." where verresultados=$verresultados order by created_at desc";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new pruebasData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->created_at = $r['created_at'];
			$cnt++;
		}
		return $array;
	}

  /* */


  public static function countpruebas($inicio)
  {
    $str = "";
  	$str = "select count(*) as n from " . self::$tablenombre . " where nombre like '%" . $inicio . "%' or id like '%" . $inicio . "%'";
    $query = Executor::doit($str);
    $r = $query[0]->fetch_array();
    return $r['n'];
  }
	public static function getAllpaginate($inicio, $pag, $rgtro)
	{
		$str="";
		if ($inicio <> "") {
			$str = "select * from " . self::$tablenombre . " where nombre like '%" . $inicio . "%' or id like '%" . $inicio ."%' order by nombre desc limit " . $pag . "," . $rgtro;			
		} else {
			$str = "select * from " . self::$tablenombre ." order by nombre limit " . $pag . "," . $rgtro;
		}
		//echo $str;
    //die();
		$query = Executor::doit($str);
		$array = array();
		$cnt = 0;
		while ($r = $query[0]->fetch_array()) {
			$array[$cnt] = new pruebasData();
			$array[$cnt]->cons = strval($cnt);
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];
			$array[$cnt]->curso = $r['curso'];
			$array[$cnt]->tema = $r['tema'];
			$array[$cnt]->numpreguntas = $r['numpreguntas'];
			$array[$cnt]->image = $r['image'];
			$array[$cnt]->fecha_abre = $r['fecha_abre'];
			$array[$cnt]->fecha_cierra = $r['fecha_cierra'];
			$array[$cnt]->verresultados = $r['verresultados'];
			$array[$cnt]->asignatura = $r['asignatura'];
			$array[$cnt]->is_active = $r['is_active'];
			$array[$cnt]->grado = $r['grado'];
			$array[$cnt]->inventary_min = $r['inventary_min'];
			$cnt++;
		}
		return $array;
	}
  
}

?>