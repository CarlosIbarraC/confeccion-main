<?php 
session_start();

if(isset($_SESSION['login'])){
  session_destroy();
  $login="datos Incorrectos";
}else{
  $login="no estas inscrito";
}
if(isset($_GET['estado'])){
  $login="lo sentimos no estas listado";
  $GET['estado']=" ";
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

<body class="black">
    <div class="app" id="app">

        
        <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
        Escribe Credenciales para tu Cuenta
      </div>
      <form name="form" action="login.php" method="POST">
        <div class="md-form-group float-label">
          <input type="text" class="md-input " name="usuario" required>
          <label>Usuario</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input"  name="pass"  required>
          <label>Password</label>
        </div>      
        
        <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
      </form>
      <p class="mt-1">
         <?php 
        echo $login;
         
         ?>
      </p>
    </div>

    
  </div>
</div>
</body>    