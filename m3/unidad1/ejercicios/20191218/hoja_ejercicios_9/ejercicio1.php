<?php

spl_autoload_register(function ($nombre_clase) {
    include "ejercicio1\\" . $nombre_clase . '.php';
});

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $camion = new Camion();
        $camion->encender();
        $camion->cargar(10);
        $camion->verificar_encendido();
        $camion->matricula = 'MDU - 293';
        $camion->apagar();
        $autobus = new Autobus();
        $autobus->encender();
        $autobus->subir_pasajeros(5);
        $autobus->verificar_encendido();
        $autobus->matricula = 'KDF - 923';
        $autobus->apagar();
        ?>
    </body>
</html>
