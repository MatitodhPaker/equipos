<div class="modal fade" id="equipoModalU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return calcular()" id="frmEquipoU">
          <div class="form-group">
            <div class="row">
              <div class="col">
                <div id="idUsuario" hidden></div>
                <label for="nombreU">Nombre</label>
                <input type="text" name="nombreU" id="nombreU" class="form-control" required>
                <label for="modeloU">Modelo</label>
                <input type="text" name="modeloU" id="modeloU" class="form-control">
                <label for="numeroserieU">Numero de serie</label>
                <input type="text" name="numeroserieU" id="numeroserieU" class="form-control">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-warning">Editar</button>
      </div>
    </div>
  </div>
</div>