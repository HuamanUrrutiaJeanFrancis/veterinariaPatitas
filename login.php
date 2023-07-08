<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <title>login</title>
  

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilo3.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    
</head>
<body>

<!-- contenedor para el logo y el menu -->
<header>
  <div id="area-logo">
    <span class="grande">
      VETERINARIA
    </span><br>
    <span class="pequenio">
      Patitas
    </span>
  </div>
  <div id="area-menu">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="login.php">Entrar al sistema</a></li>
      <li><a href="registro.php">Registro del cliente</a></li>
   
      
    </ul>
  </div>
</header>
<article>
  <div class="banner">
    <span class="estrellas">
      ★ ★ ★ ★ ★
    </span>
    <br>
    <span class="bienvenido">
      Bienvenido a
    </span><br>
    <h1>
      Veterinaria Patitas
    </h1>
    <h2><strong><span class="slogan">las manañas son hermosas especialmente si te despiertas en una linda mascota </span></strong></h2>


   
   
  </div>
  <div id="contenido">
      <form action="validar.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Sistema de login</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
   
   </form> 

  </div>
</article>


</body>
</html>
