<?php
    $servidor = "localhost";
    $basedatos = "kingames";
    $usuario = "root";
    $contrasena = "root";

    $db = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $contrasena);

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){

        $sql = "select nombre from juegos where id_juego = ".$_POST['juegos']." and id_consola = ".$_POST['consolas'];
            
        $consulta = $db->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();

        foreach ($resultado as $valores):

            if (!$valores['nombre']==null){

            $sql = "delete from juegos where id_juego = ".$_POST['juegos']." and id_consola = ".$_POST['consolas'];
        
            $consulta = $db->prepare($sql);
            $consulta->execute();
            
            echo '<script>alert("Se elimino correctamente");</script>';
            echo '<script>window.location.replace("http://localhost/php/proyecto/admin.php");</script>';

            }
        endforeach;
       
            echo '<script>alert("ERROR. No se elimino");</script>';
            echo '<script>window.location.replace("http://localhost/php/proyecto/admin.php");</script>';
        

}

?>
