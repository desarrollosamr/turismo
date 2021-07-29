<?php

  class paginador
  {
    function pagination($totalRegs, $pagActual, $funcion, $criterio, $numReg, $cantPag)
    {
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
      //echo $alertajava;
      /*exit();*/
      $strHtml = '';
      $cantPag = ($cantPag == 0 ?  5 : $cantPag);
      $numReg  = ($numReg  == 0 ? 10 : $numReg);
      if ($totalRegs > 0)
      {
        $params = "'" . $criterio . "'";
        $strHtml = '
        <div class="row">
          <div class="col-md-6">
            <div>
              <input type="hidden" id="pphpagact" value="' . $pagActual . '">';
              $onclick = $funcion . '(' . $params . ',1,this.value);';
              $strHtml.= 
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
                <span id="pag" xx="'.$pagActual.'" class="txt-color-darken">' . $pagActual . '</span> de 
                <span class="txt-color-darken">' . ceil($totalRegs / $numReg) . '</span>
            </div>
          </div>
          <div class="col-md-6">
            <nav class="float-right" aria-label="Page navigation example">
              <ul class="pagination">';
                $paginas  = ceil($totalRegs / $numReg); #determinando el numero de paginas
                $mediaPag = ceil($cantPag / 2);
                $pagInicio = ($pagActual - $mediaPag);
                $pagInicio = ($pagInicio <= 0 ? 1 : $pagInicio);
                $pagFinal = ($pagInicio + ($cantPag - 1));
                if ($pagActual > 1) {
                  $onclick = $funcion . '(' . $params . ',1,' . $numReg . ');';
                  $strHtml .= '
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                        <i class="fas fa-step-backward"></i>
                      </a>
                    </li>';
                    $onclick = $funcion . '(' . $params . ',' . ($pagActual - 1) . ', ' . $numReg . ');';
                    $strHtml .= '
                    <li class="page-item">
                      <a class="page-link"  href="javascript:void(0);" onclick="' . $onclick . '">
                        <span aria-hidden="true">
                          <i class="fas fa-backward"></i>
                        </span>
                      </a>
                    </li>';
                } else {
                  $strHtml .= '
                    <li class="page-item disabled">
                      <a class="page-link" href="javascript:void(0);">
                          <i class="fas fa-step-backward"></i>
                      </a>
                    </li>';
                  $strHtml .= '
                    <li class="page-item disabled">
                      <a class="page-link" href="javascript:void(0);">
                        <span aria-hidden="true"><i class="fas fa-backward"></i></span>
                      </a>
                    </li>';
                }
                for ($i = $pagInicio; $i <= $pagFinal; $i++) 
                {
                  if ($i <= $paginas) 
                  {
                    $onclick = $funcion . '(' . $params . ',' . $i . ', ' . $numReg . ');';
                    $a = '<a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">' . $i . '</a>';
                    $css = '';
                    if ($i == $pagActual) {
                      $a = '<a class="page-link" href="javascript:void(0);">' . $i . '</a>';
                      $css = ' class ="page-item active" ';
                    }
                    $strHtml .= '<li ' . $css . '>' . $a . '</li>';
                  } else { break; }
                }
                if ($paginas > 1 && $pagActual != $paginas) {
                  $onclick = $funcion . '(' . $params . ',' . ($pagActual + 1) . ', ' . $numReg . ');';
                  $strHtml.= '<li class="page-item">
                                <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                                  <span aria-hidden="true">
                                    <i class="fas fa-forward"></i>
                                  </span>
                                </a>
                              </li>';
                  $onclick = $funcion . '(' . $params . ',' . $paginas . ', ' . $numReg . ');';
                  $strHtml.= '<li class="page-item">
                                <a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">
                                  <i class="fas fa-step-forward"></i>
                                </a>
                              </li>';
                } else{
                  $strHtml .= '<li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" style="text-decoration:none;cursor:auto">
                                  <span aria-hidden="true">
                                    <i class="fas fa-forward"></i>
                                  </span>
                              </li>';
                  $strHtml .= '<li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" style="text-decoration:none;cursor:auto">
                                  <i class="fas fa-step-forward"></i>
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
  }
?>