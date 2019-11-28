<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de ejercicios 3</title>
        <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              width: 200px;
              background-color: #f1f1f1;
            }

            li a {
              display: block;
              color: #000;
              padding: 8px 16px;
              text-decoration: none;
            }

            /* Change the link color on hover */
            li a:hover {
              background-color: #555;
              color: white;
            }
        </style>
    </head>
    <body>
        <?php
        $enlaces=[
            [
                'url'=>'1.php',
                'etiqueta'=>'Ejercicio 1',
            ],
            [
                'url'=>'2.php',
                'etiqueta'=>'Ejercicio 2',
            ],
            [
                'url'=>'3.php',
                'etiqueta'=>'Ejercicio 3',
            ],
            [
                'url'=>'4.php',
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
            [
                'url'=>'7.php',
                'etiqueta'=>'Ejercicio 7',
            ],
            [
                'url'=>'8.php',
                'etiqueta'=>'Ejercicio 8',
            ],
            [
                'url'=>'9.php',
                'etiqueta'=>'Ejercicio 9',
            ],
            [
                'url'=>'10.php',
                'etiqueta'=>'Ejercicio 10',
            ],
            [
                'url'=>'11.php',
                'etiqueta'=>'Ejercicio 11',
            ],
            [
                'url'=>'12.php',
                'etiqueta'=>'Ejercicio 12',
            ],
            [
                'url'=>'13.php',
                'etiqueta'=>'Ejercicio 13',
            ],
            [
                'url'=>'14.php',
                'etiqueta'=>'Ejercicio 14',
            ],
            [
                'url'=>'15.php',
                'etiqueta'=>'Ejercicio 15',
            ],
        ];     

        $c = 0;
        for ($c = 0; $c < count($enlaces); $c++) { ?>
            <ul>
                <li>
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
