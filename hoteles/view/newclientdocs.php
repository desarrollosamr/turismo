<?php?>
<!--<form action="/turismo/hoteles/view/upload.php" class="dropzone"></form>-->
<p class="lead">Bienvenido. Por favor seleccione los archivos a enviar</p>
<form method="post" action="index.php?view=newupload.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="customFile">Seleccionar archivos</label>    
    <input type="file" class="form-control-file" id="customFile" name="file[]" multiple/>

  </div>
  <div class="form-group">
  	<input type='submit' name='submit' value='Subir'/>
  </div>
</form>
