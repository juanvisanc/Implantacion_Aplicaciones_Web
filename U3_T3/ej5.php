<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ol>
    <?php
        $multiplos=[];
        $cont=0;
        for ($i=0; $cont <10 ; $i++) {
          if ($i%77==0) {
            $multiplos[]=$i;
            $cont++;
            echo "<li>$i</li>";
          }

        }
        //para ver el array:
        var_dump($multiplos);
     ?>
   </ol>
  </body>
</html>
