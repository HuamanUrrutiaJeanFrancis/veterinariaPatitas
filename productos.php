<?php
error_reporting(E_ERROR); 
session_start();
include 'conexion.php';
$idvalidado="";

if($_SESSION['idusuario']!="")
{
  $idvalidado=$_SESSION['idusuario'];
}
else
{
  $_SESSION['idusuario']="";
}


$sqlcategoria="SELECT * FROM categoria WHERE Indicador='1'";
$resultado=mysqli_query($conexion,$sqlcategoria);

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Document</title>
  <link rel="stylesheet" href="estilo3.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

        <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous" />

</head>
<body>
<script type="text/javascript">
  function reservar(verificar)
  {
    if(verificar!="")
    {




      alert("esta logueado");




    }
    else
    {
      alert("DEBE LOGUEARSE EN EL SISTEMA PARA PODER VER LOS PRODUCTOS");
    }
  }


  function listarArticulos(idcategoria){
    
  tabla=$('#tblarticulos').dataTable({
    "aProcessing": true,//activamos el procedimiento del datatable
    "aServerSide": true,//paginacion y filrado realizados por el server
    dom: 'Bfrtip',//definimos los elementos del control de la tabla
    buttons: [

    ],
    "ajax":
    {
      url:'ajax/listadeproductos.php?idcategoria='+idcategoria,
      type: "get",
      dataType : "json",
      error:function(e){
        console.log(e.responseText);
      }
    },
    "bDestroy":true,
    "iDisplayLength":5,//paginacion
    "order":[[0,"desc"]]//ordenar (columna, orden)
  }).DataTable();
}


function agregarDetalle(idjuguete,nombre,precio,idusuario)
{

  
  
  var numero = prompt("¿Ingrese Numero de tarjeta?", "Escriba tarjeta");

    if(numero.length>0)
    {
        var telefono = prompt("¿Ingrese Numero de telefono?", "Escriba numero");
        if(telefono.length>1)
        {
            var cantidad = prompt("¿Cuantos Productos desea?", "Escriba Cantidad de productos a pedir");

            if(cantidad>0)
            {


            $.post("login-main/agregar_db_pedido.php?op=activar", {idjuguete : idjuguete,
                            idusuario:idusuario,
                            numero:numero,
                            telefono:telefono,
                            estado:cantidad}, function(e){
              
              
              

             

              var total=precio*cantidad;
              window.open('redsys-pago-con-tarjeta/index.php?nombre='+nombre+'&precio='+total+'&numero='+idjuguete);


              alert(e); 


            });

            }
            else
            {
              alert("ESCRIBA LA CANTIDAD, 1 COMO MINIMO");
            }
        }
        else
        {
          alert("NO ES VALIDO EL NUMERO TELEFONICO, VERIFICAR");
        }
    }
    else
    {
      alert("El Numero de Tarjeta no cumple con DIGITOS, Verificar");
    }
    
}


</script>
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
      <li><a href="productos.php">Productos</a></li>
      <li><a href="login.php">Entrar al sistema</a></li>
      <li><a href="registro.php">Registro del cliente</a></li>
      <li><a href="cerrarsession.php">Cerrar Sesion</a></li>
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

       <?php /*  <div id="formulario-disponibilidad">
     
      <div class="fila2">
        <div class="columna">
          <label><br>Cuzco o Cusco ​ (en quechua sureño: Qusqu o Qosqo, pronunciado [ˈqo̝s.qɔ]) es una ciudad del sureste del Perú ubicada en la vertiente oriental de la cordillera de los Andes, en la cuenca del río Huatanay,</label>
          
        </div>
        <div class="columna">
          <label><br>fluente del Vilcanota. Es la capital del departamento del Cusco y, además, según está declarado en la constitución peruana, es la «capital histórica» del país.
La ciudad, según el Instituto Nacional de Estadística e Informática, es la séptima más poblada de Perú</label>
          
        </div>
        <div class="columna">
          <a href="disponibilidad.html">
            <button type="button">
              Verificar disponibilidad
            </button>
          </a>
        </div>
      </div>
    </div>*/ ?>
  </div>
  <div id="contenido">
    <div class="machupicchu">
      <div class="columna">

      </div>
      <div class="columna">

      </div>
    </div>
    <div class="contenedor-productos">
      <div class="titulo">
        <span class="subtitulo">JUGUETES Para todos los gustos</span>
        <hr>
        <h2>productos</h2>
        <br>
      </div>

      <div class="productos">


        <?php 

          while($registro=$resultado->fetch_array())
        {
                $idcategoria=$registro['idcategoria'];
                $categoria=$registro['categoria'];

                $fotover="";
                $precio="";
                if($idcategoria=="1")
                {
                  $fotover="juguete.jpg";
                  $precio="350 - 1000";
                }
                else
                if($idcategoria=="2")
                {
                  $fotover="juguete2.jpg";
                  $precio="1001 - 2000";
                }
                else
                if($idcategoria=="3")
                {
                  $fotover="juguete3.jpg";
                  $precio="2001 Oh Superior";
                }
                else
                {
                  $fotover="juguete1.jpg";
                }
           ?>

              <div class="columna">

                  <img src="<?php echo $fotover; ?>" alt="">
                  <h2><?php echo "JUGUETES CATEGORIA - ".$categoria; ?></h2>
                  <p class="area-precio">
                    <span class="simbolo">S/</span>
                    <span class=""><?php echo "<strong>".$precio."</strong>"; ?></span>
                    <span class="">/Por Pedido</span>
                  </p>

                  <ul>
                    <?php 
                      $sqlcontador="SELECT COUNT(*) AS disponiblesproductos from juguete WHERE Indicador='1' AND idcategoria='$idcategoria' AND condicion='libre'";

                      $resultadocontador=mysqli_query($conexion,$sqlcontador);

                       while($registroc=$resultadocontador->fetch_array())
                      {
                        $disponibles=$registroc['disponiblesproductos'];
                      ?>
                        <li>Solo <?php echo "<strong>".$disponibles."</strong>"; ?> productos disponibles</li>
                      <?php
                      }

                     ?>


                  
                    <li>Desayuno incluido</li>
                    <li>El precio incluye impuesto</li>
                  </ul>




                  <?php if($idvalidado=="")
                  { ?>
                    <input type="submit" value="AGREGAR UNA RESERVACION" name="reservar" id="reservar" onclick="reservar('<?php echo $idvalidado;?>');" class="btn btn-primary">

                 <?php } 
                 else
                  { ?>


                  <a data-toggle="modal" href="#myModal">
                   <button id="btnAgregarArt" type="button" class="btn btn-primary" onclick="listarArticulos('<?php echo $idcategoria; ?>');"><span class="fa fa-plus"></span>AGREGAR UNA RESERVACION</button>
                 </a>

                  <?php
                  } ?>
                  


                </div>
        

        <?php 
        }


         ?>
        



      </div>


       <!--Modal-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 65% !important;">
      <div class="modal-content" style="width:150%;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Seleccione un Producto</h4>
        </div>
        <div class="modal-body">
          <table id="tblarticulos" class="table table-striped table-bordered table-condensed table-hover">
            <thead>
              <th>Opciones</th>
              <th>Numero de juguete</th>
              <th>Categoria</th>
              <th>Precio</th>
              <th>Estado</th>
              <th>Imagen</th>
            </thead>
            <tbody>
              
            </tbody>
            <tfoot>
              <th>Opciones</th>
              <th>Numero de juguete</th>
              <th>Categoria</th>
              <th>Precio</th>
              <th>Estado</th>
              <th>Imagen</th>
            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- fin Modal-->
      <div class="clearfix"></div>
    </div>
  </div>
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <?php /* <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>*/ ?>
       

     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

       <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
</body>
</html>
