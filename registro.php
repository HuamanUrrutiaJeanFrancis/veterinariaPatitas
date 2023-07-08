<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="estilo3.css">
</head>
<body>

<!-- contenedor para el logo y el menu -->
<header>
  <div id="area-logo">
    <span class="grande">
      VETERINARIA
    </span><br>
    <span class="pequenio">
      MASCOTAS
    </span>
  </div>
  <div id="area-menu">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="productos.php">Juguetes</a></li>
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
      Veterinaria
    </h1>
    <h2><strong><span class="slogan">las manañas son hermosas especialmente si te despiertas en una linda mascota </span></strong></h2>


   
         <div id="formulario-disponibilidad">
     
      <div class="fila2">
        <div class="columna">
          <label><br>Las Mascotas ​ Son los amigos mas leales que tendras, todos se iran pero ellos te esperan, lloran si te vas, vivir con ellos es la mejor experiencia, regalate la oportunidad</label>
          
        </div>
        <div class="columna">
          <label><br>En el Peru mas de 500 mil mascotas andan sin hogar, es tu oportunidad de hacer el cambio, ven a nuestro centro y solicita tu mascota!!</label>
          
        </div>
        <div class="columna">
          <a href="#">
            <button type="#">
              Verificar disponibilidad
            </button>
          </a>
        </div>
      </div>
    </div>
     

    <?php
     /* ?>
    <div id="formulario-disponibilidad">
      <div class="fila1">
        <div class="columna">
          <label>Fecha de inicio</label>
          <input type="text" name="fecha-inicio">
        </div>
        <div class="columna">
          <label>Fecha de fin</label>
          <input type="text" name="fecha-fin">
        </div>
      </div>
      <div class="fila2">
        <div class="columna">
          <label>Adultos</label>
          <input type="text" name="adultos">
        </div>
        <div class="columna">
          <label>Niños</label>
          <input type="text" name="ninos">
        </div>
        <div class="columna">
          <a href="disponibilidad.html">
            <button type="button">
              Verificar disponibilidad
            </button>
          </a>
        </div>
      </div>
    </div>
    <?php */ ?>
  </div>
  <form method="post" action="registror.php">
  <div id="contenido">
    <div class="machupicchu">
      <div class="columna">
        <span class="subtitulo">REGISTRO DE USUARIO</span>
        <strong>
        <h2>REGISTRO</h2>
        <p>
      
      <div id="formulario">
      <div class="fila1">
        <div class="columna">
          <label>USUARIO  --</label>
          <input type="text" name="usuario" id="usuario">
        </div>
        <div class="columna">
          <label>PASSWORD</label>
          <input type="text" name="password" id="password">
        </div>
      </div>
      <div class="fila2">
        <div class="columna">
          <label>NOMBRE --</label>
          <input type="text" name="nombre" id="nombre">
        </div>
        <div class="columna">
          <label>APELLIDO -</label>
          <input type="text" name="apellido" id="apellido">
        </div>
        <div class="columna">
          <label>----  DNI ---</label>
          <input type="text" name="dni" id="dni">
        </div>
        
        <div class="columna">
          <label>CORREO --</label>
          <input type="text" name="correo" id="correo">
        </div>
     
        
        <div class="columna">
          
          	<input type="submit" name="registrar" id="registrar" value="REGISTRAR USUARIO">
           
          
        </div>
      </div>
    </div>
        </p>
        <strong>
      </div>
      <div class="columna">
        <img src="pet5.jpg">
      </div>
    </div>

  </div>
</form>

</article>
<footer>
  <div class="columna primera">
    <span class="grande">
      Veterinaria
    </span><br>
    <span class="pequenio">
      Patitas
    </span><br>
    <p>
      Hola !!!!

      Bienvenido a la veterinaria Patitas..
      La vida o quizá el destino te ha traído hacia nosotros,
      eres muy afortunado (a), pues en él encontrarás un gran ambiente
      y un buen equipo de trabajo, claro que eso depende en gran medida de
      ti y de tu disposición de cooperar en lo que la veterinaria requiere.
    </p>

    <p>
      Esta nota es una manera de decirte que estamos felices de que te hayas unido a nosotros
    </p>
  </div>
  <div class="columna segunda"></div>
  <div class="columna tercera">
    <h2>CONTACTOS</h2>
    <ul>
      <li>Telefono: 123-567-988</li>
      <li>Email: info@veterinaria-patitas.com</li>
      <li>Whatsapp: 5858-453453</li>
      <li>Facebook: /hotel-cusco</li>
    </ul>
  </div>
</footer>

</body>
</html>
