<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 9</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="9.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir número: </label>
            <input type="number" name="num">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            
        $numero=$_GET["num"];
        $suma=0;
               
//        for ($c=0;$c<$numero;$c++) {
//            $suma=$suma+$numero;
//        }
//        
//        echo "La suma es: ".$suma;

        }
        ?>
    </body>
</html>