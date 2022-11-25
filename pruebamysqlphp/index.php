<?php include 'conexion.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--     <meta http-equiv="X-UA-Compatible" content="IE=edge">
 -->    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <h1>Form con php y mysql</h1>
        
            <label for="nombre">Nombre</label><br><br>
            <input type="text" id="nombre" name="nombre"><br>
            <label for="apellido">Apellido</label><br><br>
            <input type="text" name="apellido" id="apellido"><br><br>
            <input type="submit" name="enviar" id="enviar" value="Enviar">
        
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
        </tr>

        <?php 
        mysqli_query($conexion, "SET NAMES 'UTF8");//CARACTERES ESPECIALES
        //CREAR CONSULTA
        $consulta1 = mysqli_query($conexion, "SELECT * FROM personas;");
        //recorrer resultados, una vez convertido en array 
        while($resultado2 = mysqli_fetch_assoc($consulta1)){//convertir consulta anterior a array
            //una vez convertido, recorrer valores y guardar en una variable cada valor de la columna
            $valorId = $resultado2['id'];
            $valorName = $resultado2['nombre'];
            $valorSurname = $resultado2['apellido'];?>

        

        <tr>
            <td><?= $valorId?></td>
            <td><?= $valorName?></td>
            <td><?= $valorSurname?></td>
        </tr>

        <?php    
        }      
        ?>
    </table>

<!-- form para insertar el id a modificar -->
        <div class="editar">
            <h1>Editar datos</h1>
            <form method="GET">
                <label for="id">Codigo</label>
                <input type="text" name="codigoPhp" id="codigoJs" class="codigoCss">
                <input type="submit" name="editar" id="editar" class="editar" value="Buscar">
            </form>
        </div>
        <?php
            if(isset($_GET['codigoPhp'])){
                //capturar el valor id si existe
                $valorIdPhp = $_GET['codigoPhp'];
                //crear la consulta sql para traer los datos del id 
                $consultaWhere = mysqli_query($conexion, "SELECT * FROM personas WHERE id=$valorIdPhp;");

                //recorrer con el while la consulta sql
                while($consultaWhereArray = mysqli_fetch_assoc($consultaWhere)){
                    $idPhp = $consultaWhereArray['id'];
                    $namePhp = $consultaWhereArray['nombre'];
                    $apePhp = $consultaWhereArray['apellido'];
                }

            }else{
                $idPhp = '';
                $namePhp = '';
                $apePhp = '';
            }
        ?>
        <!-- Form para mostrar los datos solicitados -->
        
            <form action="procesar.php" method="POST">
                <div class="nombres">
                    <label for="id">Id</label><br>
                    <input type="text" name="id" id="id" value="<?= $idPhp?>">
                </div>
                <div class="nombres">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" id="nombre" value="<?= $namePhp?>">
                </div>
                <div class="nombres">
                    <label for="apellido">Apellido</label><br>
                    <input type="text" name="apellido" id="apellido" value="<?= $apePhp ?>">
                </div>
                <input type="submit" name="confirmar" id="confirmar" value="confirmar">

            </form>

            <hr>
            <h2>Borrar registro</h2>
            <div class="borrar">
                <form action="procesar.php" method="POST">
                    <div class="nombres">
                        <label for="id">Ingrese id</label>
                        <input type="text" name="idE" id="idE" autocomplete="off">
                        <input type="submit" name="btn-eliminar" id="btn-eliminar" value="Eliminar">
                    </div>
                </form>
            </div>
        

        
    
    
</body>
</html>