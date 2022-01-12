<?php 
$usuario=$_SESSION['username'];
if(!isset($usuario)){
  header("location:login.php");
};

function imagenes ($posicion,$op){
    require "conexion.php";
    $num='3';
    $queryI="SELECT * FROM `tabla_fotos` WHERE foto_op = '$op' AND foto_posicion = '$posicion'";
    $consultaI=mysqli_query($conexion,$queryI);               
    while ($row = mysqli_fetch_array($consultaI, MYSQLI_ASSOC)) {
            
        return  $row['foto_nombre'];


}
};

function ValoracionUsuario($usuario,$date){
  require "conexion.php";
  
  if($conexion->connect_error){
      $respuesta =  [
          'error'=> true
      ];
  }else{
  $sqlOp="SELECT * FROM `registroop` WHERE `asignacion`='$usuario' AND `date_op`= '$date' ";
  $consulta=mysqli_query($conexion,$sqlOp);
  

  return $consulta;

}
}
?>    