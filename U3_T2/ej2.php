<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
    <?php
        $a1=["22222222X"=>"Pepe","33333333X"=>"Manuel","44444444X"=>"Jose","5555555X"=>"Rosa"];
        $a2=["22222222X"=>"Pérez","33333333X"=>"Jiménez","44444444X"=>"Martínez","5555555X"=>"Rodríguez"];

        foreach ($a1 as $key => $value) {
          echo "<tr><td>$value</td><td>$a2[$key]</td></tr>";
        }

     ?>
   </table>
  </body>

</html>
