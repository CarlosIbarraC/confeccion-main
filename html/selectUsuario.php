<?php 
require "conexion.php";
if($conexion->connect_error){
    $respuesta =  [
        'error'=> true
    ];
}else{
$sqlOp="SELECT * FROM `supervisor`";
$consulta=mysqli_query($conexion,$sqlOp);
$respuesta =[];

while($array=$consulta->fetch_assoc()){
    $usuario = [
        'id_supervisor'    => $array['id_supervisor'],
        'usuario_s'   => $array['usuario_s'],
        'OP_asignada'   => $array['OP_asignada']
       
        
    ];
    array_push($respuesta,$usuario);    
}
 

}
echo json_encode($respuesta);
?>