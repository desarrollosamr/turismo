<?php

	include_once "../../../model/municipiosData.php";
	include_once "../../../model/categoryData.php";	
	include_once "../../../model/tbhotelClienteData.php";	
	include_once "../../../model/tbOrganizacionData.php";		

  	session_start();
	if (!empty($_POST)){
		$accion = strtolower($_REQUEST['action']);
		switch ($accion) {
			case 'fillmunicipio' :
				$r=municipiosData::getmunicipiosID($_REQUEST['datprocess']);
				$option = '<option value="0">Seleccione</option>';
				foreach($r as $rm ){
					$option .= '<option value="'.$rm->idCiudad.'">'.$rm->nomCiudad.'</option>';
				}
				echo $option;
				break;	
			case 'filltipos' :
				$r=municipiosData::getcategoriaxmunicipio($_REQUEST['datprocess']);
				$option = "";
				if (count($r)>0) {
					$option = '<option value="0">Seleccione</option>';
					foreach($r as $rm ){
						$option .= '<option value="'.$rm->id.'">'.$rm->nomCategory.'</option>';
					}
				}
				echo $option;
				break;
		  	case 'businesstype' :
				$xx = mt_rand(1,2);
				$tbusca = "hotel";
				$tk     =  ($xx==1) ? date("H:i:s").mt_rand() : mt_rand().date("H:i:s") ;
				$r=tbOrganizacionData::getbuscarHoteles($_REQUEST['datprocess'], $tk, $tbusca);				
				$option = "";
				if (count($r)>0) {
					$option = '<option value="0">Seleccione</option>';
					foreach($r as $rm ){
						$option .= '<option value="'.$rm['idTipoTr'].'">'.$rm['desTiponegocio'].'</option>';
					}
				}
				echo $option;
		    	break;		    
			case 'buscarhotel' :
				echo "(prgAjax)->buscarhotel";
				echo "<pre>";
				print_r($_REQUEST);
				print_r($r);
				echo "</pre>";	
				die();				
				$r=tbOrganizacionData::getbuscaHotel($_REQUEST['xm'], $_REQUEST['xt']);
				echo "prgAjax->(buscarhotel) dentro del switch";
				echo "<pre>";

				print_r($_REQUEST);

				print_r($r);
				echo "</pre>";			
				break;
				default:
		}
    }	
  ?>