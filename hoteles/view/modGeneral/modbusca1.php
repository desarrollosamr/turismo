<?php
  //include_once "core/modules/general/model/deptosData.php";
  $rs = deptosData::getAlldeptos();    
?>

<div class="w3_navigation">
  <div class="container-fluid">
    <nav class="navbar navbar-default">
      <div class="navbar-header navbar-left">
        <h1>
          <a class="navbar-brand" href="index.php"> GRAM <span>Tour</span>
            <p class="logo_w3l_agile_caption">Gestión de oferta turística</p>
          </a>
        </h1>
      </div>
      <!-- <form id="frm1" name="frm1" method="post" action="core/modules/general/view/lstHotel.php"> -->
      <form id="frm1" name="frm1" method="post" action="index.php?view=lsthotel.php">
        <input type="hidden" id="bmuni" name="bmuni" value= "">
        <input type="hidden" id="bcate" name="bcate" value= "">    
        <input type="hidden" id="action" name="action" value= "">    
        <fieldset >            
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
              <select id="buscamuni" op="m" name="buscamuni" class="form-control" >
                  
              </select>                      
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <label for="name" class="control-label">Tipo</label>
              <select id="buscatipo" op="t" name="buscatipo" class="form-control"></select> 
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3" >
              <label for="name" class="control-label" style="color:#C5F9E5">&nbsp;</label>   
              <button type="submit" name="buscasearch" id="buscasearch" class="btn btn-primary btn-block" title="Realizar busqueda"><i class="fa fa-search"></i> &nbsp;&nbsp;Buscar</button>
            </div>
          </div>    
        </fieldset>
      </form>
    </nav>
  </div>
</div>
<script type="text/javascript">
 $(document).ready(function() {
    /* boton de buscar */
    $("button[id*=busca]").click(function(e){
      e.preventDefault();
      var fdata = $("#frm1").serialize();
      var xdpto = $("#buscadpto").val();
      var xmuni = $("#buscamuni").val();
      var stipo = $("#buscatipo").val();      
      if (!(xdpto==null || xdpto==0 || xmuni == null || xmuni ==0 || stipo == null || stipo ==0 )){
        $("#action").val("buscarHotel");
        $( "#frm1" ).submit();
      }
    }); 

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
              url:  'core/modules/general/view/prgAjax.php', 
              type:  'POST',       
              async: true,         
              data: {action:action,datprocess:$(this).val()}, 
              success : function(r){  
                console.log(r);
                $("#buscamuni").html(r); 
              },
              error : function(error){ 
                console.log('sin respuesta');
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
                url:  'core/modules/general/view/prgAjax.php', 
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
              break;
        }
      }else{
        //$("#bcate").val("");
        $('#buscatipo').html("");         
        $("#buscamuni").html("");
      }
    });
 });
</script>