<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 3</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="3.php">Reiniciar</a>
        </p>
        <form>
            <label>Precio de la tarifa: </label>
            <input type="number" name="ptarifa">
            <label>Precio pagado: </label>
            <input type="number" name="ppagado">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            $tarifa=$_GET["ptarifa"];
            $precio=$_GET["ppagado"];
            $dto=0;
            $pd=0;
            
            $dto=$tarifa-$precio;
            $pd=$dto*100/$tarifa;
            
            echo "<div>Porcentaje de descuento: ".$pd."</div>";
        }
        ?>
    </body>
</html>