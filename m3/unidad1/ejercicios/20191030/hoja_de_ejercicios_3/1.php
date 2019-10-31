<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>01 - Selecci&oacute;n</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <form>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="n1">
            </<div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="n2">
            </div>
            <button name="envio">Enviar</button>
        </form>
        <?php

        $numero = 0;
        $numero1 = 0;
        $salida = '';

        if(isset($_REQUEST["envio"])){        

        $numero = $_REQUEST["n1"];
        $numero1 = $_REQUEST["n2"];
        
        if($numero > $numero1){
            $salida = 'tipo 1';
        }else{
            if($numero == $numero1){
                $salida = 'tipo 2';
            }else{
                $salida = 'tipo 3';
                if($numero1 > 10){
                    $salida = 'tipo 31';
                }else{
                    $salida = 'tipo 32';
                }
            }
        }
        }
        echo $salida;
        
        ?>
    </body>
</html>
