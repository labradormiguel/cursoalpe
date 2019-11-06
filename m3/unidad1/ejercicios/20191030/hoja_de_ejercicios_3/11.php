<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>11 - Bucles</title>
    </head>
    <body>
        
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        
        <form>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="notas">
            </div>
            <button name="numero_notas">Enviar</button>
        </form>
        
        <?php
        if(isset($_GET["numero_notas"])){
            
        $notas = $_GET["notas"];
            
        for($c=1; $c<=$notas; $c++){
            echo '<div><label>Introduce una nota</label>
                <input type="number" name="num'.$c.'"></div>';
        }
            echo '<button name="valor_notas">Enviar</button>';
       
        $lista = [];
            
        for($n=1;$n<=$notas;$n++){
            
            $lista[] = $_GET["num$n"];
            
        };
        var_dump($lista);
        }
        ?>
    </body>
</html>
