<?php
include 'conexion.php';

if(isset($_POST['enviar'])){//si existe boton enviar
    if(isset($_POST['nombre']) && isset($_POST['apellido'])){
        //crear variable true
        $existenDatos = true;
        //variables y capturar los datos
        $nomb = $_POST['nombre'];
        $ape = $_POST['apellido'];
        
    }else{
        $existenDatos = false;
        echo "datos incompletos";
    }

    //si existe es true
    if($existenDatos){
        $consulta = mysqli_query($conexion, "INSERT INTO personas values(null,'$nomb','$ape');")
        
        or die('error'.mysqli_error($conexion));
    

        if($consulta){
            echo "Insert done!";?>

        <meta http-equiv="refresh" content="3, url-https://localhost/Php/pruebamysqlphp/"/>
        <p><a href="http://localhost/Php/pruebamysqlphp/">Redireccionando</a></p>
        <?php 
        }else{
            echo 'error en el insert';
        }
    }
}
elseif(isset($_POST['confirmar'])){//datos que vienen del post
    $idU = $_POST['id'];
    $nombreU = $_POST['nombre'];
    $apellidoU = $_POST['apellido'];
    //$existenDatos =true;
    
    
    $consulta3 = mysqli_query($conexion, "UPDATE personas SET nombre = '$nombreU', apellido = '$apellidoU' 
    WHERE id = $idU;")
    
    or die ('error'.mysqli_error($conexion));
    //var_dump($consulta3);
    if($consulta3){
        echo "Datos actualizados correctamente";?>

        <meta http-equiv="refresh" content="5, url-https://localhost/Php/pruebamysqlphp/">
        <p><a href="http://localhost/Php/pruebamysqlphp/">Volver</a></p>

    <?php
    }else{
        echo "error update";
    }
    
    
}

//si isset es eliminar
elseif(isset($_POST['btn-eliminar'])){
    $idEliminar = $_POST['idE'];//el name del input ingresado en index
   // $nombreEliminar = $_POST['nombre'];
   // $apeEliminar = $_POST['apellido'];

    //una vez capturados los datos se procede a hacer la consulta sql 

    $deleteReg = mysqli_query($conexion, "DELETE FROM personas WHERE id = $idEliminar;")
    or die ('error'.mysqli_error($conexion));   

    if($deleteReg){
        echo "Registro borrado!";?>
        <meta http-equiv="refresh" content="5, url-http://localhost/Php/pruebamysqlphp/">
        <p><a href="http://localhost/Php/pruebamysqlphp/">Volver</a></p>

    <?php 
    }else{
        echo "error";
    }


}
?>
