<?php 
session_start();
$usuario=$_SESSION['username'];
if(!isset($usuario)){
  header("location:login.php");
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
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
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
       
        
        <!-- ############ PAGE START-->
        <div class="padding">
            <div class="p-a white lt box-shadow">

                <div class="box m-2">
                    <div class="box-header row">
                        <div class="col-8">
                            <h4 class="mb-0 _300">Tabla para verificacion y manejo de O.P.</h4>
                            <small class="text-muted">Control <strong>I</strong> Produccion en linea</small>

                        </div>
                        <div class="col-2">
                            <button class="btn b-a info" type="button" id="listar_op">listar</button>
                        </div>
                        <div class="col-2">
                            <a href="formulario.php" class="btn b-a success" type="button" id="volverOp">volver</a>
                           
                        </div>
                    </div>
                    <div class="row p-a">
                        <div class="col-sm-5">
                            <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Bulk action</option>
                                <option value="1">Delete selected</option>
                                <option value="2">Bulk edit</option>
                                <option value="3">Export</option>
                            </select>
                            <button class="btn btn-sm white">Apply</button>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn b-a white" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t" id="tabla_listar_op">
                            <thead>
                                <tr>
                                    <th>Op-numero</th>
                                    <th>Referencia</th>
                                    <th>Estampado</th>
                                    <th>Fecha</th>
                                    <th>Hr:I</th>
                                    <th>Hr:F</th>
                                    <th>Descanso</th>
                                    <th>S.A.M</th>
                                    <th>Operarios</th>
                                    <th>Unidades</th>
                                    <th>Edicion</th>
                                    <th>Asignacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                   
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="loader" id="loader"></div>
                    </div>
                    <footer class="dker p-a">
                        <div class="row">
                            <div class="col-sm-4 hidden-xs">
                                <select class="input-sm form-control w-sm inline v-middle">
                                    <option value="0">Bulk action</option>
                                    <option value="1">Delete selected</option>
                                    <option value="2">Bulk edit</option>
                                    <option value="3">Export</option>
                                </select>
                                <button class="btn btn-sm white">Apply</button>
                            </div>
                            <div class="col-sm-4 text-center">
                                <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                            </div>
                            <div class="col-sm-4 text-right text-center-xs">
                                <ul class="pagination pagination-sm m-0">
                                    <li><a href><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href>1</a></li>
                                    <li><a href>2</a></li>
                                    <li><a href>3</a></li>
                                    <li><a href>4</a></li>
                                    <li><a href>5</a></li>
                                    <li><a href><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>


            </div>
        </div>
         <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade " id="modalAsignacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content text-green">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignacion Op</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " >
          <form action="" id="formulario">
         
              <input type="text" id="opSelect" class="form-control"  readonly><br>
              <select class="form-select form-select-lg mb-3 form-control bg-dark" aria-label=".form-select-lg example" id="selectUsuario">
              <option selected>seleccione el usuario</option>
                  <option value="usuario1">usuario1</option>
                  <option value="usuario2">usuario2</option>
                  <option value="usuario3">usuario3</option>
                  <option value="usuario4">usuario4</option>
                  <option value="usuario5">usuario5</option>
                  <option value="usuario6">usuario6</option>                  
                 </select>         
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
        <!-- ############ PAGE END-->

    </div>
    </div>
    <!-- / -->

    <?php 
 require('switchColor.php');
   
 ?>
    <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js scripts/app.html.js -->
    <!-- jQuery -->
    <script src="libs/jquery/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.2/underscore.min.js"></script>
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
    <script src="js/funciones.js"></script>
    <script src="scripts/app.js"></script>
    

    <!-- ajax -->
    <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
    <script src="scripts/ajax.js"></script>
    <script src="js/listarOp.js"></script>
   <Script>
  function Activar(params) {
   var op = $('#opSelect').val(params);  
  
  }
   
   </Script>
</body>

</html>
