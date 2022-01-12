<?php 
session_start();
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
  <!--  <script type="text/javascript">
   
    window.addEventListener("beforeunload", function (e) {
      cerrarLogin();
      (e || window.event).returnValue = null;
      return null;
    });
    

    </script> -->
</head>

<body>
  <div class="app" id="app">
     
    <?php 
 if(!isset($supervisor)){
  require('menu.php');
 }
 
 ?>



    <!-- ############ PAGE START-->
    <div class="p-a white lt box-shadow">

      <div class="row">
        <div class="col-7">
          <h4 class="mb-0 _300">Bienvenido a Confeccion I</h4>
          <small class="text-muted">Control <strong>I</strong> Produccion en linea</small>

        </div>
        

        
        <div class="col-5">
          <div class="row">
            <div class="col-4">
              <h4 class="mb-0 _300">O.P. </h4>
            </div>
            <div class="col-8">
              <h2> 236</h2>
            </div>
          </div>

        </div>
      </div>
    </div>



    <div class="padding">
      <div class="box p-a m-t">
        <div class="row">
          <div class="clear col-2">
            <h4 class="m-0 text-xs _300">Unidades<br><span class="text-xs">Primera</span></h4>
            <small class="text-muted">revisadas</small>
          </div>
          <div class="h3 col-4 center">
            <h2 id="suma" class="text-info">--</h2>
          </div>
          <div class="clear col-2">
            <h4 class="m-0 text-xs _300">Unidades-N.C</h4>
            <small class="text-muted">revisadas</small>
          </div>
          <div class="h3 col-4 center">
            <h2 id="sumaNC" class="text-danger ">--</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded  teal-500">
                <i class="material-icons">&#xe873;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-lg _300"><a href>Referencia <br><span class="text-md
              ">--</span></a></h4>

            </div>
          </div>
        </div>
        <div class="col-12 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded  lime-500">
                <i class="material-icons">&#xe7ef;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-lg _300"><a href>estampado<br> <span class="text-md
              ">--</span></a></h4>

            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded red-A400">
                <i class="material-icons">&#xe8f0;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-lg _300"><a href>Unidades <br><span class="text-md
              ">--</span></a></h4>

            </div>
          </div>
        </div>
        <div class="col-6 col-sm-3">
          <div class="box p-a">
            <div class="pull-left m-r">
              <span class="w-40 rounded indigo-500">
                <i class="material-icons">&#xe192;</i>
              </span>
            </div>
            <div class="clear">
              <h4 class="m-0 text-lg _300"><a href>S.A.M.<br><span class="text-md
              ">--</span></a></h4>

            </div>
          </div>
        </div>
      </div>
      <!-- ----------------------------segunda hilera ---------------------- -->
      <div class="row">
        <div class="col-6 ">
          <div class="row box p-a ">

            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Tiempo x Experto</span></h4>
              <small class="text-muted">3:50 min</small>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Unidades.x Hora</span></h4>
              <small class="text-muted">3:50 min</small>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Minutos x Experto</span></h4>
              <small class="text-muted">3:50 min</small>
            </div>
          </div>
        </div>



        <div class="col-6 ">
          <div class="box p-a row">

            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">T.Total-Operacion</h4>
              <small class="text-muted">3:50 min</small>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Tallas-Prenda</h4>
              <small class="text-muted">3:50 min</small>
            </div>
            <div class="clear col-4">
              <h4 class="m-0 text-xs _300">Expertos</h4>
              <small class="text-muted">3:50 min</small>
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
                    <div class="progress-bar primary " style="width: 25%">25%</div>
                  </div>
                  <label for="">Eficiencia</label>
                  <div class="progress mb-2">
                    <div class="progress-bar info" style="width: 45%">45%</div>
                  </div>
                  <label for="">Producto no Conforme</label>
                  <div class="progress ">
                    <div class="progress-bar danger" style="width: 30%">30%</div>
                  </div>
                </div>
          
                  </div>
                </div>
          
          
            <div class="col-xs-6 col-sm-4">
              <div class="box p-a">
                <div class="pull-left m-r p-2">
                  <span class="w-32 rounded pink-200">
                    <i class="material-icons">&#xe0c9;</i>
                  </span><span class="input-group-text">Enviar Mensaje </span>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <textarea class="form-control" aria-label="With textarea" row="4" readonly></textarea>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="box p-a">
                <div class="pull-left m-r p-2">
                  <span class="w-32 rounded green-200">
                    <i class="material-icons">&#xe0c9;</i>
                  </span><span class="input-group-text"> Chat</span>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <textarea class="form-control" aria-label="With textarea" row="4"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ----------------------------FIN TERCERA hilera ---------------------- -->
        <div class="col-6 col-sm-12">
          <div class="row box p-a">
            
           
                <div class="col-2">
                  <button class=" m-r btn  green-400">start</button>
                </div>
                <div class="col-2">
                  <button class="m-r btn  red-500">RTA</button>
                </div>
                <div class="col-2">
                <button class="btn  red-300">S.C.</button>
              </div>
              <div class="col-2">
                  <button class="m-r btn  purple-300">2.da.</button>
                </div>
                <div class="col-2">
                  <button class="m-r btn  purple-300">N.C.</button>
                </div>
                <div class="col-2">
                  <button class="btn  green-300" type="a" id="lanzar_alerta" onclick="ing(); "><i
                      class="material-icons ">&#xe87c;</i> Terminado</button>
                </div>
            </div>
            
         
      </div>
      <?php 
 require('switchColor.php');
 ?>
    </div>
    <!-- ----------------------------FIN TERCERA hilera ---------------------- -->

    <!-- ----------------------------CUARTA hilera ---------------------- -->

    <!--  ----------fin barras y tabla------------------ -->

    <!-- //sincronizacion -->

    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      var acumulado = 0;

      function ing() {

        acumulado = acumulado + 1;


        txt = document.getElementById("suma");

        console.log(txt.innerHTML = acumulado);

        return acumulado;
      }
    </script>

    <!-- ----------------------------FIN CUARTA hilera ---------------------- -->


    <!-- ############ PAGE END-->




    <!-- / -->

    <!-- theme switcher -->

    <!-- ############ LAYOUT END-->


    <!-- build:js scripts/app.html.js -->

    <!-- jQuery -->
    <script src="libs/jquery/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="libs/jquery/underscore/underscore-min.js"></script>
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