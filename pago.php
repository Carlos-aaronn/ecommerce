<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Método de Pago</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    .contenedor {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    .titulo {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }
    .opcion-pago {
      margin-bottom: 15px;
    }
    .opcion-pago label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .opcion-pago input[type="radio"] {
      margin-right: 10px;
    }
    .detalles-pago {
      display: none;
      margin-top: 15px;
    }
    .detalles-pago input, .detalles-pago select {
      width: calc(100% - 22px);
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .detalles-pago input[type="submit"] {
      background-color: #333;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .detalles-pago input[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <div class="contenedor">
    <div class="titulo">
      <h1>Método de Pago</h1>
    </div>
    <form id="formulario-pago">
      <!-- Opción de PayPal -->
      <div class="opcion-pago">
        <label>
          <input type="radio" name="metodo_pago" value="paypal" required>
          PayPal
        </label>
        <div class="detalles-pago" id="paypal">
          <p>Será redirigido a PayPal para completar su pago de forma segura.</p>
          <input type="submit" value="Pagar con PayPal"></a>  
        </div>
      </div>
      <!-- Opción de Tarjeta -->
      <div class="opcion-pago">
        <label>
          <input type="radio" name="metodo_pago" value="tarjeta" required>
          Tarjeta de Crédito/Débito
        </label>
        <div class="detalles-pago" id="tarjeta">
          <select id="tipo-tarjeta" required>
            <option value="">Seleccione tipo de tarjeta</option>
            <option value="credito">Crédito</option>
            <option value="debito">Débito</option>
          </select>
          <input type="text" id="numero-tarjeta" placeholder="Número de Tarjeta" maxlength="16" pattern="\d{16}" required>
          <input type="text" id="nombre-titular" placeholder="Nombre del Titular" required>
          <input type="text" id="expiracion" placeholder="MM/AA" maxlength="5" pattern="\d{2}/\d{2}" required>
          <input type="text" id="cvv" placeholder="CVV" maxlength="3" pattern="\d{3}" required>
          <input type="submit" value="Pagar con Tarjeta">
        </div>
      </div>
      <!-- Opción de Pago contra Entrega -->
      <div class="opcion-pago">
        <label>
          <input type="radio" name="metodo_pago" value="contraentrega" required>
          Pago Contra Entrega
        </label>
        <div class="detalles-pago" id="contraentrega">
          <p>El pago se realizará al momento de la entrega del producto.</p>
          <input type="submit" value="Confirmar Pago Contra Entrega" onclick="mostrarAlerta(); return false;">
        </div>

      </div>
    </form>
  </div>
  <script>
        function mostrarAlerta() {
            alert("El pago está listo");
        }
    </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const metodoPagoInputs = document.querySelectorAll('input[name="metodo_pago"]');
      metodoPagoInputs.forEach(input => {
        input.addEventListener('change', mostrarDetallesPago);
      });

      function mostrarDetallesPago() {
        const detallesPago = document.querySelectorAll('.detalles-pago');
        detallesPago.forEach(detalle => {
          detalle.style.display = 'none';
        });
        const metodoSeleccionado = document.querySelector('input[name="metodo_pago"]:checked').value;
        document.getElementById(metodoSeleccionado).style.display = 'block';
      }
    });
  </script>
</body>
</html>
