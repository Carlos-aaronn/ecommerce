<?php
        $nombre = $_POST['names'];
        $telefono = $_POST['phone'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        include('conexion.php');

        $sql = "INSERT INTO informacion(id,nombre,telefono,correo,mensaje) VALUES ('','$nombre','$telefono','$email','$mensaje')";
    
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
       
        echo '<script type="text/javascript"> alert("Tu mensaje se envío con exito.");  window.location.href="prueba.php";</script>';

        

