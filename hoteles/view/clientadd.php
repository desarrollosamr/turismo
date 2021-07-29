<?php
include_once('d:\xampp_new\htdocs\turismo\hoteles\model\tbOrganizacionData.php');
$pepper = '023c9hp9433249ptry23p4rt3hfwed';
$password = $_POST['password'];
$p_peppered = hash_hmac("sha256", $password, $pepper);
$p_hashed = password_hash($p_peppered, PASSWORD_BCRYPT);
$nomborg = $_POST['nombOrg'];
$admonhotel =  $_POST['admontel'];
$emailorg = $_GET['emailOrg'];
$r = tbOrganizacionData::getByMail($emailorg);
if(count($r)>0){
    echo '<script type="text/javascript">
	    swal.fire({
	        position: "center",
	        title: "Ya existe un cliente registrado con esta dirección de correo, por favor, intente con otra",
	        showConfirmButton: true,
	        allowOutsideClick: false,
	        allowEscapeKey: false,
	        icon: "error",
	        confirmButtonText: "Cerrar"
	    }).then((result) => {
	        if (result.isConfirmed) {
	            history.back()
	        };
	    })
	</script>';	
}else{
	if(count($_POST)>0){
		$user = new tbOrganizacionData();
		$user->nitDni = $_POST['nit'];  
		$user->nroPisos = $_POST['nroPisos'];  
		$user->desGeneral1 = $_POST['desGeneral1'];  
		$user->desGeneral2 = $_POST['desGeneral2']; 
		$user->idDepartamento = $_POST['idDepartamento']; 
		$user->idCiudad = $_POST['idCiudad'];  
		$user->nombOrg = $_POST['nombOrg'];  
		$user->admon = $_POST['admon']; 
		$user->admontel = $_POST['admontel'] ; 		
		$user->dirbOrg = $_POST['dirbOrg'];  
		$user->noTelf1 = $_POST['noTelf1'];  
		$user->noTelf2 = $_POST['noTelf2'];  
		$user->emailOrg = $_POST['emailOrg'];  
		$user->password = "'".$p_hashed."'";  
		$user->nroHabXpiso = $_POST['nroHabXpiso'];  
		$user->aforoPersonas = $_POST['aforoPersonas'];  
		$user->rutaImagen = $_POST['rutaImagen'];  
		$user->status = 1;  

		$intvars =[$user->nitDni, $user->nroPisos, $user->noTelf1, $user->noTelf2, $user->nroHabXpiso, $user->aforoPersonas ];
		$msg = 'Error:';
		  if($user->nitDni == "" || $user->emailOrg == "" || $user->nombOrg == "" || $user->password == ""){
		    $msg .= '<div class=\'alert alert-danger alert-dismissible mt-3\' id=\'flash-msg\'>Todos los campos son obligatorios !</div>';
		  }elseif (!filter_var_array($intvars, FILTER_SANITIZE_NUMBER_INT)) {
		    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
		    Solo se permiten números !</div>';
		  }elseif(strlen($user->password) < 4) {
		    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
		    La clave debe tener al menos 4 caracteres !</div>';
		  }elseif(!preg_match("#[0-9]+#",$user->password)) {
		    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
		    La clave debe contener al menos 1 número !</div>';
		  }elseif(!preg_match("#[a-z]+#",$user->password)) {
		    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
		    La clave debe contener al menos una letra minúscula !</div>';
		  }elseif(!empty($email) && filter_var($user->emailOrg, FILTER_VALIDATE_EMAIL) === false) {
		    $msg .= '<div class="alert alert-danger alert-dismissible mt-3" id="flash-msg">
		    La dirección de correo no es válida !</div>';
	      }else{
		    try{
		        $user->add();
		        echo "success";
				$ulcli=$user->uc[1];
				$dirimghotel = $_SERVER['DOCUMENT_ROOT'] . "/turismo/images/imgHoteles/dir".$ulcli."/imgHotel/";
				if (!file_exists($dirimghotel)) {
				    mkdir($dirimghotel, 0777, true);
				}
				$dirimgins = $_SERVER['DOCUMENT_ROOT'] . "/turismo/images/imgHoteles/dir".$ulcli."/imgInstalacion/";
				if (!file_exists($dirimgins)) {
				    mkdir($dirimgins, 0777, true);
				}	
				$dirimgacc = $_SERVER['DOCUMENT_ROOT'] . "/turismo/images/imgHoteles/dir".$ulcli."/imgAccesos/";
				if (!file_exists($dirimgacc)) {
				    mkdir($dirimgacc, 0777, true);
				}	
				$dirimgser = $_SERVER['DOCUMENT_ROOT'] . "/turismo/images/imgHoteles/dir".$ulcli."/imgServicios/";
				if (!file_exists($dirimgser)) {
				    mkdir($dirimgser, 0777, true);
				}	
				print "<script>window.location='index.php?view=portada.php';</script>";
		    }
		    catch(Exception $e)
		    {
		        echo "error";
		    }
		}
		if ($msg!=""){
			echo $msg;
			echo '<script type="text/javascript">
			    swal.fire({
			        position: "center",
			        title:"' . $msg . '",
			        showConfirmButton: true,
			        allowOutsideClick: false,
			        allowEscapeKey: false,
			        icon: "error",
			        confirmButtonText: "Cerrar"
			    }).then((result) => {
			        if (result.isConfirmed) {
			            history.back()
			        };
			    })
			</script>';	
		}
	}
}
?>