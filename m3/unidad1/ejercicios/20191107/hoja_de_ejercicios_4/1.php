<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 1</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        <a href="1.php">Reiniciar</a>
        </p>
        <form action="">
            <label>Introduce la base: </label>
            <input type="number" name="base">
            <label>Introduce la altura: </label>
            <input type="number" name="altura">
            <button name="calculo">Enviar</button>
        </form>
        <?php
        if(isset($_GET["calculo"])){
        
        $base = $_GET["base"];
        $altura = $_GET["altura"];
        
        $perimetro = 0;
        $area = 0;
        
        $perimetro = 2 * $base + 2 * $altura;
        $area = $base * $altura;
        
        echo "<p>El area es: ".$area."</p>";
        echo "<p>El perímetro es: ".$perimetro."</p>";
        }
        ?>
    </body>
</html>
