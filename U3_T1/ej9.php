<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $valor="izquierda";
        switch ($valor) {
                case "arriba":
                    echo "<b>Arriba</b>";
                    break;
                case "abajo":
                    echo "<b>Abajo</b>";
                    break;
                case "derecha":
                    echo "<b>Derecha</b>";
                    break;
                case "izquierda":
                    echo "<b>Izquierda</b>";
                    break;
            }
     ?>
  </body>
</html>
