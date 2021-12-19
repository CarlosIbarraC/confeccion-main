<?php 
session_start();
header('Content-Type: application/json; charset=utf-8;');
$usuario=$_SESSION['usernameS1'];
if(!isset($usuario)){
  header("location:login.php");
};
require "conexion.php";
$numeroOp=$_POST['numeroOp'];
$usuario=$_POST['usuario']; 
$hora=$_POST['hora'];
$mensaje=$_POST['mensaje'];
if($conexion->connect_error){
    $respuesta =  [
        'error'=> true
    ];
}else{
$sql="INSERT INTO `chat`( `numeroOpChat`, `usuarioChat`, `horaChat`, `mensajeChat`) VALUES ('$numeroOp','$usuario','$hora','$mensaje')";
$consulta=mysqli_query($conexion,$sql);

$sqlC="SELECT * FROM `chat` WHERE `numeroOpChat`='$numeroOp'";
$consultaC=mysqli_query($conexion,$sqlC);
$respuesta =[];

while($array=$consultaC->fetch_assoc()){

    $datos = [
        'numeroOpChat'    => $array['numeroOpChat'],
        'usuarioChat'   => $array['usuarioChat'],
        'horaChat'   => $array['horaChat'],
        'mensajeChat'   => $array['mensajeChat']
        
        
    ];
    array_push($respuesta,$datos);    
} 

}


echo json_encode($respuesta);

?>