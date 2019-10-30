<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // crear un array
        
        $numeros=[
            1,4,5,6,7
        ];
        
        //variable contador
        $c = 0;
        
        for($c = 0; $c < count($numeros); $c++){
            echo "<div>".$numeros[$c]."</div>";
        }
        ?>
    </body>
</html>
