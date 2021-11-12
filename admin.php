<?php
    
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
    <link href="css/admin.css" rel="stylesheet">
    <title>KinGames</title>
</head>
<body>
    
    <?php
        include "cabecera/cabeceraAdmin.php";
    ?>
    <div class="contenedor">
        <div class="contenedor1">
        <div id="cuadrosup">  
        <h2>Agregar juegos</h2></div><br>  
        <form action="php/insertar.php" method="POST">
        <b>Nombre:<b>
             <input type="text" name="nombre">
            <br><br>
            <b> Año:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b><input type="number" name="anio" style="width: 170px";>
            <br><br>
            <b>Consola:<b>
            <select name="consolas"style="width: 178px;">
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
            <br><br>
            Genero:&nbsp; 
            <select name="generos"style="width: 178px;">
            <?php
            $sql = "SELECT nombre,id_genero FROM generos";           

            $consulta = $db->prepare($sql);
        
            $consulta->execute();
        
            $resultado = $consulta->fetchAll();
            foreach ($resultado as $valores):
                ?>
                <option value="<?php echo $valores['id_genero']?>">
                <?php
                    echo $valores['nombre'];
                ?>
                </option>
                <?php
            endforeach;
            ?>
            </select>
            <br>
            <br>
            <div  id="cuadroinf">
            <button type="submit">
                Agregar
            </button>
            <button type="reset">
                Limpiar
            </button></div>
        </form>
        </div>
    </div>


    <div class="contenedor">
    <br>
         <div  class="contenedor1">
        <div id="cuadrosup"><h2 id="estilo">Eliminar Juegos</h2></div><br>
            <form action="php/eliminar.php" method="POST">
            <b>Juego:<b> <br>
            <select name="juegos" size="3" style="width: 250px;" >
            <?php
            $sql = "SELECT nombre, id_juego, anio  FROM juegos";           
     
            $consulta = $db->prepare($sql);

            $consulta->execute();
        
            $resultado = $consulta->fetchAll();
            foreach ($resultado as $valores):
                ?>
                <option value="<?php echo $valores['id_juego']?>">
                <?php
                    echo $valores['nombre']." | ".$valores['anio'];

                ?>
                </option>
                <?php
            endforeach;
            ?>
            </select>
            <br><br>
            <select name="consolas" size="1" style="width:250px;" >
            <?php
            $sql = "SELECT nombre, id_consola FROM consolas";           
     
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
            <br><br>

          <div id="cuadroinf">  <button type="submit">
                Eliminar
            </button></div>
    </form>
    </div>
    </div> 


        <?php
            include "pie/pie.php";
        ?>

</body>
</html>