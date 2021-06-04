<?php
  require_once "./procesos/conexion.php";
  $obj= new Conexion();
  $conexion= $obj->conectar();
  $sql="SELECT nombre_equipo, modelo, ns, nombre, imagen, t_usuarios.id_usuario FROM t_equipos INNER JOIN t_usuarios WHERE t_equipos.id_usuario = t_usuarios.id_usuario";
  $result=mysqli_query($conexion,$sql);
?>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-condensed" id="tablaEquiposDt">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Numero de serie</th>
            <th>Usuario</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <?php while($ver=mysqli_fetch_row($result)): ?>
          <tr>
            <td><?php echo $ver[0]; ?></td>
            <td><?php echo $ver[1]; ?></td>
            <td><?php echo $ver[2]; ?></td>
            <td>
              <?php echo $ver[3]; ?>
            </td>
            <td>
              <img src="<?php echo $ver[4]; ?>" style="width: 10%;">
            </td>
            <td>
              <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#equipoModalU" onclick="actualizarU(<?php echo $ver[5]; ?>)">
                <i class="fas fa-edit"></i>
              </span>
            </td>
            <td>
              <span class="btn btn-danger btn-sm" id="btneliminar">
                <i class="far fa-trash-alt"></i>
              </span>
            </td>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <?php
      require_once "usuarios/modalUsuarioActualizar.php";
      require_once "actualizarEquipoModal.php";
    ?>
  </div>
</div>
<script>
  $(document).ready(function () {
    $('#tablaEquiposDt').DataTable();
  });
</script>