<?php

spl_autoload_register(function ($nombre_clase) {
    include "ejercicio2\\" . $nombre_clase . '.php';
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
        $padre = new Persona("ramon", "abramo", 35);
        $hijo = $padre;
        $hija = clone $padre;
        $hijo->setEdad(100);
        $hija->setEdad(50);
        var_dump($hijo);
        var_dump($padre);
        var_dump($hija);
        ?>
    </body>
</html>
