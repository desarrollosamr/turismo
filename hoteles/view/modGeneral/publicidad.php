<?php
function showFilePublicidad( $path )
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


<div class="w3l-visitors-agile" > <!-- Esta modulo va hasta la linea 671-->
	<div class="container">
    <h3 class="title-w3-agileits title-black-wthree">Publicidad</h3> 
	</div>
	<div class="w3layouts_work_grids">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3layouts_work_grid_left">
							<!-- <img src="images/5.jpg" alt=" " class="img-responsive" />						 -->
              <!-- <img src="images/imgfondo0.jpg" alt=" " class="img-responsive" />  -->
							<img src="images/fondo1.jpg" alt=" " class="img-responsive" /> 
							<div class="w3layouts_work_grid_left_pos">
								<img src="images/c1.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="w3layouts_work_grid_right">
							<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Vale la pena volver
							</h4>
							<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel. </p>
							<h5>Julia Rose</h5>
							<p>Alemania</p>
						</div>
						<div class="clearfix"> </div>
					</li>
					<li>
						<div class="w3layouts_work_grid_left">
							<img src="images/imgfondo0.jpg" alt=" " class="img-responsive" /> 
							<div class="w3layouts_work_grid_left_pos">
								<img src="images/c2.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="w3layouts_work_grid_right">
							<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Vale la pena volver
							</h4>
							<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel </p>
							<h5>Jahnatan Smith</h5>
							<p>Estados Unidos</p>
						</div>
						<div class="clearfix"> </div>
					</li>
					<li>
						<div class="w3layouts_work_grid_left">
							<img src="images/imgfondo0.jpg" alt=" " class="img-responsive" /> 
							<div class="w3layouts_work_grid_left_pos">
								<img src="images/c3.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="w3layouts_work_grid_right">
							<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Vale la pena volver
							</h4>
							<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel.</p>
							<h5>Rosalind Cloer</h5>
							<p>Italia</p>
						</div>
						<div class="clearfix"> </div>
					</li>
					<li>
						<div class="w3layouts_work_grid_left">
							<img src="images/imgfondo0.jpg" alt=" " class="img-responsive" /> 
							<div class="w3layouts_work_grid_left_pos">
								<img src="images/c4.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="w3layouts_work_grid_right">
							<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Vale la pena volver
							</h4>
							<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel. </p>
							<h5>Amie Bublitz</h5>
							<p>Suiza</p>
						</div>
						<div class="clearfix"> </div>
					</li>
				</ul>
			</div>
		</section>
	</div>	
</div>
