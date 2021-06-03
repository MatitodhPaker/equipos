<?php
  require_once "conexion.php";
  $obj=new Conexion();
  $conexion=$obj->conectar();
  if ($conexion) {
    $idusuario=$_POST['idusuario'];
    $nombre=$_POST['nombre'];
    $modelo=$_POST['modelo'];
    $numeroserie=$_POST['numeroserie'];
    $imagen=$_POST['imagen'];
    $sql="INSERT INTO t_equipos(nombre, modelo, ns, imagen, id_usuario) VALUES ('$nombre','$modelo','$numeroserie','$imagen','$idusuario')";
    $respuesta=mysqli_query($conexion,$sql);
    if ($respuesta) {
      echo $respuesta;
    }else{
      echo $respuesta;
    }
  }
?>