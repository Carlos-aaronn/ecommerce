<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pr6.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Cilindrizate</title>
</head>
<body>
    <div class="banner">
        <div class="logo">
            <img src="img/logos.png" alt="Logo">
        </div>
        <div class="enlaces-header">
            <a href="somos.php">¿Quienes somos?</a>
            <a href="prueba.php">Catalogo</a>
            <a href="log.php">Cerrar Sesion</a>
            <a href="carrito.php">Carrito</a>
        </div>
    </div>
    <br>
    <div class="contenedor-producto">
        <div class="imagen-producto">
            <img src="img/6.jpeg" alt="Producto">
        </div>
        <div class="detalles-producto">
            <h2>Cilindrizate</h2>
            <p class="precio">Precio $380</p>
            <p>Este diseño no solo asegura una base estable y robusta, sino que también aporta un toque rústico y natural que complementa el estilo de decoración en interiores y exteriores. La combinación de la forma cilíndrica y la base hacen que estas macetas sean una opción versátil y atractiva.</p><br><br>
            <p>Selecciona un color</p>
            <div class="colores">
                <div class="color" style="background-color: black;" data-color="Negro"></div>
                <div class="color" style="background-color: white;" data-color="Blanco"></div>
                <div class="color" style="background-color: aquamarine;" data-color="Aqua"></div>
                <div class="color" style="background-color: grey;" data-color="Gris"></div>
            </div><br>
            <button class="boton-agregar">Agregar al Carrito</button>  
            <button class="boton-agregar" onclick="window.location.href='prueba.php';">Regresar</button>
            <div class="cantidad-producto">
                <input type="number" min="1" max="10" value="1">
                <button class="boton-aceptar">Aceptar</button>
            </div>
            <div class="notificacion">Agregado correctamente al carrito</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colores = document.querySelectorAll('.color');
            const botonAgregar = document.querySelector('.boton-agregar');
            const cantidadProducto = document.querySelector('.cantidad-producto');
            const botonAceptar = document.querySelector('.boton-aceptar');
            const notificacion = document.querySelector('.notificacion');
            let colorSeleccionado = null;
            let cantidad = 1;

            colores.forEach(color => {
                color.addEventListener('click', function() {
                    colores.forEach(c => c.classList.remove('seleccionado'));
                    this.classList.add('seleccionado');
                    colorSeleccionado = this.getAttribute('data-color');
                });
            });

            document.querySelector('input[type="number"]').addEventListener('change', function() {
                cantidad = this.value;
            });

            botonAgregar.addEventListener('click', function() {
                if (!colorSeleccionado) {
                    alert('Por favor, seleccione un color.');
                } else {
                    const producto = {
                        nombre: 'Cilindrizate',
                        precio: 380,
                        color: colorSeleccionado,
                        cantidad: cantidad
                    };
                    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
                    carrito.push(producto);
                    localStorage.setItem('carrito', JSON.stringify(carrito));
                    window.location.href = 'carrito.php';
                }
            });

            botonAceptar.addEventListener('click', function() {
                notificacion.style.display = 'block';
                setTimeout(() => {
                    notificacion.style.display = 'none';
                }, 5000);
            });
        });
    </script>
</body>
</html>
