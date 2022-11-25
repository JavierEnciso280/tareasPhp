<h1>Funciones con cadena</h1>
<?php
    //ver longitud con strlen
    echo "<h2>Longitud con strlen</h2>";echo "<br>";
    echo "Cantidad de valores";echo "<br>";
    echo strlen("Cantidad de valores");
    echo "<br>";
    //sacar espacio de cadena de texto
    echo "<h2>Sacar espacio con trim</h2>";
    $cadena = " hola mundo ";
    echo "<br>";
    echo"<h2>Cadena normal con espacios</h2>";
    echo $cadena;
    echo "<br>";
    echo "<h2>Cadena con trim</h2>";
    echo trim($cadena);
    echo "<hr>";

    //contador de palabras
    echo "<h2>Contador de palabras con str_word_count</h2>";
    echo "Cantidad de palabras";echo "<br>";
    echo str_word_count("Cantidad de palabras");
    echo "<hr>";
    //invertir todo el texto
    echo "<h2>Invertir valores con strrev</h2>";
    echo $cadena2 = "Hola mundo en phP";echo "<br>";
    echo strrev($cadena2);echo "<br>";

    //buscar posicion
    echo "<h2>Buscar posicion con strpos, devuelve posicion de primera coincidencia</h2>";
    echo "Hola mundo desde php, mundo";echo "<br>";
    echo strpos("Hola mundo desde php","mundo");
    echo "<br>";

    //Reemplazar valor con str_replace
    echo "<h2>Reemplazar valores con str_replace()</h2>";
    echo "Cadena normal: Hola como estas";echo "<br>";
    echo str_replace("como", "que tal", "Hola como estas");


    //Funciones min y max devuelven min y max dentro de un grupo de argumentos
    echo "<h2>Funciones min y max pasando un grupo de argumentos</h2>";
    echo "(min(1, 0, 3, -1))";echo "<br>";
    echo (min(1,0,3,-1));//salida -1
    echo "<br>";
    echo " (max(1,0,3,-1))";echo "<br>";
    echo (max(1,0,3,-1));//salida 3
    echo "<br>";
    
    //contantes
    //define(nombre, valor, case_insensitive);
    echo "<h2>Constantes con: define(nombre, valor)</h2>";
    define("saludar", "Hola como estan");
    echo saludar;//salida Hola como estan
    echo "<br>";

    //declarar matriz, array 
    echo "<h3>Array con variableNombre = array(valor1,valor2)</h3>";
    $autos = array("Honda","bmw","Yamaha");
    echo $autos[0];


    //objeto
    echo "<h2>Objetos con: class nombre{";echo "<br>";
    echo "    function nombre(){ ";echo "<br>"; 
    echo " ";echo "<br>";
    echo "}";echo "<br>";
    echo "}</h2>";
    class moto{
        function moto(){
            $this->marca = "Yamaha";
            $this->modelo = "YCZ";
            $this->motor = "125";
        }
    }
    //instanciar
    echo "<h3>Instanciar : nombreInstancia = new Objeto()</h3>";
    echo "<h4>LLamar al objeto: nombreInstancia->valor;</h4>";
    $objetoMoto = new moto();
    //seleccionar valor del objeto
    echo "La marca de la moto es ".$objetoMoto->marca;//salida Yamaha
    echo "<br>";
    echo "El modelo es ".$objetoMoto->modelo;
    


?>