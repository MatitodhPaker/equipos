<div class="modal fade" id="imagenesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imagen del equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="public/img/docpeste.jpg" style="width: 50%;">
        <form onsubmit="return calcular()" id="frmImagenU">
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label for="imagenU">Actualizar Imagen</label>
                <input type="file" class="form-control-file" id="imagenU">
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