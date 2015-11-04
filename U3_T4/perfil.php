<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
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
                        "mail"=>"soyelmatito@gmail.com")
                );
          if (empty($_GET)) {
            echo "NO HAS MANDADO NADA";
          } else {
                  var_dump($_GET);

          }
     ?>
  </body>
</html>
