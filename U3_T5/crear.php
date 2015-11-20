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
    <!--si en post no esta matricula.-->
    <?php if (!isset($_POST['matri'])): ?>
      <h1>Crear nueva reparación</h1>
        <form method='post' action='crear.php'>
              <fieldset style= 'background-color:#F2F2F2'>
                <table>
                  <tbody>
                    <tr>
                      <td style='display:none'><input type='text' name='id' value='$iden' readonly='readonly'></td>
                      <td>Matricula:</td>
                      <td>Fecha de entrada:</td>
                      <td>Fecha de salida:</td>
                    </tr>
                    <tr>
                      <td><select name='matri' required>
                      <?php
                        $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");
                        if ($connection->connect_errno) {
                            printf("Fallo conexion %s\n", $mysqli->connect_error);
                            exit();
                        }
                        if ($result = $connection->query("SELECT Matricula FROM VEHICULOS;")) {
                          while($obj = $result->fetch_object()) {
                            echo"<option value='$obj->Matricula'>$obj->Matricula</option>";
                          }

                            $result->close();
                            unset($obj);
                            unset($connection);

                        }

                       ?>
                      <td><input type='date' name='fechaEnt'></td>
                      <td><input type='date' name='fechaSal'></td>
                    </tr>
                    <tr>
                      <td colspan='2'>Averia:</td>
                      <td>Kms:</td>
                    </tr>
                    <tr>
                      <td colspan='2'><input type='text' name='averia' maxlength='200' size='50' required></td>
                      <td><input type='number' step='any' min='0' name='km' required></td>
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
                <textarea rows='4' cols='50' maxlength='250' name='obs'>Sin Comentarios</textarea>

                <p><input type='submit' name='editar' value='Crear reparacion'></p>

                <!--Si matricula esta en post.-->
              <?php else: ?>
                <?php
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

                    $result = "INSERT INTO REPARACIONES (IdReparacion,Matricula,FechaEntrada,FechaSalida,
                    Averia,Km,Observaciones,Reparado) VALUES(null,'$mat','$fe1','$fe2','$ave',$km,'$obs',$rep);";

                    if ($connection->query($result) === TRUE) {
                      echo "<p>Se ha creado correctamente</p>";
                      echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
                    } else {
                      echo "<p>Error updating record: " . $connection->error."</p>";
                      echo "<a href='reparaciones.php'>Volver a reparaciones</a>";
                    }

                    $connection->close();
                ?>
            <?php endif ?>
  </body>
</html>
