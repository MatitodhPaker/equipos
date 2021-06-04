<?php
  require_once "conexion.php";
  $obj=new Conexion();
  $conexion=$obj->conectar();
  if ($conexion) {
    $idusuario=$_POST['idusuario'];
    $sql = "DELETE FROM t_usuarios WHERE id_usuario = '$idusuario'";
    $respuesta=mysqli_query($conexion,$sql);
    if ($respuesta) {
      echo $respuesta;
    }else{
      echo $respuesta;
    }
  }
?>