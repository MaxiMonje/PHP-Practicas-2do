<?php
    $servidor = "127.0.0.1";
    //base de datos
    $basedatos = "kingames";
    //usuario
    $usuario = "root";
    //contraseña 
    $contrasena = "root";

    //Establecemos conexión
    $db = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $contrasena);

    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['contrasena']) && isset($_POST['nombre'])&& isset($_POST['apellido']) && isset($_POST['mail'])){ 

            $sql = "select mail from usuarios where mail = '".$_POST['mail']."'";

            $consulta = $db->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll();
            
            if ($resultado) {

                echo '<script>alert("Este email ya esta registrado");</script>';
                
                echo '<script>window.location.replace("http://localhost/php/proyecto/login.php");</script>';
                
            }else{
                $sql = "insert into 
                usuarios (id_permiso, contrasena, nombre, apellido, mail)
                values ( :id_permiso, md5(:contrasena), :nombre, :apellido, :mail)"; 
    
                $consulta = $db->prepare($sql);
    
                //Especificar los valores de los parámetros
               
                
                $idPermiso = "2";   
                $contrasena = $_POST['contrasena'];        
                $nombre = $_POST['nombre']; 
                $apellido = $_POST['apellido'];
                $mail = $_POST['mail'];
    
                //$consulta->bindParam(':id_usuario', $idusuario);
                $consulta->bindParam(':id_permiso', $idPermiso);
                $consulta->bindParam(':contrasena', $contrasena);
                $consulta->bindParam(':nombre',     $nombre);
                $consulta->bindParam(':apellido',   $apellido);
                $consulta->bindParam(':mail',       $mail);
    
                if ($consulta->execute()) {
                    echo 'Se ha insertado correctamente: '.$nombre.' - '.$apellido.' - '.$mail.' - '.$contrasena.' - ';
                }else{
                    echo 'ERROR. No se ha podido insertar estos valores: '.$nombre.' - '.$contrasena.' - '.$apellido.' - '.$mail.'';
                }
                   
                $consulta->fetchAll();
                header("Location:../bienvenidaUsuario.php");
        
    
            }
        }
    }
       
?>
