<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>09 - Bucles</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <form>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num1">
            </div>
            <button name="envio">Enviar</button>
        </form>
        <?php
        if(isset($_GET["envio"])){
            $n1 = 0;
            $c = 0;
            $n1 = $_GET["num1"];
            $s=0;
            $t="";
            
            for($c=1;$c<$n1;$c+=2){
                $s+=$c;
                $t.=$c."+";
            }
            
            echo substr_replace($t,"=" ,strlen($t)-1,1);
            echo $s;
       
        }
        ?>
    </body>
</html>