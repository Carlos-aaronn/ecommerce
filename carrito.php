<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Carrito de Compras</h1>
        <div class="cart">
            <div class="cart-header">
                <h2>Productos en tu carrito</h2>
            </div>
            <div class="cart-items" id="cart-items">
                <!-- Los productos se cargarán aquí con JavaScript -->
            </div>
            <div class="cart-total">
                <h3 id="total">Total: $0</h3>
                <div class="buttons-container">
                    <a href="pago.php"><button class="checkout-btn">Proceder al Pago</button></a>  
                    <button class="checkout-btn catalog-btn" id="catalogo-btn">Catálogo</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartItemsContainer = document.getElementById('cart-items');
            const totalElement = document.getElementById('total');
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            let total = 0;

            carrito.forEach((item, index) => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('cart-item');
                itemElement.innerHTML = `
                    <div class="item-info">
                        <img src="img/${item.imagen}" alt="${item.nombre}">
                        <h3>${item.nombre}</h3>
                        <p>Color: ${item.color}</p>
                        <p>Cantidad: ${item.cantidad}</p>
                    </div>
                    <div class="item-actions">
                        <span>$${item.precio * item.cantidad}</span>
                        <input type="number" value="${item.cantidad}" min="1" data-index="${index}">
                        <button class="remove-btn" data-index="${index}">Eliminar</button>
                    </div>
                `;
                cartItemsContainer.appendChild(itemElement);
                total += item.precio * item.cantidad;
            });

            totalElement.textContent = `Total: $${total.toFixed(2)}`;

            cartItemsContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-btn')) {
                    const index = event.target.getAttribute('data-index');
                    carrito.splice(index, 1);
                    localStorage.setItem('carrito', JSON.stringify(carrito));
                    window.location.reload();
                }
            });

            cartItemsContainer.addEventListener('change', function(event) {
                if (event.target.type === 'number') {
                    const index = event.target.getAttribute('data-index');
                    const newCantidad = parseInt(event.target.value);
                    if (newCantidad > 0) {
                        carrito[index].cantidad = newCantidad;
                        localStorage.setItem('carrito', JSON.stringify(carrito));
                        window.location.reload();
                    }
                }
            });

            const catalogoBtn = document.getElementById('catalogo-btn');
            catalogoBtn.addEventListener('click', function() {
                window.location.href = 'prueba.php';
            });
        });
    </script>
</body>
</html>
