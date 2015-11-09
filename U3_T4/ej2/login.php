<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .error{
        color: red;
        font-size: 0.8em;
      }
    </style>
    <script type="text/javascript">
      $(function() {
        $( "#dialog" ).dialog();
      });
    </script>
  </head>
  <body>
    <div id="dialog" title="Login">
    <?php
      if (isset($_POST['login'])) {
        if ($_POST['login']=="Pepe" && $_POST['pass']=="1234") {
          header('Location: matricula.php');
        }
        else {
          echo "<span class='error'>ERROR! Usuario o contraseña incorrecto</span>";
        }
      }

     ?>
     <form class="login" action="login.php" method="post">
       <span>Usuario: </span><input type="text" name="login" required>
       <span>Contraseña: </span><input type="password" name="pass" required>
       <p><input type="submit" name="enviar" value="ENTRAR"></p>
     </form>
    </div>
  </body>
</html>
