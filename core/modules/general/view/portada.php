<?php
    echo '
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>GRAM TOUR</h4>
									<h3>Encuentra tu mejor destino</h3>
									<p>Los mejores hoteles, a los mejores precios</p>
									<!--
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div> -->
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>EXPLORA NUESTRAS OFERTAS</h4>
									<h3>Busca en el departamento y ciudad de tu preferencia</h3>
									<p>Escoge entre los muchos tipos de alojamiento disponibles</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#busqueda" class="menu__link">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>PAUTA CON NOSOTROS</h4>
									<h3>Lleva tu alojamiento a una nube de ensueño</h3>
									<p>Podrás ofrecer tus servicios al mundo entero</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
<!-- se muestra resultado de busqueda -->
<div class="container-fluid" id="rtabusca" style="clear:both;background-color:#ECF0BF; 
                                                  margin : 0 auto !important; 
                                                  padding: 0 !important; ">
  <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class="thumbnail">
        <img src="images/g1.jpg">        
      </div>
    </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
      <div class="thumbnail">
        <img src="images/g1.jpg">        
      </div>
    </div>    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class="thumbnail">
        <img src="images/g1.jpg">        
      </div>
    </div>    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class="thumbnail">
        <img src="images/g1.jpg">        
      </div>
    </div>    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class="thumbnail">
        <img src="images/g1.jpg">        
      </div>
    </div>    
    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class="thumbnail">
        <img src="images/g1.jpg">        
      </div>
    </div>
  </div>

</div> ';

	//include_once  "modgeneral/modbusca.php";
	//include_once "modgeneral/servicios.php" 
	//include_once "modgeneral/intermedio.php" 
	//include_once "modgeneral/acercade.php"  
	//include_once "modgeneral/teams.php" 
	//include_once "modgeneral/teamsMejorado.php" 
	//include_once "modgeneral/visitantes.php" 

	include_once "modgeneral/galerias.php";
	
	include_once "modgeneral/tarifas.php";
	//include_once "modgeneral/publicidad.php";
    echo '
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>GRAM <span>TOUR</span></h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>Tu oferta para el mundo</h5>
					<p>Ofrece tu alojamiento en una vitrina mundial, diseñada para enamorar a tus potenciales clientes.</p>
				</div>
			</div>
		</div>
	</div> ';
?>