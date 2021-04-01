<?php
  $criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
  $pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
  $registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
  include_once 'clsMobiliario.php';
  include_once 'paginador.php';

  $objMobiliario = new clsMobiliario();
  //$cantidad = $objMobiliario->listado(2, 'ce', $pagina, $registro); // Contar cuantos hay

  $cantidad = $objMobiliario->listado(2, $criterio, $pagina, $registro); // Contar cuantos hay
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
  $array = $objMobiliario->listado(1, $criterio, (($pagina - 1) * $registro), $registro);
  //if($criterio=="ce"){
  //  echo "criterio digitado-->".$cantidad;die();
  //}
  $srttable="";
  $srttable.= "
  <table class='table display table-striped table-bordered table-hover' style='width:100%' cellspacing='0'>
    <thead style='background:#E9CAE9;'>
      <tr >
        <th class='centro' scope='col'>Nombre</th>
        <th class='centro' scope='col'>Descripcion</th>
        <th class='centro' scope='col'>Precio</th>      
        <th class='centro' colspan='2' scope='col' >Acciones</th>
      </tr>
    </thead>
    <tbody>"; 
      foreach ($array as $value) {
        $srttable.= "
        <tr id='row" .$value['idMobiliario']."'>        
          <td id='nom".$value['idMobiliario']."'>"   .$value['nomMobiliario']. "</td>
          <td id='des".$value['idMobiliario'] . "'>" .$value['desMobiliario'] . "</td>        
          <td id='pre".$value['idMobiliario'] . "'>" .number_format($value['preciocompra'], 2, '.', '')."</td> 
          <td class='centro'>
            <a href='javascript:void(0);' class='btn btn-warning btn-sm fa fa-edit edit' onclick='editatype(".$value['idMobiliario'].")'title='Editar' type='button'></a>
          </td>
          <td class='centro'> 
            <a href='javascript:void(0);' class='btn btn-danger btn-sm fa fa-trash-o delete' onclick='deletetype(".$value['idMobiliario'].")'title='Editar' type='button'></a>        
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
    echo "error";
  }
?>