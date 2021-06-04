<div class="modal fade" id="equipoModalU" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form onsubmit="return datosEquipoU()" id="frmEquipoU">
      <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col">
                <input type="text" id="idUsuarioequipo" hidden></input>
                <label for="nombreEquipoU">Nombre</label>
                <input type="text" name="nombreEquipoU" id="nombreEquipoU" class="form-control" required pattern="[a-zA-Z]+">
                <label for="modeloU">Modelo</label>
                <input type="text" name="modeloU" id="modeloU" class="form-control" required pattern="[a-zA-Z]+">
                <label for="numeroserieU">Numero de serie</label>
                <input type="text" name="numeroserieU" id="numeroserieU" class="form-control" required pattern="[0-9]+">
                <label for="imagenU">Imagen del equipo</label>
                <input type="file" class="form-control-file" id="imagenU" name="imagenU" required>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button  class="btn btn-warning">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>