<?php
include_once('d:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');
 //        generaTabla($idciu, $tipon, $cantidad, $criterio, $pagina, $registro);      
  function generaTabla($idciudad, $tnegocio, $cantidad, $criterio, $pagina, $registro)
  {
    $array = tbOrganizacionData::getpaginartmp($idciudad, $tnegocio, (($pagina - 1) * $registro), $registro);
    $str = '';
    $imgs= "";
    $sihotel = 0;
    $i =0;
    foreach ($array as $rs) {
      $i++;
      $sihotel = 0;
      $dimgs = "images/imgHoteles/dir".$rs['idorg']."/imgHotel";
      if (is_dir($dimgs)) {
        //Escaneamos el directorio
        $carpeta = @scandir($dimgs);
        $sihotel = count($carpeta);
      }
      $imgs = "images/imgHoteles/";
      $imgs .= ($sihotel > 2) ? "dir" . $rs['idorg'] . "/imgHotel" : "imgdefault/hotel" ;
      $str .= '
      <div class="row stylerow">
        <div class="col-sm-3 col-md-3 col-lg-3   quitar"> 
            <img class="img-fluid img-thumbnail" src="'.
            $imgs.'/img1.jpg" alt="" style="height: 100% !important;"/>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2   quitar">   
          <div class="dos">
            <img class="img-fluid img-thumbnail" src="'.$imgs . '/img2.jpg" alt=""/>  
            <img class="img-fluid img-thumbnail" src="'.$imgs . '/img3.jpg" alt=""/>  
          </div>
        </div>
        <!-- <div class="clearfix"></div> -->
        <div class="col-sm-7 col-md-7 col-lg-7   quitar">           
          <div class="row"> 
            <div class="col-sm-12 col-md-12 col-lg-12 quitar">  
              <a href="index.php?view=datosHotel.php&idh='. $rs['idorg'].'" ><span class="namehotel">'.$rs['nomborg']. '</span></a>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 styledato">  
              ' . $rs['desgeneral1'] . '<br> ' . $rs['desgeneral2']. '
            </div>
          </div>                              
        </div>
      </div>';       
    }
    $funcion = "buscaRecord";
    $str .= pagination($cantidad, $pagina, $funcion, $criterio, $registro, 6);
    //      pagination($cantidad, $pagina, $funcion, $criterio, $registro, 5);    
    return $str;
  }

  function  pagination($totalRegs, $pagActual, $funcion, $criterio, $numReg = NUM_REGISTROS, $cantPag = 5)
  {
    $strHtml = '';
    $cantPag = ($cantPag == 0 ?  5 : $cantPag);
    $numReg  = ($numReg  == 0 ? 10 : $numReg);
    if ($totalRegs > 0) {
      $params = "";
      $params = "'" . $criterio . "'";
      $strHtml = '
        <div class="row">
          <div class="col-md-1 col-sm-1">
            <input type="hidden" id="pphpagact" value="' . $pagActual . '">';
      $onclick = $funcion . '(' . $params . ',1,this.value);';
      $strHtml .=



    '<select class="custom-select"  name="cboNumReg" id="cboNumReg" onchange="' . $onclick . '">
                    <option value= "10" ' . ($numReg ==  10 ? 'selected' : '') . '>10</option>
                    <option value= "15" ' . ($numReg ==  15 ? 'selected' : '') . '>15</option>
                    <option value= "20" ' . ($numReg ==  20 ? 'selected' : '') . '>20</option>
                    <option value= "30" ' . ($numReg ==  30 ? 'selected' : '') . '>30</option>
                    <option value= "50" ' . ($numReg ==  50 ? 'selected' : '') . '>50</option>
                    <option value="100" ' . ($numReg == 100 ? 'selected' : '') . '>100</option>
                </select>                
              </div>
              <div class="col-md-5 col-sm-5">
                de un total de 
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
        $onclick = $funcion . '(' . $params . ',1,' . $numReg . ');';        
        //$onclick = $funcion . '(' . $numReg . ');';
        $strHtml .= '
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                          <i class="fa fa-step-backward"></i>
                        </a>
                      </li>';
        $onclick = $funcion . '(' . $params . ',' . ($pagActual - 1) . ', ' . $numReg . ');';                      
        //$onclick = $funcion . '(' . ($pagActual - 1) . ', ' . $numReg . ');';
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
          $onclick = $funcion . '(' . $params . ',' . $i . ', ' . $numReg . ');';          
       // $onclick = $funcion . '(' . $i . ', ' . $numReg . ');';
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
      //$onclick = $funcion . '(' . ($pagActual + 1) . ', ' . $numReg . ');';
        $onclick = $funcion . '(' . $params . ',' . ($pagActual + 1) . ', ' . $numReg . ');';        
        $strHtml .= '<li class="page-item">
                                  <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                                    <span aria-hidden="true">
                                      <i class="fa fa-forward"></i>
                                    </span>
                                  </a>
                                </li>';
      //$onclick = $funcion . '(' . $paginas . ', ' . $numReg . ');';
        $onclick = $funcion . '(' . $params . ',' . $paginas . ', ' . $numReg . ');';        
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
  $cantidad = isset($nrorgtos) ? $nrorgtos : $_REQUEST['cn'];
  $idciu    = isset($idciudad) ? $idciudad : $_REQUEST['ci'];
  $tipon    = isset($idciudad) ? $tnegocio : $_REQUEST['tn'];  
  $strtabla="";
  if ($cantidad > 0) {
    $strTabla = generaTabla($idciu, $tipon, $cantidad, $criterio, $pagina, $registro);    
  } else {
    $strtabla = "
    <div class='jumbotron'>
      <h2>No hay productos</h2>
      <p>No se han agregado productos a la base de datos, puedes agregar uno dando click en el boton <b>Nuevo Producto</b>.</p>
    </div>";
   }  
  echo $strTabla;
?>