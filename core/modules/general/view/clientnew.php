<?php
session_start();
$cliente = $_GET["client"];
?>



<div>
<form id="form1" name="frmclient" method="post" action="index.php?view=clientadd.php">
	<div class="row">
		<div  class="col-md-3 col-sm-3">
			<div class="price-block">
				<div class="price-gd-top">
					<h4 class="my-0 font-weight-normal">General</h4>
					<div class="form-group">
						<label for="nitDni">Nit</label><input type="number" class="form-control" name="nit" id="nit" />
					</div>	
					<div class="form-group">
						<label for="nombOrg">Nombre</label><input type="text" class="form-control"  name="nombOrg" id="nombOrg" />
					</div>
					<div class="form-group">
						<label for="dirbOrg">Dirección</label><input type="text" class="form-control"  name="dirbOrg" id="dirbOrg" />			
					</div>
					<div class="form-group">
						<label for="idCiudad">Ciudad</label><select name="idCiudad" class="form-control"  id="idCiudad">
						<?php
						$r=municipiosData::getAll();
						$option = '<option value="0">Seleccione</option>';
						foreach($r as $rm ){
							$option .= '<option value="'.$rm->idCiudad.'">'.$rm->nomCiudad.'</option>';
						}
						echo $option;
						?>					
						</select>
					</div>
					<div class="form-group">
					<label for="aforoPersonas">Cupo personas</label><input type="text" name="aforoPersonas" class="form-control"  id="aforoPersonas" />
					</div>
				</div>
			</div>
		</div>
		<div  class="col-md-3 col-sm-3">
			<div class="price-block">
				<div class="price-gd-top">
					<h4 class="my-0 font-weight-normal">Contacto</h4>
					<div class="form-group">
						<label for="admon">Administrador</label><input type="text"  class="form-control" name="admon" id="admon" />
					</div>
					<div class="form-group">
						<label for="admontel">Teléfono administrador</label><input type="text"  class="form-control" name="admontel" id="admontel" />
					</div>
					<div class="form-group">
						<label for="noTelf1">Teléfono alojamiento</label><input type="text"  class="form-control" name="noTelf1" id="noTelf1" />
					</div>
					<div class="form-group">
						<label for="noTelf2">Celular alojamiento</label><input type="text"  class="form-control"  name="noTelf2" id="noTelf2" />
					</div>
					<div class="form-group">
						<label for="emailOrg">Email</label><input type="text"  class="form-control"  name="emailOrg" id="emailOrg" value=<?php echo $cliente ?> />
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text"  class="form-control"  name="password" id="cnpassword" />
					</div>					
					<div class="form-group">
						<label for="cpassword">Confirmar Password</label>
						<input type="text"  class="form-control"  name="cpassword" id="cncpassword"  onblur="compara();" />
					</div>					
				</div>
			</div>
		</div>
		<div  class="col-md-3 col-sm-3">
			<div class="price-block">
				<div class="price-gd-top">
					<h4 class="my-0 font-weight-normal">Descripción</h4>
					<div class="form-group">
						<label for="nroPisos">Nro de pisos</label><input type="text"  class="form-control" name="nroPisos" id="nroPisos" />
					</div>
						<div class="form-group">
						<label for="nroHabXpiso">Habitaciones por piso</label><input type="text"  class="form-control" name="nroHabXpiso" id="nroHabXpiso" />
					</div>
					<div class="form-group">
						<label for="status">Estado del negocio</label>
						<span style="display:block;">Activa tu alojamiento </span>
						<input type="checkbox"  class="form-control"  name="status" value="1" id="status_0" />Activo
						<input type="checkbox"  class="form-control"  name="status" value="0" id="status_1" />Inactivo
					</div>
				</div>
			</div>
		</div>
		<div  class="col-md-3 col-sm-3">
			<div class="price-block">
				<div class="price-gd-top">
					<h4 class="my-0 font-weight-normal">Descripción</h4>
					<div class="form-group">
						<label for="desGeneral1">Alojamiento</label>
						<span style="display:block;">Describe por qué los clientes debe preferir tu alojamiento</span>
						<textarea name="desGeneral1" class="form-control" id="desGeneral1" cols="45" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="desGeneral2">Cercanías</label>
						<span style="display:block;">Describe un poco de lo que el cliente puede encontrar en el entorno del alojamiento</span>
						<textarea name="desGeneral2" class="form-control" id="desGeneral2" cols="45" rows="5"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row"><div class="md-12" style="text-align:center;"><button type="submit" class="btn btn-primary">Registrar negocio</button></div></div>
</form>
</div>

<script type="text/javascript">
	function compara(){
		pass = document.getElementById("cnpassword");
		cpass = document.getElementById('cncpassword');
		if(pass.value != cpass.value){
			swal.fire({
			position: "center",
			title: "Las contraseñas no coinciden",
			showConfirmButton: true,
			allowOutsideClick: false,
			allowEscapeKey: false,
			icon: "success",
			confirmButtonText: "Cerrar"
			});
		}
	}	
</script>