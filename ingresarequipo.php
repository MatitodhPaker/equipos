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
        <div class="col">
        <form method="post" onsubmit="return calcular()" id="frmcmoneda">
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
      </div>
    </div>
  </body>
</html>