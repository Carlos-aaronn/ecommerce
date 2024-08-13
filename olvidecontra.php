<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/olvide.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<section>
		<form id="passwordForm">
			<h1>¿Olvidaste tu contraseña?</h1><br>
			<p>Ingresa tu nombre completo, tal cual lo hiciste en la página de registro y se te otorgará una nueva contraseña.</p><br>
			<div class="box">
				<input type="text" id="fullName" required>
				<label for="fullName">Nombre completo</label>
			</div>
			<div id="password-box">
			<p>Tu nueva contraseña es: </p>
			<p id="newPassword"></p>
		</div>
			<br>
			<button type="submit">Enviar</button>
		</form>
		
	</section>

	<script>
		const storedName = "Fer Juarez"; 

		document.getElementById("passwordForm").addEventListener("submit", function(event) {
			event.preventDefault();
			const fullName = document.getElementById("fullName").value;

			if (fullName === storedName) {
				const newPassword = generatePassword(8);
				document.getElementById("newPassword").textContent = newPassword;
				document.getElementById("password-box").style.display = "block";

				setTimeout(() => {
					document.getElementById("password-box").style.display = "none";
					window.location.href = "log.html"; 
				}, 20000); 
			} else {
				alert("Nombre no encontrado. Por favor, verifica tu información.");
			}
		});

		function generatePassword(length) {
			const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			let password = "";
			for (let i = 0; i < length; i++) {
				const randomIndex = Math.floor(Math.random() * characters.length);
				password += characters[randomIndex];
			}
			return password;
		}
	</script>
</body>
</html>