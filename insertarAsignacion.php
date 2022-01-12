<?php 
session_start();
$usuario=$_SESSION['username'];
if(!isset($usuario)){
  header("location:login.php");
};
require "conexion.php";
 /* if(!isset($_POST['numeroOp'])&&!isset($_POST['asignacion'])){
    header("location:formulario.php");  
}; */
$numeroOP=$_POST['numeroOp'];
$asignacion=$_POST['asignacion'];
    $fecha="SELECT `date_op` FROM `registroop` where `op_num`='$numeroOP'";
    $consultafecha=mysqli_query($conexion,$fecha);
    $array= mysqli_fetch_array($consultafecha);
    $select=$array['date_op'];
    $hoy=date("Y-m-d");
    if ($hoy>$select) {
        echo "fuera";
    } else {
       
        $sql="UPDATE `registroop` SET`asignacion`='$asignacion',`verificacion`= CONCAT (`asignacion`,`date_op`) where `op_num` = '$numeroOP'";
    $consulta=mysqli_query($conexion,$sql);    
    $sqlC="INSERT INTO `datosop`( `op_numero`) VALUES ('$numeroOP')";
    $consultaC=mysqli_query($conexion,$sqlC);
    if(!isset($consulta)){
        echo "falla en comunicacion no se realizo el proceso";
    }else{
        echo "ok";
    }
    }
    
    
    

?>