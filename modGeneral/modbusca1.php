<?php
  include_once "allfrontend/modelfron/deptosData.php";
  $rs = deptosData::getAlldeptos();             
?>

<div class="container" style="background-color:#9AC6C0; margin: 0 auto !important; padding: 0.5em !important;">
  <form id="frm1" name="frm1" method="post" action="lstHotel.php">
    <input type="hidden" id="bmuni" name="bmuni" value= "">
    <input type="hidden" id="bcate" name="bcate" value= "">    
    <input type="hidden" id="action" name="action" value= "">    
    <fieldset style="background-color: #FDEDEC;">            
      <div class="form-row">                
        <div class="col-md-3 col-sm-3 col-xs-3">
          <label for="name" class="control-label">Departamento</label>
          <select id="buscadpto" op="d" name="buscadpto" class="form-control" >
            <option value="0">Seleccione</option>                          
            <?php
              foreach($rs as $rr ):?>
              <option value="<?php echo $rr->iddpto;?>"><?php echo $rr->nomDpto;?></option>
            <?php endforeach;?>                     
          </select>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3" >
          <label for="name" class="control-label">Municipio</label>
         <!-- <input class="form-control timepicker" name="idhoraini" id="idhoraini" required="required">Ejemplo : 10:00 PM -->
           <select id="buscamuni" op="m" name="buscamuni" class="form-control" >
              
          </select>                      
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <label for="name" class="control-label">Tipo</label>
          <select id="buscatipo" op="t" name="buscatipo" class="form-control">

          </select> 
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3" >
          <label for="name" class="control-label" style="color:#C5F9E5">&nbsp;</label>   
          <button type="submit" name="buscasearch" id="buscasearch" class="btn btn-primary btn-block"
                  title="Realizar busqueda">
            <i class="fa fa-building"></i> Buscar
          </button>
        </div>
      </div>&nbsp;&nbsp;    
    </fieldset>
  </form>
</div>
<!-- ******************************* -->
<div id="colorlib-reservation" style="display:none;<?php //echo $activatefrm;?>">
  <div class="row">
    <!-- <div class="search-wrap"> -->
    <!--    
      <div class="container">
        <ul class="nav nav-tabs">
          <li class="active" id="aa1">
            <a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Vuelos</a></li>
          <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
          <li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Alquiler Vehiculos</a></li>
          <li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Crucero</a></li>
          <li><a data-toggle="tab" href="#fincas"><i class="flaticon-boat"></i> Fincas</a></li>                    
        </ul>
      </div>
    -->
      <div class="tab-content">
        <div id="stodo" class="tab-pane fade in active ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>
                  <div class="form-field">
                    <input type="text" id="fx00" name="fx00" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>
                  <div class="form-field">
                    <input type="text" id="fx01" name="f01x" class="form-control  f1" placeholder="Check-out date">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>
                  <div class="form-field">
                    <select name="people" id="people" class="form-control">
                      <option value="#">1</option>
                      <option value="#">2</option>
                      <option value="#">3</option>
                      <option value="#">4</option>
                      <option value="#">5+</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="1" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="vuelos" class="tab-pane fade in active ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>
                  <div class="form-field">
                    <input type="text" id="fv00" name="fv00" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>
                  <div class="form-field">
                    <input type="text" id="fv01" name="fv01" class="form-control  f1" placeholder="Check-out date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="2" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="opcion1" class="tab-pane fade in active ctx " style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>
                  <div class="form-field">
                    <select name="people" id="people" class="form-control">
                      <option value="#">1</option>
                      <option value="#">2</option>
                      <option value="#">3</option>
                      <option value="#">4</option>
                      <option value="#">5+</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <input type="submit" op="3" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="opcion2" class="tab-pane fade in active ctx " style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <input type="submit" op="4" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="opcion3" class="tab-pane fade in active ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">

              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>
                  <div class="form-field">
                    <select name="people" id="people" class="form-control">
                      <option value="#">1</option>
                      <option value="#">2</option>
                      <option value="#">3</option>
                      <option value="#">4</option>
                      <option value="#">5+</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="5" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="opcion4" class="tab-pane fade in ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-2">
                <div class="booknow">
                  <h2>Reservar ahora</h2>
                  <span>Mejor precio online</span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>                  
                  <div class="form-field">
                    <input type="text" name="fhx02" id="fhx02" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>                  
                  <div class="form-field">
                    <input type="text" name="fhx03" id="fhx03" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>                  
                  <div class="form-field">
                    <select name="people" id="people" class="form-control">
                      <option value="#">1</option>
                      <option value="#">2</option>
                      <option value="#">3</option>
                      <option value="#">4</option>
                      <option value="#">5+</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="6" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="flight" class="tab-pane fade in active ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>
                  <div class="form-field">
                    <input type="text" id="ff00" name="ff00" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>
                  <div class="form-field">
                    <input type="text" id="ff01" name="ff01" class="form-control  f1" placeholder="Check-out date">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>
                  <div class="form-field">
                    <select name="people" id="people" class="form-control">
                      <option value="#">1</option>
                      <option value="#">2</option>
                      <option value="#">3</option>
                      <option value="#">4</option>
                      <option value="#">5+</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="7" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="hotel" class="tab-pane fade in ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-2">
                <div class="booknow">
                  <h2>Reservar ahora</h2>
                  <span>Mejor precio online</span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-in:</label>                  
                  <div class="form-field">
                    <input type="text" name="fh02" id="fh02" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Check-out:</label>                  
                  <div class="form-field">
                    <input type="text" name="fh03" id="fh03" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-user"></span> Guest:</label>                  
                  <div class="form-field">
                    <select name="people" id="people" class="form-control">
                      <option value="#">1</option>
                      <option value="#">2</option>
                      <option value="#">3</option>
                      <option value="#">4</option>
                      <option value="#">5+</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="8" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="car" class="tab-pane fade in ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">                  
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>                    
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Start Date:</label>
                  <div class="form-field">
                    <input type="text" name="fc04" id="fc04" class="form-control  f1" placeholder="Check-in date">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Return Date:</label>
                  <div class="form-field">
                    <input type="text" name="fc05" id="fc05" class="form-control f1" placeholder="Check-out date">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <input type="submit" op="9" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>
        <div id="cruises" class="tab-pane in fade ctx" style="display:none;">
          <form method="post" class="colorlib-form">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-map-marker"></span> Where:</label>                    
                  <div class="form-field">
                    <input type="text" id="location" class="form-control" placeholder="Search Location">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-calendar"></span> Start Date:</label>
                  <div class="form-field">
                    <input type="text" name="f06x" id="f06x" class="form-control f1" placeholder="Check-in date">                  
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="date"><span class="glyphicon glyphicon-star-empty"></span> Categorias</label>                
                  <div class="form-field">
                    <select name="category" id="category" class="form-control">
                      <option value="#">Suite</option>
                      <option value="#">Super Deluxe</option>
                      <option value="#">Balcony</option>
                      <option value="#">Economy</option>
                      <option value="#">Luxury</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">         
                <input type="submit" op="10" name="submit" id="submit" value="Buscar" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>
        </div>      
      </div>
    <!-- </div> -->
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

</div>
<!-- ojo aca termina la busquedasssssssssssssssssssssssss -->

<script type="text/javascript">
 //$('a[okdate='prueba']')
 $(document).ready(function() {
    $("a[id*=sb]").click(function(e){
      e.preventDefault();
      //$("#colorlib-reservation").hide("slow");
      var sdate  = $(this).attr("okdate");
      var splace = $(this).attr("okplace");
      var speople= $(this).attr("okpeople");
      var _id = $(this).attr("id");
      //alert("valor de los atributo"+"\n ID->"+_id+"\n okdate-> "+sdate+"\n okplace-> "+splace+"\n okpeople"+speople) ;
      $("#colorlib-reservation").hide("slow");
      $("div.ctx").css("display", "none");
      if(speople==1 && sdate==1 && splace==1 ){
       /*$("#colorlib-reservation").show("slow");*/
       $("#stodo").css("display", "block");
       $("#colorlib-reservation").show("slow");
      }
      if(speople==1 && sdate==0 && splace==1 ){
       $("#opcion1").css("display", "block");
       $("#colorlib-reservation").show("slow");
      }      
      if(speople==1 && sdate==0 && splace==0 ){
       $("#opcion3").css("display", "block");
       $("#colorlib-reservation").show("slow");
      }  
      if(speople==1 && sdate==1 && splace==0 ){
       $("#opcion4").css("display", "block");
       $("#colorlib-reservation").show("slow");
      }    
      if(speople==0 && sdate==1 && splace==1 ){
       $("#vuelos").css("display", "block");
       $("#colorlib-reservation").show("slow");
      }      
      if(speople==0 && sdate==0 && splace==1 ){
       $("#opcion2").css("display", "block");
       $("#colorlib-reservation").show("slow");
      }      

      //$("#hotel").css("display", "block");
      //$("#colorlib-reservation").show("slow");
    });  
/* ************* */
/*
    $("input[id*=submit]").click(function(e){
      e.preventDefault();
      //$("#colorlib-reservation").hide("slow");
      var choise   = $(this).attr("op");
      alert("valor de los atributo"+ choise);
    }); 
*/
/* boton de buscar */
    $("button[id*=busca]").click(function(e){
      e.preventDefault();
      var fdata = $("#frm1").serialize();
      var xdpto = $("#buscadpto").val();
      var xmuni = $("#buscamuni").val();
      var stipo = $("#buscatipo").val();      
      //ok =(xdpto==null || xdpto==0 || xmuni == null || xmuni ==0 || stipo == null || stipo ==0 );
      //alert("Holaaaaaaaaaaaaaaaaaaa \n datos formulario)->"+fdata);
      if (!(xdpto==null || xdpto==0 || xmuni == null || xmuni ==0 || stipo == null || stipo ==0 )){
        $("#action").val("buscarHotel");
        $( "#frm1" ).submit();
        /*        
      //  alert("Buscar los hoteles-usando AJAX->");
        var action = "buscarHotel";
        var frdata = $("#frm1").serialize();
        $.ajax({
          url:  'prgajax.php', 
          type:  'POST',       
          async: true,         
          data: {xd:xdpto,xm:xmuni, xt:stipo, action:action,datprocess:$(this).val()}, 
        success : function(r){  
          console.log(r);
          if (r!="") $(location).attr('href','lstHotel.php');
        },
        error : function(error){ 
          console.log(error);
        }
        });*/
      }
      //alert("Evalucion de los atributo"+ ok);
    }); 

//* otra opcion 
/* se programan los selec(combo) de busquedas */
    $('select[id*=busca]').on('change', function (e){
        e.preventDefault(); 
        var opcion = $(this).attr("op");
        var choise = $(this).val();
        var action = "";
        if ($(this).val() != 0){
          switch(opcion){
            case "d" : /* cambio o selecciona un departamento, se traen los municipios */
              $("#buscamuni").html(""); 
              //alert("Valor seleccionado->"+choise+"\ valor del  op->"+opcion);            
              action = 'fillmunicipio';
                $('#buscatipo').html(""); 
                $("#bmuni").val("");
                $("#bcate").val("");                
              $.ajax({
                url:  'prgajax.php', 
                type:  'POST',       
                async: true,         
                data: {action:action,datprocess:$(this).val()}, 
              success : function(r){  
                //console.log(r);
                $("#buscamuni").html(r); 
              },
              error : function(error){ 
                console.log(error);
              }
              });              
            break;            
          case "m" : /* cambio o selecciona un municipio, se traen las empresas que estan en dicho municipio */
              $("#bmuni").val($(this).val());   
              //var municupio= $("#buscamuni").val();
              //alert("Valor seleccionado->"+choise+"\ valor del  op"+opcion);
              action = 'fillTipos'; // anterior
              action = 'businesstype';              
              $.ajax({
                url:  'prgajax.php', 
                type:  'POST',       
                async: true,         
                data: {action:action,datprocess:$(this).val()}, 
              success : function(r){
                console.log(r)
                $('#buscatipo').html(r); 
                 $("#bcate").val("");            
              },
              error : function(error){ 
                //console.log(error);
              }
              });
            break;
            case "t" :
              $("#bcate").val($(this).val());  
          }

      }else{
        //$("#bcate").val("");
        $('#buscatipo').html("");         
        $("#buscamuni").html("");
      }
    });
 });
</script>