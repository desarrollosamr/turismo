<?php
include_once 'clsProductos.php';
session_start();
function valida($m)
{
  $v = 'ok';
  $v = (!is_numeric($m['imptoprod'])) ? 'IMPUESTO no valido'      : $v;
  $v = (!is_numeric($m['ivaprod']))   ? 'I.V.A no valido'         : $v;
  $v = (!is_numeric($m['stockprod'])) ? 'Cantidad no valido'      : $v;
  $v = (!is_numeric($m['priceprod'])) ? 'Precio no valido'        : $v;
  $v = ($m['cbounimedida'] == 0)      ? 'Seleccione Unidad medida': $v;
  $v = (empty($m['nameprod']))        ? 'Nombre no valido'        : $v;
  return $v;
}
/*
function comparar($m)
{
  $v = 'ok';
  $v = (!is_numeric($m['imptoprod'])) ? 'IMPUESTO no valido'      : $v;
  $v = (!is_numeric($m['ivaprod']))   ? 'I.V.A no valido'         : $v;
  $v = (!is_numeric($m['stockprod'])) ? 'Cantidad no valido'      : $v;
  $v = (!is_numeric($m['priceprod'])) ? 'Precio no valido'        : $v;
  $v = ($m['cbounimedida'] == 0)      ? 'Seleccione Unidad medida': $v;
  $v = (empty($m['nameprod']))        ? 'Nombre no valido'         $v;
  return $v;
}
*/

if (!empty($_POST)) { //$datosRecibidos="";
  $action = openssl_decrypt($_REQUEST['id'], COD, KEY);
  switch ($action) {
    case 'new':
      //echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);       
      $swok = valida($_REQUEST);
      if ($swok == 'ok'){
        $obj = new clsProductos();
        $swok = $obj->newproducto($_REQUEST);
      }
      echo json_encode($swok, JSON_UNESCAPED_UNICODE);  
      break;
    case 'saveedit':
    
      /*    {"action":"",
             "id":"0NxZ7tIH3sdfKV2n5BK91w==",
             "rtaAjax":"yes",
             "nameprod":"Papel higienico",
             "cbounimedida":"0",
             "priceprod":"19.00",
             "stockprod":"10",
             "ivaprod":"2,000.00",
             
             "imptoprod":"10.00",
             "iba":"2,000.00",
             "impo":"10.00",
             "price":"19.00",
             "unime":"BOLSA LITRO 1000ML",
             "canty":"10",
             "namep":"Papel huigienico"}
      */
      $swok = valida($_REQUEST);
      if ($swok == 'ok') {
        //$swok = comparar($_REQUEST);
        //if ($swok == 'ok'){
          $obj = new clsProductos();
          $swok = $obj->updateProductos($_REQUEST);          
         // }           
      }      
//      echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
      echo json_encode($swok, JSON_UNESCAPED_UNICODE);
      /*
      $swok = valida($_REQUEST);
      $obj = new clsHabitacion();
      if ($swok == 'ok') {
        $swok = $obj->updatestateHabitacion($_REQUEST);
      }
      */
      break;
    case 'delete':
      $obj = new clsHabitacion();
      // echo json_encode($obj->onestateHabitacion($_REQUEST['action']), JSON_UNESCAPED_UNICODE);
      //$m = $_REQUEST;
      //echo json_encode("delete", JSON_UNESCAPED_UNICODE);
      //echo json_encode($obj->updateTypoDocumento($id, $nom), JSON_UNESCAPED_UNICODE);
      break;
    case 'savedelete':
      echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
      die();
      break;
    case 'newm':
      //$funcion = "event.preventDefault();addm('".$action."')";
      $funcion = "event.preventDefault();addm('btAdd')";
      $strtabla = frmmov($funcion, $_REQUEST['nro'], $_REQUEST['action']);
      echo json_encode($strtabla, JSON_UNESCAPED_UNICODE);
      //echo json_encode($_REQUEST, JSON_UNESCAPED_UNICODE);
      break;
    case 'btAdd':
      //$swok = "<pre>". print_r($_REQUEST)."</pre>";      
      $swok = validaentrada($_REQUEST);
      if ($swok == 0) {
        $obj = new clsHabitacion();
        $tbl = "";
        $cbo = "";
        $rst =  $obj->generaTemporal($_REQUEST, 1);
        $cbo .= "
        <select id='cbomov' name='cbomov'  class='form-control'>
          <option value='0'>Seleccione</option>";
        foreach ($rst as $value) {
          $cbo .= "<option value='" . $value['idMobiliario'] . "'>" . $value['nomMobiliario'] . "</option>";
        }
        $cbo .= "</select>";
        $rs = $obj->generafrm($_REQUEST, 1);
        foreach ($rs as $d) {
          $tbl .= '<tr>
            <td >' . $d['nommob'] . '</td>
            <td  class="centro">' . $d['canmov'] . '</td>
            <td  class="centro">
              <a href="#" class="btn btn-danger btn-md fa fa-trash-o delete" onclick="delmoviliario(' . $d['idtmp'] . ')" title="Eliminar" type="button"></a>
            </td>
          </tr>';
        }
        $arrayData = array();  // aca se regresa el resultado a la llamada de ajax
        $arrayData['cbo'] = $cbo;
        $arrayData['tbl'] = $tbl;
        echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
      } else {
        echo json_encode($swok, JSON_UNESCAPED_UNICODE);
      }
      break;
    case 'btDel':
      $obj = new clsHabitacion();
      $rst =  $obj->deleteregistroTemporal($_REQUEST, 2);
      $cbo = "";
      $tbl = "";
      $cbo .= "
        <select id='cbomov' name='cbomov'  class='form-control'>
          <option value='0'>Seleccione</option>";
      foreach ($rst as $value) {
        $cbo .= "<option value='" . $value['idMobiliario'] . "'>" . $value['nomMobiliario'] . "</option>";
      }
      $cbo .= "</select>";
      $rs = $obj->generafrm($_REQUEST, 2);
      foreach ($rs as $d) {
        $tbl .= '<tr>
            <td >' . $d['nommob'] . '</td>
            <td  class="centro">' . $d['canmov'] . '</td>
            <td  class="centro">
              <a href="#" class="btn btn-danger btn-md fa fa-trash-o delete" onclick="delmoviliario(' . $d['idtmp'] . ')" title="Eliminar" type="button"></a>
            </td>
          </tr>';
      }
      $arrayData = array();  // aca se regresa el resultado a la llamada de ajax
      $arrayData['cbo'] = $cbo;
      $arrayData['tbl'] = $tbl;
      echo json_encode($arrayData, JSON_UNESCAPED_UNICODE);
      //echo json_encode(0, JSON_UNESCAPED_UNICODE);  
      break;
    case 'btcancela':
      $obj = new clsHabitacion();
      $rst =  $obj->deleteTemporal($_REQUEST, 1);
      echo json_encode($rst, JSON_UNESCAPED_UNICODE);
      //echo json_encode(0, JSON_UNESCAPED_UNICODE);
      break;
    case 'btconfirm':
      // $nhab = $_REQUEST['nhav'];
      // $khab = $_REQUEST['keyhav'];
      $obj = new clsHabitacion();
      $rst =  $obj->generarelacion($_REQUEST);
      //echo json_encode($rst, JSON_UNESCAPED_UNICODE);
      echo json_encode($rst, JSON_UNESCAPED_UNICODE);
      break;
    case 'view':
      $obj = new clsHabitacion();
      $rst =  $obj->viewMoviliario($_REQUEST);
      if (count($rst)== 0)
        echo json_encode(0, JSON_UNESCAPED_UNICODE);
      else{
        $frmvista= frmview($rst);
        echo json_encode($frmvista, JSON_UNESCAPED_UNICODE);
      }
    break;
  }
  exit;
}

function validaentrada($m)
{
  $sw = 0;
  $sw = (!is_numeric($m['ct']) or ($m['ct'] == 0)) ? 3  : $sw;
  $sw = ($m['vcbo'] == 0)       ? 2  : $sw;
  return $sw;
}

function frmmov($funcion, $n, $keyp)
{
  $frmtabla = "";
  /*
    $aa = openssl_encrypt("btcancela", COD, KEY);
    $a1 = "btclosenm('".$aa."')";
    $a = "onclick='".$a1."'";*/
  //$b = openssl_encrypt('btconfirma', COD, KEY)
  $frmtabla = "      
    <form autocomplete='off' id='frm1' action='#'>
      <input type='hidden' name='nhav' id='nhav' value='" . $n . "'>
      <input type='hidden' name='keyhav' id='keyhav' value='" . $keyp . "'>      
      <input type='hidden' name='action' id='action' value=''>
      <table class = 'table table-condensed table-hover table-bordered table-striped'>
        <thead style='background:#9BD0F3;'>
          <tr>
            <th class='centro'>Mobiliario</th>
            <th class='centro'>Cantidad</th>
            <th class='centro' width='100px'> Acci&oacute;n</th>
          </tr>
        <thead>
        <tbody id='detallemobiliario'>
        
        </tbody>
      </table>
      <div class='form-row'>
        <div class='form-group col-md-6'>
          <button type='button' onclick='btclosenm()' class='btn btn-danger btn-block' >Cancelar</button>
        </div>
        <div class='form-group col-md-6'>
          <button c='0' id='tr' type='button' value=" . openssl_encrypt("btconfirm", COD, KEY) . " onclick='btsavenm()' class='btn btn-primary btn-block'>Confirmar</button>
        </div>
      </div>
    </form>
    ";
  return $frmtabla;
}


function frmview($mm)
{
  $frmtabla = "";
  $frmtabla = "
      <table class = 'table table-condensed table-hover table-bordered table-striped'>
        <thead style='background:#9BD0F3;'>
          <tr>
            <th class='centro'>Mobiliario</th>
            <th class='centro'>Cantidad</th>            
          </tr>
        <thead>
        <tbody id='detailsview'>";
          foreach ($mm as $d) {
            $frmtabla .=  
            '<tr>
              <td >' . $d['nomMobiliario'] . '</td>
              <td  class="centro">' . $d['cantidad'] . '</td>
            </tr>';
          }
      $frmtabla .= 
        "</tbody>
      </table>
      <div class='form-row'>
        <div class='form-group col-md-3'>
        </div>
        <div class='form-group col-md-6'>
          <button type='button' onclick='btcloseview()' class='btn btn-primary btn-block'>Cerrar</button>
        </div>
      </div>

    ";
  return $frmtabla;
}

/*
function frmnuevoprod($n){
  $strform = "";
  $strform .='
  
            <form autocomplete="off" id="frm" action="#">
            <input type="hidden" name="action" id="action" value="">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="rtaAjax" id="rtaAjax" value="yes">
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Producto</label>
                <input id="nameprod" name="nameprod" class="form-control" type="text" placeholder="Nombre del producto" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Estado</label>
                <?php
                include_once("../modpublicos/conexion.php");
                $objrs = new clsProductos();
                $rs = $objrs->fillcbounidad();
                echo $rs;
                ?>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="nomDcto">Precio</label>
                <input id="priceprod" name="priceprod" class="form-control" type="text" placeholder="Precio venta" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Cantidad</label>
                <input id="stockprod" name="stockprod" class="form-control" type="text" placeholder="Precio venta" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="nomDcto">I.v.a</label>
                <input id="ivaprod" name="ivaprod" class="form-control" type="text" placeholder="IVA, sin punto" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="nm">Impuesto al consumo</label>
                <input id="imptoprod" name="imptoprod" class="form-control" type="text" placeholder="Precio venta" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <button type="button" id="btcerrar" class="btn btn-danger btn-block" data-dismiss="modal">Cancelar</button>
              </div>
              <div class="form-group col-md-6">
                <button type="submit" id="save" name="save" class="btn btn-primary btn-block saverecord">Confirmar</button>
              </div>
            </div>
          </form>';
          
 
} */
?>