<?php 
session_start();
require "conexion.php";
error_reporting(E_ALL ^ E_NOTICE);
$usuario=$_SESSION['username'];
$supervisor=$_SESSION['usernameS'];
if((!isset($usuario))&&(!isset($supervisor))){
  header("location:index.php"); 
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Confeccion Programa de Carlos Ibarra C</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">  
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <script src="libs/jquery/jquery/dist/jquery.js"></script>
  <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">
 <link rel="apple-touch-icon" href="assets/images/logo.svgg"> 
  <!-- style -->
  
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />

</head>

<body>
  <div class="app" id="app">

    <?php require('menu.php') ?>



    <!-- ############ PAGE START-->
    <div class="p-a white lt box-shadow ">
      <div class="row ">
        <div class="col-sm-6">
          <h4 class="mb-0 _300">Bienvenido a Confeccion I</h4>
          <small class="text-muted">Control <strong>I</strong> Produccion en linea</small>
          <a href="" onClick="recargar()">
            <button class="m-2 btn 
            btn-warning text-dark btn-md">recargar
            </button>
          </a>

        </div>

        <div class="col-sm-6 text-sm-right">
          <div class="m-y-sm">
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>


          </div>
        </div>
      </div>
    </div>
    <div class="col-12 p-a">
      <div class="box">
        <div class="box-header cyan-800">
          <h3>Cuadro de Rendimiento Total <span id="fechaC" class="ml-2 text-warn"> </span></h3>
        </div>
        <table class="table table-responsive table-striped">
          <thead>
            <tr class="text-xs text-primary ">
              <th></th>
              <th style="width:15%;" class="text-center"><span>O.P./SAM</span></th>
              <th style="width:20%;" class="text-center"><span>Ref / Estp </span></th>
              <th style="width:15%;" class="text-center">Efic. / Avance</th>
              <th style="width:15%;" class="text-center">Und./Prod</th>
              <th style="width:15%;" class="text-center">N.C. / %</th>
              <th style="width:15%;" class="text-center">Otras / %</th>
            </tr>
          </thead>
          <tbody class="text-center">

            <tr class="text-success">
              <td>
                <span class="w-40 rounded  blue-400 avatar ">
                  <span id="asig0">-</span> <i class="on  bottom ">
                </span>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="opnum0">--</div>
                  </span><br> <span class="text-accent " id="Sam0">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="ref0">--</div>
                  </span><br> <span class="text-accent " id="est0">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div>--</div>
                  </span><br> <span class="text-accent " id="AcPorcentaje0">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Prod0">--</div>
                  </span><br> <span class="text-sm text-accent " id="Und0">--</span></h5>
              </td>

              <td class="text-success">
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Nc0">--</div>
                  </span><br> <span class="text-accent " id="NcPorcentaje0">--</span></h5>
              </td>
              <td class="text-success">
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Otras0">--</div>
                  </span><br> <span class="text-accent " id="Oporcentaje0">--</span></h5>
              </td>

            </tr>
            <tr>
              <td>
                <span class="w-40 rounded  light-green-400" id="asig1">
                  -
                </span>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="opnum1">--</div>
                  </span><br> <span class="text-accent " id="Sam1">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="ref1">--</div>
                  </span><br> <span class="text-accent " id="est1">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div>--</div>
                  </span><br> <span class="text-accent " id="AcPorcentaje1">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Prod1">--</div>
                  </span><br> <span class="text-accent" id="Und1">--</span></h5>
              </td>

              <td class="text-success">
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Nc1">--</div>
                  </span><br> <span class="text-accent " id="NcPorcentaje1">--</span></h5>
              </td>
              <td class="text-success">
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Otras1">--</div>
                  </span><br> <span class="text-accent " id="Oporcentaje1">--</span></h5>
              </td>

            </tr>
            <tr class="text-success">
              <td>
                <span class="w-40 rounded  deep-purple-200" id="asig2">
                  -
                </span>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="opnum2">--</div>
                  </span><br> <span class="text-accent " id="Sam2">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="ref2">--</div>
                  </span><br> <span class="text-accent " id="est2">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div>--</div>
                  </span><br> <span class="text-accent " id="AcPorcentaje2">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Prod2">--</div>
                  </span><br> <span class="text-sm text-accent " id="Und2">--</span></h5>
              </td>

              <td class="text-success">
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Nc2">--</div>
                  </span><br> <span class="text-accent " id="NcPorcentaje2">--</span></h5>
              </td>
              <td class="text-success">
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Otras2">--</div>
                  </span><br> <span class="text-accent " id="Oporcentaje2">--</span></h5>
              </td>

            </tr>
            <tr>
              <td>
                <span class="w-40 rounded  grey-500" id="asig3">
                  -
                </span>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="opnum3">--</div>
                  </span><br> <span class="text-accent " id="Sam3">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="ref3">--</div>
                  </span><br> <span class="text-accent " id="est3">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div>--</div>
                  </span><br> <span class="text-accent " id="AcPorcentaje3">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Prod3">--</div>
                  </span><br> <span class="text-accent" id="Und3">--</span></h5>
              </td>

              <td class="text-success">
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Nc3">--</div>
                  </span><br> <span class="text-accent " id="NcPorcentaje3">--</span></h5>
              </td>
              <td class="text-success">
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Otras3">--</div>
                  </span><br> <span class="text-accent " id="Oporcentaje3">--</span></h5>
              </td>

            </tr>
            <tr class="text-success">
              <td>
                <span class="w-40 rounded  yellow-300 avatar" id="asig4">
                  <span>-</span> <i class="on  bottom ">
                </span>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1 ">
                    <div id="opnum4">--</div>
                  </span><br> <span class="text-accent " id="Sam4">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="ref4">--</div>
                  </span><br> <span class="text-accent " id="est4">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div>--</div>
                  </span><br> <span class="text-accent" id="AcPorcentaje4">--</span></h5>
              </td>
              <td>
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Prod4">--</div>
                  </span><br> <span class="text-accent " id="Und4">--</span></h5>
              </td>

              <td class="text-success">
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Nc4">--</div>
                  </span><br> <span class="text-accent " id="NcPorcentaje4">--</span></h5>
              </td>
              <td class="text-success">
                <h5 class=" text-xs"><span class="mb-1">
                    <div id="Otras4">--</div>
                  </span><br> <span class="text-accent " id="Oporcentaje4">--</span></h5>
              </td>

            </tr>
            <tr class="text-info">
              <td>
                <span class="w-40 rounded  pink-300" id="asig5">
                  -
                </span>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="opnum5">--</div>
                  </span><br> <span class="text-accent " id="Sam5">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="ref5">--</div>
                  </span><br> <span class="text-accent " id="est5">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div>--</div>
                  </span><br> <span class="text-accent " id="AcPorcentaje5">--</span></h5>
              </td>
              <td>
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Prod5">--</div>
                  </span><br> <span class="text-accent" id="Und5">--</span></h5>
              </td>

              <td class="text-success">
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Nc5">--</div>
                  </span><br> <span class="text-accent " id="NcPorcentaje5">--</span></h5>
              </td>
              <td class="text-success">
                <h5 class="text-info text-xs"><span class="mb-1">
                    <div id="Otras5">--</div>
                  </span><br> <span class="text-accent " id="Oporcentaje5">--</span></h5>
              </td>

            </tr>
          <tfoot>
            <tr class="text-primary text-center">
              <th class="text-center">
                <div>TOTALES</div>
                <div class="text-accent">Promedio</div>
              </th>
              <th class="text-center">--</th>
              <th class="text-center">--</th>
              <th class="text-center">
                <div>--</div>
                <div id="TporAcum" class="text-accent"></div>
              </th>
              <th class="text-center">
                <div id="totalUnidades"></div>
                <div class="text-accent" id="totalAcumu">--</div>
              </th>
              <th class="text-center">
                <div id="TANc">--</div>
                <div class="text-accent" id="TporNc">--</div>
              </th>
              <th class="text-center">
                <div id="TAcOtras">--</div>
                <div class="text-accent" id="TPAcOtras">--</div>
              </th>
            </tr>
          </tfoot>

          </tbody>
        </table>
      </div>
    </div>

    <div id="btnChat">
    </div>
    <div class="row col-12 mx-0 p-0 h-100"style="heigth:500px">
      <div class="col-12 col-sm-6 h-100" >
        <div class="box p-a h-100" >
          <div class="pull-left m-r p-2">
            <span class="w-32 rounded pink-200">
              <i class="material-icons">&#xe0c9;</i>
            </span><span class="input-group-text"> Enviar Mensaje </span>
          </div>
          <div class=" m-r p-2">
            <button class="btn btn-xs indigo-400" type="button" id="enviarChat">
              <i class="material-icons">&#xe905;</i> Enviar
            </button>
          </div>
          <textarea class="form-control" aria-label="With textarea" row="4" cols="50"
            id="chat"></textarea>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <div class="box p-a">
          <div class="pull-left m-r p-2">
            <span class="w-32 rounded green-200" id="bell">
              <i class="material-icons">&#xe0c9;</i>
            </span><span class="input-group-text"> Chat</span>
            <span class="w-32 rounded green-200">
              <i class="material-icons">&#xe003;</i>
            </span>
          </div>
          <div class="input-group">

            <textarea class="form-control" aria-label="With textarea" row="4" cols="50"
              id="chatTablero<?php echo $n; ?>" readonly></textarea>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php 
 require('switchColor.php');
 ?>
  <!-- build:js scripts/app.html.js -->
  <!-- jQuery -->
   <!-- ajax -->
   
  <!-- endbuild -->
  <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery/PACE/pace.min.js"></script>
  
  <!-- Bootstrap -->
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  <!-- core -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.2/underscore.min.js"></script>
  
  <script src="scripts/app.js"></script>
  <script src="scripts/config.lazyload.js"></script>
  <script src="js/funciones.js"></script>
  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

 

 

  <script>
    $(document).ready(function () {

  setInterval(() => {
        llenarCuadroPrincipal();        
       
      }, 1000);

      setTimeout(llenarCuadroPrincipal,500);
      
      fechaHoy();
     
      setTimeout(() => {
        
        for (let index = 0; index < 6; index++) {
          if($("#opnum"+index).text()!="--"){
           // btnid.push($("#opnum"+index).text());
            botonChat($("#opnum"+index).text())
            console.log($("#opnum"+index).text()); 
          }
        
        }
        llamarChat('admin');
      }, 1000);
    });

    var chatRecord = function () {
     console.log($("#chatTabero").text()); 
    }
 
    function botonChat(params) {
      var nboton = params;
      var boton = $('<button/>', {
        'type': 'button',
        'class': 'editar edit-modal btn btn-info m-a col-sm-1 col-3',
        'id': nboton,
        'onclick':'mensajes('+params+')',
        'html': '<span class="fa fa-edit"></span><span class="hidden-xs"></span>',

      });
      $('#btnChat').append(boton.prop('outerHTML'));
      $("#" + nboton).html(nboton);  
    }

    function recargar() {
      location.reload();
    }

    function fechaHoy() {
      var fecha = new Date();     
      $('#fechaC').text(fecha.getDate() + '/' + (fecha.getMonth() + 1) + '/' + (fecha.getFullYear()));
    }
    //---------------------------------------------chat------------------------------------------
   
    
    
    var removeItemFromArr = ( arr, item ) => {
    var i = arr.indexOf( item );
    i !== -1 && arr.splice( i, 1 );
    };
    
    

    var llamadas=[];

    function mensajes(params) {
      console.log(params);
      if(llamadas.includes(params)){
        $('#'+params).removeClass("btn-danger");
        $('#'+params).addClass("btn-info");
        removeItemFromArr(llamadas,params);
        console.log(llamadas);
      }else{
        $('#'+params).removeClass("btn-info");
        $('#'+params).addClass("btn-danger");
        llamadas.push(params);
        console.log(llamadas);
       
      }     
     
    };
   
  
    $("#enviarChat").click(function chatMultiple () { 

         if(llamadas=="" || $("#chat").val()==="" ){
           alert("no ha seleccionado la OP a enviar");
         }else{

//--------------------------enviando chat ----------------------------------------

          console.log(llamadas);
          for (let index = 0; index < llamadas.length; index++) {          
          
          var numeroOp = llamadas[index];
          var usuario="admin";
          var hora= new Date();
          hora=hora.getHours()+":"+hora.getMinutes();
          var mensaje=$("#chat").val();
          console.log(numeroOp,usuario,hora,mensaje);
           $.ajax({
              method: "POST",
              url: "chatDatos.php",
              data: {
                numeroOp: numeroOp,
                usuario: usuario,
                hora: hora,
                mensaje:mensaje
              }
            })
            .done(function (msg) {           
              llamarChat('admin');
              $("#chat").val(" "); 
              
             
            });
          } 
         }
         
        
        });

 //-----------------------------fin envio ---------------------------   
   
  </script>
  <script>
   

    function cerrarLogin() {

      estado = "<?php echo $usuario?> ";

      cadena = "estado=" + estado;

      console.log(cadena);
      $.ajax({
        type: "POST",
        url: "cerrarsesionA.php",
        data: cadena,
        success: function (r) {
          if (r == 1) {
            console.log('eliminado con exito');

          } else {

            console.log('fallo en el servidor');
          }
        }
      })

    }
  </script>
  <script>
    function llenarCuadroPrincipal() {


      var AcumUnidades = 0;
      var AcumTotales = 0;
      var PorAcumulado = 0;
      var PorAcNc = 0;
      var AcuOtras = 0;
      var TotalNc = 0;
      $.ajax({
        method: "GET",
        url: "traerCuadroMain.php",
        success: function (data) {
          if (data) {
            for (let index = 0; index < data.length; index++) {
              const element0 = data[index].asignacion;
              var unidades = parseInt(data[index].unidades_op);
              var asignacion = element0.charAt(element0.length - 1);
              var Acumulado = parseInt(data[index].acumulado_op);
              var Otras = parseInt(data[index].rotas) + parseInt(data[index].SinConfeccion) + parseInt(data[index]
                .segundas);
              var EfcOtras = (Otras / unidades * 100).toFixed(2);
              var AcPorcentaje = (Acumulado / unidades * 100).toFixed(2);
              var NcPorcentaje = (parseInt(data[index].noConforme) / unidades * 100).toFixed(2);
              var largo = data.length;
              TotalNc = parseInt(data[index].noConforme) + TotalNc
              $("#asig" + index).text('U.' + asignacion);
              $("#opnum" + index).text(data[index].op_num);
              $("#Sam" + index).text(data[index].sam_op);
              $("#ref" + index).text(data[index].referencia_op);
              $("#est" + index).text(data[index].estampado_op);
              $("#Und" + index).text(unidades);
              $("#Prod" + index).text(data[index].acumulado_op);
              $("#Nc" + index).text(data[index].noConforme);
              $("#Otras" + index).text(Otras);
              $("#Oporcentaje" + index).text(EfcOtras + " %");
              $("#AcPorcentaje" + index).text(AcPorcentaje + " %");
              $("#NcPorcentaje" + index).text(NcPorcentaje + " %");
              AcumUnidades = Acumulado + AcumUnidades;
              AcumTotales = unidades + AcumTotales;
              PorAcumulado = (parseFloat(AcPorcentaje) + PorAcumulado);
              porAcumPro = (PorAcumulado / largo).toFixed(2);
              PorAcNc = (parseFloat(NcPorcentaje) + PorAcNc);
              ResPorAcNc = (PorAcNc / largo).toFixed(2);
              AcuOtras = Otras + AcuOtras;
              PorOtras = (AcuOtras / AcumTotales * 100).toFixed(2);
              $("#totalAcumu").text(AcumUnidades);
              $("#totalUnidades").text(AcumTotales);
              $("#TporAcum").text(porAcumPro + " %");
              $("#TporNc").text(ResPorAcNc + " %");
              $("#TANc").text(TotalNc);
              $("#TAcOtras").text(AcuOtras);
              $("#TPAcOtras").text(PorOtras + " %");
             
            }


          } else {

            console.log('fallo en el servidor');
          }
        }
      });

    }
 

   
  </script>
</body>