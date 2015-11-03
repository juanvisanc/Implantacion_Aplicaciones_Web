<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $ciudades=["San Cristobal","Cucuta","Maracaibo","Caracas"];
        echo "numero de elementos ".count($ciudades)."<br>";
        for ($i=0; $i <count($ciudades) ; $i++) {
          echo "Ciudad $i<br>";
          echo "<h1>$ciudades[$i]</h1>";
        }
     ?>
  </body>
</html>
