<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php

        $equipo = "127.0.0.1";
        $nombre_usuario = "root";
        $contrasena = "";
        $conexion;
        $basedatos = "videoteca";
        $resultado;
        $salidaArray;
        $consulta = "SHOW TABLES";
        
        $conexion = mysqli_connect($equipo, $nombre_usuario, $contrasena);
        
        $resultado = $conexion->select_db($basedatos);
        
        $resultado = $conexion->query($consulta);
        
        $salidaArray = $resultado->fetch_all();

        echo '<table border="1" class="mt-3 ml-3">';
        echo '<tr>';
        
        foreach ($salidaArray as $value) {
        ?>
        
        <!-- el 0 es para indicar que use el primer registro
        porque es un array de arrays-->
        
        <td><?= $value[0]; ?></td>
        
        <?php
        
        }
        
        echo '</tr>';
        echo '</table>';

        // ahora en lista
        
        echo '<ul>';
        
        foreach ($salidaArray as $indice=>$nombre) {            

        
        /* el 0 es para indicar que use el primer registro
        porque es un array de arrays */
        
        echo '<li>';
        echo '<a href="r2.php?tabla=' . $indice . '">';
        echo $nombre[0];
        echo "</a>";
        echo "</li>";
        }
        
        echo '</ul>';        
        
        //var_dump($consulta);
        
        //var_dump($salidaArray);
        
        ?>
    </body>
</html>
