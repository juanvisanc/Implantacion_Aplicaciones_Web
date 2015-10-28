<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $valor=rand(1,5);
        switch ($valor) {
          case 1:
            echo  "uno";
            break;
          case 2:
            echo "dos";
            break;
          case 3:
            echo "tres";
            break;
          case 4:
            echo "cuatro";
            break;
          case 5:
            echo "cinco";
            break;
        }


     ?>
  </body>
</html>
