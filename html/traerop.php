<?php 
error_reporting(0);
header('Content-Type: application/json; charset=utf-8;');
require "conexion.php";
$op=$_POST['numop'];
if($conexion->connect_error){
    $respuesta =  [
        'error'=> true
    ];
}else{
$sqlOp="SELECT * FROM `registroop` WHERE `op_num` ='$op'";
$consulta=mysqli_query($conexion,$sqlOp);
$respuesta =[];

while($array=$consulta->fetch_assoc()){

    $usuario = [
        'op_num'    => $array['op_num'],
        'date_op'   => $array['date_op'],
        'horae_op'   => $array['horae_op'],
        'horas_op'   => $array['horas_op'],
        'descanso_op'   => $array['descanso_op'],
        'sam_op'   => $array['sam_op'],
        'operarios_op'   => $array['operarios_op'],
        'unidades_op'   => $array['unidades_op'],
        'referencia_op'   => $array['referencia_op'],
        'estampado_op'   => $array['estampado_op'],
        'tallas_op'   => $array['tallas_op'],
        'color1_op'   => $array['color1_op'],
        'color2_op'   => $array['color2_op'],
        'color3_op'   => $array['color3_op'],
        'color4_op'   => $array['color4_op'],
        'color5_op'   => $array['color5_op'],
        'color6_op'   => $array['color6_op'],
        'notas_op'   => $array['notas_op']
        
    ];
    array_push($respuesta,$usuario);    
}
 

}



echo json_encode($respuesta);
?>