<?php 
require "conexion.php";
session_start();
$usuario=$_POST['estado']; 
$que="UPDATE administrador
   SET sesion= 'cerrado'
   WHERE  usuario = '$usuario' ";
   $consultaSE=mysqli_query($conexion,$que); 
unset($_SESSION['username']);
echo "exito"; 
?>