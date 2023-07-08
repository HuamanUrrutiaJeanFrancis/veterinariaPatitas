<?php
session_start();
include 'conexion.php';

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];




//$conexion=mysqli_connect("localhost","root","","bdusuario");

$consulta="SELECT * FROM tusuario where usuario='$usuario' and password='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){

	
       while($registro = $resultado->fetch_array()){

        $_SESSION['idusuario']=$registro['idusuario'];
		  	$_SESSION['usuario']=$registro['usuario'];
		  	$_SESSION['password']=$registro['password'];
		  	$_SESSION['nombre']=$registro['nombre'];
		  	$_SESSION['apellido']=$registro['apellido'];
		  	$_SESSION['dni']=$registro['dni'];
		  	$_SESSION['idtipousuario']=$registro['idtipousuario'];
		  	$_SESSION['correo']=$registro['correo'];
		  	$_SESSION['condicion']=$registro['condicion'];
		  	$_SESSION['Indicador']=$registro['Indicador'];
		  	//echo $_SESSION['idtipousuario'];

  	 }


  	 switch ($_SESSION['idtipousuario']) 
  	 {
  	 	case 1:
  	 		header("location:login-main/home.php");
  	 		break;

  	 	case 2:
  	 		header("location:productos.php");
  	 		break;
  	 	
  	 	default:
  	 		echo "hola";
  	 		break;
  	 }

    


}else{
    ?>

    <?php
    include("login.php");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php

}

mysqli_free_result($resultado);
mysqli_close($conexion);
