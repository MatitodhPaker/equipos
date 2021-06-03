<?php
  class Conexion{
    public function conectar(){
      $usuario="root";
      $password="";
      $servidor="localhost";
      $bd="equipos";
      $resultado=mysqli_connect($servidor, $usuario, $password, $bd);
      return $resultado;
    }
  }
?>