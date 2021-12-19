<?php 
session_start();
$usuario=$_SESSION['username'];
$numeroFoto= $_POST['radioFoto'];
$op=$_COOKIE['variable'];
require "conexion.php";


    if($_SERVER['REQUEST_METHOD']== 'POST' && !empty($_FILES)){
    
        $check = @getimagesize($_FILES['foto']['tmp_name']);
        if($check !== false){ 
                
            $i=1;        
            $carpeta_destino = 'foto/';
            $archivo_subido=$carpeta_destino.$_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);
            $name=$_FILES['foto']['name'];
            $queryC="SELECT COUNT(*) as contar FROM tabla_fotos where foto_op = '$op' AND foto_posicion ='$numeroFoto' ";
            $consultaC=mysqli_query($conexion,$queryC);
            $array= mysqli_fetch_array($consultaC);
            
            if ($array['contar']>0) {
                $edit="UPDATE tabla_fotos SET foto_nombre='$name',foto_op='$op',foto_posicion='$numeroFoto'  where foto_op = '$op' AND foto_posicion ='$numeroFoto' ";
            $consulta=mysqli_query($conexion,$edit);
            }else{
            $query="INSERT INTO tabla_fotos(foto_nombre,foto_op,foto_posicion) values ('$name','$op','$numeroFoto')";
            $consulta=mysqli_query($conexion,$query);
           header("location:fotos.php");
            }
        }
       
       
    }

header("location:fotos.php");
?>