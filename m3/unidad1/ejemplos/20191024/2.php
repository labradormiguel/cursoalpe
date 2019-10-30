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
        
        $numeros[]=23; //añade uno al final
        
        //variable contador
        $contador=0;
        
                
        while ($contador<count($numeros)){
            echo "<div>".$numeros[$contador]."</div>";
            $contador++;
        }
        
        /*
         * otra forma de impresion
         */
        
        $contador=0; //inicio
        while ($contador<count($numeros)){ //mantenimiento y el ++ incremento
?>
        <div>
            <?= $numeros[$contador++] ?> <!-- equivale al echo -->
        </div>
<?php
        }
        
        ?>
    </body>
</html>
