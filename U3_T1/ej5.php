<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $v1=19;
        $v2=24;

        if( $v1>$v2 ) {
          echo $v1." es mayor que ".$v2;
        } elseif ($v1<$v2) {
          echo $v1." es menor que ".$v2;
        } else {
          echo $v1." es igual que ".$v2;
        }
     ?>
  </body>
</html>
