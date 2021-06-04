<?php
  require_once "conexion.php";
  $obj=new Conexion();
  $conexion=$obj->conectar();
  if ($conexion) {
    $idusuario=$_POST['idusuariou'];
    $nombre=$_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $sql="UPDATE t_usuarios SET 
    nombre = '$nombre',
    apellido_paterno= '$apaterno',
    telefono='$telefono',
    email = '$email'
    WHERE id_usuario = '$idusuario'";
    $respuesta=mysqli_query($conexion,$sql);
    if ($respuesta) {
      echo $respuesta;
    }else{
      echo $respuesta;
    }
  }
?>