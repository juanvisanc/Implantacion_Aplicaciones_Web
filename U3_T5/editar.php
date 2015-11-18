<!DOCTYPE html>
<html>
  <head>
    <style media="screen">
      body{
        width: 600px;
        margin: 0 auto;
        margin-top: 50px;
      }
      h1{
        text-align: center;
      }
      textarea{
        resize:none;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        if (!isset($_GET['id'])) {
          header('Location: reparaciones.php');
        }else {

          $id=$_GET['id'];
          echo "<h1>Acualizar reparación número $id </h1>";
          $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");


          if ($connection->connect_errno) {
            printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
            exit();
          }

          if ($result = $connection->query("SELECT * FROM REPARACIONES WHERE IdReparacion=$id;")) {
            while($obj = $result->fetch_object()) {
              $mat=$obj->Matricula;
              $fe1=$obj->FechaEntrada;
              $fe2=$obj->FechaSalida;
              $km=$obj->Km;
              $ave=$obj->Averia;
              $rep=$obj->Reparado;
              $obs=$obj->Observaciones;

            }
          }

          echo '<form method="post" action="#">
              <fieldset style= "background-color:#F2F2F2">
                <table>
                  <tbody>
                    <tr>
                      <td>Matricula:</td>
                      <td>Fecha de entrada:</td>
                      <td>Fecha de salida:</td>
                    </tr>
                    <tr>
                      <td><input type="text" name="matri" value="'.$mat .'" maxlength="8"</td>
                      <td><input type="date" name="fechaEnt" value="'.$fe1 .'"</td>
                      <td><input type="date" name="fechaSal" value="'.$fe2 .'"</td>
                    </tr>
                    <tr>
                      <td colspan="2">Averia:</td>
                      <td>Kms:</td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="text" name="averia" value="'.$ave .'" maxlength="200" size="50"</td>
                      <td><input type="number" step="any" min="0" value="'.$km.'"</td>
                    </tr>
                    <tr>
                      <td>Reparado:</td>
                    </tr>
                    <tr>
                      <td><input type="radio" name="beca" value="si" required>Sí</input>
                      <input type="radio" name="beca" value="no" required>No</input>
                    </tr>
                    <tr>
                      <td>Observaciones:</td>
                    </tr>
                  </tbody>

                </table>
                <textarea rows="4" cols="50" maxlength="250">'.$obs.'</textarea>
                ';

      }?>
  </body>
</html>
