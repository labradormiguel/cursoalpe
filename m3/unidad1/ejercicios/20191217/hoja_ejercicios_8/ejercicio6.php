<?php
include_once './ejercicio6/vehiculo.php';
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
        $ford->mensaje();
        var_dump($ford);
        echo $ford->ruedas();
        $ford::mensaje();
        Vehiculo::mensaje();
        Vehiculo::$ruedas=6;
        echo Vehiculo::$ruedas;
        echo $ford->ruedas;
        Vehiculo::encender();
        
        ?>
    </body>
</html>
