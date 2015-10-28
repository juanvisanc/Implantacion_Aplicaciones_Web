<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $nombres=["roberto","juan","marta","maria","martin","jorge","miriam","nahuel","mirta"];
        $m=[];
        for ($i=0; $i <count($nombres) ; $i++) {
            if (substr($nombres[$i] ,0,1)=="m"){
              $m[]=$nombres[$i];
            }
        }
        //para ver que se crea bien el vector:
        var_dump($m);
     ?>
  </body>
</html>
