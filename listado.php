<?php
    session_start();

    
    $servidor = "localhost";
    $basedatos = "kingames";
    $usuario = "root";
    $contrasena = "root";

    $db = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $contrasena);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/listado.css" rel="stylesheet">
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
        <h3>Listado:<h3><br>
        <form method="GET">
          <select name="consolas">
          <?php
            $sql = "SELECT nombre,id_consola FROM consolas ";           

            $consulta = $db->prepare($sql);
        
            $consulta->execute();
        
            $resultado = $consulta->fetchAll();

            foreach ($resultado as $valores):
                ?>
                <option value="<?php echo $valores['id_consola']?>">
                <?php
                    echo $valores['nombre'];
                ?>
                </option>
                <?php
            endforeach;
            ?>
            </select>
            <button type="submit">Ver juegos</button><br>
            </form>
              <br>
                <?php
                    if ('GET' == $_SERVER['REQUEST_METHOD']) {
                      if (isset($_GET['consolas'])) {
                        
                $sql = "SELECT j.nombre FROM juegos j inner join consolas c on j.id_consola = c.id_consola where c.id_consola = ".$_GET['consolas'];          
        
                $consulta = $db->prepare($sql);
                $consulta->execute();
                $resultado = $consulta->fetchAll();
                
                ?>
                <h3>Juegos:<h3>
                <br>
                <div class="contenedor">
                <select size="25"  class="forma"><br><br></div>
                <?php
                foreach ($resultado as $valores):
                  ?>
                  <option>
                  <?php
                      echo $valores['nombre'];
                  ?>
                  </option>
                  <?php
             
                endforeach;

                }
              }
                ?>
                </select>
          <?php
          
          if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin']) && ($_SESSION['sesionAdmin'] == true && $_SESSION['sesionActiva'] == true)){        
            ?>
              
              <br><button>Descarga</button><br>
             
            <?php
          }else if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin']) && ($_SESSION['sesionAdmin'] == false && $_SESSION['sesionActiva'] == true)){
              ?>
              
              <br><button><a href="archivoDescarga/juegos.xlsx">Descarga</button></a><br>
              
              <?php
              }
              ?>

    </div>
    <?php
      include "pie/pie.php";

    ?>
</body>
</html>