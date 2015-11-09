<!DOCTYPE html>
<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        width: 1000px;
        margin: 0 auto;
        margin-top: 50px;
      }
      .asig{
          float: left;
          margin-left: 10px;
      }
      fieldset{
        margin-top: 10px;
      }
      .envio{
        float:right;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .error{
        color: red;
      }
      .resumen,h2{
        margin:5px 20px 5px 20px;
      }
      .contenedor{
        background-color: #CEECF5;
        border:1px solid black;
        border-radius: 10px 10px 10px 10px;
      }

    </style>
    <script>
    //He considerado que se matricula de primero o de segundo, no puede compatibilizar
      $(function() {
        $('#dos').hide();
        $('#uno').hide();
          $("select").change(function(event) {
               if($(this).val() == "primero"){
                 $('#dos').hide();
                 $('.check2').attr('checked', false);
                 $('#uno').show();
               }
              else if($(this).val() == "segundo"){
                  $('#uno').hide();
                  $('.check1').attr('checked', false);
                  $('#dos').show();
        }
      });
    });
    </script>
  </head>
  <body>
      <?php


          if (isset($_POST["asignatura"])) {

            $nombre=$_POST["Nombre"];
            $apellido=$_POST["Apellidos"];
            $dni=$_POST["dni"];
            $curso=$_POST["curso"];
            $asig=$_POST["asignatura"];
            $beca=$_POST["beca"];

           echo "<div class='contenedor'>";
           echo "<h2>Resumen de la matrícula</h2>";
           echo "<p class='resumen'>El alumno $nombre $apellido, ";
           echo "con DNI $dni, se matricula de $curso de ASIR ";
           echo "de las siguientes asignaturas:</p>";
           echo "<ul>";
           for ($i=0; $i < count($asig); $i++) {

               if ($asig[$i]=='PAR'){
                 echo "<li>Planificación y Administración de Redes</li>";
              }
               elseif($asig[$i]=='ISO'){
                 echo "<li>Implantación de Sistemas Operativos</li>";
               }
                elseif($asig[$i]=='FH'){
                  echo "<li>Fundamentos de Hardware</li>";
              }
                elseif($asig[$i]=='GBD'){
                  echo "<li>Gestión de Bases de Datos</li>";
              }
                elseif($asig[$i]=='LM'){
                  echo "<li>Lenguajes de Marca y Sistemas de Gestión de información</li>";
              }
                elseif($asig[$i]=='FOL'){
                  echo "<li>Formación y Orientación Laboral</li>";
              }
                elseif($asig[$i]=='ASO'){
                  echo "<li>Administración de Sistemas Operativos</li>";
              }
                elseif($asig[$i]=='SRI'){
                  echo "<li>Servicios de Red e Internet</li>";
              }
                elseif($asig[$i]=='IAW'){
                  echo "<li>Implantación de Aplicaciones web</li>";
              }
                elseif($asig[$i]=='ASGBD'){
                  echo "<li>Administración de Sistemas Gestores de bases de datos</li>";
              }
                elseif($asig[$i]=='SAD'){
                  echo "<li>Seguridad y Alta Disponibilidad</li>";
              }
                elseif($asig[$i]=='EMP'){
                  echo "<li>Empresa e iniciativa emprendedora</li>";
              }
             }


           echo "</ul>";
           echo "<p class='resumen'>El alumno confirma que <b>$beca</b> ha solicitado beca<p>";
           echo "</div>";
          }else {
            if (isset($_POST["Nombre"])){
              echo "<span class='error'>Debes elegir al menos una asignatura</span>";
          }
       ?>
       <div style="border:none;background-color:#F2F2F2">
           <h4 align="center">MATRICULA EN LOS CICLOS FORMATIVOS DE GRADO SUPERIOR</h4>
       </div>
       <form action="matricula.php" method="post">
               <fieldset style= "background-color:#F2F2F2">
                   <legend style="border:solid 3px #F2F2F2;background:white">Datos personales</legend>
                   <table>
                       <tbody>
                           <tr>
                               <td>Apellidos(*):</td>
                               <td>Nombre(*):</td>
                               <td>DNI(*):</td>
                           </tr>
                           <tr>
                               <td><input type="text" name="Apellidos" required></td>
                               <td><input type="text" name="Nombre" required></td>
                               <td><input type="text" name="dni" required></td>
                           </tr>
                           <tr>
                               <td>Nacido/a en:</td>
                               <td>Email:</td>
                               <td>Fecha de nacimiento:</td>
                           </tr>
                           <tr>
                               <td><input type="text" name="nacimiento"></td>
                               <td><input type="email" name="correo"></input></td>
                               <td><input type= "date" name="fechanac."></td>
                           </tr>
                           <tr>
                               <td>Domicilio (Calle, plaza y número):</td>
                               <td></td>
                               <td>C&oacute;digo postal:</td>
                           </tr>
                           <tr>
                               <td colspan="2"><input type= "text" name="domicilio" size="40"></td>
                               <td><input type="number" name="codigo" max="99999" min="0"></td>
                           </tr>
                           <tr>
                               <td>Localidad:</td>
                               <td>Provincia</td>
                               <td>Telefono:</td>
                           </tr>
                           <tr>
                               <td><input type= "text" name="localidad"></td>
                               <td><select name="provincia">
                                       <option value='0'>(Seleccionar)</option>
                                       <option value='2'>Álava</option>
                                       <option value='3'>Albacete</option>
                                       <option value='4'>Alicante/Alacant</option>
                                       <option value='5'>Almería</option>
                                       <option value='6'>Asturias</option>
                                       <option value='7'>Ávila</option>
                                       <option value='8'>Badajoz</option>
                                       <option value='9'>Barcelona</option>
                                       <option value='10'>Burgos</option>
                                       <option value='11'>Cáceres</option>
                                       <option value='12'>Cádiz</option>
                                       <option value='13'>Cantabria</option>
                                       <option value='14'>Castellón/Castelló</option>
                                       <option value='15'>Ceuta</option>
                                       <option value='16'>Ciudad Real</option>
                                       <option value='17'>Córdoba</option>
                                       <option value='18'>Cuenca</option>
                                       <option value='19'>Girona</option>
                                       <option value='20'>Las Palmas</option>
                                       <option value='21'>Granada</option>
                                       <option value='22'>Guadalajara</option>
                                       <option value='23'>Guipúzcoa</option>
                                       <option value='24'>Huelva</option>
                                       <option value='25'>Huesca</option>
                                       <option value='26'>Illes Balears</option>
                                       <option value='27'>Jaén</option>
                                       <option value='28'>A Coruña</option>
                                       <option value='29'>La Rioja</option>
                                       <option value='30'>León</option>
                                       <option value='31'>Lleida</option>
                                       <option value='32'>Lugo</option>
                                       <option value='33'>Madrid</option>
                                       <option value='34'>Málaga</option>
                                       <option value='35'>Melilla</option>
                                       <option value='36'>Murcia</option>
                                       <option value='37'>Navarra</option>
                                       <option value='38'>Ourense</option>
                                       <option value='39'>Palencia</option>
                                       <option value='40'>Pontevedra</option>
                                       <option value='41'>Salamanca</option>
                                       <option value='42'>Segovia</option>
                                       <option selected="selected" value='43'>Sevilla</option>
                                       <option value='44'>Soria</option>
                                       <option value='45'>Tarragona</option>
                                       <option value='46'>Santa Cruz de Tenerife</option>
                                       <option value='47'>Teruel</option>
                                       <option value='48'>Toledo</option>
                                       <option value='49'>Valencia</option>
                                       <option value='50'>Valladolid</option>
                                       <option value='51'>Vizcaya</option>
                                       <option value='52'>Zamora</option>
                                       <option value='53'>Zaragoza</option>
                                   </select></td>
                               <td><input type= "number" name="telefono" min="0" max="799999999"></td>
                           </tr>
                         </tbody>
                   </table>
               </fieldset>
               <fieldset style="background-color:#F5F6CE">
                 <legend style="border:solid 3px #F5F6CE;background:white">Solicitud</legend>
                 <p><span>El alumno desea matricularse en:</span>
                 <select name="curso"></p>
                   <option value="">--Selecciona curso--</option>
                   <option class="anio" value="primero">1º ASIR</option>
                   <option class="anio" value="segundo">2º ASIR</option>
                 </select>
                   <div class="asig" id="uno">
                     <table>
                       <thead>
                         <tr><th>Asignatiras de 1º:</th></tr>
                       </thead>
                       <tbody>
                         <tr><td><input class="check1" type="checkbox" name="asignatura[]" value="PAR">Planificación y Administración de Redes</input></td></tr>
                         <tr><td><input class="check1" type="checkbox" name="asignatura[]" value="ISO">Implantación de Sistemas Operativos</input></td></tr>
                         <tr><td><input class="check1" type="checkbox" name="asignatura[]" value="FH">Fundamentos de Hardware</input></td></tr>
                         <tr><td><input class="check1" type="checkbox" name="asignatura[]" value="GBD">Gestión de Bases de Datos</input></td></tr>
                         <tr><td><input class="check1" type="checkbox" name="asignatura[]" value="LM">Lenguajes de Marca y Sistemas de Gestión de información</input></td></tr>
                         <tr><td><input class="check1" type="checkbox" name="asignatura[]" value="FOL">Formación y Orientación Laboral</input></td></tr>
                       </tbody>
                     </table>
                   </div>
                   <div class="asig" id="dos">
                     <table>
                       <thead>
                         <tr><th>Asignatiras de 2º:</th></tr>
                       </thead>
                       <tbody>
                         <tr><td><input class="check2" type="checkbox" name="asignatura[]" value="ASO">Administración de Sistemas Operativos</input></td></tr>
                         <tr><td><input class="check2" type="checkbox" name="asignatura[]" value="SRI">Servicios de Red e Internet</input></td></tr>
                         <tr><td><input class="check2" type="checkbox" name="asignatura[]" value="IAW">Implantación de Aplicaciones web</input></td></tr>
                         <tr><td><input class="check2" type="checkbox" name="asignatura[]" value="ASGBD">Administración de Sistemas Gestores de bases de datos</input></td></tr>
                         <tr><td><input class="check2" type="checkbox" name="asignatura[]" value="SAD">Seguridad y Alta Disponibilidad</input></td></tr>
                         <tr><td><input class="check2" type="checkbox" name="asignatura[]" value="EMP">Empresa e iniciativa emprendedora</input></td></tr>
                       </tbody>
                     </table>
                   </div>
               </fieldset>
               <fieldset style="background-color:#CEECF5">
                   <legend style="border:solid 3px #CEECF5;background:white">Beca</legend>
                   El usuario ha pedido beca:
                   <input type="radio" name="beca" value="sí" required>SÍ</input>
                   <input type="radio" name="beca" value="no" required>NO</input>
               </fieldset>
               <input class="envio" type="submit" value="Enviar">

           </form>
           <?php } ?>
  </body>
</html>
