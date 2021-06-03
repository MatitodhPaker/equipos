<!doctype html>
<html lang="en">
  <head>
    <title>agregar un equipo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
      require_once "dependencias.php";
    ?>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
        <?php
          require_once "menu.php";
        ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
        <form onsubmit="return datosEquipo()" id="frmEquipos" enctype="multipart/form-data">
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required pattern="[a-zA-Z]+">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" required pattern="[a-zA-Z]+">
                <label for="numeroserie">Numero de serie</label>
                <input type="text" name="numeroserie" id="numeroserie" class="form-control" required pattern="[0-9]+">
                <label for="imagen">Imagen del equipo</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen" required>
              </div>
            </div>
          </div>
          <button class="btn btn-success btn-block">Agregar</button>
        </form>
        </div>
      </div>
    </div>
    
    <script src="public/js/main.js"></script>
  </body>
</html>