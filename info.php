<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<script src="js/jquery-3.6.0.js"></script>
	<script src="js/script.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<section class="form_wrap">
		<section class="contact_info">
			<section class="title_info">     
				<span class="fa fa-user-circle"></span>
				<h1>Contactanos</h1><br>
				<p>Para más información, escribemos en:</p>
			</section>
			<section class="info_mail">
				<p>
					<span class="fa fa-envelope"></span>
					info@universidadiuem.net
				</p>
				<p>
					<span class="fa fa-whatsapp"></span>
					7226823029
				</p>
			</section>
		</section>

	<form action="validarinfo.php" class="contact_form" method="POST">
		<h2>O bien, ingresa tus datos en el siguiente formulario y en breve nos pondremos en contacto contigo</h2>
		<div class="user_info">
			<label for="names">Nombre(s)</label>
			<input type="text" id="names" name="names">
			<label for="phone">Telefono</label>
			<input type="tel" id="phone" name="phone">
			<label for="email">Correo electronico</label>
			<input type="email" id="email" name="email">
			<label for="mensaje">Mensaje</label>
			<textarea name="mensaje" id="mensaje" cols="30" rows="3"></textarea>


			<button type="submit"> <a href="#">Envíar</a> </button>
			
		</div>
	</form>
</section>
</body>
</html>