<?php
    try{
        if(isset($_POST["enviar"])){
            if(!empty($_POST["nombre"]) && !empty($_POST["areaTexto"]) && !empty($_POST["mail"])){
                $nombre=$_POST["nombre"];
                $email=$_POST["mail"];
                $comentario=$_POST["areaTexto"];
                $asunto="Contacto KinGames";
                $header = "From: noreply@example.com" . 
                
                
                
                if($mail){
                    ?>
            <script>alert("Se ha enviado el comentario"); </script><?php
                }
            }
        }
    } catch(Exception e)
    {
        
    } finally{
        header("Location:../index.php");
    }
    
    ?>
   
