<?php
$criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
$pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
$registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
include_once 'productos.php';
include_once 'paginador.php';
?>
<table class="table display table-striped table-bordered table-hover" style="width:100%" cellspacing="0"">
<!-- <table class=" table"> -->
  <thead style="background:#D0F3F0;">
    <!-- 	<thead Style="" class="thead-dark"> -->
    <tr>
      <th scope="col">Nro Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $producto = new Producto();
    //$cantidad = $producto->listado(2, $criterio, $pagina, $registro); // Contar cuantos hay
	$cantidad = $producto->getcount();
    $funcion = "buscarproductos";
    //$array = PersonData::sp_paginadorprueba2200($flag,$criterio,$pagina,$registro);
    $array = PersonData::sp_paginadorprueba2200(1, $criterio, (($pagina - 1) * $registro), $registro);
    //$array = $producto->listado(1, $criterio, (($pagina - 1) * $registro), $registro);
    foreach ($array as $value) {
      $prgEdit = "<a href=prueba00.php?id=" . $value->id . "&x=1";
    ?>
      <tr>
       <!-- id, alu_cedula, concat(alu_nombres, " ", alu_apellidos) as nombre, alu_lunac, alu_fenac, alu_direccion, alu_telf -->
        <th id="<?php echo 'row' . $value->id; ?>" scope="row"><?php echo $value->id; ?></th>
        <!--<td><?php //echo $value['alu_cedula']; ?></td> -->
        <td><?php echo $value->name; ?></td>
        <td><?php echo $value->lastname; ?></td>
        <td><?php echo $value->email1; ?></td>
        <td><?php echo $value->phone1; ?></td>
        <td><?php echo $value->address1; ?></td>
        <!--<td><?php //echo $value['estado']; ?></td> -->
        <td>
          <div class="div_acciones">
            <div>
              <a <?php echo $prgEdit; ?> class="btn btn-warning btn-sm far fa-edit" title="Editar" type="button" cd="<?php echo $value->id; ?>">
              </a>
            </div>
            <div class="div_factura">
              <button class="btn btn-danger btn-sm fa fa-trash" type="button" cd="<?php echo $value->id; ?>">
              </button>
            </div>
          </div>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">
        <?php
        $p = new paginador();
        echo $p->pagination($cantidad, $pagina, $funcion, $criterio, $registro, 6);
        ?>
      </td>
    </tr>
  </tfoot>
</table>