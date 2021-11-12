<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/dudas.css" rel="stylesheet" type= "text/css">
    
    <title>KinGames</title>
    
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

<br><br>
        <div class="contenedor">
       <b> Preguntas frecuentes:<b> 
        </div>
        <br><br><br>
        
    <div class="contenedor2">
            
            <section id="pregunta1">
              
                <a href="#pregunta1">¿Cuantos consolas tiene la Multi-consola retro?</a>
                <p>
                La Multi-consola retro incluye más de 20 consolas. Entre las mas importantes se encuentran:
                Nintendo, Super Nintendo, Nintendo 64, SEGA, Dreamcast, Playstation 1, Game Boy Color, Game Boy Advance
                Atari 2600, Atari 5200, Atari 7800, MAME (Juegos de arcade), NEO GEO, Commodore 64, etc. 
                </p>
                 
            </section>

            <section id="pregunta2">
                <a href="#pregunta2">¿Cuántos juegos incluye?</a>
                <p>
                La consola cuenta con al rededor de 10.000 juegos. Algunos tienen mas de una versión (Japon, Estados Unidos, Europa).
                Esto hace que uno pueda disfrutar de las distinas versiones que salieron de los juegos mas emblematicos. También 
                ayuda a la hora de jugar en red (La misma tiene conexión a internet a través de Wireless y Ethernet).
                </p>

            </section>

            <section id="pregunta3">
                <a href="#pregunta3">¿Sirve para televisores nuevos con entrada HDMI?</a>
                <p>
                Si, la consola tiene conexión HDMI(La resolucion es FULL HD). También se puede conectar con televisores convencionales
                para darle ese toque retro (a través de un adaptador HDMI a RCA) y a monitores antiguos (a través de un adaptador HDMI a VGA)
                El menu de la consola cuenta con todos los tipos de resoluciones, para los distintos tipos de tamaño.
                </p>

            </section>

            <section id="pregunta4">
                <a href="#pregunta4">Calienta mucho?</a>
                <p>
                No, en absoluto. La consola se puede usar por horas sin ningun tipo de problema (se hicieron prueba de mas de 12 horas). A diferencia
                de las consolas antiguas (Family, SEGA, etc) que el transformador levantaba altas temperaturas en un periodo corto de tiempo.
                También  para su tranquilidad tiene una opcion el menu para poder testear la temperatura.
                </p>

            </section>


    </div> <br><br><br><br>

    <?php
      include "pie/pie.php";

    ?>

</body>
</html>