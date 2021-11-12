<?php
session_start();
$_SESSION['sesionActiva'] = true;
$_SESSION['sesionAdmin'] = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bienvenida.css" rel="stylesheet">

    <title>KinGames </title>
    
</head>
<body>


    
    <?php
      if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin']) && ($_SESSION['sesionAdmin'] == true && $_SESSION['sesionActiva'] == true)){        
          include "cabecera/cabeceraAdmin.php";
      }else if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin']) && ($_SESSION['sesionAdmin'] == false && $_SESSION['sesionActiva'] == true)){
          include "cabecera/cabeceraUsuario.php";
      }else{
        include "cabecera/cabecera.php";
      }
      
    ?>
    
     <div class="contenedor">
     <h2>¡¡Gracias por registrarte a nuestro sitio!!</h2>
     <br><br>
     </div>   

    <?php
        include "pie/pie.php";
    ?>

    
</body>
</html>