<?php
  $criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
  $pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
  $registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
  include_once 'clsHabitacion.php';
  include_once 'paginador.php';
  $objhab = new clsHabitacion();
  //$cantidad = $objhab->listado(2, 'ce', $pagina, $registro); // Contar cuantos hay
  $cantidad = $objhab->listado(2, $criterio, $pagina, $registro); // Contar cuantos hay
  /*
    echo "criterio->" . $criterio . "<br>";
    echo "pagina->"   . $pagina . "<br>";
    echo "registro->" . $registro . "<br>";
    echo "<pre>";
    print_r($cantidad);
    echo "</pre>";
    die();
  */
  if ($cantidad>0){
    $funcion = "buscarobjMunicipios";
    $array = $objhab->listado(1, $criterio, (($pagina - 1) * $registro), $registro);
    $srttable="";
    $ida = '"'.openssl_encrypt("view", COD, KEY).'"';
    //$ida = '"view"';
    $srttable.= "
    <table class='table display table-striped table-bordered table-hover' style='width:100%' cellspacing='0'>
      <thead style='background:#E9CAE9;'>
        <tr >
          <th class='centro' scope='col'>Numero</th>
          <th class='centro' scope='col'>Estado</th>
          <th class='centro' scope='col'>Precio</th>
          <th class='centro' scope='col'>Tipo</th>
          <th class='centro' scope='col' style='background:#AED6F1;'>Acciones</th>
        </tr>
      </thead>
      <tbody>"; 
        foreach ($array as $value) {
          $srttable.= "
          <tr id='row" .$value['idHabitacion']."'>        
            <td id='nro"  . $value['idHabitacion']. "' width='5%'>"  . $value['nroHabitacion']. "</td>
            <td id='est"  . $value['idHabitacion'] . " width='35%'>" . $value['nomEstado'] . "</td>
            <td id='pre"  . $value['idHabitacion'] . "  width='5%''>" . number_format($value['precioHab'],2) . "</td>
            <td id='tipo" . $value['idHabitacion'] . "' width='35%'              
            ><i class='fa fa-gear fa-fw'
            data-toggle='popover' data-trigger='hover' data-content='" . $value['desTipo'] . "'
            ></i>" . $value['nomTipo'] . "                 
            </td>
            <!--  -->
            
            <td class='centro' width='20%'> 
              <a id='newm' href='javascript:void(0);' class='btn btn-info btn-md fa fa-book' onclick='addfurniture(". $value['idHabitacion'].",". $value['nroHabitacion'] . ")' title='Registrar mobiliario' type='button'></a> 
 
              <a href='javascript:void(0);' class='btn btn-success btn-md fa fa-book' onclick='viewdescripcion(" .$ida."," . $value['idHabitacion'] . "," . $value['nroHabitacion'] .  ")' title='Ver mobiliario' type='button'></a> 
              

              <a href='javascript:void(0);' class='btn btn-warning btn-md fa fa-edit edit' onclick='editatype(".$value['idHabitacion'].")'title='Editar' type='button'></a>

              <a href='javascript:void(0);' class='btn btn-danger btn-md fa fa-trash-o delete' onclick='deletetype(".$value['idHabitacion']. ")'title='Eliminar' type='button'></a>
            </td>
          </tr>";
        }    
        $srttable.="
      </tbody>
      <tfoot>
        <tr>
          <td colspan='5'>";
            $p = new paginador();
            $srttable.= $p->pagination($cantidad, $pagina, $funcion, $criterio, $registro, 5);
            $srttable.="
          </td>
        </tr>
      </tfoot>
    </table>";
    echo $srttable;  
  }else{
    echo "Error: No hay registros para listar";
  }
?>