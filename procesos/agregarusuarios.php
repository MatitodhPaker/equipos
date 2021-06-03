<?php
  require_once "conexion.php";
  $obj=new Conexion();
  $conexion=$obj->conectar();
  if ($conexion) {
    $nombre=$_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $sql="INSERT INTO t_usuarios(nombre, apellido_paterno, telefono, email) VALUES ('$nombre','$apaterno','$telefono','$email')";
    $respuesta=mysqli_query($conexion,$sql);
    if ($respuesta) {
      echo $respuesta;
    }else{
      echo $respuesta;
    }
  }
?>