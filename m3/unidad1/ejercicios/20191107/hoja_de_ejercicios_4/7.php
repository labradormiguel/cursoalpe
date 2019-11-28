<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 7</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="7.php">Reiniciar</a>
        </p>
        <form>
            <label>Introducir horas: </label>
            <input type="number" name="hora">
            <label>Introducir precio hora: </label>
            <input type="number" name="phora">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
            
        $horas=$_GET["hora"];
        $precio=$_GET["phora"];
        $salario=0;
               
        if($horas<=40){
            $salario=$horas*$precio;
        }else{
            $salario=(40*$precio)+(1.5*$precio);
        }
        echo $salario;
        }
        ?>
    </body>
</html>