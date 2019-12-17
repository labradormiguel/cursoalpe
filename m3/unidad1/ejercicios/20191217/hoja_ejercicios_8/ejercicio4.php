<?php
    include "ejercicio4/coche.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $coche = new Coche();
        $coche->color = 'Rojo';
        $coche->marca = 'Honda';
        $coche->numero_puertas = 4;
        $coche->llenarTanque(10);
        $coche->acelerar();
        $coche->acelerar();
        $coche->acelerar();
        
        var_dump($coche);
        
        ?>
    </body>
</html>
