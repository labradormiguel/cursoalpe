<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 8</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="8.php">Reiniciar</a>
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
               
        if($a+$b=$c){
            echo "Iguales";
        }else{
            if($a+$c=$b){
                echo "Iguales";
            }else{
                if($b+$c=$a){
                    echo "Iguales";
                }else{
                    echo "Distintas";
                }
            }
        }

        }
        ?>
    </body>
</html>