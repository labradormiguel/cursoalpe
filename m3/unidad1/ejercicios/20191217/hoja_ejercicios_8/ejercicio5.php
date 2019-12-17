<?php
    require './ejercicio5/vehiculo.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $ford=new Vehiculo("DHH2323", "rojo", false);
        var_dump($ford);
        $ford->apagar();
        $renault=new Vehiculo(); // pocos argumentos
        var_dump($renault);
        ?>
    </body>
</html>
