<div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informacion de usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form method="post" onsubmit="return datosUsuario()" id="frmUsuario">
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
                <label for="apaterno">Apellido</label>
                <input type="text" name="apaterno" id="apaterno" class="form-control">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-success">Agregar</button>
        </div>
      </form>
      </div>
    </div>
</div>
