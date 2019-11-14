<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="3.php">Resetear</a>
        </p>
        <form>
            <div>
            <label>Numero inicial</label>
            <input type="number" name="n1">
            </div>
            <div>
            <label>Numero final</label>
            <input type="number" name="n2">
            </div>
            <button name="envio">Enviar</button>
        </form>
        <?php
        
        if(isset($_GET["envio"])){
                
        function numeros($inicio,$final){
            for ($c=$inicio;$c<=$final;$c++)
            echo "<div>".$c."</div>";
        }
        
        $inicio = $_GET["n1"];
        $final = $_GET["n2"];
        
        numeros($inicio,$final);
        
        }
        ?>
    </body>
</html>
