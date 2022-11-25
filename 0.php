<!DOCTYPE html>
<html>
    <body>
        <?php
            $variable = 5;
        
            echo $variable;
            echo "<br>";
            echo $cadena = "hola mundo en php <br>";
            print $cadena;
            echo "<hr>";
            $cadena2 = 'Texto php dentro de comillas simples y etiquetas html';
            echo "<h1>$cadena2</h1>";
            echo "El texto se puede escribir ", "entre comas ", "String";
            $variableBoolean = true;
            var_dump($variableBoolean);
            echo "<hr>";
            $variableFloat = 3.14;
            var_dump($variableFloat);
            //objetos
            class Auto{
                function Auto(){
                    $this->marca="Toyota";
                    $this->modelo="cualquiera anda";
                    $this->motor=3.01;
                }
            }
            //instanciar
            $instanciaAuto = new Auto();
            //llamar a valores del objeto
            echo $instanciaAuto->modelo;
            echo $instanciaAuto->motor;

            //variable null
            echo "<hr>";
            echo $variableNull = "Esto se va cambiar a null";
            echo "<br>";
            $variableNull = null;
            var_dump($variableNull);
            



        ?>
    


    </body>
</html>