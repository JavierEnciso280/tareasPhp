<h1>Arrays</h1>
<?php

$autos = array("Toyota","Jeep","Bugati");
echo "Hay 5 autos de la marca " .$autos[2];
echo "<h4>Contar los elementos que tiene la matriz con count()</h4>";
echo "count(array)\n";
echo count($autos);

//recorrer array con foreach
echo "<h3>Recorrer array con foreach</h3>";
foreach ($autos as $variableNueva){
    echo $variableNueva."<br>";
}

echo "<h3>Recorrer array con foreach y traer el valor y el indice</h3>";
foreach($autos as $indice=>$marca){
    echo "El indice es $indice y la marca es $marca <br>";
}

//Array bidimensional
echo "<h3>Arrays Bidimensionales</h3>";

$cars = array(
    array("Volvo", 20, 15),
    array("Toyota", 60, 50),
    array("Nissan", 10, 8),
);
echo "La marca " .$cars[0][0]." tiene ".$cars[0][1]." en total y tiene disponibles ".$cars[0][2]." unidades <br>";
echo "La marca ".$cars[1][0]." tiene ".$cars[1][1]. " unidades en total y disponibles ".$cars[1][2]."<br>";
echo "Y la marca ".$cars[2][0]." tenia ".$cars[2][1]. " unidades y ahora quedan ".$cars[2][2];
?>