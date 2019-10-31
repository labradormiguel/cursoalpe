<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>04 - Bucle for</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <?php
        
        $c = 0;
                
        for($c=1;$c<=10;$c++){ ?>
        <div>
            <?= $c ?>
        </div>
        <?php
        }
        ?>
    </body>
</html>
