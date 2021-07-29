<?php
  include_once 'clstipodocumento.php';
  session_start();  
	if (!empty($_POST))  
	{ //$datosRecibidos="";

    $action = openssl_decrypt( $_REQUEST['id'], COD, KEY);    
    switch($action){       
      case 'new' :
        $obj = new clstipodocumento();
        echo json_encode($obj->newTypoDocumento($_REQUEST['nomDcto']), JSON_UNESCAPED_UNICODE);        
        break;     
      case 'edit' :
			//$m = "Edicion".(array)$_REQUEST;  


			      
        $obj = new clstipodocumento();
        //$r = $obj->oneTypoDocumento($_REQUEST['action']);
        //echo json_encode($r, JSON_UNESCAPED_UNICODE);
        echo json_encode($obj->oneTypoDocumento($_REQUEST['action']), JSON_UNESCAPED_UNICODE);
        //echo json_encode($obj->oneTypoDocumento($_REQUEST['id']), JSON_UNESCAPED_UNICODE);
        //echo json_encode($m, JSON_UNESCAPED_UNICODE);        
        //die();
        break;
      case 'saveedit':
          $obj = new clstipodocumento();
          //$m = $_REQUEST;
          //echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
          //echo json_encode("graba edicion", JSON_UNESCAPED_UNICODE);
          $id  = $_REQUEST['action'];
          $nom = $_REQUEST['nomDcto'];
          echo json_encode($obj->updateTypoDocumento($id, $nom), JSON_UNESCAPED_UNICODE);
          break;
        case 'delete' :
          $obj = new clstipodocumento();
          echo json_encode($obj->oneTypoDocumento($_REQUEST['action']), JSON_UNESCAPED_UNICODE);
          //$m = $_REQUEST;
          //echo json_encode("delete", JSON_UNESCAPED_UNICODE);
          //echo json_encode($obj->updateTypoDocumento($id, $nom), JSON_UNESCAPED_UNICODE);
          break;
        case 'savedelete':
          echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
          die();
        break;
    }
    exit;
    if($_POST['action'] == 'infoProducto')
    {
			$producto_id = $_POST['producto'];
			$sql1 = "SELECT codproducto, descripcion,existencia,precio ";
			$sql1.= "FROM producto WHERE codproducto = $producto_id and estatus = 1";
		  $query = mysqli_query($conection,$sql1);
			mysqli_close($conection);
			$result = mysqli_num_rows($query);  	   
			/*  echo '<script type="text/javascript">swal('.$result.')</script>';
       $datosRecibidos = "Estoy en infoProducto\n";
       $datosRecibidos .="Codigo producto recibido: ".$_POST['producto']."\n";
       $datosRecibidos .= "Datos en query->>".gettype($query);
       echo $datosRecibidos;			
		  */
    	if ($result>0)
    	{
        $data = mysqli_fetch_assoc($query);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        exit;
    	}
    	echo "Error";
    	exit;
    }
    // Agregar la cantidad digitada a la tabla entrada
    if($_POST['action'] == 'addProducto')
    { /* $datosRecibidos = "Cantidad : ".$_POST['cantidad']."\n";
	      $datosRecibidos .="precio   : ".$_POST['precio']."\n";
	      $datosRecibidos .="id_producto: ".$_POST['producto_id']."\n";
	      echo $datosRecibidos; */
	    if(empty($_POST['cantidad']) || empty($_POST['precio']) || empty($_POST['producto_id']))
	    {
	     	echo 'Error';
	    } else
	    {
       $cantidad    = $_POST['cantidad'];
       $precio      = $_POST['precio'];
       $producto_id = $_POST['producto_id'];
       $usuario_id  = $_SESSION['idUser'];
		 	 $fechaSys    = $_SESSION['fecSys'];
       $sql= "Insert into entradas(codproducto, fecha, cantidad, precio, usuario_id) values ($producto_id,'$fechaSys',$cantidad,$precio,$usuario_id)";
       $query_insert = mysqli_query($conection,$sql);
       if($query_insert)
       {
		    // Se ejecuta el procedimiento almacenado
		  	$query_upd = mysqli_query($conection,"CALL actualizar_precio_producto($cantidad,$precio,$producto_id)");
		    $result_pro = mysqli_num_rows($query_upd);
		    if($result_pro > 0)
		      {
		      	$data = mysqli_fetch_assoc($query_upd);
		        $data['producto_id'] = $producto_id;
		        echo json_encode($data, JSON_UNESCAPED_UNICODE);
		      }
        } else {echo 'Error'; }
        mysqli_close($conection);
	    }
	    exit;
    }
  	// Se elimina el producto, pero se cambia el estaus  
    if($_POST['action'] == 'delProducto')
    {
    	if (empty($_POST['producto_id']) || !is_numeric($_POST['producto_id'])){
    		echo 'Error';
    	} else {
	    	$idproducto = $_POST['producto_id'];
            $qryDelete = mysqli_query($conection,"Update producto set estatus = 0 WHERE codproducto = $idproducto ");
    	    mysqli_close($conection);
    	    if($qryDelete){
    	    	echo 'ok';
    	    } else {
    	    	echo 'Error';
    	    	exit;
    	    }
    	}
    	exit;
    }    
	  /*Buscar el cliente(evento keyUp, al ingresar una venta) */
	 if($_POST['action'] == 'searchCliente')
	  {// Para comprobar que se esta enviando desde NUEVA_VENTA: print_r($_POST);echo 'Buscando cliente'; 	exit;
	  	if(!empty($_POST['cliente']))
	  	{
      	$nit = $_POST['cliente'];
      	$query = mysqli_query($conection,"Select * from cliente where nit like '$nit' and estatus = 1");
      	mysqli_close($conection);
      	$data ='';
    	  if(mysqli_num_rows($query)>0){
    	   	$data= mysqli_fetch_assoc($query);
    	  } else {
    	   	$data= 0;
   	    }
   	    echo json_encode($data,JSON_UNESCAPED_UNICODE);
      	}
	    exit;
	  } // Fin BUSCAR CLIENTE(searchCliente)
	   	/* Se registra el cliente desde VENTAS */
    if($_POST['action'] == 'addCliente')
    {
			$nit        = $_POST['nit_cliente'];
			$nombre     = $_POST['nom_cliente'];
			$telefono   = $_POST['tel_cliente'];
			$direccion  = $_POST['dir_cliente'];
			$usuario_id = $_SESSION['idUser'];
			$fechaSys   = $_SESSION['fecSys'];//		print_r($_POST); exit;
			$query_insert = mysqli_query($conection,"Insert Into cliente(nit,nombre,telefono,direccion,dateadd,usuario_id) VALUES('$nit','$nombre','$telefono','$direccion','$fechaSys','$usuario_id')");
			if($query_insert){
				$codCliente = mysqli_insert_id($conection); // Ultimo numero Incremental generado
				$msg = $codCliente;
			}else{
				$msg ='error';
			}
			mysqli_close($conection);
			echo $msg;
			exit;
    } // Fin Registra clientes desde VENTAS
    if($_POST['action'] == 'addProductoDetalle')
	  {  // Se agrega el producto a la tabla temporal
	  	//print_r($_POST); exit;
	  	if(empty($_POST['producto']) || empty($_POST['cantidad']) ){ echo 'error';}
	  	else {
	  		$codproducto = $_POST['producto'];
	  		$cantidad    = $_POST['cantidad'];
	  		$token       = md5($_SESSION['idUser']);
	  		$query_iva   = mysqli_query($conection,"Select iva from configuracion");
	  		$resul_iva   = mysqli_num_rows($query_iva);
	  		$query_detalle_temp = mysqli_query($conection,"CALL add_detalle_temp($codproducto, $cantidad, '$token')");
	  		$result  = mysqli_num_rows($query_detalle_temp);	    		
	  		$detalleTabla ='';
	  		$detalleTotales ='';
	  		$sub_total =0;
	  		$iva       =0;
	  		$total     =0;
	  		$arrayData = array();  // aca se regresa el resultado a la llamada de ajax
	  		if($result > 0){  // Hay registros en la tabla detalles
	  			if($resul_iva > 0){
	  				$info_iva = mysqli_fetch_assoc($query_iva);
	  				$iva = $info_iva['iva'];
	  			}
	  			while ($data = mysqli_fetch_assoc($query_detalle_temp) ) {
	  				$precioTotal = round($data['cantidad'] * $data['precio_venta'],2);
	  				$sub_total   = round($sub_total + $precioTotal,2);
	  				$total       = round($total+$precioTotal,2);

	  				$detalleTabla .= '<tr>
										<td>'.$data['codproducto'].'</td>
										<td colspan="2">'.$data['descripcion'].'</td>
										<td class="txtcenter">'.$data['cantidad'].'</td>
										<td class="textright">'.$data['precio_venta'].'</td>
										<td class="textright">'.$precioTotal.'</td>
										<td class="">
											<a class="link_delete" href="#" onclick="event.preventDefault();
											   del_product_detalle('.$data['correlativo'].');"><i class="far fa-trash-alt"></i></a>
										</td>
									</tr>';
	  			} // fin while
	  			$impuesto = round($sub_total *($iva/100),2);
	  			$tl_sniva = round($sub_total - $impuesto,2);
	  			$total    = round($tl_sniva + $impuesto,2);
	  			$detalleTotales ='  <tr>
										<td colspan="5" class="textright">SubTotal $</td>
										<td class="textright">'.$tl_sniva.'</td>
									</tr>
									<tr>
										<td colspan="5" class="textright">Iva ('.$iva.'%)</td>
										<td class="textright">'.$impuesto.'</td>
									</tr>
									<tr>
										<td colspan="5" class="textright">Total $</td>
										<td class="textright">'.$total.'</td>
									</tr>';
				$arrayData['detalle']=$detalleTabla;
				$arrayData['totales']=$detalleTotales;
				echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
	  		} else {
	  			echo 'error';
	  		}
	  		mysqli_close($conection);
	  	}
	  	exit;
	  }
	  if($_POST['action'] == 'searchForDetalle')
	  {  // Se recarga la venta a realizar
	   	//print_r($_POST); exit;
	   	if(empty($_POST['user'])  ) { echo 'error';  } 
	   	else 
	   	{
	    	$token  = md5($_SESSION['idUser']);
				$query  = mysqli_query($conection,"Select a.*, b.descripcion
							From detalle_temp a Inner Join producto b on a.codproducto=b.codproducto
							Where a.token_user = '$token' ");
				$result  = mysqli_num_rows($query);
	    	$query_iva   = mysqli_query($conection,"Select iva from configuracion");
    		$resul_iva   = mysqli_num_rows($query_iva);    		
    		$detalleTabla ='';
    		$detalleTotales ='';
    		$sub_total =0;
    		$iva   =0;
    		$total =0;
    		$arrayData = array();
	    	if($result > 0)
	    	{  // Hay registros en la tabla detalles
    			if($resul_iva > 0){
    				$info_iva = mysqli_fetch_assoc($query_iva);
    				$iva = $info_iva['iva'];
    			}
	    		while ($data = mysqli_fetch_assoc($query) ) 
	    		{
	  				$precioTotal = round($data['cantidad'] * $data['precio_venta'],2);
	  				$sub_total   = round($sub_total + $precioTotal,2);
	  				$total       = round($total+$precioTotal,2);
	  				$detalleTabla .= 
	  				'<tr>
							<td>'.$data['codproducto'].'</td>
							<td colspan="2">'.$data['descripcion'].'</td>
							<td class="txtcenter">'.$data['cantidad'].'</td>
							<td class="textright">'.$data['precio_venta'].'</td>
							<td class="textright">'.$precioTotal.'</td>
							<td class="">
								<a class="link_delete" href="#" onclick="event.preventDefault();
								   del_product_detalle('.$data['correlativo'].');"><i class="far fa-trash-alt"></i></a>
							</td>
						</tr>';
	    		} // fin while
    			$impuesto = round($sub_total *($iva/100),2);
    			$tl_sniva = round($sub_total - $impuesto,2);
    			$total    = round($tl_sniva + $impuesto,2);
    			$detalleTotales ='<tr> 
					    								<td colspan="5" class="textright">SubTotal $</td>
															<td class="textright">'.$tl_sniva.'</td>
														</tr>
														<tr>
															<td colspan="5" class="textright">Iva ('.$iva.'%)</td>
															<td class="textright">'.$impuesto.'</td>
														</tr>
														<tr>
															<td colspan="5" class="textright">Total $</td>
															<td class="textright">'.$total.'</td>
														</tr>';
					$arrayData['detalle']=$detalleTabla;
					$arrayData['totales']=$detalleTotales;
					echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
	    	} else {
	    			echo 'error';
	    	}
	    		mysqli_close($conection);
		  }
		  exit;
	  }
	  if($_POST['action'] == 'delproductoDetalle')
	  {  // Borrar un producto detalle
    	//print_r($_POST); exit;
    	if(empty($_POST['id_detalle'])){
           echo 'error';
    	}else {
	    	$id_detalle = $_POST['id_detalle'];
	    	$token  = md5($_SESSION['idUser']); 
	    	$query_iva   = mysqli_query($conection,"Select iva from configuracion");
	    	$resul_iva   = mysqli_num_rows($query_iva);
				$query_detalle_temp = mysqli_query($conection,"CALL del_detalle_temp($id_detalle, '$token')"); 
				$result  = mysqli_num_rows($query_detalle_temp);	    		
    		$detalleTabla ='';
    		$detalleTotales ='';
    		$sub_total =0;
    		$iva   =0;
    		$total =0;
    		$arrayData = array();
	    	if($result > 0){  // Hay registros en la tabla detalles
    			if($resul_iva > 0){
    				$info_iva = mysqli_fetch_assoc($query_iva);
    				$iva = $info_iva['iva'];
    			}
	    		while ($data = mysqli_fetch_assoc($query_detalle_temp) ) {
    				$precioTotal = round($data['cantidad'] * $data['precio_venta'],2);
    				$sub_total   = round($sub_total + $precioTotal,2);
    				$total       = round($total+$precioTotal,2);
    				$detalleTabla .= 
    				'<tr>
							<td>'.$data['codproducto'].'</td>
							<td colspan="2">'.$data['descripcion'].'</td>
							<td class="txtcenter">'.$data['cantidad'].'</td>
							<td class="textright">'.$data['precio_venta'].'</td>
							<td class="textright">'.$precioTotal.'</td>
							<td class="">
								<a class="link_delete" href="#" onclick="event.preventDefault();
								   del_product_detalle('.$data['correlativo'].');"><i class="far fa-trash-alt"></i></a>
							</td>
						</tr>';
	    		} // fin while
    			$impuesto = round($sub_total *($iva/100),2);
    			$tl_sniva = round($sub_total - $impuesto,2);
    			$total    = round($tl_sniva + $impuesto,2);
    			$detalleTotales =
    			'<tr> 
						<td colspan="5" class="textright">SubTotal $</td>
						<td class="textright">'.$tl_sniva.'</td>
					</tr>
					<tr>
						<td colspan="5" class="textright">Iva ('.$iva.'%)</td>
						<td class="textright">'.$impuesto.'</td>
					</tr>
					<tr>
						<td colspan="5" class="textright">Total $</td>
						<td class="textright">'.$total.'</td>
					</tr>';
					$arrayData['detalle']=$detalleTabla;
					$arrayData['totales']=$detalleTotales;
					echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
	    		} else {
	    			echo 'error';
	    		}
	    		mysqli_close($conection);
	    }
	    exit;
	  } 
    if($_POST['action'] == 'anularVenta')
    { // Se anula la venta(boton anular)
    	$token  = md5($_SESSION['idUser']);
    	$sql="Delete From detalle_temp Where token_user = '$token' ";    	
    	$query_del =mysqli_query($conection,$sql);
    	mysqli_close($conection);
    	if($query_del){
			echo 'ok';
			}else{
			echo 'error';
			}
			exit;
    }
    if($_POST['action'] == 'procesarVenta')
    { // Se procesa la venta-Boton procesar
     	if(empty($_POST['codcliente'])){
     		$codcliente=1;
     	} else {
     		$codcliente=$_POST['codcliente'];
     	}
     	$token   = md5($_SESSION['idUser']);
     	$usuario = $_SESSION['idUser'];
     	$query   = mysqli_query($conection,"Select * From detalle_temp where token_user = '$token'");
     	$result  = mysqli_num_rows($query);  			//exit();		
     	if($result > 0){
     		$query_procesar = mysqli_query($conection,"CALL procesar_venta($usuario, $codcliente, '$token')");
     		$result_detalle = mysqli_num_rows($query_procesar);
     		if($result_detalle>0){
     			$data = mysqli_fetch_assoc($query_procesar);
     			echo json_encode($data,JSON_UNESCAPED_UNICODE);
     		} else{
     			echo 'error';
     		}
     	}else {
     			echo 'error';	     		
     	}
     	mysqli_close($conection);
     	exit;
    }		
		if($_POST['action'] == 'infoFactura')
    {
			if(!empty($_POST['nofactura']))
			{
				$nofactura = $_POST['nofactura'];
				$query = mysqli_query($conection,"SELECT * FROM factura  WHERE nofactura = $nofactura and estatus = 1");
				mysqli_close($conection);
				$result = mysqli_num_rows($query);  	   
				/* echo '<script type="text/javascript">swal('.$result.')</script>';
				$datosRecibidos = "Estoy en infoProducto\n";
				$datosRecibidos .="Codigo producto recibido: ".$_POST['producto']."\n";
				$datosRecibidos .= "Datos en query->>".gettype($query);
				echo $datosRecibidos;
				*/
				if ($result>0){
					$data = mysqli_fetch_assoc($query);
					echo json_encode($data,JSON_UNESCAPED_UNICODE);
					exit;
				}
			}			
	    echo "Error";
	    exit;
	  }
    if($_POST['action'] == 'anularFactura')
    {// Para comprobar que se esta enviando desde NUEVA_VENTA: print_r($_POST);echo 'Buscando cliente'; 	exit;
      if(!empty($_POST['noFactura']))
	  	{
      	$nofactura = $_POST['noFactura'];
      	$qryanular = mysqli_query($conection,"CALL anular_factura($nofactura)");			  
      	mysqli_close($conection);	      	
	    	if(mysqli_num_rows($qryanular)>0)
				{
	    	  $data= mysqli_fetch_assoc($qryanular);
 					echo json_encode($data,JSON_UNESCAPED_UNICODE);
					exit;
	   	  }
      }
	  	echo "error";
	  	exit;
    } // Fin BUSCAR CLIENTE(searchCliente)			
	}
	exit;
?>