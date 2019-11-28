<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 11</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="11.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir A: </label>
            <input type="number" name="numA">
            <label>Introducir B: </label>
            <input type="number" name="numB">
            <label>Introducir C: </label>
            <input type="number" name="numC">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            
        $a=$_GET["numA"];
        $b=$_GET["numB"];
        $c=$_GET["numC"];
        $d=0;
        
//        $d=$b^2-4*$a*$c
               
        
        
        }
        ?>
    </body>
</html>