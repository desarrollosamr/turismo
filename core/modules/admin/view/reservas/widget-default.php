<div class="row">
	<div class="col-md-12">
		<h1><i class='glyphicon glyphicon-shopping-cart'></i> Lista de Reservas</h1>
		<div class="clearfix"></div>


<?php

$products = SellData::getReservas();

if(count($products)>0){
	$total_total = 0;
	?>
<br>
<table class="table table-bordered table-hover	">
	<thead>
		<th></th>
		<th>Productos</th>
		<th>Cliente</th>
		<th>Abono efectivo</th>
		<th>Abono tarjeta</th>
		<th>Forma de pago</th>
		<th>Fecha</th>
		<th></th>
	</thead>
	<?php foreach($products as $sell):?>

	<tr>
		<td style="width:30px;">
		<a href="index.php?view=onesell&id=<?php echo $sell->id; ?>&r=on" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a>
		</td>
		<td>
			<?php
			$operations = OperationData::getAllProductsBySellId($sell->id);
			echo count($operations);
			?>
		</td>
		<td>
			<?php			
			$client = $sell->getPerson();
			echo $client->name." ".$client->lastname;
			?>		
		</td>

		<td>
			<?php echo "<b>$ ".number_format($sell->monto_e)."</b>"; ?>
		</td>
		<td>
			<?php echo "<b>$ ".number_format($sell->monto_t)."</b>"; ?>
		</td>
		<td>
			<?php echo $sell->tipo_pago; ?>
		</td>		
		<td><?php echo $sell->created_at; ?></td>
		<td style="width:30px;"><a href="index.php?view=delsell&id=<?php echo $sell->id; ?>" onclick="return confirm('Confirma la eliminación de esta reverva?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
	</tr>

<?php endforeach; ?>

</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay reservas</h2>
		<p>No se ha realizado ninguna reserva.</p>
	</div>
	<?php
}

?>
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>