<?php
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
}
?>
<h1>Retirar Reserva</h1>
<?php if(isset($_GET["id"]) && $_GET["id"]!=""):?>
<?php
$sell = SellData::getById($_GET["id"]);
$operations = OperationData::getAllProductsBySellId($_GET["id"]);
$total = 0;
$dcto = 0;
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
	<?php if($sell->operation_type_id==5){  ?>
		<th></th>
	<?php } ?>
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
	<?php if($sell->operation_type_id==5 and $u->is_admin){  ?>
	<td style="width:30px;"><a href="index.php?view=delop&opid=<?php echo $operation->id; ?>&sellid=<?php echo $sell->id; ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
	<?php } ?>
</tr>
<?php
	}
	?>
</table>
<br><br>
<table style="border: 1px solid #dddddd">
	<?php if(isset($_GET["r"]) and  $_GET["r"]=="on"){?>
	<tr>
		<td style="font-size: 20px;">Total</td>
		<td style="font-size: 20px; text-align: right;"> $ <?php echo number_format($total,2,'.',','); ?></td>
	</tr>
	<?php } ?>
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
		<?php if(!isset($_GET["r"]) or  $_GET["r"]==NULL){?>
		Total:
		<?php }else{ ?>
		Saldo:
		<?php }	 ?>		
		</td>
		<td style="font-size: 26px; text-align: right;">
		<?php if(!isset($_GET["r"]) or  $_GET["r"]==NULL){?>		
		$ <?php echo number_format($total,2,'.',','); ?>
		<?php }else{ ?>
		$ <?php echo number_format($total-$sell->monto_e-$sell->monto_t,2,'.',','); ?>
		<?php }	 ?>		
			
		</td>
	</tr>
</table><br>

<button class="btn btn-lg btn-primary" onclick="window.location='index.php?view=saldarreserva&amp;id=<?php echo $_GET["id"]?>'"><i class="glyphicon glyphicon-usd"></i>Retirar</button>
<button class="btn btn-lg btn-primary" onclick="window.location='index.php?view=factura&amp;id=<?php echo $_GET["id"]?>'"><i class="glyphicon glyphicon-print"></i>Imprimir</button>
<button class="btn btn-lg btn-primary" onclick="window.location='index.php?view=factura&amp;destino=regalo&amp;id=<?php echo $_GET["id"]?>'"><i class="glyphicon glyphicon-print"></i>Imprimir regalo</button>
<?php else:?>
	501 Internal Error
<?php endif; ?>