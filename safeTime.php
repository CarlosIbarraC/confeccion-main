<?php 
session_start();
$usuario=$_SESSION['usernameS1'];
if(!isset($usuario)){
  header("location:login.php");
};
require "conexion.php";
$numeroOp=$_POST['numeroOp'];
$parametro=$_POST['params']; 
$tiempo=$_POST['tiempo'];
$recorte=substr($parametro, 0, -1);

switch ($recorte) {
  case "lanzar":   
    $guardar='tiempo_ok';
    break;
  case "TelaImp":
    $guardar='tiempo_rta';
    break;
  case "Segun":
    $guardar='tiempo_sda';
    break;
  case "NoConf":
      $guardar='tiempo_nc';
      break;
  default:
    $guardar=" "; 
}
 


$acumulado="SELECT $guardar FROM `datosop` WHERE  `op_numero`= $numeroOp";
$consulta=mysqli_query($conexion,$acumulado);
$array= mysqli_fetch_array($consulta);

$data=$array[$guardar]+$tiempo;

$sql="UPDATE `datosop` SET $guardar=$data WHERE `op_numero`=$numeroOp";
$consulta=mysqli_query($conexion,$sql);
    
echo  $guardar;    

?>