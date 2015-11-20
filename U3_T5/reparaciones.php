<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <style media="screen">
      body{
        width: 1200px;
        margin: 0 auto;
        margin-top: 30px;
      }
      img{
        height: 40px;
        width: 40px;
      }
      table{
        text-align:center;
      }
      th,td{
        border: 1px solid #000;
      }
      input{
        float: right;
        margin-top: 10px;
      }
      h1{
        text-align: center;
      }
      </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
          $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

            if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $mysqli->connect_error);
              exit();
          }

          if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {

    ?>
      <h1>Reparaciones de 'Talleres Faber'</h1>
        <table class="striped" class="centered" style="border:1px solid black">
          <thead>
            <tr>
              <th>Reparación</th>
              <th>Matrícula</th>
              <th>Fecha de entrada</th>
              <th>Kilómetros</th>
              <th>Avería</th>
              <th>Fecha de salida</th>
              <th>Reparado</th>
              <th>Observaciones</th>
              <th>EDITAR</th>
              <th>BORRAR</th>
              <th>AÑADIR PIEZA</th>
              <th>AÑADIR MECÁNICO</th>
          </thead>

            <?php


          while($obj = $result->fetch_object()) {

              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td><a href='editar.php?id=$obj->IdReparacion'><img src='editar.png'></a></td>";
              echo "<td><a href='borrar.php?id=$obj->IdReparacion'><img src='borrar.jpg'></a></td>";
              echo "<td><a href='pieza.php?id=$obj->IdReparacion'><img src='pieza.jpg'></td>";
              echo "<td><a href='mecanico.php?id=$obj->IdReparacion'><img src='mecanico.jpg'></td>";
              echo "</tr>";
          }

          echo "</table>";
          $result->close();
          unset($obj);
          unset($connection);


      }

    ?>
    <a href="crear.php"><input type="button" name="nuevar" value="Nueva Reparacion"></a>
  </body>
</html>
