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
		<th width="3%"></th>
		<th class="text-center" width="10%">Productos</th>
		<th class="text-center" width="20%">Cliente</th>
		<th class="text-center" width="10%">Total reserva</th>
		<th class="text-center" width="10%">Dcto.</th>
		<th class="text-center" width="10%">Inicial</th>
		<th class="text-center" width="10%">Abono efectivo</th>
		<th class="text-center" width="10%">Abono tarjeta</th>
		<th class="text-center" width="10%">Saldo</th>
		<th class="text-center" width="7%">Forma pago</th>
		<th class="text-center" width="10%">Fecha</th>
	</thead>

	<?php foreach($products as $sell):
	$abonos = AbonosData::getByReserva($sell->id);
	$t_abono_e = 0;
	$t_abono_t1 = 0;
	$t_abono_t2 = 0;
	$t_total = 0;	
	if(count($abonos)>0){
		foreach($abonos as $abo) {
			$t_abono_e  += $abo->monto_e;
			$t_abono_t1 += $abo->monto_t1;
			$t_abono_t2 += $abo->monto_t2;
		} 
		$t_total += $t_abono_e + $t_abono_t1 + $t_abono_t2;
	}
	?>

	<tr>
		<td style="width:30px;">
		<a href="index.php?view=onesell&id=<?php echo $sell->id; ?>&r=on" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a>
		</td>
		<td>
			<?php
			$operations = OperationData::getAllProductsBySellId($sell->id);
			$tsd = 0;
			$td = 0;
			foreach($operations as $vendido){
				$producto  = $vendido->getProduct();
				$tsd += $vendido->q*$producto->price_out;
				$td += $vendido->d/100*$producto->price_out;
			}
			echo count($operations);
			?>
		</td>
		<td>
			<?php			
			$client = $sell->getPerson();
			echo $client->name." ".$client->lastname;
			?>		
		</td>
		<td align="right"><?php echo "<b>$ ".number_format($tsd)."</b>"; ?></td>
		<td align="right"><?php echo "<b>$ ".number_format($td)."</b>"; ?></td>
		<td align="right">
			<?php echo "<b>$ ".number_format($sell->monto_e+$sell->monto_t)."</b>"; ?>
		</td>
		<td align="right">
			<?php echo "<b>$ ".number_format($t_abono_e)."</b>"; ?>
		</td>
		<td align="right">
			<?php echo "<b>$ ".number_format($t_abono_t1+$t_abono_t2)."</b>"; ?>
		</td>
		<td align="right"><?php echo "<b>$ ".number_format($tsd-$td-$t_abono_e-$t_abono_t1-$t_abono_t2-$sell->monto_e-$sell->monto_t)."</b>"; ?></td>
		<td>
			<?php echo $sell->tipo_pago; ?>
		</td>		
		<td><?php echo substr($sell->created_at,0,10); ?></td>
		<?php 
		$u=null;
		if(Session::getUID()!=""){
			$u = UserData::getById(Session::getUID());
		}
		if($u->is_admin){ ?>
			<td><a href="index.php?view=delsell&id=<?php echo $sell->id;?>&r=on" onclick="return confirm('Confirma la eliminación de esta venta?');" id="delsell" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
		<?php }	 ?>		
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