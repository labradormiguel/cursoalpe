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
            echo "<form>";
            for($c=1; $c<=$notas; $c++){
                echo '<div><label>Introduce una nota</label>
                    <input type="number" name="num'.$c.'"></div>';
            }
            echo '<input type="hidden" name="notas" value="'. $notas .'">';
            echo '<button name="valor_notas">Enviar</button>';
            echo "</form>";
        }
        
        
        
        if(isset($_GET["valor_notas"])){
                  
        $lista = [];
        $notas=$_GET["notas"];
            
        for($n=1;$n<=$notas;$n++){
            
            $lista[] = $_GET["num$n"];
            
        };
        $suma = array_sum($lista);
        
        $media = $suma / $notas;
        
        echo "<div>La media es: ". $media ."</div>";
        }        
        
        ?>
    </body>
</html>
