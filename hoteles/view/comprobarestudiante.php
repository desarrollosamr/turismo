<?php
include_once('../controller/Database.php');
include_once('../controller/Executor.php');
$con = Database::getCon();

if(!empty($_POST["documento"])) {
  $sql = "SELECT * FROM estudiantes WHERE id_estudiante=" . $_POST["documento"];
  $result = mysqli_query($con,$sql);
  if($result){
    $array_persona=array();
    $cnt = 0;
    while($r = mysqli_fetch_array($result)){
        $array_persona[0] = $r['apellidos_estudiante'];
        $array_persona[1] = $r['nombres_estudiante'];
        $array_persona[2] = $r['email_estudiante'];
    }
    echo json_encode($array_persona);
  }else{
    echo "error";
  }
}
if(!empty($_POST["id_grado"])) {
	$html = '';
	$sqlcurso="SELECT * from cursos WHERE grado_curso = ".$_POST["id_grado"]." ORDER BY nombre_curso ASC";

	$result = $con->query($sqlcurso);
	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {                
	        $html .= '<option value="'.$row['id_curso'].'">'.$row['nombre_curso'].'</option>';
	    }
	}

	echo $html;
}
if(!empty($_POST["id_dpto"])) {
	$html = '';
	$sqlciudad="select * from tbciudades where iddpto = ".$_POST["id_dpto"]." ORDER BY nomCiudad ASC";
	$result = $con->query($sqlciudad);
	if ($result->num_rows > 0) {
	    while ($row = $result->fetch_assoc()) {                
	        $html .= '<option value="'.$row['idCiudad'].'">'.$row['nomCiudad'].'</option>';
	    }
	}

	echo $html;	
}
?>