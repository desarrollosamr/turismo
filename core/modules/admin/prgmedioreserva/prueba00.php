<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location:../index.php");
  }
  if (!isset($_REQUEST['id']) or !isset($_REQUEST['x'])) {
    header("Location:../index.php");
  }
/*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    exit();*/
/* ojo id, lo envia desde el formulario principal */
  $idSearch = $_REQUEST['id'];
  $idOpcion = $_REQUEST['x'];
  $vrOpcion = "newEmpleado";
  include_once("../clases/clsEmpleado.php");
  $obEmple  = new clsEmpleado;
  $titPpal  = 'Prueba00';
  if ($idOpcion==1) 
  {
    $vrOpcion = "updateEmpleado";
    $titPpal  = 'Edicion Empleados';
    $rsEmple  = $obEmple->consultarEmpleadoPorParametro('id', $idSearch, '');
    $acivado  = ""; 
    if (mysqli_num_rows($rsEmple) > 0) {
      while ($row = mysqli_fetch_array($rsEmple)) 
      {
        $IdEmpleado    = $row['IdEmpleado'];
        $idTipoUsuario = $row['idTipoUsuario'];
        $idIdentifica  = $row['idIdentifica'];
        $nroDocumento  = $row['nroDocumento'];
        $nomEmpleado   = $row['nomEmpleado'];
        $apeEmpleado   = $row['apeEmpleado'];
        $dirEmpleado   = $row['dirEmpleado'];
        $telEmpleado   = $row['telEmpleado'];
        $celEmpleado   = $row['celEmpleado'];
        $sexEmpleado   = $row['SexEmpleado'];
        $FecNacido     = $row['FecNacido'];
        $FecIngreso    = $row['FecIngreso'];
        $correo        = $row['correo'];
      }
    }
  }
  include_once("../utilidades/filltipoDocumento.php");
  $cboId = llenarcbo(($idOpcion == 1)?$idIdentifica:'0', $idOpcion);
  include_once("../utilidades/fillsexo.php");
  $cboSexo= cbosexo(($idOpcion == 1)?$sexEmpleado:'0', $idOpcion);  
?>
<!doctype html>
<html lang="es">
<head>
  <?php include_once("../public/modulos/headlink.php"); ?>  
<!--  <link rel="stylesheet" href="../public/generales/main.css">  -->
<!--   <link rel="stylesheet" href="styEmpleado.css"> -->
<style type="text/css">
  fieldset{
    background:  #C6D1F8;
    padding: 10px;   
    border: 2px solid #ff8f00;
    border-radius: 8px;
  }
  .btsepara{
/*    background-color: #FAAC97;*/
    display: flex;
    justify-content:flex-end;
    
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12"> <h3 > <?php echo $titPpal;  ?></h3> </div>
    </div>  
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <!-- *****formulario **************** -->
        <div class="container">
          <form method="post" id="myfrm" onsubmit="return validacion()">
            <fieldset >
              <div class="row">        
                <div class="col-xs-2 col-sm-2 col-md-2">
                  <label for="inputdefault">Identificacion</label>
                  <input class="form-control" dato="1" msj="ID-OBLIGATORO" type="text" 
                    id="nroDocumento" name="nroDocumento" onkeypress="return permite(event, 'num')" 
                    value="<?php echo (isset($nroDocumento)) ? $nroDocumento : ""; ?>" size="11">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">        
                  <label for="inputdefault">Tipo Identificacion</label>
                  <Select class="form-control" dato="4" msj="Error->tipo documento"
                    id="idIdentifica" name="idIdentifica" style="width:70%;" required>
                    <?php echo $cboId; ?>
                  </Select>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <label for="inputdefault">Fecha Nacido</label>
                  <input class="form-control" type="date" id="FecNacido" name="FecNacido"
                    title="fecha ingreso"
                    value="<?php echo (isset($FecNacido)) ? $FecNacido : date('Y-m-d'); ?>">
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <label for="inputdefault">Genero</label>                     
                  <select class="form-control" id="sexEmpleado" dato="4" 
                      msj="Seleccione sexo" name="sexEmpleado" style="width:65%;" required>
                      <?php  echo $cboSexo ; ?>
                  </select>
                </div>
                </div>                 
              <br />  
              <div class="row"> 
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <label for="inputdefault">Nombre</label>                     
                  <input class="form-control" dato="2" msj="Nombre Obligatorio" 
                    type="text" id="nomEmpleado" name="nomEmpleado" 
                    value="<?php echo (isset($nomEmpleado)) ? $nomEmpleado : ""; ?>" 
                    size="20">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <label for="inputdefault">Apellidos</label>
                  <input class="form-control" dato="2" msj="Apellido Obligatorio" type="text" 
                    id="apeEmpleado" name="apeEmpleado" 
                    value="<?php echo (isset($apeEmpleado)) ? $apeEmpleado : ""; ?>"
                    size="20" required="">
                </div>
              </div>
              <br />
              <div class="row"> 
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <label for="inputdefault">Direccion</label>
                  <input class="form-control" dato="2" msj="Direccion Obligatorio" 
                    type="text" id="dirEmpleado" name="dirEmpleado" 
                    value="<?php echo (isset($dirEmpleado)) ? $dirEmpleado : ""; ?>" size="50">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <label for="inputdefault">Correo</label>
                  <input class="form-control" dato="5" msj="revise correo" 
                    type="email" id="correo"     name="correo"
                    value="<?php echo (isset($correo)) ? $correo : ""; ?>" size="60">
                </div>
              </div>
              <br />                  
              <div class="row"> 
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <label for="inputdefault">Tel. Fijo</label>
                  <input class="form-control" dato="3" msj="Fijo->Solo numeros"
                    type="text" id="telEmpleado" name="telEmpleado"
                    onkeypress="return permite(event, 'num')" 
                    value="<?php echo (isset($telEmpleado)) ? $telEmpleado : ""; ?>" 
                    size="12"> 
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <label for="inputdefault">Celular</label>
                  <input class="form-control" dato="3" msj="Celular->Solo numeros" 
                    type="text" id="celEmpleado" name="celEmpleado"
                    onkeypress="return permite(event, 'num')" 
                    value="<?php echo (isset($celEmpleado)) ? $celEmpleado : ""; ?>" 
                    size="12" pattern="[0-9]{10}">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <label for="inputdefault">Fecha Ingreso</label>
                  <input class="form-control" type="date" id="FecIngreso" name="FecIngreso"
                  value="<?php echo (isset($FecIngreso)) ? $FecIngreso : date('Y-m-d'); ?>">                      
                </div>                    
              </div>
              <br />
            </fieldset>
            <input type="hidden" id="xxtipo" name="xxtipo" value="<?php echo $idOpcion; ?>">
            <input type="hidden" id="id" name="id" value="<?php echo $idSearch; ?>">
            <input type="hidden" id="action" name="action" value="<?php echo $vrOpcion; ?>">
          </form>
          <br />
          <div class="row">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12">  -->
            <div class="col-md-7 col-md-offset-5 btsepara">
              <a class="btn btn-warning btsave" title="Guardar" id="btnSabe" role="button"
                name="btnSabe" href="#"><img src="../public/generales/header/Save32x32.png" alt="hlp32" /> Guardar</a>
              <a class="btn btn-success btsale" title="Cerrar esta ventana" id ="btnsale" role="button"
                  name="btnsale"  href="index.php"><img src="../public/generales/header/exit32x32.png" alt="new32" /> Regresar </a>
            </div>
          </div>
        </div>
      </div>         
    </div>
  </div>

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <?php  include_once("../public/modulos/footerlink.php"); ?> 
  <!-- código JS propìo-->
  <!--   <script type="text/javascript" src="../public/generales/main.js"></script> -->

  <script>
    $(document).ready(function(){ // Se detecta el boton guardar
      $('.btsave').click(function(e) 
      {
        e.preventDefault();
        var xOpcion = $('#xxtipo').val();     
        if (recorre("myfrm") == 0)
        {
          $.ajax
          ({
            url:'../public/modulos/prgAjax.php',
            type:'POST',
            async: true,
            data:  $('#myfrm').serialize(),
          success : function(xres)
          { 
            if (xres == 1)  // ok nuevo, ok editar
            { $("#btnSabe").css("display", "none");
              if (xOpcion==1) // es una edicion
              { mysweet("Registro Actualizado", "success"); }
              else {  // es uno nuevo
                mysweet("Registro Almacenado", "success");  
              }
            } 
            else 
            { // error en editar, error en guardar
              if (xOpcion==1) // error en una edicion
              { mysweet("Error al Actualizar \nDocumento ya existe", "error"); } 
              else {  // error es uno nuevo
                mysweet("Error al guardar", "error");
              }
            } 
          },
          error: function(error){ console.log(error); }
          });
        }
      });
    });

    function mysweet(titulo, icono) {
      Swal.fire({
        title: titulo,
        icon: icono,
        showConfirmButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false
      });
    }
    function recorre(forma)
    {      
      var xerror = [];
      var i = 0;
      $("#"+forma).find(':input').each(function() 
      {
        var elemento = this;
        var xx = 0;
        var a,b=0;
        switch (elemento.type) {
        case 'text':
          xx = $('#' + elemento.id).attr("dato");
          //alert("\nDato->"+xx+ "\nNombre Objeto(id)=" + elemento.id);
          if (xx==1)
          { // Tiene que ser numeros
               // alert("--tipo objeto->"+elemento.type+"\nDato->"+xx+ "\nAtributo id**=>" + elemento.id + ", \nAtributo value="+elemento.value);              
            if ((elemento.value == null) || (elemento.value.trim().length == 0))
            { i++; xerror[i] = elemento.id; //  alert("error en"+"\nDato->"+xx+ "\nAtributo id=" + elemento.id + ", \nAtributo value="+elemento.value);
            } 
          }
          else if (xx==2) // Tiene que ser nombres
          { 
            if (elemento.value == null || elemento.value.trim().length == 0 || /^\s+$/.test(elemento.value)) {
              i++; xerror[i] = elemento.id;
              //  alert("El error en"+"\nDato->"+xx+ "\nAtributo id=" + elemento.id + ", \nAtributo value="+elemento.value);
            }
          }
          else if (xx==3)  // no es abligarotio, pero si tiene dato tiene que ser numeros
          { //alert("validando--objeto->"+elemento.type+"\nDato->"+xx+ "\nAtributo id=" + elemento.id + ", \nAtributo value="+elemento.value);
            if (elemento.value.trim().length > 0 ) {
              if (!(/^-?\d*$/.test(elemento.value))) { i++; xerror[i] = elemento.id; }
            }                                            
          }           
          break;
        case 'date':
            // alert("Es un campo tipo DATE"+ "\nAtributo id=" + elemento.id + ", \nAtributo value="+elemento.value);           
          break;
        case 'select-one': // tiene que seleccionar
          xx = $('#' + elemento.id).attr("dato");
          if( elemento.value == 0 ) { i++; xerror[i] = elemento.id; }
          break;
        case 'email':
          if (xx == 4){ // correo es abligarotio
            if (elemento.value.trim().length == 0 ) {i++; xerror[i] = elemento.id; }
            // default:
            //   alert("Tipo->" + elemento.type + "\nAtributo id=" + elemento.id + ", \nAtributo value=" + elemento.value);
          }
          break;
        }
      });
      if (i > 0) {
       // alert("contendio de xxerror->"+xerror);
       // alert("Contenido de xerror->"+xerror[1]);
        xx = $('#' + xerror[1]).attr("msj");
        document.getElementById(xerror[1]).focus();
        mysweet("Error \n" + xx, 'error');
      }
      return i;
    }
    function permite(elEvento, permitidos) {
      // Variables que definen los caracteres permitidos
      var numeros = "0123456789";
      var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
      var numeros_caracteres = numeros + caracteres;
      var teclas_especiales = [8, 37, 39, 46];
      // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
      // Seleccionar los caracteres a partir del parámetro de la función
      switch (permitidos) {
        case 'num': // 1
          permitidos = numeros;
          break;
        case 'car': // 2
          permitidos = caracteres;
          break;
        case 'num_car': // 3
          permitidos = numeros_caracteres;
          break;
      }
      // Obtener la tecla pulsada
      var evento = elEvento || window.event;
      var codigoCaracter = evento.charCode || evento.keyCode;
      var caracter = String.fromCharCode(codigoCaracter);
      // Comprobar si la tecla pulsada es alguna de las teclas especiales
      // (teclas de borrado y flechas horizontales)
      var tecla_especial = false;
      for (var i in teclas_especiales) {
        if (codigoCaracter == teclas_especiales[i]) {
          tecla_especial = true;
          break;
        }
      }
      // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
      // o si es una tecla especial
      return permitidos.indexOf(caracter) != -1 || tecla_especial;
      /* Como se usa
       // Sólo números
       <input type="text" id="texto" onkeypress="return permite(event, 'num')" />    
       // Sólo letras
       <input type="text" id="texto" onkeypress="return permite(event, 'car')" />    
       // Sólo letras o números
       <input type="text" id="texto" onkeypress="return permite(event, 'num_car')" />    
       */
    }
  </script>
</body>
</html>
