<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 5</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="5.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir X: </label>
            <input type="number" name="nX">
            <label>Introducir Y: </label>
            <input type="number" name="nY">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            $x=$_GET["nX"];
            $y=$_GET["nY"];
            
            if($x>$y){
                echo "El mayor es: ".$x;
            }else{
                if($x==$y){
                    echo "Son iguales";
                }else{
                    echo "El mayor es: ".$y;
                    }
                }
        }
        ?>
    </body>
</html>