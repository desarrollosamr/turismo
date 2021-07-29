<?php
function showFileGaleria( $path )
  {
    // Abrimos la carpeta que nos pasan como parámetro
    $dir = opendir($path);
    // Leo todos los ficheros de la carpeta
    while ($elemento = readdir($dir)){
      // Tratamos los elementos .(subraiz) y ..(raiz) que tienen todas las carpetas
      if( $elemento != "." && $elemento != "..")
      {
        // Si es una carpeta
        // https://blog.trescomatres.com/2012/01/ejemplos-php-recorrer-ficheros-de-un-directorio/
        if( is_dir($path.$elemento) ){
            // Muestro la carpeta
            //echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
          // Si es un fichero
        } else {
          $strImagen="";            
          $strImagen='
              <div class="col-md-3 gallery-grid gallery1">
                  <a href="'.$path.$elemento.'" class="swipebox"><img src="'.$path.$elemento.'" class="img-responsive" alt="/">
                    <div class="textbox">
                      <h4>AMANECER</h4>
                      <!-- <p><i class="fa fa-picture-o" aria-hidden="true"></i></p> -->
                      <p> esto es una prueba</p>
                    </div>
                  </a>
              </div>   ';                  
            // Muestro el fichero
          echo $strImagen;  
        }
      }
    }
  }
?>
<!-- Gallery esto va hasta la linea 524-->
<section class="portfolio-w3ls" id="gallery">
	<h3 class="title-w3-agileits title-black-wthree">Nuestras Comodidades</h3>  
  <?php showFileGaleria("images/img_galeria/"); ?>  
	<div class="clearfix"> </div>
</section>
<!-- //gallery -->