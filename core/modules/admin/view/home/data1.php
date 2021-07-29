<?php
header('Content-Type: application/json');
ini_set('max_execution_time', 300);

error_reporting(0);
//$conn = mysqli_connect("localhost","root","the_reborn","inventiolite");
$conn = mysqli_connect("188.121.44.69","minucia","minucia2911","minucia");
$sqlp = "select id,name,price_out from product";
$rep = mysqli_query($conn,$sqlp);
$data = array();
$conse =0 ;
while ($producto = mysqli_fetch_array($rep)){
	$sqlQuery = "select sum(q) as cantidad from operation where product_id=".$producto['id']." and (operation_type_id=2 or operation_type_id=4 or operation_type_id=5)";
	$result = mysqli_query($conn,$sqlQuery);
	$resultq = mysqli_fetch_object($result);
	$bn = "select name from product where id=".$producto['id'];
	$sbn = mysqli_query($conn,$bn);
	$rsbn = mysqli_fetch_object($sbn);
	$data[$conse]->producto = $rsbn->name;
	if($resultq->cantidad==0){
		$cant = 0;	
	}else{
		$cant = $resultq->cantidad;
	}	
	$data[$conse]->cantidad = $cant;
	$conse++;
}
usort($data, 'sort_by_orden');
function sort_by_orden ($a, $b) {
    return $b->cantidad - $a->cantidad;
}
$data1 = array();
$nupro = 0;
foreach($data as $dato){
	$data1[$nupro]->producto = $dato->producto;
	$data1[$nupro]->cantidad = $dato->cantidad;
	$nupro++;
	if($nupro > 2){
		break;
	}
}


mysqli_close($conn);

echo json_encode($data1);

?>