<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $enlaces=[
            [
                'url'=>'1_1.html',
                'clase'=>'caja1',
                'etiqueta'=>'Ejercicio 1',
            ],
            [
                'url'=>'2.php',
                'clase'=>'caja2',
                'etiqueta'=>'Ejercicio 2',
            ],
            [
                'url'=>'3.php',
                'clase'=>'caja3',
                'etiqueta'=>'Ejercicio 3',
            ],
            [
                'url'=>'4.php',
                'clase'=>'caja1',
                'etiqueta'=>'Ejercicio 4',
            ],
            [
                'url'=>'5.php',
                'etiqueta'=>'Ejercicio 5',
            ],
            [
                'url'=>'6.php',
                'etiqueta'=>'Ejercicio 6',
            ],
        ];     

        $c = 0;
        //echo "<ul>";
        for ($c = 0; $c < count($enlaces); $c++) { ?>
            <ul>
            <!-- falta el isset para comprobar si hay clase -->
                <li class="<?= $enlaces[$c]['clase'] ?>">
                <a href="<?= $enlaces[$c]['url'] ?>">
                <?= $enlaces[$c]['etiqueta'] ?>
                </a>
                </li>
            </ul>
        <?php
        }
            
        ?>
    </body>
</html>
