<div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informacion de usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form method="post" onsubmit="return calcular()" id="frmcmoneda">
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label for="nombreU">Nombre</label>
                <input type="text" name="nombreU" id="nombreU" class="form-control" required>
                <label for="apaternoU">Apellido</label>
                <input type="text" name="apaternoU" id="apaternoU" class="form-control">
                <label for="telefonoU">Telefono</label>
                <input type="text" name="telefonoU" id="telefonoU" class="form-control">
                <label for="emailU">E-mail</label>
                <input type="text" name="emailU" id="emailU" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
          <button class="btn btn-warning">Editar</button>
        </div>
      </form>
      </div>
    </div>
</div>
