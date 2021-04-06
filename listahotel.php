<?php
//  include_once '../modelos/especialidadmedicosData.php';
  function generaTabla($idciudad, $tnegocio, $pagina, $registro, $cantidad)
    {
      $array = tbOrganizacionData::getpaginartmp($idciudad, $tnegocio, (($pagina - 1) * $registro), $registro);
      $str = '';
      $i =0;
      foreach ($array as $rs) {
        $i++;      
        $str .= '
        <div class="row stylerow">
          <div class="col-sm-3 col-md-3 col-lg-3   quitar"> 
             <img class="img-fluid img-thumbnail" src="images/imgHoteles/hot3/hot3100.jpg" alt="" style="height: 100% !important;"/>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2   quitar">   
            <div class="dos">
              <img class="img-fluid img-thumbnail" src="images/imgHoteles/hot3/hot3100.jpg" alt=""/>  
              <img class="img-fluid img-thumbnail" src="images/imgHoteles/hot3/hot3100.jpg" alt=""/>  
            </div>
          </div>
          <!-- <div class="clearfix"></div> -->
          <div class="col-sm-7 col-md-7 col-lg-7   quitar">           
            <div class="row"> 
              <div class="col-sm-12 col-md-12 col-lg-12 quitar">  
                <a href="datosHotel.php?idh='. $rs['idorg'].'" target="_blank"><span class="namehotel">'.$rs['nomborg']. '</span></a>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12 styledato">  
                ' . $rs['desgeneral'] . '<br> ' . $rs['desgeneral']. '
              </div>
            </div> '; 
            
         $ss='   
            <div class="row"> 
              <div class="col-sm-4 col-md-4 col-lg-4 quitar"> 
                <i class="fa fa-cutlery"></i>
                <span style="color: #B9770E;"> Restaurante</span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar"> 
                <i class="fa fa-glass"></i>         
                <span style="color: #DC0720 ;"> Bar</span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color: #283747;">123456789N123456789N</span>
              </div>
            </div>      
            <div class="row"> 
              <div class="col-sm-4 col-md-4 col-lg-4 quitar"> 
                <span style="color:#154360;">123456789Na</span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color:#6E2C00;">123456789Nbn</span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color:#428156;">123456789Ncn</span>
              </div>
            </div>
            <div class="row"> 
              <div class="col-sm-4 col-md-4 col-lg-4 quitar"> 
                <span style="color:#07387A;">N123456789Na </span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color:#7EBBBA;">N123456789Nb</span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color:#800080;">N123456789Nc</span>
              </div>
            </div>  
            <div class="row"> 
              <div class="col-sm-4 col-md-4 col-lg-4 quitar"> 
                <span style="color:#041937;">Q1234X6789Na </span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color:#0B5345;">Q1234X6789Nb</span>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 quitar">   
                <span style="color:#6C3483;">Q1234X6789Nc</span>
              </div>
            </div>            
            <div class="row">   
              <div class="col-xs-4 col-sm-4 col-md-4">              
                <button type="button" name="btRes3" id="btRes3" class="btn btn-primary btn-block" title="Reservar">
                  <i class="fa fa-building"></i> Reservar
                </button>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4">              
               <a  class="btn btn-success btn-block" href="#myModal3" title="Mas comodidades" id="myBtn7" >
                   <i class="fa fa-building"></i> M&aacute;s
               </a>
              </div>  
              <div class="col-xs-4 col-sm-4 col-md-4">              
                <button type="button" name="bhr01" id="bhr01" class="btn btn-primary btn-block" title="Reservar">
                      <i class="fa fa-building"></i> Otros
                </button>
              </div>
            </div> 
            ';
          $str .= '                       
          </div>
        </div>';
       
      }
      $funcion = "buscarproductos";
      $str .= pagination($cantidad, $pagina, $funcion, $registro, 6);
      return $str;
    }

  function  pagination($totalRegs, $pagActual, $funcion, $numReg = NUM_REGISTROS, $cantPag = 5)
  {
    /*
    $msj = " Valores recibidos";
    $msj .= "<br> totalRegs->$totalRegs";
    $msj .= " pagActual->$pagActual";
    $msj .= " funcion--->$funcion";
    $msj .= " criterio-->$criterio";
    $msj .= " numReg---->$numReg";
    $msj .= " cantPag -->$cantPag";
    $alertajava =  "<script language='javascript'>";
    $alertajava .=  "alert('ojo-> " . $msj . "')";
    $alertajava .=  "</script>";
    */
    //echo $alertajava;
    /*exit();*/
    $strHtml = '';
    $cantPag = ($cantPag == 0 ?  5 : $cantPag);
    $numReg  = ($numReg  == 0 ? 10 : $numReg);
    if ($totalRegs > 0) {
      //$params = "'" . $criterio . "'";
      $params = "";
      $strHtml = '
          <div class="row">
            <div class="col-md-6">
              <input type="hidden" id="pphpagact" value="' . $pagActual . '">';
      $onclick = $funcion . '('.'1,this.value);';
      $strHtml .=
        '<select style="width:58px;" name="cboNumReg" id="cboNumReg" onchange="' . $onclick . '">
                    <option value= "10" ' . ($numReg ==  10 ? 'selected' : '') . '>10</option>
                    <option value= "15" ' . ($numReg ==  15 ? 'selected' : '') . '>15</option>
                    <option value= "20" ' . ($numReg ==  20 ? 'selected' : '') . '>20</option>
                    <option value= "30" ' . ($numReg ==  30 ? 'selected' : '') . '>30</option>
                    <option value= "50" ' . ($numReg ==  50 ? 'selected' : '') . '>50</option>
                    <option value="100" ' . ($numReg == 100 ? 'selected' : '') . '>100</option>
                </select>
                &nbsp;de un total de 
                <span class="text-primary">' . $totalRegs . '</span>
                registros / Pag. 
                <span id="pag" xx="' . $pagActual . '" class="txt-color-darken">' . $pagActual . '</span> de 
                <span class="txt-color-darken">' . ceil($totalRegs / $numReg) . '</span>
            </div>
            <div class="col-md-6">
              <nav class="pull-right" aria-label="Page navigation example">
                <ul class="pagination">';
      $paginas  = ceil($totalRegs / $numReg); #determinando el numero de paginas
      $mediaPag = ceil($cantPag / 2);
      $pagInicio = ($pagActual - $mediaPag);
      $pagInicio = ($pagInicio <= 0 ? 1 : $pagInicio);
      $pagFinal = ($pagInicio + ($cantPag - 1));
      if ($pagActual > 1) {
        $onclick = $funcion . '(' . $numReg . ');';
        $strHtml .= '
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                          <i class="fa fa-step-backward"></i>
                        </a>
                      </li>';
        $onclick = $funcion . '(' . ($pagActual - 1) . ', ' . $numReg . ');';
        $strHtml .= '
                      <li class="page-item">
                        <a class="page-link"  href="javascript:void(0);" onclick="' . $onclick . '">
                          <span aria-hidden="true">
                            <i class="fa fa-backward"></i>
                          </span>
                        </a>
                      </li>';
      } else {
        $strHtml .= '
                      <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0);">
                            <i class="fa fa-step-backward"></i>
                        </a>
                      </li>';
        $strHtml .= '
                      <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0);">
                          <span aria-hidden="true"><i class="fa fa-backward"></i></span>
                        </a>
                      </li>';
      }
      for ($i = $pagInicio; $i <= $pagFinal; $i++) {
        if ($i <= $paginas) {
          $onclick = $funcion . '(' . $i . ', ' . $numReg . ');';
          $a = '<a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">' . $i . '</a>';
          $css = '';
          if ($i == $pagActual) {
            $a = '<a class="page-link" href="javascript:void(0);">' . $i . '</a>';
            $css = ' class ="page-item active" ';
          }
          $strHtml .= '<li ' . $css . '>' . $a . '</li>';
        } else {
          break;
        }
      }
      if ($paginas > 1 && $pagActual != $paginas) {
        $onclick = $funcion . '(' . ($pagActual + 1) . ', ' . $numReg . ');';
        $strHtml .= '<li class="page-item">
                                  <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                                    <span aria-hidden="true">
                                      <i class="fa fa-forward"></i>
                                    </span>
                                  </a>
                                </li>';
        $onclick = $funcion . '(' . $paginas . ', ' . $numReg . ');';
        $strHtml .= '<li class="page-item">
                                  <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                                    <i class="fa fa-step-forward"></i>
                                  </a>
                                </li>';
      } else {
        $strHtml .= '<li class="page-item disabled">
                                  <a class="page-link" href="javascript:void(0);" style="text-decoration:none;cursor:auto">
                                    <span aria-hidden="true">
                                      <i class="fa fa-forward"></i>
                                    </span>
                                </li>';
        $strHtml .= '<li class="page-item disabled">
                                  <a class="page-link" href="javascript:void(0);" style="text-decoration:none;cursor:auto">
                                    <i class="fa fa-step-forward"></i>
                                  </a>
                                </li>';
      }
      $strHtml .= '
                </ul>
              </nav>
            </div>
          </div>';
    }
    return $strHtml;
  }

  $criterio = isset($_REQUEST['cr']) ? $_REQUEST['cr'] : '';
  $pagina   = isset($_REQUEST['pa']) ? $_REQUEST['pa'] : 1;
  $registro = isset($_REQUEST['re']) ? $_REQUEST['re'] : 10;  
  /*
  $p = isset($_REQUEST['p']) ? $_REQUEST['p'] : '';
  $x = isset($_REQUEST['x']) ? $_REQUEST['x'] : '';
  */
  $strtabla="";
  $cantidad = $nrorgtos;
//  $cantidad = tbOrganizacionData::cuentatmp($tbltkn, $criterio); // Contar cuantos hay
  if ($cantidad > 0) {
  /*
      echo "listado.php->".$cantidad."<br>";
      echo "<pre>";
      print_r($_REQUEST);
      print_r(get_defined_vars());
      echo "</pre>";
      die();
    */
    $strTabla =generaTabla($idciudad, $tnegocio, $pagina, $registro, $cantidad);
    //$strTabla = generaTabla($tbltkn, $cantidad, $criterio, $pagina, $registro);
  } else {
    if ($criterio <> "") {
      $str = "select * from tbmedicos where doctorName like '%" . $criterio . "%' or id like '%" . $criterio . "%' order by name desc limit " . $pagina . "," . $registro;
      echo $str;
      die();
    }   
    $strtabla = "
    <div class='jumbotron'>
      <h2>No hay productos</h2>
      <p>No se han agregado productos a la base de datos, puedes agregar uno dando click en el boton <b>Nuevo Producto</b>.</p>
    </div>";
   }  
  echo $strTabla;
?>