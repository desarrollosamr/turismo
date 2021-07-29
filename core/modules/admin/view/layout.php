<?php
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>GRAMTour Gestión de oferta turística</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort, Campestre, Fincas, Hotel, turismo" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<!--<link href="css/bootstrap431/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />-->
	<link href="css/icomoon.css" rel="stylesheet" type="text/css">
	<link href="css/jBox.all.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/chocolat.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" property="" />
	<link href="css/swipebox.css" rel="stylesheet"  type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts1/flaticon/font/flaticon.css" rel="stylesheet"  type="text/css">
	<!--<link href="pruebasmenu/style01.css" rel="stylesheet">	   -->
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/sweetalert2/sweetalert2.all.min.js"></script>
	<script type="text/javascript" src="js/jBox.all.js"></script>
	<!--fonts-->
	<!-- <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet"> -->
	<link href="fonts/Oswald/static/Oswald-Light.ttf" rel="stylesheet" type="text/css">
	<link href="fonts/Oswald/static/Oswald-Regular.ttf" rel="stylesheet" type="text/css">
	<link href="fonts/Oswald/static/Oswald-Bold.ttf" rel="stylesheet" type="text/css">

	<!-- <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet"> -->
	<link href="fonts/Federo/Federo-Regular.ttf" rel="stylesheet" type="text/css">

	<!-- <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->
	<link href="fonts/Lato/Lato-Light.ttf" rel="stylesheet" type="text/css">
	<link href="fonts/Lato/Lato-Regular.ttf" rel="stylesheet" type="text/css">
	<link href="fonts/Lato/Lato-Bold.ttf" rel="stylesheet" type="text/css">
	<link href="fonts/Lato/Lato-Black.ttf" rel="stylesheet" type="text/css">
	<!--//fonts-->
	<style type="text/css">
		.nav-tabs {
			border: none;
			border-bottom-color: currentcolor;
			border-bottom-style: none;
			border-bottom-width: medium;
			border-bottom: none;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
		}

		.sobre:hover,
		.sobre:focus {
			color: #db1313 !important;
			text-decoration: none;
			/*background-color: #2416c7 !important; */
		}
	</style>
	<style type="text/css">
		.quitar {
			padding: 0px 0px 5px 7px !important;
			/*margin-bottom: 0px !important; */
			margin: 0 auto !important;
		}

		.quitar1 {
			padding: 0px 5px 0px 5px !important;
			margin: 0 auto !important;
		}

		.namehotel {
			padding: 0px 15px !important;
			color: #ce11d4;
			font-size: larger;
		}

		.styledato {
			padding: 0px 25px !important;
			text-align: justify;
			margin: 0 auto !important;
		}

		.dos {
			display: flex;
			flex-direction: column;
			/* flex-wrap: nowrap; */
		}

		.quitaflex {
			display: flex;
		}

		.stylerow {
			border-style: solid;
			border-color: #AAB7B8;
		}
	</style>
</head>

<body>
	<!-- header -->
	<?php 
		include_once("header.php");  
		if($_GET['view']=="clients"){
	      	include_once("clients/menuclient.php");
		}else{
			include_once("menuderecha.php");
		}
	?>
	<!-- body -->
	<div style="float: right;width:87%">
	<?php
		if(!isset($_GET['view'])){
			include "core/modules/admin/view/portada.php";
		}else{
			$valid=false;
			if(file_exists($file = "core/modules/admin/view/".$_GET['view'])){
				include "core/modules/admin/view/".$_GET['view'];				
			}else{
				echo "<b>404 No se encuentra/b> Vista <b>".$_GET['view']."</b> carpeta  !!";
			}
		}
	?>
	</div>
	<!-- footer -->
	<?php include_once("footer.php"); ?>
	<script>
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".action-buttons .dropdown-menu", function(e){
		e.stopPropagation();
	});
	</script>

	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.flexslider.js"></script>

	<script src="js/jqBootstrapValidation.js"></script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript">
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<script src="js/main.js"></script>
	<script src="js/easy-responsive-tabs.js"></script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("<?php echo '.' . $nSesion; ?>").click(function(e) {
				e.preventDefault();
				//$("<?php echo '#modal' . $nSesion; ?>").modal("show");  
				$("<?php echo '#modal' . $nSesion; ?>").modal({
					backdrop: 'static',
					keyboard: false
				});
				// $('#myModal').modal({backdrop: 'static', keyboard: false})			
			});
		});
	</script>
	<!--//tabs-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
		$('.f1').datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true,
			firstDay: 1,
			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril',
				'Mayo', 'Junio', 'Julio', 'Agosto',
				'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
			],
			monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr',
				'May', 'Jun', 'Jul', 'Ago',
				'Sep', 'Oct', 'Nov', 'Dic'
			],
			dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
		});
	</script>
	<script src="core/modules/general/res/datepicker/js/bootstrap-datepicker.js"></script>
<script>
            $('.tip').tooltip();

            $('#alert').hide();
      Date.prototype.toString = function() { return this.getFullYear()+"/"(this.getMonth()+1)+"/"+this.getDate(); }
  	  var startDate = new Date();
      var endDate = new Date();
      $('#dp4').attr('data-date',startDate);
      $('#dp5').attr('data-date',endDate);

      $('#startDate').text($('#dp4').data('date'));
      $('#endDate').text($('#dp5').data('date'));
      $('#dp4').datepicker()
        .on('changeDate', function(ev){
          if (ev.date.valueOf() > endDate.valueOf()){
            $('#alert').show().find('strong').text('La fecha de inicio no debe ser mayor que la fecha de fin.');
          } else {
            $('#alert').hide();
            startDate = new Date(ev.date);
            $('#startDate').text($('#dp4').data('date'));
            $('#stdate').val($('#dp4').data('date'));
          }
          $('#dp4').datepicker('hide');
        });

      $('#dp5').datepicker()
        .on('changeDate', function(ev){
          if (ev.date.valueOf() < startDate.valueOf()){
            $('#alert').show().find('strong').text('La fecha de fin no debe ser menor que la fecha de inicio.');
          } else {
            $('#alert').hide();
            endDate = new Date(ev.date);
            $('#endDate').text($('#dp5').data('date'));
            $('#endate').val( $('#dp5').data('date') );
          }
          $('#dp5').datepicker('hide');
        });


</script>
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- //smooth scrolling -->
</body>

</html>