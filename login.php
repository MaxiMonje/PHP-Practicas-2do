<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>KinGames</title>
</head>
<body>

    <?php
        include "cabecera/cabecera.php";
    ?>
    
    <div id="cuadro">

        <div class="cuadro1">
            <form action="php/altausuario.php" method="POST">
                <b>Nombre:<b><br><input type="text" name="nombre" required="required" class="forma"><br>
                <b>Apellido:<b><br><input type="text" name="apellido"  required="required"class="forma"><br>
                <b>Email:<b><br><input type="email" name="mail" required="required"class="forma"><br>
                <b>Contraseña:<b><br><input type="password" name="contrasena" required="required"class="forma"><br><br>
                <input type="submit" Value="Registrarse">
        
            </form>
        </div>
            <br>
        <div class="cuadro2">    
            <form action="php/ingresar.php" method="POST">
            
                <b>Email:<b><br><input type="email" name="usuario" required="required"class="forma"><br>
                <b>Contraseña:<b><br><input type="password" name="password" required="required" class="forma"class="forma"><br><br>
                <input type="submit" value="Iniciar sesion" >
            
            </form>
       </div>
      </div>

    <?php
        include "pie/pie.php";
    ?>

</body>
</html>