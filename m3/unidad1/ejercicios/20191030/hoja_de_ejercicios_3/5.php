<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>05 - Bucle while</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <ul>

        <?php

        $c = 0;

        while($c < 10){ ?>

        <li><?= $c++ ?></li>
        <?php
        }
        ?>

        </ul>
    </body>
</html>
