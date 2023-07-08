<?php
require_once 'conexion.php';

$idimagen = $_REQUEST["idimagen"];


?>
<html>

    <head>
        <title>Mi sistema</title>
        <link rel="stylesheet" type="text/css" href="estilo3.css" media="screen" />

    </head>

    <body>

        <div class="encabezado">

            <?php //require_once("encabezado.html"); ?>

        </div>

        <div class="menu">
            <?php //require_once("menu.html"); ?>
        </div>

        <div class="contenido">
            <center>
            <h1>ver imagen</h1>
            </center>
                            
                            <html>
                  <body bgcolor="#bed7c0">
                    <div>
                      <center>
                      <h1>FOTO DEL JUGUETE</h1>
                      </center>
                        <div>
                          <div>
                          <img src='vista.php?id=<?php echo $idimagen; ?>' alt='Img blob desde MySQL' width="1450" />      
                          </div> 
                        </div>
                     </div>
                  </body>
                </html>
        </div>

        <div class="pie">
            
            <?php// require_once 'pie.html'; ?>
            
        </div>

    </body>

</html>