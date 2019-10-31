<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>08 - Bucle do while</title>
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
        $c = 0;
        
        $c = $_GET["num1"];
        
        do{ ?>
        <div>
            <?php echo $c;
            $c = $c-2;
            ?>
        </div>
        <?php
        }while($c>10);
        
        }
        ?>
    </body>
</html>