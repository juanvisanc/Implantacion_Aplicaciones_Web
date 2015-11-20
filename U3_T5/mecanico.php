<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <style media="screen">
  body{
    width: 1000px;
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
  input{
    margin-left: 10px;
  }
  select{
    display: inline;
    width: 300px;
  }
  </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if (!isset($_GET['id'])) {
          if (!isset($_POST['mecanico'])) {
            header('Location: reparaciones.php');
          }

          else {
            $repar=$_POST['reparacion'];
            $mecanico=$_POST['mecanico'];


            $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

            if ($connection->connect_errno) {
              printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
              exit();
            }

            $result = "INSERT INTO Intervienen (CodEmpleado,IdReparacion) VALUES('$mecanico','$repar');";

            if ($connection->query($result) === TRUE) {
              echo "<p>Se ha modificado correctamente</p>";
              echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
            } else {
              echo "<p>Error updating record: " . $connection->error."</p>";
              echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
            }

            $connection->close();
            unset($connection);
            }
          } else {


        $idReparacion=$_GET['id'];
        echo "<h1>Mecánico a añadir en reparación $idReparacion</h1>";

      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

      if ($connection->connect_errno) {
          printf("Conexion fallida: %s\n", $mysqli->connect_error);
          exit();
      }

      if ($result = $connection->query("SELECT CodEmpleado,Nombre,Apellidos,Categoria FROM EMPLEADOS;")) {

  ?>


    <div><table style="border:1px solid black">
      <thead>
        <tr class="card-panel teal lighten-2">
          <th>Mecánico</th>
          <th>Nombre</th>
          <th>Categoría</th>
      </thead>

        <?php


      while($obj = $result->fetch_object()) {

          echo "<tr>";
          echo "<td>".$obj->CodEmpleado."</td>";
          echo "<td>".$obj->Nombre .$obj->Apellidos."Nombre</td>";
          echo "<td>".$obj->Categoria."</td>";
          echo "</tr>";
      }

      echo "</table></div>";

        echo "<div><form method='post' action='mecanico.php'>
              <input name='reparacion' value='$idReparacion' hidden>
              <select name='mecanico' required>";
              $result = $connection->query("SELECT CodEmpleado,Nombre,Apellidos FROM EMPLEADOS;");
              while($obj = $result->fetch_object()) {
                            echo"<option value='$obj->CodEmpleado'>$obj->Nombre $obj->Apellidos</option>";
                          }
              echo "</select>";
              echo "<input type='submit' class='btn waves-effect waves-light' value='Añadir'>";
              echo "</div>";



      $result->close();
      unset($obj);
      unset($connection);


  }
}



     ?>
  </body>
</html>
