<?php   
    session_start();

    $servidor = "127.0.0.1";
    //base de datos
    $basedatos = "kingames";
    //usuario
    $usuario = "root";
    //contraseña 
    $contrasena = "root";

    //Establecemos conexión
    $db = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $contrasena);

    $sql = "select mail, contrasena from usuarios where id_permiso = 1";

            $consulta = $db->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll();
            
            foreach ($resultado as $valores):

            $_SESSION['usuario'] =  $valores['mail'];
            $_SESSION['password'] = $valores['contrasena'];

            endforeach;

    
    $_SESSION['sesionAdmin'] = false;
    $_SESSION['sesionActiva'] = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['usuario']) && isset($_POST['password'])) {
            if (isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin'])  
                && ($_SESSION['usuario'] == $_POST['usuario'] && $_SESSION['password'] == md5($_POST['password']))){
                
                $_SESSION['sesionAdmin'] = true;
                $_SESSION['sesionActiva'] = true;

            }
            
            else if(isset($_SESSION['sesionActiva']) && isset($_SESSION['sesionAdmin'])){

                $_SESSION['sesionActiva'] = true;
                $_SESSION['usuario'] = $_POST['usuario'];
                $_SESSION['password'] = md5($_POST['password']);
            
            }
        }
    }

    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['usuario']) && isset($_POST['password']) && $_SESSION['sesionAdmin'] == false){ 

            $sql = "select mail, contrasena from usuarios where mail = '".$_POST['usuario']."' and contrasena = md5('".$_POST['password']."')";

            $consulta = $db->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll();
            
            foreach ($resultado as $valores):

                if ($_SESSION['usuario'] == $valores['mail'] && $_SESSION['password'] ==  $valores['contrasena']) {

                    $_SESSION['sesionActiva'] = true;
                    header("Location:../index.php");
                    
                }
              
            endforeach;
        
            echo '<script>alert("Usuario y/o contraseña incorrectas");</script>';
            echo '<script>window.location.replace("http://localhost/proyecto/login.php");</script>';
        }else{

            header("Location:../index.php");
            
        }
    }
       
?>
