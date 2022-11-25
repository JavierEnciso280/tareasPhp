<html>
    <body>
        
    <?php
        if(isset($_POST['nombre']) && isset($_POST['email'])){
            $capturarNombre = $_POST['nombre'];
            $capturarEmail = $_POST['email'];
        }else{
            echo "No se han ingresado datos completos";
        }
    ?>

    Hola: <?php echo $capturarNombre; ?><br>
    Tu email es: <?=$capturarEmail; ?>


    </body>
</html>