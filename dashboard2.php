<?php 
session_start();
require "conexion.php";
error_reporting(E_ALL ^ E_NOTICE);
$usuario=$_SESSION['usernameS1'];
  switch ($usuario) {
     case 'usuario1':
      $supervisor="usuario1";
      $n=1;
        break;

     case'usuario2':
      $supervisor="usuario2";
      $n=2;
           break;  
     
    case 'usuario3':
      $supervisor="usuario3";
      $n=3;  
              break; 

    case 'usuario4':
      $supervisor="usuario4";
      $n=4;
       break; 

   case 'usuario5':
    $supervisor="usuario5";
    $n=5;
       break;   
    case 'usuario6':
      $supervisor="usuario6";
      $n=6;
        break; 

     default:

     $_SESSION['login']="datos incorrectos";
     header('Location: index.php');
        break;
  
    }


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?php echo $supervisor ?></title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">

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
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
</head>

<body>
  <div class="app" id="app">





    <!-- ############ PAGE START-->
    <div class="p-a white lt box-shadow">
  
      <div class="row">
        <div class="col-12 col-sm-5">
          <div class="row">
            <div class=" col-8 col-sm-7">
              <h4 class="mb-0 text-sm">Bienvenido a Confeccion I</h4>
              <small class="text-sm text-muted">Control <strong>I </strong> Produccion en linea</small>
            </div>
            <h4 class="mt-2  text-info text-md text-right" id="fechaHoy">--</h4>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h4 class="mb-0 _300">Supervisa: </h4>              
            </div>
            <div class="col-12 col-sm-6">
              <h4 class="text-accent" id="Usuario<?php echo $n ?>"> Usuario</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-3">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h4 class="mb-0 _300 text-left">O.P: </h4>
            </div>
            <div class="col-12 col-sm-6">
              <h4 class="text-info text-left" id="tablero<?php echo $n ?>-OP"> --</h4>
            </div>
          </div>

        </div>
      </div>
    </div>
   <div>
     <h2 class="text-center p-a   display-5 m-0 " id="avisoCerrado<?php echo $n; ?>"></h2>
   </div>


    <div class="padding">
      <div class="box p-a">
        <div class="row">
          <div class="clear col-sm-2 col-3">
            <h4 class="m-0 text-xs _300">Unidades<br><span class="text-xs">Primera</span></h4>
            <small class="text-muted">revisadas</small>
          </div>
          <div class="h3 col-3 col-sm-2 center">
            <h2 id="suma<?php echo $n ?>" class="text-info">--</h2>
          </div>
          
          <div class="clear col-sm-2 col-3">
            <h4 class="m-0 text-xs _300">Unidades-N.C</h4>
            <small class="text-muted">revisadas</small>
          </div>
          <div class="h3 col-sm-2 col-3 center">
            <h2 id="sumaNC<?php echo $n ?>" class="text-danger">--</h2>
          </div>
          <div class="clear col-sm-2 col-12">
            <h4 class="m-0 text-xs _300">Contador<br><span class="text-xs">SAM</span></h4>
            
          </div>
          <div class="h2 col-sm-2 col-12 center crono_wrapper">
        
            <h2 id="crono<?php echo $n ?>" class="text-info h5 ">00:00:00</h2>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded  info">
                <i class="material-icons">&#xe873;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-sm text-info">Referencia <br><span class="text-lg " id="Referencia<?php echo $n ?>">--</span></h4>

            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded  warning">
                <i class="material-icons">&#xe7ef;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-sm text-warning">estampado<br> <span class="text-lg text-warning
              " id="Estampado<?php echo $n ?>">--</span></h4>

            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded primary">
                <i class="material-icons">&#xe8f0;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-sm text-primary">Unidades <br><span class="text-lg 
              " id="Unidades<?php echo $n ?>">--</span></h4>

            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded accent">
                <i class="material-icons">&#xe192;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-sm text-accent">S.A.M.<br><span class="text-lg
              " id="Sam<?php echo $n ?>">--</span></h4>

            </div>
          </div>
        </div>
      </div>
      <!-- ----------------------------segunda hilera ---------------------- -->
      <div class="row">
        <div class="col-12 col-sm-6 ">
          <div class="row box p-a ">

            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">minTurno</span></h4>
              <span class=" text-md text-accent" id="TxExp<?php echo $n ?>">--</span>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Uni/Hora</span></h4>
              <span class="text-md text-primary" id="UxHora<?php echo $n ?>">--</small>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">min/Experto</span></h4>
              <span class="text-md text-accent" id="MxExp<?php echo $n ?>">--</span>
            </div>
          </div>
        </div>



        <div class="col-12 col-sm-6 ">
          <div class="box p-a row ">

            <div class="clear col-6 p-0">
              <h4 class="m-0 text-xs _300">Entrada/ Salida</h4>
              <span class="text-md text-accent" id="horaI<?php echo $n ?>">--</span>
              <span class="text-xs">/</span>
              <span class="text-md text-accent" id="horaS<?php echo $n ?>">--</span>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Descanso</h4>
              <span class="text-md text-accent" id="descanso<?php echo $n ?>">--</span>
            </div>
            <div class="clear col-2">
              <h4 class="m-0 text-xs _300">Exp.</h4>
              <small class="text-md text-accent" id="operarios<?php echo $n ?>">--</small>
            </div>
          </div>
        </div>

        <!-- ----------------------------FIN segunda hilera ---------------------- -->
        <!-- ----------------------------TERCERA hilera ---------------------- -->
        <div class="col-12">
          <div class="row">
            <div class="col-xs-6 col-sm-4">
              <div class="box p-a">




                <div class="box p-1 ">
                  <label for="">Avance</label>
                  <div class="progress mb-2">
                    
                    <div class="progress-bar green-300 " id="avance" style="width:20%">25%</div>
                  </div>
                  <label for="">Eficiencia</label>
                  <div class="progress mb-2">
                    <div class="progress-bar info " style="width: 45%">45%</div>
                    
                  </div>
                  <label for="">Producto no Conforme</label>
                  <div class="progress ">
                    <div class="progress-bar danger" style="width: 30%">30%</div>
                  </div>
                </div>

              </div>
            </div>


            <div class="row col-12 col-sm-8 mx-0 p-0">
              <div class="col-12 col-sm-6">
                <div class="box p-a">
                  <div class="pull-left m-r p-2">
                    <span class="w-32 rounded pink-200">
                      <i class="material-icons">&#xe0c9;</i>
                    </span><span class="input-group-text"> Enviar Mensaje </span>
                  </div>
                  <div class=" m-r p-2">
                   <button class="btn btn-xs indigo-400" type="button"id="btnchat<?php echo $n ?>">
                   <i class="material-icons">&#xe905;</i> Enviar
                   </button>
                      
                    
                  </div>
                  
                  <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <textarea class="form-control" aria-label="With textarea" row="4" id="chat<?php echo $n ?>"></textarea>
                  </div>
                 
                </div>
              </div>
              <div class="col-12 col-sm-6 ">
                <div class="box p-a">
                  <div class="pull-left m-r p-2">
                    <span class="w-32 rounded green-200">
                      <i class="material-icons">&#xe0c9;</i>
                    </span><span class="input-group-text"> Chat</span>
                    <span class="w-32 rounded red-600 campana">
              <i class="material-icons">&#xe003;</i>
            </span>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <textarea class="form-control" aria-label="With textarea" row="4" id="chatTablero<?php echo $n; ?>" readonly></textarea>
                  </div>
                </div>
              </div>   
              <div class="col-6 col-sm-4">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-40 rounded  pink-500">
                      <i class="material-icons ">&#xe14e;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-0 text-sm text-warning">Tela imperfecta <br><span class="text-lg "
                        id="telaImperfecta<?php echo $n ?>">--</span>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-40 rounded  cyan-600">
                      <i class="material-icons">&#xe873;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-0 text-sm text-info">Sin Confeccion <br><span class="text-lg "
                        id="sinConfeccion<?php echo $n ?>">--</span>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="box p-a">
                  <div class="pull-left m-r">
                    <span class="w-40 rounded  deep-purple-300">
                      <i class="material-icons">&#xe873;</i>
                    </span>
                  </div>
                  <div class="clear">
                    <h4 class="m-0 text-sm text-accent">Segunda <br><span class="text-lg " id="Segunda<?php echo $n ?>">--</span>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ----------------------------FIN TERCERA hilera ---------------------- -->
        <div class="col-12">
          <div class="row box p-a ">


            <div class="col-6 col-sm-1 mt-3 mt-sm-0 justify-content-center d-flex">
              <button class=" mr-1 btn btn-md mp-2 green-400" id="pausar<?php echo $n ?>"><span id="end<?php echo $n ?>">Start</span></button>
            </div>
            <div class="col-6 col-sm-1 mt-3 justify-content-center d-flex">
              <button class=" mr-1 btn mp-2 btn-sm yellow-400" id="detener<?php echo $n ?>">Pausa</button>
            </div>
            <div class="col-6 col-sm-2 mt-3 justify-content-center d-flex">
              <button class="mr-1 btn  pink-400"id="TelaImp<?php echo $n ?>">RTA</button>
            </div>
            <div class="col-6 col-sm-2 mt-3 d-flex justify-content-center">
              <button class="btn  cyan-600"id="sinConf<?php echo $n ?>">S.C.</button>
            </div>
            <div class="col-6 col-sm-2 mt-3 mt-sm-0 d-flex justify-content-center">
              <button class="mr-1 btn  deep-purple-300" id="Segun<?php echo $n ?>" >2.da.</button>
            </div>
            <div class="col-6 col-sm-2 mt-3 mt-sm-0 d-flex justify-content-center">
              <button class="mr-1 btn  purple-300" id="NoConf<?php echo $n ?>" >N.C.</button>
            </div>
            <div class="col-12 col-sm-2 mt-3 mt-sm-0 d-flex justify-content-center">
              <button class="btn sm-btn-s green-300" type="a" id="lanzar<?php echo $n ?>" ><i
                  class="material-icons ">&#xe87c;</i> OK</button>
                  
            </div>
          </div>


        </div>
      
        <?php 
 require('switchColor.php');
 ?>
      </div>
      <!-- ----------------------------FIN TERCERA hilera ---------------------- -->


     

      <script type='text/javascript' src="libs/jquery/jquery/dist/jquery.js"></script>"></script>
      <script src="js/funciones.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.2/underscore.min.js"></script>
        <script>
          
          $(document).ready(function () {
            var usuario="<?php echo $supervisor ?>";
            $('#avisoCerrado'+<?php echo $n; ?>).removeClass('lime-300');
            agregarOP(usuario);
            fechaHoy();
            
            
            $.ajaxSetup({"cache":false});
              setTimeout(() => {
                insertarDatosOp();
                
               
                }, 600);
                
                  setTimeout(() => {
               var op=$("#tablero<?php echo $n;?>-OP").text();
                llamarChatUsuario(op);             
                }, 800);

                var prueba=$('#end'+<?php echo $n;?>).text();
               setInterval(() => {
                var op=$("#tablero<?php echo $n;?>-OP").text();
                llamarChatUsuario(op); 
               }, 3000);

/* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxx                                      funciones de conteo                                xxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
                
                $('#lanzar'+<?php echo $n; ?>).click(function () {                 
                 var prueba=$('#end'+<?php echo $n;?>).text();
                 
                  if(prueba == "activo" &&  $('#detener'+<?php echo $n; ?>).text() =="Pausa") {
                    cronos(this);
                    empezarDetener(this);                    
                    ing();
                    
                  }else if($('#end'+<?php echo $n;?>).text()=='Start'){
                    alert('la OP no esta activa');
                  }else{
                    alert('la OP ha sido pausada');
                  }
               
                });
                
          
                $('#NoConf'+<?php echo $n; ?>).click(function () {
                  if( $('#end'+<?php echo $n; ?>).text()=='activo' &&  $('#detener'+<?php echo $n; ?>).text() =="Pausa") {
                    cronos(this);
                    empezarDetener(this);
                    noComforme();
                  }else if($('#end'+<?php echo $n; ?>).text()=='Start'){
                    alert('la OP no esta activa');
                  }else{
                    alert('la OP ha sido pausada');
                  }                 
                  
                  });

                $('#Segun'+<?php echo $n; ?>).click(function () {
                  if( $('#end'+<?php echo $n; ?>).text()=='activo' &&  $('#detener'+<?php echo $n; ?>).text()=="Pausa") {
                    cronos(this);
                    empezarDetener(this);
                    Segundas();
                  }else if($('#end'+<?php echo $n; ?>).text()=='Start'){
                    alert('la OP no esta activa');
                  }else{
                    alert('la OP ha sido pausada');
                  }
               
               
                });
          
                $('#TelaImp'+<?php echo $n; ?>).click(function () {
                  if( $('#end'+<?php echo $n; ?>).text()=='activo' &&  $('#detener'+<?php echo $n; ?>).text()=="Pausa" ) {
                    cronos(this);
                    empezarDetener(this);
                    TelaImperfecta();
                  }else if($('#end'+<?php echo $n; ?>).text()=='Start'){
                    alert('la OP no esta activa');
                  }else{
                    alert('la OP ha sido pausada');
                  }
               
                
                });

                $('#sinConf'+<?php echo $n; ?>).click(function () {
                  if( $('#end'+<?php echo $n; ?>).text()=='activo') {
                   
                    SinConfeccion();
                  }else if($('#end'+<?php echo $n; ?>).text()=='Start'){
                    alert('la OP no esta activa');
                  }else{
                    alert('la OP ha sido pausada');
                  }
               
                
                });
               
                $('#detener'+<?php echo $n ?>).click(function () {
                  var prueba=$('#end'+<?php echo $n;?>).text();
                  console.log(prueba); 
                  if(prueba =="activo") {
                    empezarDetener(this);
                    $('#avisoCerrado'+<?php echo $n; ?>).text('Estamos en Pausa');

                      if($('#detener'+<?php echo $n; ?>).text()=="Pausa"){
                        $('#avisoCerrado'+<?php echo $n; ?>).addClass('lime-300');
                        $('#detener'+<?php echo $n; ?>).text('Pausa Activa');
                      }else{
                        $('#avisoCerrado'+<?php echo $n; ?>).removeClass('lime-300');
                        $('#detener'+<?php echo $n; ?>).text('Pausa');
                        activo();
                      }

                  }else if(prueba=="cerrado"){                   
                    console.log(prueba);
                    alert('la OP ha sido cerrada vvv',prueba);
                  }              
                
                });

/* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxx                                       Estado                                  xxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
               
               
                $('#pausar'+<?php echo $n; ?>).click(function () {
                  
                  comprobacionEstado();
                 
                 // console.log(cargaEstado);
                   var estad= $('#end'+<?php echo $n; ?>).text();
                  
                   establecer(estad);
                   location.reload();

                });               
          });
          var contar=[];
          function establecer (mensaje) {
            var numeroOp = $("#tablero<?php echo $n; ?>-OP").text();
            console.log();
            if(mensaje=="Start"){ 
             
                  var hoja='activo';
                  guardarEstado(numeroOp,hoja);               
                  activo(); 
                  comprobacionEstado(); 
                  
                  
                  
                 }else if  (mensaje=="activo"){                 
                 
                  if( confirmar()==true){
                    mensaje="cerrado";
                    cerrado();                   
                    guardarEstado(numeroOp,mensaje);   
                  }
                                
                 }else if(mensaje=="cerrado"){

                  guardarEstado(numeroOp,mensaje);
                  cerrado(); 
                 }
            
          }
          
         function confirmar() {
          var conf= confirm("esta Seguro que desea Cerrar");
           if(conf==true){
             return true;
           }else{
             return false;
           }
         }

          function activo() {
            empezarDetener(this); 
            $('#end'+<?php echo $n; ?>).text('activo');                      
            $('#avisoCerrado'+<?php echo $n; ?>).text('O.P activa'); 
            $('#avisoCerrado'+<?php echo $n; ?>).addClass('indigo-500');
            return;
          }
          function cerrado() {
            $('#end'+<?php echo $n; ?>).text('cerrado');                      
            $('#avisoCerrado'+<?php echo $n; ?>).text('O.P cerrada');
            $('#avisoCerrado'+<?php echo $n; ?>).addClass('lime-400');
          }
          
          function avance() {
          
             var totales= $("#Unidades<?php echo $n ?>").text();
             var ok=  $("#suma<?php echo $n ?>").text();
             var telaImp= $('#telaImperfecta'+<?php echo $n; ?>).text();
             var segundas=$('#Segunda'+<?php echo $n; ?>).text();
             var unidades=parseInt(ok)+parseInt(telaImp)+parseInt(segundas);
             var totales=parseInt(totales);
             var avanceUnidades=Math.trunc(unidades/totales*100);
             var avanceU= $("#avance").css("width",avanceUnidades+"%");
             var avanceEtiqueta = $("#avance").text(avanceUnidades+"%");
             
            }
          function insertarDatosOp() {
          
           var numeroOp = $("#tablero<?php echo $n; ?>-OP").text();
           console.log(numeroOp);
           $.ajax({
               method: "POST",
               url: "insertarDatosOP.php",
               data: {
                 numeroOp: numeroOp
               }
             })
             .done(function (msg) {
          
                var unidadesPrimera=msg['0'].acumulado_op;
                var UnidadesNC=msg['0'].noConforme;
                var telaImperfecta=msg['0'].rotas;
                var sinConfeccion=msg['0'].SinConfeccion;
                var segunda=msg['0'].segundas;
                var estado=msg['0'].estado;
                $('#suma'+<?php echo $n; ?>).text(unidadesPrimera);
                $('#sumaNC'+<?php echo $n; ?>).text(UnidadesNC);
                $('#telaImperfecta'+<?php echo $n; ?>).text(telaImperfecta);
                $('#sinConfeccion'+<?php echo $n; ?>).text(sinConfeccion);
                $('#Segunda'+<?php echo $n; ?>).text(segunda);
                
                if(estado=='activo'){
                  activo();
                  
                }
                if(estado=='cerrado'){
                  cerrado();
                  
                }
                avance();
          
             });
          
                 }
          function Segundas() {
          
           var numeroOp = $('#tablero<?php echo $n; ?>-OP').text();
           $.ajax({
               method: "POST",
               url: "insertarSD.php",
               data: {
                 numeroOp: numeroOp
               }
             })
             .done(function (msg) {
               txt = document.getElementById("Segunda<?php echo $n; ?>");
              txt.innerHTML =msg;
               
               avance();
               
             });
          
                 }
          function SinConfeccion() {
          
           var numeroOp = $("#tablero<?php echo $n; ?>-OP").text();
           $.ajax({
               method: "POST",
               url: "insertarSC.php",
               data: {
                 numeroOp: numeroOp
               }
             })
             .done(function (msg) {
               txt = document.getElementById("sinConfeccion<?php echo $n; ?>");
               txt.innerHTML = msg;
             });
          
                 }
          function noComforme() {
          
            var numeroOp = $('#tablero<?php echo $n; ?>-OP').text();
            $.ajax({
                method: "POST",
                url: "insertarNC.php",
                data: {
                  numeroOp: numeroOp
                }
              })
              .done(function (msg) {
                txt = document.getElementById("sumaNC<?php echo $n; ?>");
               txt.innerHTML = msg;
              });
          }
          
          function ing() {
          
            var numeroOp = $('#tablero<?php echo $n; ?>-OP').text();
           
            $.ajax({
                method: "POST",
                url: "insertarValoresOK.php",
                data: {
                  numeroOp: numeroOp
                 
                }
              })
              .done(function (msg) {
                txt = document.getElementById("suma<?php echo $n;?>");
                txt.innerHTML = msg;
                avance();
              });
          }
          function TelaImperfecta() {
          
           var numeroOp = $('#tablero<?php echo $n; ?>-OP').text();
           $.ajax({
               method: "POST",
               url: "insertarTI.php",
               data: {
                 numeroOp: numeroOp
               }
             })
             .done(function (msg) {
               txt = document.getElementById("telaImperfecta<?php echo $n; ?>");
               txt.innerHTML = msg      ;
               avance();
             });
          
                 }
                 function fechaHoy() {
          var fecha =new Date();
          
          $('#fechaHoy').text(fecha.getDate()+'/'+(fecha.getMonth()+1)+'/'+(fecha.getFullYear()));
                 }          
          
            var inicio=0;
            var timeout=0;
            var contador=0;
          
            
           
            function empezarDetener(elemento)
            {
             
             
          
              if(timeout==0)
              {
                elemento.value="Detener";
                
                inicio=vuelta=new Date().getTime();		
                funcionando();
              }else{
                elemento.value="Empezar";               
                console.log(contador);
                timeout=0;
                clearTimeout(timeout);
                inicio=vuelta=new Date().getTime();
              }
            }
           
            function funcionando()	{
              
              var actual = new Date().getTime();	
              var diff=new Date(actual-inicio);		
              var result=LeadingZero(diff.getUTCHours())+":"+LeadingZero(diff.getUTCMinutes())+":"+LeadingZero(diff.getUTCSeconds());
               contador=diff.getUTCHours()*3600+diff.getUTCMinutes()*60+diff.getUTCSeconds();
              $('#crono'+<?php echo $n; ?>).text(result);        
              if( $('#end'+<?php echo $n; ?>).text()!='cerrado'){
                timeout=setTimeout("funcionando()",1000);
              }
              
            }
           
            
            function LeadingZero(Time) {
              return (Time < 10) ? "0" + Time : + Time;
            }
            var mensaje;

            /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxx                            Comprobar           Estado                                  xxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */

            var cargaEstado="";
            function comprobacionEstado() {
              var numeroOp = $("#tablero<?php echo $n; ?>-OP").text(); 
              $.ajax({
               method: "POST",
               url: "comprobarE.php",
               data: {
                 numeroOp: numeroOp
               }
             })
             .done(function (msg) {
             
            
             });
            
            }

            function guardarEstado(numeroOp,estado) {
               
              $.ajax({
               method: "POST",
               url: "estadoOp.php",
               data: {
                 numeroOp: numeroOp,
                 estado:estado
               }
             })
             .done(function (msg) {             
                
              
             });
            }
            function toggleFullScreen() {
               if (!document.fullscreenElement) {
                   document.documentElement.requestFullscreen();
               } else {
                 if (document.exitFullscreen) {
                   document.exitFullscreen();
                 }
               }
             }

            function cronos(parametro) {
             //var tiempo= $("#crono<?php echo $n; ?>").text();
             var tiempo=contador;
             var numeroOp = $("#tablero<?php echo $n; ?>-OP").text();
            var params = parametro.id;
            console.log(params);
              $.ajax({
               method: "POST",
               url: "safeTime.php",
               data: {
                 numeroOp: numeroOp,
                 params:params,
                 tiempo:tiempo
               }
             })
             .done(function (msg) {              
              
              
             });
              
            }
               
          $("#btnchat<?php echo $n ?>").click(function chateo (e) {  
          e.preventDefault();
          var numeroOp = $("#tablero<?php echo $n; ?>-OP").text();
          var usuario=$("#Usuario<?php echo $n; ?>").text();
          var hora= new Date();
          hora=hora.getHours()+":"+hora.getMinutes();
          var mensaje=$("#chat<?php echo $n; ?>").val();
          console.log(numeroOp,usuario,hora,mensaje);
          if( $("#chat<?php echo $n; ?>").val()===" " ){
           alert("no ha seleccionado la OP a enviar");
         }else{
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
              
              $("#chat<?php echo $n; ?>").val(msg);
             
         
            }); 
          }
                });

                var contar=[];
                var largo=1;

                function llamarChatUsuario(parametro) {
  console.log(parametro);
$.ajax({
 method: "POST",
 url: "llenarChat.php",
 data: {     
   parametro:parametro     
 }
})
.done(function (msg) {
  if(largo!=msg.length || largo==1){
    console.log('nuevo mensaje');
    console.log(largo,"-",msg.length);
   
    for (var i = 0; i < msg.length; i++) {

console.log(msg[i].numeroOpChat + ' ' + msg[i].mensajeChat);            
contar.push([msg[i].horaChat +" -> "+msg[i].usuarioChat+" - "+ msg[i].mensajeChat]+"\n");            
 $('#chatTablero<?php echo $n; ?>').html(contar);
 $('#chatTablero<?php echo $n; ?>').css({"color":"#F999EC"});
 $('#chat<?php echo $n; ?>').val(" "); 
 var altura = $('#chatTablero<?php echo $n; ?>').prop("scrollHeight");
 $('#chatTablero<?php echo $n; ?>').scrollTop(altura);
  }
  }
largo=msg.length;
 
    
   
 
});
}        
</script>

  
 
     

      <!-- jQuery -->
      <script src="libs/jquery/jquery/dist/jquery.js"></script>
      <script src="js/funciones.js"></script>
        <!--  Bootstrap -->
      
      <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
      <!-- core -->
    
      <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
      <script src="libs/jquery/PACE/pace.min.js"></script>

      <script src="scripts/config.lazyload.js"></script>

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

      <script src="scripts/app.js"></script>

      <!-- ajax -->
      <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
      <script src="scripts/ajax.js"></script>
      <!-- endbuild -->


</body>

</html>