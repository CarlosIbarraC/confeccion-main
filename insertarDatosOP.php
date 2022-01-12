<?php 
error_reporting(0);
header('Content-Type: application/json; charset=utf-8;');
require "conexion.php";
$Operacion = $_POST['numeroOp'];

if($conexion->connect_error){
    $respuesta =  [
        'error'=> true
    ];
}else{
$sqlOp="SELECT * FROM `datosop` WHERE `op_numero`='$Operacion' ";
$consulta=mysqli_query($conexion,$sqlOp);

$respuesta =[];

while($array=$consulta->fetch_assoc()){

    $datos = [
        'op_numero'    => $array['op_numero'],
        'acumulado_op'   => $array['acumulado_op'],
        'startOp'   => $array['startOp'],
        'minutos_op'   => $array['minutos_op'],
        'rotas'   => $array['rotas'],
        'SinConfeccion'   => $array['SinConfeccion'],
        'segundas'   => $array['segundas'],
        'noConforme'   => $array['noConforme'],
        'estado'   => $array['estado']
        
    ];
    array_push($respuesta,$datos);    
} 

}


echo json_encode($respuesta);
?>

