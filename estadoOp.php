<?php 
session_start();
$usuario=$_SESSION['username'];
if(!isset($usuario)){
  header("location:login.php");
};

require "conexion.php";
if(!isset($_POST['estado'])){
    header("location:formulario.php");  
}
$estado=$_POST['estado'];
$numeroOp=$_POST['numeroOp'];

  $sql="UPDATE `datosop` SET `estado`='$estado' WHERE `op_numero`='$numeroOp'";
  $consulta=mysqli_query($conexion,$sql);

 echo true; 

?>