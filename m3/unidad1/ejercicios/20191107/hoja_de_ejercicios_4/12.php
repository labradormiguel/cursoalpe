<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 12</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="12.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir horas: </label>
            <input type="number" name="horas">
            <label>Introducir tarifa: </label>
            <input type="number" name="tarifa">
            <label>Introducir tasas: </label>
            <input type="number" name="tasa">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            
        $horas=$_GET["horas"];
        $tarifa=$_GET["tarifa"];
        $tasa=$_GET["tasa"]/100;
        
        $pagabruta=0;
        $impuestos=0;
        $paganeta=0;
        
        $pagabruta=$horas*$tarifa;
        $impuestos=$pagabruta*$tasa;
        $paganeta=$pagabruta-$impuestos;
        
        echo "<div>La paga bruta es: ".$pagabruta."</div>";
        echo "<div>Los impuestos son: ".$impuestos."</div>";
        echo "<div>La paga neta es: ".$paganeta."</div>";
        
        }
        ?>
    </body>
</html>