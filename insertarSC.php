<?php 
session_start();
$usuario=$_SESSION['usernameS1'];
if(!isset($usuario)){
  header("location:login.php");
};
require "conexion.php";
$numeroOp=$_POST['numeroOp'];
$acumulado="SELECT `SinConfeccion` FROM `datosop` WHERE  `op_numero`='$numeroOp'";
$consultaA=mysqli_query($conexion,$acumulado);

$array= mysqli_fetch_array($consultaA);

$data=$array['SinConfeccion']+1;
$sql="UPDATE `datosop` SET `SinConfeccion`='$data' WHERE `op_numero`='$numeroOp'";
$consulta=mysqli_query($conexion,$sql);

    
echo  $data;    

?>