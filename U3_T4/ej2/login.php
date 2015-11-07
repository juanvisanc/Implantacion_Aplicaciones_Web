<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      $(function() {
        $( "#dialog" ).dialog();
      });
    </script>
  </head>
  <body>
    <div id="dialog" title="Login">
      <form class="login" action="matricula.php" method="post">
        <span>Usuario: </span><input type="text" name="login" required>
        <span>Contraseña: </span><input type="password" name="pass" required>
        <p><input type="button" name="enviar" value="login"></p>
      </form>
    </div>
    <?php
      if (isset($_POST['login'])) {
        if (condition) {
          
        }
      }
     ?>
  </body>
</html>
