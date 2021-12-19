<?php 
session_start();
$usuario=$_SESSION['username'];
if(!isset($usuario)){
  header("location:login.php");
}
require "conexion.php";
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
    <link rel="apple-touch-icon" href="../assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />





</head>

<body>
    <div class="app" id="app">
    <?php require('menu.php'); ?>
<!--  -->
        <div class="padding">
      
            <div class="row ">
                <div class="col-md-6 m-auto">
                    <div class="box">
                        <div class="box-header row">
                            <div class="col-8">
                                <h2>Ingreso de imagenes</h2>
                                <small>ingrese tres fotos ,sugerimos frontal, espalda y estampado .</small>
                            </div>
                            <div class="col-1">
                                <a href="formulario.php" class="btn btn-warning"> volver</a>
                            </div>
                        </div>
                        <div class="box-divider m-0"></div>
                        <div class="box-body">



                            <form method="post" enctype="multipart/form-data" action="subirFoto.php">
                                <div class="form-group">
                                    <label for="numeroOpFoto">Ingresa Imagenes Op</label>
                                    <input id="numeroOpFoto" name="numeroOpFoto" type="text" readonly value=""
                                        class="form-control">
                                        <input id="OpFoto" name="OpFoto" type="hidden" readonly value="<?php echo $_COOKIE['variable'];?>  "
                                        class="form-control">
                                    <input type="file" id="subirFoto" class="form-control" name="foto">
                                    <p class="help-block">archivo jpg</p>
                                </div>
                                <div class="row box-body m-auto">
                                    <div class="form-group col-4">
                                        <input class="form-check-input" type="radio" name="radioFoto" id="radioFoto1"
                                            value="1" checked>
                                        <label class="form-check-label h6" for="radioFoto1">
                                            1- <i class="material-icons">&#xe3b6;</i>
                                        </label>
                                    </div>
                                    <div class="form-group col-4">
                                        <input class="form-check-input" type="radio" name="radioFoto" id="radioFoto2"
                                            value="2">
                                        <label class="form-check-label h6 mr-2" for="radioFoto2">
                                            2- <i class="material-icons">&#xe3b6;</i>
                                        </label>
                                    </div>
                                    <div class="form-group col-4">
                                        <input class="form-check-input" type="radio" name="radioFoto" id="radioFoto3"
                                            value="3">
                                        <label class="form-check-label h6" for="radioFoto3">
                                            3- <i class="material-icons">&#xe3b6;</i>
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary m-b"></input>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
            <?php 
            
            ?>
            <!--  <---------------------------comienzo de galeria -------------------------------------------->
            <div class="row">

                <?php 
              
               $op=$_COOKIE['variable'];
              
               $queryI="SELECT  `foto_nombre`,`foto_posicion` FROM `tabla_fotos` where `foto_op` = '$op'order by `foto_posicion`";
               $consultaI=mysqli_query($conexion,$queryI);               
               while ($row = mysqli_fetch_array($consultaI, MYSQLI_ASSOC)) {
                
                ?>
                <div class="col-4   ">
                    <div class="box p-a-xs">
                        <figure href="#"><img src="foto/<?php echo $row['foto_nombre'] ?>  " alt=""
                                class="img-responsive" id="<?php echo $row['foto_posicion'].$row['foto_nombre'] ?>  ">
                        </figure>
                        <div class="p-a-sm">
                            <div class="text-ellipsis"><?php echo $row['foto_nombre'] ?></div>
                        </div>
                    </div>
                </div>

                <?php
               
           }
           
               ?>



            </div>

        </div>
    </div>


    </div>
    <?php 
 require('switchColor.php');
 ?>
    <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js scripts/app.html.js -->
    <!-- jQuery -->
    <script src="../libs/jquery/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="../libs/jquery/underscore/underscore-min.js"></script>
    <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="../libs/jquery/PACE/pace.min.js"></script>

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
    <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
    <script src="scripts/ajax.js"></script>
    <script>
        $(document).ready(function () {

            $.ajax(

                {
                    url: "traerultimaOp.php",
                    success: function (data) {
                        $("#numeroOpFoto").val(JSON.parse(data));
                        document.cookie = "variable = " + data;
                        /*  console.log('Data from the server' + data); */
                    },
                    error: function () {
                        alert('error en el servidor');
                    }
                }
            );
        });
    </script>
   
    <!-- endbuild -->

</body>