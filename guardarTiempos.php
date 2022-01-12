<?php 
error_reporting(0);
header('Content-Type: application/json; charset=utf-8;');
require "conexion.php";
//$Operacion = $_POST['numeroOp'];
$Operacioin=1041;
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
        'startOp'    => $array['startOp'],
        'minutos_op'   => $array['minutos_op'],
        'startOp'   => $array['startOp'],
        'minutos_op'   => $array['minutos_op'],
        'rotas'   => $array['rotas'],
        'SinConfeccion'   => $array['SinConfeccion'],
        'segundas'   => $array['segundas'],
        'noConforme'   => $array['noConforme'],
        'estado'   => $array['estado']
        
    ];
    array_push($respuesta,$datos);  
    echo $datos['op_numero'] ;
} 

}


//echo json_encode($respuesta);
?>
  