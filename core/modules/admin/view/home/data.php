<?php
header('Content-Type: application/json');
error_reporting(0);
//$conn = mysqli_connect("localhost","root","the_reborn","inventiolite");
$conn = mysqli_connect("188.121.44.69","minucia","minucia2911","minucia");
$inicio = date( "Y-m-d", strtotime( "-1 month" ) );
$all = " Select * from box";
$sall = mysqli_query($conn,$all);
$nreg = mysqli_num_rows($sall);
if ($nreg > 0){
	$ult = $nreg - 30;
}
$box = "select * from box order by created_at limit " . $ult. ",30";
$boxes = mysqli_query($conn,$box);
$conse = 0;
$data = array();
while ($vbb = mysqli_fetch_array($boxes)){
	$svb = "select sum(monto_e) as efectivo, sum(monto_t) as tarjeta from sell where box_id=" . $vbb['id'];
	$rsvb = mysqli_query($conn,$svb);
	$rssvb = mysqli_fetch_object($rsvb);
	$total_caja = $rssvb->efectivo + $rssvb->tarjeta;
	$data[$conse]->producto = substr($vbb['created_at'],0,10);
	$data[$conse]->cantidad = $total_caja;
	$conse++;
}

mysqli_close($conn);

echo json_encode($data);

?>