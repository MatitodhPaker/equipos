<!doctype html>
<html lang="en">
  <head>
    <title>Equipos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
      require_once "dependencias.php";
    ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <?php require_once "menu.php"?>        
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <?php require_once "equipos/tablaequipo.php"; ?>
        </div>
      </div>
    </div>
  </body>
</html>