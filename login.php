<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/logestilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section>
        <form action="validar.php" method="post">
            <h1>Inicio</h1>
            <div class="box">
                <ion-icon name="email-outline"></ion-icon>
                <input type="email" id="correo" name="correo" required>
                <label for="">Usuario</label>
            </div>
            <div class="box">
                <ion-icon name="lock-closed-ouline"></ion-icon>
                <input type="password" id="contraseña" name="contraseña" required>
                <label for="">Contraseña</label>
            </div>
            <div class="forget">
                <a href="politicas.php"><label for=""><input type="checkbox" role="switch"; style="background-color: #64c27b;" checked>Acepto los términos y condiciones</label><br></a>  
                <a href="olvidecontra.php">Olvidé la contraseña</a>
            </div>
            <button type="submit"> <a href="">Iniciar</a> </button>
            <div class="register">
                <p>No tengo cuenta <a href="registro.php" target="_blank">Registrate</a></p>
            </div>
        </form>
    </section>
</body>
</html>