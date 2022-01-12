<?php 
error_reporting(0);
header('Content-Type: application/json; charset=utf-8;');
require "conexion.php";
//$date= date("Y-m-d");
$date=date("Y-m-d");
if($conexion->connect_error){
    $respuesta =  [
        'error'=> true
    ];
}else{
$sqlOp="SELECT op_num,sam_op,referencia_op,estampado_op,asignacion,unidades_op,acumulado_op,rotas,SinConfeccion,segundas,noConforme
FROM registroop
INNER JOIN datosop
ON registroop.op_num=datosop.op_numero WHERE `date_op`= '$date'";
$consulta=mysqli_query($conexion,$sqlOp);
$respuesta =[];

while($array=$consulta->fetch_assoc()){

    $usuario = [
        'op_num'    => $array['op_num'],
        'sam_op'   => $array['sam_op'],
        'referencia_op'   => $array['referencia_op'],
        'estampado_op'   => $array['estampado_op'],
        'asignacion'   => $array['asignacion'],
        'unidades_op'   => $array['unidades_op'],
        'acumulado_op'   => $array['acumulado_op'],
        'rotas'   => $array['rotas'],
        'SinConfeccion'   => $array['SinConfeccion'],
        'segundas'   => $array['segundas'],
        'noConforme'   => $array['noConforme']        
        
    ];
    array_push($respuesta,$usuario);    
}
 

}



echo json_encode($respuesta);
?>