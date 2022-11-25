<h1>Estructura while</h1>
<h3>La estructura while ejecuta el bloque siempre que condicion sea true</h3>
<?php
echo "<h4>while (condicion es true){Se ejecuta el codigo}</h4>";
$numero = 0;//inicio
while($numero < 6){//hasta que sea menor a 6 ejecutar bloque
    echo "Numero $numero <br>";
    $numero++;//incrementar de uno en uno
}
echo "<hr>";
echo "<h4>Otro ejemplo desde el 5  hasta 100</h4>";
$numero2 = 5;
while ($numero2 <= 100){
    echo "Numero $numero2 <br>";
    $numero2++;
}

echo "<h4>Estructura do while</h4>";
/**
 * do{
 *  bloque de codigo
 *  iterador
 * }(condicion true)
 */
$variable = 0;
do{
    echo "numero $variable <br>";
    $variable +=10;//iterar de 10 en 10
}while($variable <=100);

echo "<h4>Estructura for</h4>";

for ($variable = 0; $variable <= 10; $variable++){
    echo "$variable <br>";
}

echo "<h4>Foreach para recorrer matrices</h4>";
$colores = array("rojo", "verde", "azul","naranja");
//La variable valores es donde se van a guardar los datos
foreach($colores as $valores){
    echo $valores."<br>";
}
echo "<h4>Recorrer con indices de datos</h4>";
$nombres = array("Pedro"=>"40", "Juan"=>"50", "Laura"=>"30");

foreach($nombres as $indice=>$valor){
    echo "$indice = $valor<br>";
}

//Break
echo "<h4>Romper bucle con Break</h4>";
echo "<h5>En este caso el bucle es de 0 al 10 y el 'break' corta totalmente el bucle en 4</h5>";
for($variable = 0 ; $variable <=10; $variable++){
    if($variable == 4){
        break;
        
    }
    echo "$variable <br>";
    
}
//continue
echo "<h4>Saltar condicion de bucle con continue</h4>";
echo "<h5>En este caso se declara 'continue' en condicion == 4</h5>";
for($variable3 = 0; $variable3 <= 10; $variable3++){
    if($variable3 == 4){
        continue;
    }
    echo "$variable3<br>";
}

?>