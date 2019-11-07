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
        ];     

        $c = 0;
        //echo "<ul>";
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
