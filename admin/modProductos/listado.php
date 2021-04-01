<?php
  $criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
  $pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
  $registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
  include_once 'clsProductos.php';
  include_once 'paginador.php';
  $objhab = new clsProductos();
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
      /*echo "<pre>";
      print_r($array);
      echo "</pre>";
      die();*/
        
    $edit = '"'.openssl_encrypt("saveedit", COD, KEY).'"';
    $del  = '"' . openssl_encrypt("delete", COD, KEY) . '"';
    $otro = '"' . openssl_encrypt("view", COD, KEY) . '"';
    //$ida = '"view"';
    $srttable.= "
    <table class='table display table-striped table-bordered table-hover' style='width:100%' cellspacing='0'>
      <thead style='background:#E9CAE9;'>
        <tr >
          <th class='centro' scope='col'>Producto</th>
          <th class='centro' scope='col'>Existencia</th>          
          <th class='centro' scope='col'>Unid. Medida</th>
          <th class='centro' scope='col'>Precio</th>          
          <th class='centro' scope='col'>Impto Consumo</th>
          <th class='centro' scope='col'>I.V.A</th>
          <th class='centro' scope='col' style='background:#AED6F1;'>Acciones</th>
        </tr>
      </thead>
      <tbody>"; 
        foreach ($array as $value) {
          $srttable.= "
          <tr id='row" .$value['idproducto']."'>        
            <td id='nom"  . $value['idproducto'] ."' width='30%'>" . $value['nomproducto']. "</td>
            <td id='can"  . $value['idproducto'] ."' width='10%'>"  . $value['canExiste'] . "</td>
            <td id='tipo" . $value['idproducto'] ."' width='30%'>" . $value['nomUnidadm'] . "</td>
            <td id='pre"  . $value['idproducto'] ."' width='10%'>" . number_format($value['precio'],2) . "</td>
            <td id='imp"  . $value['idproducto'] ."' width='5%'>"  . number_format($value['impto'], 2) . "</td>
            <td id='iva"  . $value['idproducto'] ."' width='5%'>"  . number_format($value['iva'], 2)   . "</td>

            
            <td class='centro' width='10%'> 
              <a href='javascript:void(0);' class='btn btn-warning btn-md fa fa-edit edit' onclick='editatype(".$value['idproducto'].",".$edit.")' title='Editar' type='button'></a>

              <a href='javascript:void(0);' class='btn btn-danger btn-md fa fa-trash-o delete' onclick='deletetype(".$value['idproducto'].",".$del. ")' title='Eliminar' type='button'></a>
            </td>
          </tr>";
        }    
        $srttable.="
      </tbody>
      <tfoot>
        <tr>
          <td colspan='7'>";
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