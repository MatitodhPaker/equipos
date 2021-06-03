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
                  <label for="monto">Monto a gastar</label>
                  <div class="row">
                  <div class="col-sm-1">$</div>
                  <div class="col-sm-8"><input type="number" id="monto" class="form-control" placeholder="500" required pattern="[0-9]+" min="1" max="800000"></div>
                  <div class="col">mxn</div>
                  </div>
                  <small id="helpId" class="text-muted">ingrese la cantidad deseada a cambiar</small>
                </div>
                <div class="form-group">
                  <label for="radios">Moneda a comprar:</label>
                  <div class="row">
                    <div class="col">
                      <label for="bitcoin">Bitcoin</label>
                      <input type="radio" name="moneda" id="bitcoin" value="bitcoin">
                      <br>
                      <label for="mana">Mana</label>
                      <input type="radio" name="moneda" id="mana" value="mana">
                      <br>
                      <label for="bat">Bat</label>
                      <input type="radio" name="moneda" id="bat" value="bat">
                    </div>
                    <div class="col">
                      <label for="etherium">Etherium</label>
                      <input type="radio" name="moneda" id="etherium" value="etherium">
                      <br>
                      <label for="xrp">Xrp</label>
                      <input type="radio" name="moneda" id="xrp" value="xrp">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col">
                    <button class="btn btn-info btn-block">cobrar</button>
                    </div>
                    <div class="col">
                      <span class="btn btn-danger btn-block" onclick="limpiar()">limpiar</span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label>Tus monedas son</label>
                      <div class="row">
                        <div class="col-sm-8"><input type="number" id="total" class="form-control" disabled></div>
                        <div class="col" id="cmoneda"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>
  </body>
</html>