<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 6</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="6.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir número: </label>
            <input type="number" name="num">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            
        $numero=$_GET["num"];
        $res=0;
        
        $res=$numero % 2;
        
        if($res==0){
            echo "El número es par";
        }else{
            echo "El número es impar";
        }

        }
        ?>
    </body>
</html>