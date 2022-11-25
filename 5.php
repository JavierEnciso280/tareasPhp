<h1>Funciones</h1>

<?php
/**
 * function nombrefuncion(parametros){
 *  bloque de instrucciones
 * }
 */


function funcionSaludar(){
    echo "Hola mundo";
}
funcionSaludar();//llamar funcion

//funciones con parametro
echo "<h3>Funciones con argumentos</h3>";
function NombresFamilia($nombre){
    echo "El nombre del familiar es $nombre<br>";
}

//utilizar llamar a la funcion
NombresFamilia("Javier");

//Funciones con dos argumentos, parámetros
function NombreYear($nombreA, $year){
    echo "$nombreA has $year years old";
}

//llamar
NombreYear("Javier","32");


//funciones de suma
echo "<h3>Funcion de suma</h3>";
function SumarN($nro1, $nro2){
    return $nro1+$nro2;
}
//llamar
echo "La suma es ".SumarN(7,8);
?>
