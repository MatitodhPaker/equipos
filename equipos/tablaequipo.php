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
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <span class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#usuarioModalU">
                <i class="far fa-user"></i>
              </span>
            </td>
            <td>
              <span class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#imagenesModal">
                <i class="fas fa-image"></i>
              </span>
            </td>
            <td>
              <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#equipoModalU">
                <i class="fas fa-edit"></i>
              </span>
            </td>
            <td>
              <span class="btn btn-danger btn-sm" id="btneliminar">
                <i class="far fa-trash-alt"></i>
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php
      require_once "usuarios/modalUsuarioActualizar.php";
      require_once "imagenesmodal.php";
      require_once "actualizarEquipoModal.php";
    ?>
  </div>
</div>
<script>
  $(document).ready(function () {
    $('#tablaEquiposDt').DataTable();
  });
</script>