<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>02 - Selecci&oacute;n</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <form>
            <div>
            <label>Introducir un n&uacute;mero</label>
            <input type="number" name="num1">
            </div>
            <div>
            <label>Introducir un n&uacute;mero</label>
            <input type="number" name="num2">
            </div>
            <div>
            <label>Introducir un n&uacute;mero</label>
            <input type="number" name="num3">
            </div>
            <button name="envio">Enviar</button>
        </form>
        <?php
        
        $n1 = 0;
        $n2 = 0;
        $n3 = 0;
        
        if(isset($_GET["envio"])){

        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $n3 = $_GET["num3"];
        
        if ( $n1 == $n2 ){
            echo "No son distintos";
        }else{
            if ( $n1 == $n3 ){
                echo "No son distintos";
            }else{
                if ( $n2 == $n3 ){
                    echo "No son distintos";
                }else{
                    echo "Son distintos";
                }
            }
        }
        
        }
        ?>
    </body>
</html>
