<?php 
require "conexion.php";
$lastOp="SELECT `op_num` FROM `registroop` order by `id_op` desc
limit 1";
$dato=mysqli_query($conexion,$lastOp);
$array= mysqli_fetch_array($dato);
if(!isset($array['op_num'])){
    $array['op_num']="999";
}
 echo json_encode( intval( $array['op_num'])+1);

?>
