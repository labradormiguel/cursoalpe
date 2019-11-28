<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <p>
        <a href="index.php">Menú</a>
        <a href="6.php">Resetear</a>
    </p>
        <form>
        <label>Primer número </label>
        <input type="text" name="n1">
        <label>Segundo número </label>
        <input type="text" name="n2">
        <label>Tercer número </label>
        <input type="text" name="n3">
        <button name="envio">Enviar</button>
        </form>
        
        <?php
        include 'funciones.php';
        
        if(isset($_GET["envio"])){        
            $ein=$_GET["n1"];
            $zwei=$_GET["n2"];
            $drei=$_GET["n3"];
            
            $numero=[$ein,$zwei,$drei];
            
            imprimirNumeros($numero);
        }
        ?>
    </body>
</html>
