<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <style media="screen">
      body{
        width: 700px;
        margin: 0 auto;
        margin-top: 50px;
      }
      div{
          float: left;
          margin-left: 10px;
      }
      img{
        width: 200px;
        height: 300px;
      }
    </style>
  <body>
    <?php
        //$id=$_GET['id'];
        $alumnos=array(array("DNI"=>"22222222A",
                        "Nombre"=>"Juan",
                        "Apellidos"=>"Gomez Pérez",
                        "Direccion"=>"C/Sevilla Nº 5",
                        "Telefono"=>"666666666",
                        "mail"=>"juanperez@gmail.com"),
                  array("DNI"=>"33333333B",
                        "Nombre"=>"Andrés",
                        "Apellidos"=>"Rodríguez Rodríguez",
                        "Direccion"=>"Avda. Andalucía Nº 4",
                        "Telefono"=>"777777777",
                        "mail"=>"andresito@gmail.com"),
                  array("DNI"=>"44444444C",
                        "Nombre"=>"Jose",
                        "Apellidos"=>"Sáchez Alcaide",
                        "Direccion"=>"C/Ramón y Cajal Nº 3",
                        "Telefono"=>"688888888",
                        "mail"=>"joselito@gmail.com"),
                  array("DNI"=>"55555555D",
                        "Nombre"=>"Adrián",
                        "Apellidos"=>"Casado Delgado",
                        "Direccion"=>"Avda. Antonio Machado",
                        "Telefono"=>"655555555",
                        "mail"=>"elcasado@gmail.com"),
                  array("DNI"=>"66666666E",
                        "Nombre"=>"Jesús",
                        "Apellidos"=>"Matito Velasco",
                        "Direccion"=>"Avda. Granada",
                        "Telefono"=>"622222222",
                        "mail"=>"soyelmatito@gmail.com"),
                  array("DNI"=>"77777777F",
                        "Nombre"=>"Julián",
                        "Apellidos"=>"Rodríguez Melchor",
                        "Direccion"=>"C/Madrid Nº 54",
                        "Telefono"=>"633333333",
                        "mail"=>"titojuli@gmail.com"),
                  array("DNI"=>"88888888G",
                        "Nombre"=>"Carmelo",
                        "Apellidos"=>"Domínguez Gutiérrez",
                        "Direccion"=>"C/ Villanueva Nº 21",
                        "Telefono"=>"699999999",
                        "mail"=>"lacarmela@gmail.com"),
                  array("DNI"=>"99999999H",
                        "Nombre"=>"Jairo",
                        "Apellidos"=>"Parrilla López",
                        "Direccion"=>"Avda. de la Cruz Roja",
                        "Telefono"=>"611111111",
                        "mail"=>"jaritomalo@gmail.com"),
                 array("DNI"=>"11111111J",
                        "Nombre"=>"Carmen",
                        "Apellidos"=>"Alfonso Muñoz",
                        "Direccion"=>"C/ Sevilla Nº 8",
                        "Telefono"=>"600000000",
                        "mail"=>"carmencica@gmail.com"),
                  array("DNI"=>"56565656T",
                        "Nombre"=>"Manuela",
                        "Apellidos"=>"Carrasco Gallego",
                        "Direccion"=>"C/Antonio Molina",
                        "Telefono"=>"656565656",
                        "mail"=>"lamanuela@gmail.com")
                );

          if (empty($_GET)) {
              echo "NO HAS MANDADO NADA";
          } else {

              $foto=$_GET['id'];
              $datos=$alumnos[$_GET["id"]];
              echo "<div class='fotos'>";
              echo "<img src='$foto'.png'>";
              echo "</div><div class='datos'>";
              $nombre=$datos['Nombre'];
              $apellidos=$datos['Apellidos'];
              echo "<h2>$nombre $apellidos</h2>";


              foreach ($datos as $key => $value) {
                if ($key!=="Nombre" & $key!=="Apellidos" ) {
                  echo "<p>$key: $value</p>";
                }

              }

              echo"</div>";
          }
     ?>
  </body>
</html>
