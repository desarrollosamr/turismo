<?php
include_once('C:\xampp_new\htdocs\turismo\core\model\tbOrganizacionData.php');

if (isset($_REQUEST['idh'])){
   $r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idh']);
   $rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idh']);
   $hotel = $_REQUEST['idh'];
}else{
    $r = tbOrganizacionData::oneTbOrganizacion($_REQUEST['idhotel']);
    $rshabitacion = tbOrganizacionData::getHabitacionHotel($_REQUEST['idhotel']);
    $hotel = $_REQUEST['idhotel'];
}
?>
    <div id="wrapper">
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVACIÓN <small>
                            <?php if (count($r) > 0) {
				foreach ($r as $hot) {
					$lnomorg =  $hot->nombOrg;
				} echo $lnomorg; }              ?>
                            </small>
                        </h1>
                    </div>
                </div> 
            <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        INFORMACION PERSONAL
                    </div>
                    <div class="panel-body">
                        <form name="form" method="post" action="index.php?view=sedreserva.php">
                            <input type="hidden" name="idhotel" value="<?php echo $hotel; ?>">
                            <input type="hidden" name="siPersonaExiste" id="siPersonaExiste" value="no" >
                            <div class="form-group">
                                <label for="cedula">* Número de identificación</label>
                                <input name="dni" id="dni" type="number" class="form-control" onBlur="comprobarUsuario()" required>
                                <span id="estadousuario"></span> 
                                <p><img src="images/estilo/LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
                            </div>
                            <div class="form-group">
                                <label>* Nombre</label>
                                <input name="fname" id="fname" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Apellidos</label>
                                <input name="lname" id="lname" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Email</label>
                                <input name="email" id="emailper" type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>* Numero telefonico</label>
                                <input name="phone" id="phoneper" type ="text" class="form-control" required>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        INFORMACIÓN DE RESERVA
                    </div>
                    <div class="panel-body">
                        <div>Usted está reservando:</div>
                        <div><ul style="border: 2px solid red">
                            <?php
                                $detres = array();
                                $ch = 0;
                                foreach ($_REQUEST as $clave => $valor) {
                                    $prehab=substr($clave,0,3);
                                    $codhab=substr($clave,3);
                                    if($prehab="hab" and $valor<>""){ 
                                        if ($codhab <> "" && is_numeric($codhab)){ 
                                            $codhab = $codhab*1 - 1; 
                                            $detres[$ch][0]=$codhab;
                                            $detres[$ch][1]=$valor;?>
                                            <li><?php echo $valor . " " . $rshabitacion[$codhab]['nomtipo']; ?></li>
                                            <?php
                                        }
                                    }
                                    $ch++;
                                }
                                $arreglo = htmlspecialchars(serialize($detres));
                            ?>
                        <input type="hidden" name="rooms" value="<?php echo $arreglo;?>" />
                        </ul></div>
                        <div class="form-group">
                            <label>* Adultos</label>
                            <input type="number" name="adultos" min="1" class="form-control" onkeyup="if(this.value<0){this.value= this.value * -1}" required>
                        </div>
                        <div class="form-group">
                            <label>Niños&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="number" name="ninos" id="ninos" min="0" class="form-control" onclick="toggleedadninos()" onchange="toggleedadninos()" onkeyup="if(this.value<0){this.value= this.value * -1};toggleedadninos()";>
                        </div>
                        <div class="form-group" id="edadninos"  style="display: none;">
                            <label>* Edad del menor de los niños</label>
                            <input type="number" name="edadninos" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>* Entrada</label>
                            <input name="cin" type ="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>* Salida</label>
                            <input name="cout" type ="date" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="well">
                    <h4>VERIFICACIÓN HUMANA</h4>
                    
                    <p>Ingrese el siguiente código aleatorio en la caja de texto abajo</p>
                    <p><span  style="font-size:14px; font-weight:bold; background-color:#358; padding: 5px; color:white;"><?php $Random_code=rand(1000,9999); echo$Random_code; ?></span></p>
                    <input  type="text" name="code1" title="random code" />
                    <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                    <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- JS Scripts-->
    <script type='text/javascript'>
   function toggleedadninos() {
     var nninos = document.getElementById('ninos');
     var e = document.getElementById('edadninos');
     if(nninos.value > 0){
        if(e.style.display == 'none') {
            e.style.display = 'block';
        }
    } else {
        e.style.display = 'none';
     }
    }
   </script>
   <script>
        function comprobarUsuario() {
            $("#loaderIcon").show();
            jQuery.ajax({
            url: "core/modules/general/view/Comprobarpersona.php",
            data:'usuario='+$("#dni").val(),
            type: "POST",
            success:function(data){
                    console.log(typeof(data));
                if(data != "[]"){
                    $("#estadousuario").html("El cliente ya existe, cargando datos");
                    //var datosper = jQuery.parseJSON( data );
                    var datosper = JSON.parse( data );
                    document.getElementById("fname").value = datosper[0];
                    document.getElementById("lname").value = datosper[1];
                    document.getElementById("emailper").value = datosper[2];
                    document.getElementById("phoneper").value = datosper[3];
                    document.getElementById("siPersonaExiste").value = "si";
                }
                $("#loaderIcon").hide();
            },
            error:function (){}
            });
        }   
    </script>
    
   
</body>
</html>
