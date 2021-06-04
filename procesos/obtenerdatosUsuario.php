<?php
  $idusuario=$_POST['idUsuario'];
  
  require_once "conexion.php";
  $obj=new Conexion();
  $conectar=$obj->conectar();
  $sql ="SELECT nombre, apellido_paterno, telefono, email FROM t_usuarios WHERE id_usuario='$idusuario'";
  $result=mysqli_query($conectar,$sql);
  if ($result) {
    $usuarios= mysqli_fetch_row($result);
    $datos = array(
						"nombre" => $usuarios[0],
						"paterno" => $usuarios[1],
						"telefono" => $usuarios[2],
						"email" => $usuarios[3] 
    );
    var_dump($datos);
  }