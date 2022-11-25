<html>
    <body>
        
    <?php
        if(isset($_GET['nombre']) && isset($_GET['email'])){
            $capturarNombre = $_GET['nombre'];
            $capturarEmail = $_GET['email'];
        }else{
            echo "No se han ingresado datos completos";
        }
    ?>

    Hola: <?php echo $capturarNombre; ?><br>
    Tu email es: <?=$capturarEmail; ?>


    </body>
</html>