<?php
  $criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
  $pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
  $registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
  include_once 'clstipodocumento.php';
  include_once 'paginador.php';

  $objtypodoc = new clstipodocumento();
  //$cantidad = $objtypodoc->listado(2, 'ce', $pagina, $registro); // Contar cuantos hay



  $cantidad = $objtypodoc->listado(2, $criterio, $pagina, $registro); // Contar cuantos hay
/*echo "criterio->" . $criterio . "<br>";
echo "pagina->" . $pagina . "<br>";
echo "registro->" . $registro . "<br>";
echo "<pre>";
print_r($cantidad);
echo "</pre>";
die();
  */
  if ($cantidad>0){
  $funcion = "buscarobjMunicipios";
  $array = $objtypodoc->listado(1, $criterio, (($pagina - 1) * $registro), $registro);
  //if($criterio=="ce"){
  //  echo "criterio digitado-->".$cantidad;die();
  //}
$srttable="";
$srttable.="
<table class='table display table-striped table-bordered table-hover' style='width:100%' cellspacing='0'>
  <thead style='background:#D0F3F0;'>
    <tr >
      <th class='centro' scope='col'>Nro Id</th>
      <th class='centro' scope='col'>Descripcion</th>
      <th class='centro' colspan='2' scope='col' >Acciones</th>
    </tr>
  </thead>
  <tbody>"; 
    foreach ($array as $value) {
      //$prgEdit = "href='prueba00.php?id=" . $value['idtipoDoc'] . "&x=1'";    
      //$prgEdit = "href='javascript:void(0);'"; 
    $srttable.="
       <tr>      
        <th id='row".$value['idtipoDoc']."' scope='row'>".$value['idtipoDoc']."</th>        
        <td id='nom".$value['idtipoDoc']."'>".$value['nomtipoDoc']."</td>
        <td class='centro'>
          <a href='javascript:void(0);' class='btn btn-warning btn-sm fa fa-edit edit' onclick='editatype(".$value['idtipoDoc'].")'title='Editar' type='button'></a>
        </td>
        <td class='centro'> 
          <a href='javascript:void(0);' class='btn btn-danger btn-sm fa fa-trash-o delete' onclick='deletetype(".$value['idtipoDoc'].")'title='Editar' type='button'></a>        
          <!-- <button class='btn btn-danger btn-sm fa fa-trash-o delete' ></button> -->
        
        
        <!-- <td class='centro'>          
          <button class='btn btn-danger btn-sm fa fa-trash-o delete' title='Borrar' type='button' cd='".$value['idtipoDoc']."'></button> -->
        </td>
      </tr>";   
    }
    
    $srttable.="
    </tbody>
    <tfoot>
    <tr>
    <td colspan='4'>";
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