<?php
include_once('d:\xampp_new\htdocs\turismo\core\controller\Database.php');
include_once('d:\xampp_new\htdocs\turismo\core\controller\Executor.php');
$con = Database::getCon();

if(!empty($_POST["usuario"])) {
  $sql = "SELECT * FROM tbpersonas WHERE idnroDoc=" . $_POST["usuario"];
  $result = mysqli_query($con,$sql);
  if($result){
    $array_persona=array();
    $cnt = 0;
    while($r = mysqli_fetch_array($result)){
        $array_persona[0] = $r['nomPersona'];
        $array_persona[1] = $r['apePersona'];
        $array_persona[2] = $r['correoPersona'];
        $array_persona[3] = $r['telPersona'];
    }
    echo json_encode($array_persona);
  }else{
    echo "error";
  }
}
?>