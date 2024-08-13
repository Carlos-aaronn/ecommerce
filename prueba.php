<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pruestilos.css">
  <title>Hiedra Macetas</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    /* Estilos para el fondo de la sección superior */
    .header {
      background-image: url('img/ff.jpg'); 
      background-size: cover;
      background-position: center;
      height: 600px; 
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }
      
    /* Estilos para el título */
    .titulo {
      background-color: rgba(0, 0, 0, 0.5); 
      padding: 20px;
      font-size: 36px;
      text-align: center;
      opacity: 1;
      animation: fadeInOut 10s infinite;
    }

    @keyframes fadeInOut {
      0%, 100% {
        opacity: 0;
        transform: translateY(20px);
      }
      50% {
        opacity: 1;
        transform: translateY(0);
      }
    }
      
    /* Estilos para el banner */
    .banner {
      font-family: "Archivo", sans-serif;
      position: sticky;
      top: 0;
      background-color: #333;
      color: #fff;
      padding: 15px 0;
      text-align: center;
      z-index: 1000; 
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .banner a {
      border-top: 15%;
      color: white; 
      text-decoration: none; 
      padding: 10px 20px; 
      transition: color 0.3s, background-color 0.3s; 
    }
    .banner a:hover {
      color: #fff; 
      background-color: rgba(255, 255, 255, 0.1); 
      border-radius: 5px; 
    }
    .banner a.active {
      color: #fff; 
      font-weight: 700; 
    }
    .logo {
      height: 50px;
    }
    .logo img {
      height: 100%;
      vertical-align: top;
      width: auto;
    }

    /* Contenido principal */
    .contenido-principal {
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.5);
    }

    /*catálogo */

    .catalogo {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }
    .producto {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 20px;
      width: 30%;
      text-align: center;
      padding: 20px;
      transition: transform 0.3s ease;
    }
    .producto img {
      width: 100%;
      height: auto;
      border-bottom: 1px solid #ddd;
      padding-bottom: 20px;
      height: 200px;
      width: 200px;
    }
    .producto h3 {
      font-size: 24px;
      margin: 10px 0;
    }
    .producto p {
      font-size: 16px;
      color: #555;
    }
    .producto .precio {
      font-size: 20px;
      color: #e60000;
      margin: 10px 0;
    }
    .producto button {
      background-color: #64c27b;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      margin: 10px 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .producto button:hover {
      background-color: #555;
    }
    .producto:hover {
      transform: translateY(-10px);
    }
  </style>
</head>
<body>
  <!-- Sección superior con imagen de fondo -->
  <div class="header">
    <div class="titulo">
      <h1>Hiedra Macetas</h1>
    </div>
  </div>
  
  <!-- Banner fijo -->
  <div class="banner">
    <div class="logo">
      <img src="img/logos.png" alt="Logo">
    </div>
    <div class="enlaces-header">
      <a href="somos.php">¿Quienes somos?</a>
      <a href="info.php">Contáctanos</a>
      <a href="log.php">Cerrar sesión</a>
      <a href="carrito.php">Carrito</a>
    </div>
  </div>
  
  <!-- CATALOGO -->
  <div class="contenido-principal">
    <div class="catalogo">
      <div class="producto">
        <img src="img/1.jpeg" alt="Producto 1">
        <h3>Maceta Auto-riego Elegante</h3>
        <p>Cuenta con un sistema de auto-riego que asegura que tus plantas reciban la cantidad adecuada de agua</p>
        <p class="precio">$120</p>
        <button onclick="window.location.href='prod1.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/2.jpeg" alt="Producto 2">
        <h3>Maceta Colgante Feliz</h3>
        <p>No solo embellece tu entorno sino que también te arranca una sonrisa </p>
        <p class="precio">$150</p>
        <button onclick="window.location.href='prod2.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/3.jpeg" alt="Producto 3">
        <h3>Geometria Moderna</h3>
        <p>Estas macetas son perfectas para aquellos que buscan combinar funcionalidad con estilo</p>
        <p class="precio">$369</p>
        <button onclick="window.location.href='prod3.php';">Ver más</button>
      </div>

      <div class="producto">
        <img src="img/4.jpeg" alt="Producto 1">
        <h3>Esferico</h3>
        <p>Perfectas para suculentas, flores, hierbas y más, estas macetas son una adición imprescindible</p>
        <p class="precio">$820</p>
        <button onclick="window.location.href='prod4.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/5.jpeg" alt="Producto 2">
        <h3>Cuadra tu Mundo</h3>
        <p>Este diseño integrado no solo ayuda a proteger tus superficies, sino que también añade un toque decorativo sofisticado</p>
        <p class="precio">$500</p>
        <button onclick="window.location.href='prod5.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/6.jpeg" alt="Producto 3">
        <h3>Cilindrizate</h3>
        <p>Presentan un diseño elegante y funcional, ideales para embellecer cualquier espacio</p>
        <p class="precio">$380</p>
        <button onclick="window.location.href='prod6.php';">Ver más</button>
      </div>

      <div class="producto">
        <img src="img/7.jpeg" alt="Producto 1">
        <h3>Amor</h3>
        <p>Añade un toque de amor y encanto a tu espacio </p>
        <p class="precio">$165</p>
        <button onclick="window.location.href='prod7.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/8.jpeg" alt="Producto 2">
        <h3>Maceta Titania</h3>
        <p>Es una elegante maceta semi cuadrada diseñada especialmente para plantas grandes.</p>
        <p class="precio">$300</p>
        <button onclick="window.location.href='prod8.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/9.jpeg" alt="Producto 3">
        <h3>Arco Dorado</h3>
        <p>Es una elegante solución de jardinería diseñada para plantas medianas</p>
        <p class="precio">$300</p>
        <button onclick="window.location.href='prod9.php';">Ver más</button>
      </div>

      <div class="producto">
        <img src="img/10.jpeg" alt="Producto 1"> 
        <h3>Semi-Circulum</h3>
        <p>Su tamaño compacto es perfecto para interiores y balcones, proporcionando a tus plantas un entorno acogedor y estilizado.</p>
        <p class="precio">$85</p>
        <button onclick="window.location.href='prod10.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/11.jpeg" alt="Producto 2"> 
        <h3>Urbano</h3>
        <p> Ideal para aquellos que buscan combinar funcionalidad y estilo en sus áreas verdes.</p>
        <p class="precio">$462</p>
        <button onclick="window.location.href='prod11.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/12.jpeg" alt="Producto 3">
        <h3>Talavera</h3>
        <p> Ideal para interiores y exteriores, su diseño robusto asegura durabilidad</p>
        <p class="precio">$200</p>
        <button onclick="window.location.href='prod12.php';">Ver más</button>
      </div>

      <div class="producto">
        <img src="img/13.jpeg" alt="Producto 1"> 
        <h3>Cactus Elegance</h3>
        <p>Es una pieza distintiva con un diseño semidiamante que combina funcionalidad y estilo. </p>
        <p class="precio">$85</p>
        <button onclick="window.location.href='prod13.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/14.jpeg" alt="Producto 2">
        <h3>Massangeana</h3>
        <p>Es la elección perfecta para quienes desean combinar funcionalidad y estilo en su jardín</p>
        <p class="precio">$550</p>
        <button onclick="window.location.href='prod14.php';">Ver más</button>
      </div>
      <div class="producto">
        <img src="img/15.jpeg" alt="Producto 3">
        <h3>Verde Hogar</h3>
        <p>Un conjunto de macetas diseñadas para embellecer y revitalizar cualquier espacio de tu hogar. </p>
        <p class="precio">$370</p>
        <button onclick="window.location.href='prod15.php';">Ver más</button>
      </div>
    </div>
  </div>
</body>
</html>