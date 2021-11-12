<?php
    session_start();

    
    $servidor = "localhost";
    $basedatos = "kingames";
    $usuario = "root";
    $contrasena = "root";

    $db = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $contrasena);
    
?>


<?php
header("Content-disposition: attachment; filename=boston.txt");
header("Content-type: MIME");
readfile("boston.txt");
?>
