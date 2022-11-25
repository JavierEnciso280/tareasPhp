
<?php
//establecer variables de conexion

$hosbd = 'localhost';
$usuario = 'root';
$contras = '';
$baseDatos = 'pruebamysql';

//crear la variable donde se va alojar la conexion
$conexion = mysqli_connect($hosbd,$usuario,$contras,$baseDatos);
//condicion para conexion exitosa o no 
if (mysqli_connect_errno()){
    echo "error de conexion";
}else{
    //echo "Conexion exitosa";
}



?>