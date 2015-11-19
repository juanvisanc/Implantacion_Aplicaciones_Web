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
      div{
        float: left;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php

      //si no esta id en GET.
        if (!isset($_GET['id'])) {
          //si no esta tampoco matricula en POST.
          if (!isset($_POST['matri'])) {
            header('Location: reparaciones.php');
          }
          //Si no esta en GET pero si en POST.
          else {
            $mat=$_POST['matri'];
            $fe1=$_POST['fechaEnt'];
            $fe2=$_POST['fechaSal'];
            $km=$_POST['km'];
            $ave=$_POST['averia'];
            $rep=$_POST['repar'];
            $obs=$_POST['obs'];
            $iden=$_POST['id'];

            $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");

            if ($connection->connect_errno) {
              printf("La conexión ha fallado: %s\n", $mysqli->connect_error);
              exit();
            }

            $result = "UPDATE REPARACIONES SET FechaEntrada='$fe1',FechaSalida='$fe2',Km=$km,
            Averia='$ave',Reparado=$rep,Observaciones='$obs' WHERE IdReparacion=$iden;";

            if ($connection->query($result) === TRUE) {
              echo "<p>Se ha modificado correctamente</p>";
              echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
            } else {
              echo "<p>Error updating record: " . $connection->error."</p>";
              echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
            }

            $connection->close();

            }

          }
          //si id esta en GET.
          else {

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
              $iden=$obj->IdReparacion;
            }
            $result->close();
            unset($obj);
            unset($connection);

          }
          /*Hemos puesto que matricula no se pueda modificar,
          ya que depende de la tabla VEHICULOS*/
          //Por supuesto la idreparacion tampoco.

          echo "<form method='post' action='editar.php'>
              <fieldset style= 'background-color:#F2F2F2'>
                <table>
                  <tbody>
                    <tr>
                      <td style='display:none'><input type='text' name='id' value='$iden'></td>
                      <td>Matricula:</td>
                      <td>Fecha de entrada:</td>
                      <td>Fecha de salida:</td>
                    </tr>
                    <tr>
                      <td><input readonly='readonly' type='text' name='matri' value='$mat' maxlength='8' required></td>
                      <td><input type='date' name='fechaEnt' value='$fe1'></td>
                      <td><input type='date' name='fechaSal' value='$fe2'></td>
                    </tr>
                    <tr>
                      <td colspan='2'>Averia:</td>
                      <td>Kms:</td>
                    </tr>
                    <tr>
                      <td colspan='2'><input type='text' name='averia' value='$ave' maxlength='200' size='50'></td>
                      <td><input type='number' step='any' min='0' value='$km' name='km'></td>
                    </tr>
                    <tr>
                      <td>Reparado:</td>
                    </tr>
                    <tr>
                      <td><input type='radio' name='repar' value=1 required>Sí</input>
                      <input type='radio' name='repar' value=0 required>No</input>
                    </tr>
                    <tr>
                      <td>Observaciones:</td>
                    </tr>
                  </tbody>

                </table>
                <textarea rows='4' cols='50' maxlength='250' name='obs'>$obs</textarea>

                <p><input type='submit' name='editar' value='Realizar modificaciones'></p>
                </fieldset>
                ";



      }?>
  </body>
</html>
