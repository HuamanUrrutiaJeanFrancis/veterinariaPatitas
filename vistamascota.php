<?php
    if(!empty($_GET['id'])){
       require_once 'conexion.php';
        
        // Extraer imagen de la BD mediante GET
        $result = $conexion->query("SELECT Imagen FROM mascota WHERE idmascota = {$_GET['id']}");
        
        if($result->num_rows > 0){
            $imgDatos = $result->fetch_assoc();
            
            // Mostrar Imagen
            header("Content-type: image/jpg"); 
            echo $imgDatos['Imagen']; 
        }else{
            echo 'Imagen no existe...';
        }
    }
?>