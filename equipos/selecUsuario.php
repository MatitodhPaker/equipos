<?php
  require_once "procesos/conexion.php";
  $obj= new Conexion();
  $conexion= $obj->conectar();
  $sql="SELECT id_usuario, nombre FROM t_usuarios ORDER BY nombre";
  $result=mysqli_query($conexion,$sql);
?>
<label for="idUsuario">Selecciona un Usuario</label>
<select name="idUsuario" id="idUsuario" class="form-control">
  <option>seleciona un usuario</option>
  <?php while($ver=mysqli_fetch_row($result)): ?>
  <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
  <?php endwhile; ?>
</select>