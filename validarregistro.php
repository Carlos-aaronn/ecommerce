<?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        if($pass == $pass2){
                include('conexion.php');
                $sql = "INSERT INTO usuarios(id,nombre,usuario,pass) VALUES('','$nombre','$correo','$pass')";
            
                $stmt = $conexion->prepare($sql);
                $stmt->execute();
               
                echo '<script type="text/javascript"> alert("Tu registro se concluyó con exito.");  window.location.href="login.php";</script>';
        } else {
                echo '<script type="text/javascript"> alert("Las contraseñas no coinciden, intentalo de nuevo.");  window.location.href="registro.php";</script>';
        }
       

