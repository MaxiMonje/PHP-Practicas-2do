<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/contacto.css" rel="stylesheet">
    <link href="css/formato.css" rel="stylesheet">
    <title>KinGames</title>
</head>
<body>
<div class="contenedor1">   
<?php
      if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin']) && ($_SESSION['sesionAdmin'] == true && $_SESSION['sesionActiva'] == true)){        
          include "cabecera/cabeceraAdmin.php";
      }else if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin']) && ($_SESSION['sesionAdmin'] == false && $_SESSION['sesionActiva'] == true)){
          include "cabecera/cabeceraUsuario.php";
      }else{
        include "cabecera/cabecera.php";
      }
      ?>
 </div>        
    
 <div >

<form id="formulario"  action="php/enviar.php" enctype="text/plain" method="POST">
    <table class="tabla">
        <tr>
            <td><b>Nombre:<b><br>
            <input name="nombre" id="nombre" type="text" required="required" class="forma"></td>
        </tr>
        <tr>
            <td>
            <b> Email:<b>
            <input name="mail" id="mail" type="email" required="required" class="forma"></td>
        </t><br>
        <tr>
            <td ><b>Comentario:<b>
            <textarea name="areaTexto" id="areaTexto" required="required"class="forma"></textarea></td>
        </tr>
        <br> 
        <tr>
            
            <td id="boton"><input type="submit" id="botonEnviar" name="enviar" value="Enviar"></td>
        </tr>
        
    </table><br>

</form>

</div>

    

    <?php
      include "pie/pie.php";

    ?>

</body>
</html>