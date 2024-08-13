<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<section>
		<form action="validarregistro.php" method="POST">
			<h1>Registrate</h1>
			<div class="box">
				<input type="text" id="nombre" name="nombre" required>
				<label for="">Nombre completo</label>
			</div>
			<div class="box">
				<ion-icon name="email-outline"></ion-icon>
				<input type="email" id="correo" name="correo" required>
				<label for="">Ingresa un email</label>
			</div>
			<div class="box">
				<ion-icon name="lock-closed-ouline"></ion-icon>
				<input type="password" id="pass" name="pass" required>
				<label for="">Ingresa una contraseña</label>
			</div>
			<div class="box">
				<ion-icon name="lock-closed2"></ion-icon>
				<input type="password" id="pass2" name="pass2" required>
				<label for="">Repite la contraseña</label><br>
			</div>
			<br><button type="submit"> <a href="#">	Registrar </a> </button>
		</form>
	</section>
</body>
</html>