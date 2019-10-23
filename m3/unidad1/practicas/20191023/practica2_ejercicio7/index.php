<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7</title>
        <style type="text/css">
        <!--
        #Layer1 {
            position: absolute;
            left: 90px;
            top: 115px;
            width: 323px;
            height: 504px;
            z-index: 1;
            padding: 10px;
            border: medium solid #0000FF;
        }
        #Layer2 {
            position: absolute;
            left: 519px;
            top: 170px;
            width: 503px;
            height: 266px;
            z-index: 2;
        }
        -->
        </style>
    </head>
    <body>
    <?php
        $dias_semana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
        $colores=array("uno"=>"Rojo","dos"=>"Verde","tres"=>"Azul");
    ?>
    <div id="Layer1">
        <p>Los días de la semana son:</p>
    <?php
        echo "<p>$dias_semana[0]</p>";
        echo "<p>$dias_semana[1]</p>";
        echo "<p>$dias_semana[2]</p>";
        echo "<p>$dias_semana[3]</p>";
        echo "<p>$dias_semana[4]</p>";
        echo "<p>$dias_semana[5]</p>";
        echo "<p>$dias_semana[6]</p>";
    ?>
    </div>
    <div id="Layer2">
        <p>Los colores son: </p>
    <?php
        echo "<p>$colores[uno]</p>";
        echo "<p>$colores[dos]</p>";
        echo "<p>" , $colores['tres'] , "</p>";
    ?>
    </div>
    </body>
</html>