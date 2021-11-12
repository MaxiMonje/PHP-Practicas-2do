<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet">
    

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
      <div class="container">

            <ul class="slider">
      <li id="slide1">
        <img src="imagenes/zombies.png"/>
      </li>
      <li id="slide2">
        <img src="imagenes/mk2.png"/>
      </li>
      <li id="slide3">
        <img src="imagenes/sf2.png"/>
        
      </li>
      <li id="slide4">
        <img src="imagenes/MegaMan.png"/>
        
      </li>
      <li id="slide5">
        <img src="imagenes/SuperstarSoccer.png"/>
        
      </li>
    </ul>
    
    <ul class="menu">
      <li>
        <a href="#slide1">-</a>
      </li>
      <li>
        <a href="#slide2">-</a>
      </li>
      <li>
        <a href="#slide3">-</a>
      </li>
      <li>
        <a href="#slide4">-</a>
      </li>
      <li>
        <a href="#slide5">-</a>
      </li>
    </ul>
    </div>
    <?php
      include "pie/pie.php";

    ?>

</body>
</html>