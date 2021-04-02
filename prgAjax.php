<?php
	include_once "allfrontend/modelfron/municipiosData.php";
	include_once "allfrontend/modelfron/categoryData.php";	
	include_once "allfrontend/modelfron/tbhotelClienteData.php";	
	include_once "allfrontend/modelfron/tbOrganizacionData.php";		

  session_start();
  //print_r($_POST); exit;
	if (!empty($_POST))
		$accion = strtolower($_REQUEST['action']);
	  //$idbusca= $_REQUEST['datprocess'];
		{ //$datosRecibidos=""; 
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
		     /*$idm = $_REQUEST(datprocess);
         $ss = "select distinct c.* from tbhotelCliente a, tbrelhotelcategoria b, tbcateroiafron c where a.idciudad = $idm  and a.idnithotel = b.idnithotel and b.idcategoria = c.id"*/
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
		     /*$idm = $_REQUEST(datprocess);
         $ss = "select distinct c.* from tbhotelCliente a, tbrelhotelcategoria b, tbcateroiafron c where a.idciudad = $idm  and a.idnithotel = b.idnithotel and b.idcategoria = c.id"*/
        $xx = mt_rand(1,2);
    		$tbusca = "hotel";
    		$tk     =  ($xx==1) ? date("H:i:s").mt_rand() : mt_rand().date("H:i:s") ;
        //$r=tbOrganizacionData::getbuscaHoteles($_REQUEST['datprocess'], $tk, $tbusca);
        $r=tbOrganizacionData::getbuscarHoteles($_REQUEST['datprocess'], $tk, $tbusca);				
        /*
        echo "(prgAjax)->businesstype";
				echo "<pre>";
				print_r($_REQUEST);
				print_r($r);
				echo "</pre>";	
				*/
				$option = "";
				if (count($r)>0) {
	        $option = '<option value="0">Seleccione</option>';
	        foreach($r as $rm ){
	        	$option .= '<option value="'.$rm['idTipoTr'].'">'.$rm['desTiponegocio'].'</option>';
	        }
/*  				$r=tbOrganizacionData::deletebuscaHoteles( $tk, $tbusca);
	        echo "(prgAjax)->businesstype";
					echo "<pre>";
					print_r($_REQUEST);
					print_r($r);
					echo "</pre>";	
*/
        }
        echo $option;
		    break;		    
			case 'buscarhotel' :
				/*$v = array();
				$v['data1']= $r;
				$v['recibo']= $_REQUEST  ;*/

        echo "(prgAjax)->buscarhotel";
				echo "<pre>";
				print_r($_REQUEST);
				print_r($r);
				echo "</pre>";	
				die();				
				$r=tbOrganizacionData::getbuscaHotel($_REQUEST['xm'], $_REQUEST['xt']);
				echo "prgAjax->(buscarhotel) dentro del switch";
				//echo $_REQUEST['bmuni']."<br>";
				//echo $_REQUEST['bcate']."<br>";				
				echo "<pre>";

				print_r($_REQUEST);

				print_r($r);
				echo "</pre>";			
			break;
			default:
			/*
        $r = 
				select distinct a.* from tbhotelCliente a, tbrelhotelcategoria b where a.idciudad = 39 and a.idnithotel =  b.idnithotel and b.idcategoria = 2			
				# code...
				break;*/
			}
    }	
  ?>