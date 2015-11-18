<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if (!isset($_GET['id'])) {
          header('Location: reparaciones.php');
        }else {
          $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

            if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $mysqli->connect_error);
              exit();
            }

            $id=$_GET['id'];
            $reparacion="DELETE FROM REPARACIONES WHERE IdReparacion=$id";
            $factura="DELETE FROM FACTURAS WHERE IdReparacion=$id";
            $intervienen="DELETE FROM Intervienen WHERE IdReparacion=$id";
            $incluyen="DELETE FROM Incluyen WHERE IdReparacion=$id";

            $connection->query($factura);
            $connection->query($intervienen);
            $connection->query($incluyen);
            $connection->query($reparacion);
            
            header('Location: reparaciones.php');
          }
     ?>
  </body>
</html>
