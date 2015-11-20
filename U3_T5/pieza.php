<!DOCTYPE html>
<html>
  <head>
  <style media="screen">
  body{
    width: 800px;
    margin: 0 auto;
    margin-top: 30px;
  }
  table{
    text-align:center;
  }
  th,td{
    border: 1px solid #000;
  }
  div{
    float: left;
    margin-left: 20px;
  }
  </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if (!isset($_GET['id'])) {
          if (!isset($_POST['reparacion'])) {
            header('Location: reparaciones.php');
          }

          else {
            $repar=$_POST['reparacion'];
            $pieza=$_POST['pieza'];


            $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

            if ($connection->connect_errno) {
              printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
              exit();
            }

            $result = "INSERT INTO Incluyen (IdReparacion,IdRecambio) VALUES($repar,'$pieza');";

            if ($connection->query($result) === TRUE) {
              echo "<p>Se ha modificado correctamente</p>";
              echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
            } else {
              echo "<p>Error updating record: " . $connection->error."</p>";
              echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
            }

            $connection->close();

            }
          } else {


        $idReparacion=$_GET['id'];
        echo "<h1>Pieza a añadir en reparación $idReparacion</h1>";

      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

      if ($connection->connect_errno) {
          printf("Conexion fallida: %s\n", $mysqli->connect_error);
          exit();
      }

      if ($result = $connection->query("SELECT IdRecambio,Descripcion,Stock FROM RECAMBIOS;")) {

  ?>


    <div><table style="border:1px solid black">
      <thead>
        <tr>
          <th>Recambio</th>
          <th>Descripcion</th>
          <th>Stock</th>
      </thead>

        <?php


      while($obj = $result->fetch_object()) {

          echo "<tr>";
          echo "<td>".$obj->IdRecambio."</td>";
          echo "<td>".$obj->Descripcion."</td>";
          echo "<td>".$obj->Stock."</td>";
          echo "</tr>";
      }

      echo "</table></div>";

        echo "<div><form method='post' action='pieza.php'>
              <input name='reparacion' value='$idReparacion' hidden>
              <select name='pieza' required>";
              $result = $connection->query("SELECT IdRecambio,Descripcion,Stock FROM RECAMBIOS;");
              while($obj = $result->fetch_object()) {
                            echo"<option value='$obj->IdRecambio'>$obj->Descripcion</option>";
                          }
              echo "</select>";
              echo "<input type='submit' value='Añadir'>";
              echo "</div>";



      $result->close();
      unset($obj);
      unset($connection);


  }
}


     ?>
  </body>
</html>
