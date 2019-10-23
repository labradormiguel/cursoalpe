<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Documento sin t&iacute;tulo</title>
    </head>
    <body>
    <?php
    // Creamos tres variables
    $cadena1 = "Pasa"; // Esta es una variable de tipo cadena
    $cadena2 = "tiempos"; # Esta es otra variable de tipo cadena
    $cadena3 = $cadena1 . $cadena2; // La tercera variable contiene la union de las otras dos
    echo "<p>" , $cadena3 , "</p>";
    ?>
    </body>
</html>