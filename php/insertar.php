<?php
    $servidor = "localhost";
    $basedatos = "kingames";
    $usuario = "root";
    $contrasena = "root";

    $db = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $contrasena);

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['nombre']) && isset($_POST['anio'])){

        $sql = "insert into juegos (nombre, anio, id_consola, id_genero)
        values ('".$_POST['nombre']."',".$_POST['anio'].",".$_POST['consolas'].",".$_POST['generos'].")";
        
        $consulta = $db->prepare($sql);

        if($consulta->execute()){
            echo '<script>alert("Se agrego correctamente");</script>';
            echo '<script>window.location.replace("http://localhost/php/proyecto/admin.php");</script>';
        }else{
            echo '<script>alert("ERROR. No se agrego");</script>';
            echo '<script>window.location.replace("http://localhost/php/proyecto/admin.php");</script>';
        }

    }
 
}


?>
