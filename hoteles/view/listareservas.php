<?php
  $criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
  $pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
  $registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;
  include_once 'model/reservas_data.php';
  include_once 'paginador.php';
  $objhab = new pruebasdata();
  $nureg = $objhab->listado(2, $criterio, $pagina, $registro); // Contar cuantos hay
  $cantidad = $nureg;
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
    $funcion = "paginar";
    $array = $objhab->listado(1, $criterio, $pagina, $registro);
    $srttable="";
    $ida = "view";
    //$ida = '"view"';
    $srttable.= "
    <table class='table display table-striped table-bordered table-hover' style='width:100%' cellspacing='0'>
      <thead style='background:lightblue;'>
        <tr >
          <th class='centro' scope='col'>Nombre</th>
          <th class='centro' scope='col'>Grado</th>
          <th class='centro' scope='col'>Curso</th>
          <th class='centro' scope='col'>Tema</th>
          <th class='centro' scope='col'>Asignatura</th>
          <th class='centro' scope='col'>Se abre</th>
          <th class='centro' scope='col'>Se cierra</th>
          <th class='centro' scope='col'># de preguntas</th>
          <th class='centro' scope='col'>Ver resultados?</th>
          <th class='centro' scope='col' style='background:#AED6F1;'>Acciones</th>
        </tr>
      </thead>
      <tbody>"; 
        foreach($array as $value) {
          $srttable.= "
          <tr id='row" . $value["id"] . "'>        
            <td>" . $value['nombre']. "</td>
            <td>" . $value['grado'] . "</td>
            <td>" . $value['curso'] . "</td>
            <td>" . $value['tema'] . "</td>
            <td>" . $value['asignatura'] . "</td>
            <td>" . $value['abre'] . "</td>
            <td>" . $value['cierra'] . "</td>
            <td>" . $value['numero'] . "</td>
            <td>" . $value['ver'] . "</td>
            
            <td class='centro' width='20%'> 
              <a id='newm' href='javascript:void(0);' class='btn btn-info btn-md fa fa-book' onclick='addfurniture(". $value['id'].",". $value['nombre'] . ")' title='Registrar mobiliario' type='button'></a> 
 
              <a href='javascript:void(0);' class='btn btn-success btn-md fa fa-book' onclick='viewdescripcion(" .$ida."," . $value['id'] . "," . $value['nombre'] .  ")' title='Ver mobiliario' type='button'></a> 
              

              <a href='javascript:void(0);' class='btn btn-warning btn-md fa fa-edit edit' onclick='editatype(".$value['id'].")'title='Editar' type='button'></a>

              <a href='javascript:void(0);' class='btn btn-danger btn-md fa fa-trash-o delete' onclick='deletetype(".$value['id']. ")'title='Eliminar' type='button'></a>
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