<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8</title>
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
        for($c=0;$c<7;$c++)
        {
            echo "<p>$dias_semana[$c]</p>";
        }
    ?>
    </div>
    <div id="Layer2">
        <p>Los colores son: </p>
    <?php
        foreach($colores as $c)
        {
            echo "<p>$c</p>";
        }
    ?>
    </div>
    </body>
</html>