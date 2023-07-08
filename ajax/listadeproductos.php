<?php 
session_start();

include("../conexion.php");
$idcategoria=$_REQUEST['idcategoria'];
$idusuario=$_SESSION['idusuario'];
$nombre=$_SESSION['nombre'];
$apellido=$_SESSION['apellido'];
           /* $sql="SELECT a.IdProducto, a.Id_Categoria, c.Nombre AS categoria, a.Referencia AS codigo, m.Nombre, a.Stock, a.Precio AS precio_venta, a.Caracteristecas AS descripcion, a.Foto AS imagen, a.condicion
                  FROM producto a
                  INNER JOIN Categoria c ON a.Id_Categoria = c.IdCategoria
                  INNER JOIN marca m ON a.Id_Marca = m.IdMarca
                  WHERE a.condicion = 'buen estado'";*/
            $sql="SELECT h.idjuguete,h.idcategoria,c.categoria,h.numerojuguete,h.precio,h.condicion,h.Indicador,h.imagen
FROM juguete h, categoria c
WHERE h.idcategoria=c.idcategoria
AND h.condicion='libre' AND h.idcategoria='$idcategoria'";

            $ejecutar = mysqli_query($conexion, $sql);

            $data=Array();

            while ($reg=mysqli_fetch_assoc($ejecutar)) {
                  $data[]=array(
            "0"=>'<button class="btn btn-warning" onclick="agregarDetalle('.$reg['idjuguete'].',\''.$nombre." ".$apellido.'\',\''.$reg['precio'].'\','.$idusuario.')"><span class="fa fa-plus"></span></button>',
            "1"=>$reg['numerojuguete'],
            "2"=>$reg['categoria'],
            "3"=>$reg['precio'],
            "4"=>$reg['condicion'],
            "5"=>"<img src='vista.php?id=".$reg['idjuguete']."' alt='Img blob desde MySQL' width='100' /><a target='_blank' href='verimagen.php?idimagen=".$reg['idjuguete']."'>Ver Mas Grande</a>"

              );

            }
            $results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
            echo json_encode($results);








 ?>