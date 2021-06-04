<?php
  require_once "./procesos/conexion.php";
  $obj= new Conexion();
  $conexion= $obj->conectar();
  $sql="SELECT id_usuario, nombre, apellido_paterno, telefono, email FROM t_usuarios";
  $result=mysqli_query($conexion,$sql);
?>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-condensed" id="tablaUsuariosDt">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>E mail</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <?php while($ver=mysqli_fetch_row($result)): ?>
          <tr>
            <td><?php echo $ver[1]; ?></td>
            <td><?php echo $ver[2]; ?></td>
            <td><?php echo $ver[3]; ?></td>
            <td>
              <?php echo $ver[4]; ?>
            </td>
            <td>
              <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#usuarioModalU" onclick="actualizarU(<?php echo $ver[0]; ?>)">
                <i class="fas fa-edit"></i>
              </span>
            </td>
            <td>
              <button class="btn btn-danger btn-sm" id="btneliminar" onclick="eliminarusuario(<?php echo $ver[0]; ?>)">
                <i class="far fa-trash-alt"></i>
              </button>
            </td>
          </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <?php
      require_once "usuarios/modalUsuarioActualizar.php";
    ?>
  </div>
</div>
<script>
  $(document).ready(function () {
    $('#tablaUsuariosDt').DataTable();
  });
</script>