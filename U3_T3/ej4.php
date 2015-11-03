<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $mayor=0;
        $numeros=[20,1,47,5,8,10,4,13,34,23];
        for ($i=0; $i <count($numeros) ; $i++) {
          if ($numeros[$i]>$mayor) {
            $mayor=$numeros[$i];
          }
        }
        echo "El número mayor es $mayor";
     ?>
  </body>
</html>
