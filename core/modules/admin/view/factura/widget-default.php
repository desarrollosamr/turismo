<h3>MINUCIA</h3>
<h4>NIT: 1140835303-1</h4>
Centro Comercial Miramar L-104
Cel:3013609083
<?php
if(isset($_GET["id"]) && $_GET["id"]!=""):?>
	<?php
	$sell = SellData::getById($_GET["id"]);
	if($sell->operation_type_id==5){ ?>
		<h4>RESERVA</h4>
	<?php }else{ ?>
		<h4>VENTA</h4>	
	<?PHP } 
	if($sell->person_id<>NULL){
		$client = $sell->getPerson();
	}
	?>
	Fecha: <?php echo $sell->created_at; ?><br>
	Cliente: <?php if($client){echo $client->name." ".$client->lastname;}?><br>
	===================================
	<?PHP $operations = OperationData::getAllProductsBySellId($_GET["id"]);
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
		}
	}
	?>
	<table>
		<?php if($sell->seller!=""):
		$seller = $sell->getSeller();
		?>
		<tr>
			<td>Atendido por: </td>
			<td><?php echo $seller->name." ".$seller->lastname;?></td>
		</tr>
		<?php endif; ?>
	</table>
	<br><table style="width: 200px;" class="table">
		<thead>
			<th>Cod</th>
			<th>Cant</th>
			<th>Descripcion</th>
			<th>Talla</th>
			<th>Dto</th>
			<th>Valor</th>
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
				<td> <?php echo $operation->d; ?>%</td>
				<td>$<?php 
					if (!isset($_GET['destino'])){
						echo number_format($operation->q*$product->price_out*(1-$operation->d/100),0,".",",");
					}
					$total+=$operation->q*$product->price_out*(1-$operation->d/100);
					$dcto+=$operation->q*$product->price_out*($operation->d/100);
					?>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
<?php
	if (!isset($_GET['destino'])){ ?>
		<table>
			<?php if($sell->operation_type_id==5){?>
			<tr>
				<td style="font-size: 20px;">Total</td>
				<td style="font-size: 20px; text-align: right;"> $ <?php echo number_format($total,2,'.',','); ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td><?PHP if($sell->operation_type_id==5){ echo "Abono "; } ?>Efectivo</td>
				<td style="text-align: right;"> $ <?php echo number_format($sell->monto_e,2,'.',','); ?></td>
			</tr>
			<tr>
				<td><?PHP if($sell->operation_type_id==5){ echo "Abono "; } ?>Tarjeta</td>
				<td style="text-align: right;"> $ <?php echo number_format($sell->monto_t,2,'.',','); ?></td>
			</tr>
			<tr>
				<td>Descuento:&nbsp;&nbsp;&nbsp;</td>
				<td style="text-align: right;"> $ <?php echo number_format($dcto,2,'.',','); ?></td>
			</tr>
			<tr>
				<td><?PHP if($sell->operation_type_id==5){ echo "Saldo:"; }else{ echo "Total:";  } ?></td>
				<td style="text-align: right;">$
					<?php if($sell->operation_type_id==5){
							echo number_format($total-$sell->monto_e-$sell->monto_t,2,'.',',');
						}elseif($_GET['abono']!=""){
							echo number_format($total-intval($_GET['abono']),2,'.',',');
						}elseif($sell->operation_type_id==4){
							echo number_format($sell->monto_e + $sell->monto_t,2,'.',',');	
						}else{
							echo number_format($total,2,'.',',');	
						}
					?>
				</td>
			</tr>
		</table>
<?php
				
	}
	?>
<br>


<table>
	<tr><td>===================================</td></tr>
	<tr align="center"><td>Gracias por tu visita</td></tr>
	<tr align="center"><td>Politicas de cambio</td></tr>
	<tr><td>Presentar ticket original</td></tr>
	<?PHP if($sell->operation_type_id==5){ ?>
		<tr><td>Respondemos por su reserva por un</td></tr>		
	<?php } ?>
	<tr><td>Plazo de 30 dias</td></tr>
	<?PHP if($sell->operation_type_id==5){ ?>
		<tr><td>Vencido este plazo dispondremos de la mercancia</td></tr>
	<?php } ?>
	<tr><td>No hay devolución de efectivo</td></tr>
	<?PHP if($sell->operation_type_id<>5){ ?>
		<tr><td>No aplica en mercancia de liquidacion</td></tr>
		<tr><td>Toda prenda debe conservar sus etiquetas</td></tr>
		<tr><td> y empaque original de compra</td></tr>
		<tr><td>No es causal de garantía que el producto tenga</td></tr>
		<tr><td>rayones, raspones, desgastes, orificios, roturas,</td></tr>
		<tr><td>peladuras o arrugas por uso, limpieza inadecuada,</td></tr>
		<tr><td>uso inadecuado, manipulación o modificación del</td></tr>
		<tr><td>producto por terceros.</td></tr>
	<?php } ?>
</table>
	<?php

?>	
<?php else:?>
	501 Internal Error
<?php endif; ?>