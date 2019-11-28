<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="index.php">Menú</a>
            <a href="7.php">Resetear</a>
        </p>
        <form>
        <div>
            <label>Primer número: </label>
            <input type="number" name="n1">
        </div>
        <div>
            <label>Segundo número: </label>
            <input type="number" name="n2">
        </div>
        <button name="envio">Enviar</button>
        </form>
        
        <?php
        
        include 'funciones.php';
        
        if(isset($_GET["envio"])){
                   
        $one=$_GET["n1"];
        $two=$_GET["n2"];
        
        compararImprimiendo($one,$two);
        
        }

        ?>
    </body>
</html>
