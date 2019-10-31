<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>07 - Bucle</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <?php
        $c = 1;
        while($c<=100){ ?>
        <div>
            <?= $c++ ?>
        </div>
        <?php
        }
        ?>
    </body>
</html>