  <?php
  $nmodal = "001";
  ?>
  <div class="modal fade" id="<?php echo 'modal' . $nmodal; ?>" tabindex="-1" role="dialog">
    <!-- Modal1 -->
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #F5B7B1;border-radius: 5px;">
          <h4 id="tit001"> </h4>
        </div>
        <div class="modal-body">
          <div class='row'>
            <div id='combo' class='col-md-8 col-sm-8'>
              <label for='nnm'>Mobiliario</label>
              <span id='cbo'>
                <?php
                include_once("../modpublicos/conexion.php");
                include_once 'clsHabitacion.php';
                $objrs = new clsHabitacion();
                $rs = $objrs->generacombomobiliario(1);
                echo $rs;
                ?>
              </span>
            </div>
            <div ' class=' form-group col-md-2 col-sm-2'>
              <label for='nm'>Cantidad</label>
              <input id='canm' name='canm' class='form-control' type='text' placeholder='nro' value="1" required>
            </div>
            <div class='form-group col-md-2 col-sm-2'>
              <label for='nm' style='color:white'>xxxxxx</label>
              <a href='#' class='btn btn-success btn-block fa fa-book' onclick="event.preventDefault();addm('btAdd')" title='Agregar' type='button'></a>
            </div>
          </div>
          <div class='row'>
            <div id="tbmobiliario" class='col-md-12 col-sm-12'>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalview" tabindex="-1" role="dialog">
    <!-- Modal1 -->
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #F5B7B1;border-radius: 5px;">
          <h4 id="tit001">Mobiliario de la habitaci&oacute;n </h4>
        </div>
        <div class="modal-body">
          <div class='row'>
            <div id="tbview" class='col-md-12 col-sm-12'>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script type="text/javascript">
    function addfurniture(action, nro) {
      $("#tit001").html("Adicion mobiliario " + "<span>Habitaci&oacute;n </span>" + nro);
      var id = "<?php echo openssl_encrypt("newm", COD, KEY); ?> ";
      var wSize = {
        wH: $(window).height(),
        ww: $(window).width()
      };
      var modSize = {
        mheight: $("<?php echo '#modal' . $ntype; ?>").height(),
        mwidth: $("<?php echo '#modal' . $ntype; ?>").width()
      };
      $("<?php echo '#modal' . $nmodal; ?>").css({
        'padding-top': ((wSize.wH - (modSize.mheight / 2)) / 2)
      });

      xxAjax(id, action, nro, function(serverResponse) {
        //console.log(serverResponse);
        $("#tbmobiliario").html(serverResponse);
      });
      $("<?php echo '#modal' . $nmodal; ?>").modal({
        backdrop: 'static',
        keyboard: false
      });
    }
    var xxAjax = function(id, action, nro, callback) {
      $.ajax({
        type: "POST",
        url: "prgAjax.php",
        data: {
          id: id,
          action: action,
          nro: nro
        },
        success: function(response) {
          //callback(response);
          callback(JSON.parse(response));
        }
      });
      // Nota que esta función ya no necesita devolver nada. Porque de eso se encarga nuestra función callback
    }

    function addm(action) {
      var mmAjax = function(id, vcbo, nh, nhh, ct, txtcbo, callback) {
        $.ajax({
          type: "POST",
          url: "prgAjax.php",
          data: {
            id: id,
            vcbo: vcbo,
            nh: nh,
            nhh: nhh,
            ct: ct,
            ntxt: txtcbo
          },
          success: function(response) {
            callback(response);
            //callback(JSON.parse(response));
          }
        });
      };
      //var vcbo = $("#cbomov").val();
      var tcbo = $('select[name="cbomov"] option:selected').text();
      //var nh = $("#keyhav").val();
      // var nhh = $("#nhav").val();
      // var ct = $("#canm").val();
      var ida = "<?php echo openssl_encrypt("btAdd", COD, KEY); ?> ";
      // alert(action + '\nAddm, Valores ingresado:' + '\ntexto del combo ' + tcbo + '\nnro-combo ' + vcbo + '\ncantidad ' + ct + '\nid-habitacion ' + nh + '\nnro habitacion ' + nhh);
      mmAjax(ida, $("#cbomov").val(), $("#keyhav").val(), $("#nhav").val(), $("#canm").val(), tcbo, function(serverResponse) {
        //console.log("***addm*-*---NEW**serverResponse--->" + serverResponse);
        switch (serverResponse) {
          case '1':
            mysweet("Error: Numero no valido o ya existe", "error");
            break;
          case '2':
            mysweet("Error: Seleccione mobiliario", "error");
            break;
          case '3':
            mysweet("Error: Cantidad no valida", "error");
            break;
          default:
            var info = JSON.parse(serverResponse);
            //console.log("serverResponse->" + serverResponse+ "\nValor regresado->" + info);
            $('#cbo').html(info.cbo);
            $('#detallemobiliario').html(info.tbl);
            $('#canm').val('1');
            //var xx = parseInt($('#tr').attr("c")) + 1;
            //xx++;
            //alert(xx);
            //parseInt("10");
            //if (parseInt($('#tr').attr("c")) == 0) {
            $('#tr').attr("c", parseInt($('#tr').attr("c")) + 1);
            //  }
            break;
        }
      });
    }

    function btclosenm(id) {
      //var datfrm = $("#frm1").serialize();
      //var hab = $("#nhav").val();
      //var keyhab = $("#keyhav").val();
      //alert("keyhab->" + keyhab + "\n hab=> " + hab + "\n forulario " + datfrm);
      //var id = "<?php// echo openssl_encrypt("btcancela", COD, KEY); ?> "
      xxAjax("<?php echo openssl_encrypt('btcancela', COD, KEY) ?>", $("#nhav").val(), $("#keyhav").val(), function(serverResponse) {
        //console.log(serverResponse);
        //$("#tbmobiliario").html(serverResponse);
      });
      $('#<?php echo 'modal' . $nmodal; ?>').modal('hide');
    }

    function delmoviliario(action) {
      var ida = "<?php echo openssl_encrypt("btDel", COD, KEY); ?> ";
      var nnAjax = function(id, action, keyhab, nrohab, n, callback) {
        $.ajax({
          type: "POST",
          url: "prgAjax.php",
          data: {
            id: id,
            action: action,
            keyhab: keyhab,
            nrohab: nrohab,
            nro: n
          },
          success: function(response) {
            callback(response);
            //callback(JSON.parse(response));
          }
        });
      }
      /*var rta = xxAjax(ida, action, 2, function(serverResponse) {
        console.log(serverResponse);
      });*/
      //alert("respuesta->"+rta);
      nnAjax(ida, action, $("#keyhav").val(), $("#nhav").val(), 2, function(serverResponse) {
        //console.log(serverResponse);
        var info = JSON.parse(serverResponse);
        //console.log(info);
        $('#cbo').html(info.cbo);
        $('#detallemobiliario').html(info.tbl);
        $('#canm').val('1');
        $('#tr').attr("c", parseInt($('#tr').attr("c")) - 1);
      });
    }

    function btsavenm() {
      var xnAjax = function(id, nh, kh, callback) {
        $.ajax({
          type: "POST",
          url: "prgAjax.php",
          data: {
            id: id,
            nhav: nh,
            keyhav: kh
          },
          success: function(response) {
            callback(response);
            //callback(JSON.parse(response));
          }
        });
      }
      //var datfrm = $("#frm1").serialize();
      //var id = $('#tr').val();
      //var stk = $('#tr').attr("c");   
      if ($('#tr').attr("c") == 0) {
        mysweet("Error: No hay mobiliario asignado", "error");
      } else {
        from = $("#frm1").serialize();
        // xnAjax($('#tr').val(), from, function(serverResponse) {
        xnAjax($('#tr').val(), $('#nhav').val(), $('#keyhav').val(), function(serverResponse) {
          console.log(serverResponse);
          $('#<?php echo 'modal' . $nmodal; ?>').modal('hide');
          mysweet("Exito: Mobiliario asignado", "success");
        });
      }
    }


    function viewdescripcion(id, kh, nh) {
      var vxnAjax = function(id, kh, nh, callback) {
        $.ajax({
          type: "POST",
          url: "prgAjax.php",
          data: {
            id: id,
            nhav: nh,
            keyhav: kh
          },
          success: function(response) {
            //callback(response);
            callback(JSON.parse(response));
          }
        });
      }
      vxnAjax(id, kh, nh, function(serverResponse) {
        //console.log(serverResponse);
        switch (serverResponse) {
          case 0:
            mysweet("Error: Habitacion NO TIENE mobiliario asignado", "error");
            break;
          default:
            $('#tbview').html(serverResponse);
            var winSize = {
              wheight: $(window).height(),
              wwidth: $(window).width()
            };
            var modSize = {
              mheight: $("#modalview").height(),
              mwidth: $("#modalview").width()
            };
            $("#modalview").css({
              'padding-top': ((winSize.wheight - (modSize.mheight / 2)) / 2),
            });
            $("#modalview").modal({
              backdrop: 'static',
              keyboard: false
            });
            break;
        }
      });
    }

    function btcloseview() {
      $('#modalview').modal('hide');
    }
  </script>