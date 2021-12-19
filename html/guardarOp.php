<?php 
session_start();
$usuario=$_SESSION['username'];
if(!isset($usuario)){
  header("location:login.php");
};
setcookie("variable",1000);
require "conexion.php";
if(!isset($_POST['numeroOp'])&&!isset($_POST['fechaOp'])){
    header("location:formulario.php");  
}
$fecha=$_POST['fechaOp'];
$numeroOp=$_POST['numeroOp'];
$horaE=$_POST['horaE'];
$horaS=$_POST['horaS'];
$descanso=$_POST['descanso'];
$sam=$_POST['sam'];
$expertos=$_POST['expertos'];
$cantidad=$_POST['cantidad'];
$referencia=$_POST['referencia'];
$estampado=$_POST['estampado'];
$tallas=$_POST['tallas'];
$retVal1 = ($_POST['color1']!=="#351717") ? $color1=$_POST['color1'] : $color1="sin select" ;
$retVal2 = ($_POST['color2']!=="#351717") ? $color2=$_POST['color2'] : $color2="sin select" ;
$retVal3 = ($_POST['color3']!=="#351717") ? $color3=$_POST['color3'] : $color3="sin select" ;
$retVal4 = ($_POST['color4']!=="#351717") ? $color4=$_POST['color4'] : $color4="sin select" ;
$retVal5 = ($_POST['color5']!=="#351717") ? $color5=$_POST['color5'] : $color5="sin select" ;
$retVal6 = ($_POST['color6']!=="#351717") ? $color6=$_POST['color6'] : $color6="sin select" ;
$notas=$_POST['notas'];




$sql="INSERT INTO `registroop`( `op_num`, `date_op`, `horae_op`, `horas_op`, `descanso_op`, `sam_op`, `operarios_op`, `unidades_op`, `referencia_op`, `estampado_op`, `tallas_op`, `color1_op`, `color2_op`, `color3_op`, `color4_op`, `color5_op`, `color6_op`, `notas_op`) VALUES ('$numeroOp','$fecha','$horaE','$horaS','$descanso','$sam','$expertos','$cantidad','$referencia','$estampado','$tallas','$color1','$color2','$color3','$color4','$color5','$color6','$notas')";
$consulta=mysqli_query($conexion,$sql);

header("location:formulario.php");
?>