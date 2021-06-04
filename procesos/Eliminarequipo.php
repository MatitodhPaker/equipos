<?php
  require_once "conexion.php";
  $obj=new Conexion();
  $conexion=$obj->conectar();
  if ($conexion) {
    $idequipo=$_POST['idequipo'];
    $sql = "DELETE FROM t_equipos WHERE id_equipo = '$idequipo'";
    $respuesta=mysqli_query($conexion,$sql);
    if ($respuesta) {
      echo $respuesta;
    }else{
      echo $respuesta;
    }
  }
?>