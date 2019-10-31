<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>06 - Bucle for</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <?php
        for($c=1;$c<=100;$c++){ ?>
        <div>
            <?= $c ?>
        </div>
        <?php
        }
        ?>
    </body>
</html>
