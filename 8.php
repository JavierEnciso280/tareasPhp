<h1>Procesar formulario dentro del archivo con GET</h1>
<html>
    <body>
        <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="GET">
            Nombre: <input type="text" name="nombre">
            <input type="submit" value="Enviar">
        </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){

        $nombre = $_GET['nombre'];//aca va el valor de name input
        if(empty($nombre)){
            echo "No puede quedar vacio!";
        }else{
            echo "El nombre ingresado es $nombre";
        }
    }
    
    
    ?>


    </body>
</html>