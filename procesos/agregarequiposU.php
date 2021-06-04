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
    $sql="UPDATE t_equipos SET 
    nombre_equipo = '$nombre',
    modelo= '$modelo',
    ns = '$numeroserie',
    imagen = '$imagen' 
    WHERE id_usuario = '$idusuario'";
    $respuesta=mysqli_query($conexion,$sql);
    if ($respuesta) {
      echo $respuesta;
    }else{
      echo $respuesta;
    }
  }
?>