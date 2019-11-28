<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 4</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="4.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir A: </label>
            <input type="number" name="nA">
            <label>Introducir B: </label>
            <input type="number" name="nB">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            $a=$_GET["nA"];
            $b=$_GET["nB"];
            
            if($a>$b){
                echo "El mayor es: ".$a;
            }else{
                echo "El mayor es: ".$b;
            }
        }
        ?>
    </body>
</html>