
<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/onesell-word.php?id=<?php echo $_GET["id"];?>">Word 2007 (.docx)</a></li>
  </ul>
</div>
<?php if($_GET["r"]="NULL"){?>
	<h1>Resumen de Venta</h1>
<?php }else{?>
	<h1>Resumen de Reserva</h1>
<?php }?>
<?php if(isset($_GET["id"]) && $_GET["id"]!=""):?>
<?php
$sell = SellData::getById($_GET["id"]);
$operations = OperationData::getAllProductsBySellId($_GET["id"]);
$total = 0;
$dcto = 0;
?>
<?php
if(isset($_COOKIE["selled"])){
	foreach ($operations as $operation) {
//		print_r($operation);
		$qx = OperationData::getQYesF($operation->product_id);
		// print "qx=$qx";
			$p = $operation->getProduct();
		if($qx==0){
			echo "<p class='alert alert-danger'>El producto <b style='text-transform:uppercase;'> $p->name</b> no tiene existencias en inventario.</p>";			
		}else if($qx<=$p->inventary_min/2){
			echo "<p class='alert alert-danger'>El producto <b style='text-transform:uppercase;'> $p->name</b> tiene muy pocas existencias en inventario.</p>";
		}else if($qx<=$p->inventary_min){
			echo "<p class='alert alert-warning'>El producto <b style='text-transform:uppercase;'> $p->name</b> tiene pocas existencias en inventario.</p>";
		}
	}
	setcookie("selled","",time()-18600);
}

?>
<table class="table table-bordered">
<?php if($sell->person_id!=""):
$client = $sell->getPerson();
?>
<tr>
	<td style="width:150px;">Cliente</td>
	<td><?php echo $client->name." ".$client->lastname;?></td>
</tr>

<?php endif; ?>
<?php if($sell->user_id!=""):
$user = $sell->getUser();
?>
<tr>
	<td>Atendido por</td>
	<td><?php echo $user->name." ".$user->lastname;?></td>
</tr>
<?php endif; ?>
</table>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>Codigo</th>
		<th>Cantidad</th>
		<th>Nombre del Producto</th>
		<th>Talla</th>
		<th>Precio Unitario</th>
		<th>Descuento</th>
		<th>Total</th>

	</thead>
<?php
	foreach($operations as $operation){
		$product  = $operation->getProduct();
?>
<tr>
	<td><?php echo $product->id ;?></td>
	<td><?php echo $operation->q ;?></td>
	<td><?php echo $product->name ;?></td>
	<td><?php if($product->talla_id!=null){echo $product->getTalla()->name;}else{ echo "<center>----</center>"; } ?></td>
	<td>$ <?php echo number_format($product->price_out,2,".",",") ;?></td>
	<td> <?php echo $operation->d; ?>%</td>
	<td><b>$ <?php echo number_format($operation->q*$product->price_out*(1-$operation->d/100),2,".",",");$total+=$operation->q*$product->price_out*(1-$operation->d/100);$dcto+=$operation->q*$product->price_out*($operation->d/100);?></b></td>
</tr>
<?php
	}
	?>
</table>
<br><br>
<table style="border: 1px solid #dddddd">
	<tr>
		<td style="font-size: 20px;">Efectivo</td>
		<td style="font-size: 20px; text-align: right;"> $ <?php echo number_format($sell->monto_e,2,'.',','); ?></td>
	</tr>
	<tr>
		<td style="font-size: 20px;">Tarjeta</td>
		<td style="font-size: 20px; text-align: right;"> $ <?php echo number_format($sell->monto_t,2,'.',','); ?></td>
	</tr>
	<tr>
		<td style="font-size: 22px;">Descuento:</td>
		<td style="font-size: 22px; text-align: right;"> $ <?php echo number_format($dcto,2,'.',','); ?></td>
	</tr>
	<tr>
		<td style="font-size: 26px;">
		<?php if($_GET["r"]="NULL"){?>
		Total:
		<?php }else{ ?>
		Saldo:
		<?php }	 ?>		
		</td>
		<td style="font-size: 26px; text-align: right;">
		<?php if($_GET["r"]="NULL"){?>		
		$ <?php echo number_format($total,2,'.',','); ?>
		<?php }else{ ?>
		$ <?php echo number_format($total-$sell->monto_e,2,'.',','); ?>
		<?php }	 ?>		
			
		</td>
	</tr>
</table><br>

<button class="btn btn-lg btn-primary" onclick="window.location='index.php?view=factura&amp;id=<?php echo $_GET["id"]?>'"><i class="glyphicon glyphicon-print"></i>Imprimir</button>
<?php else:?>
	501 Internal Error
<?php endif; ?>