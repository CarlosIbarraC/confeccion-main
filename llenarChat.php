<?php 
session_start();
header('Content-Type: application/json; charset=utf-8;');
$parametro=$_POST['parametro'];
require "conexion.php";
//echo $parametro;
if($parametro=="admin"){
    $sql="SELECT * FROM chat WHERE 1";
    $consulta=mysqli_query($conexion,$sql);
    $respuesta =[];

}else{
    $sql="SELECT * FROM chat Where numeroOpChat ='$parametro'";
    $consulta=mysqli_query($conexion,$sql);
    $respuesta =[];

}
while($array=$consulta->fetch_assoc()){

    $datos = [
        'numeroOpChat'    => $array['numeroOpChat'],
        'usuarioChat'   => $array['usuarioChat'],
        'horaChat'   => $array['horaChat'],
        'mensajeChat'   => $array['mensajeChat']
        
        
    ];
    array_push($respuesta,$datos); 
    
} 

echo json_encode($respuesta);
?>

