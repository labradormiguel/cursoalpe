<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 10</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="10.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir número: </label>
            <input type="number" name="num">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            
        $numero=$_GET["num"];
        $oculto=123;
               
        if($numero<>$oculto){
            if($numero>$oculto){
                echo "Te pasaste";
            }else{
                echo "No llegas";
            }
        }else{
            echo "Acertaste";
        }

        }
        ?>
    </body>
</html>