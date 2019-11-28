<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 2</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="2.php">Reiniciar</a>
        </p>
        <form>
            <label>Distancia en millas: </label>
            <input type="number" name="millas">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            $dmillas=$_GET["millas"];
            $dmetros=0;
            
            $dmetros=$dmillas*1852;
            
            echo "<div>Distancia en metros: ".$dmetros."</div>";
        }
        ?>
    </body>
</html>