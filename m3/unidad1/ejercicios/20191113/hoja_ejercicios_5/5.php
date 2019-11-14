<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="4.php">Resetear</a>
        </p>
        <form>
        <div>
            <label>Cantidad de números</label>
            <input type="number" name="cantidad">
        </div>
        <button name="envio">Enviar</button>
        </form>
        
        <?php
        
        include 'funciones.php';
        
        if(isset($_GET["envio"])){
        
        $cantidad = $_GET["cantidad"];
        $numeros=[];
        
        for($c=1;$c<=$cantidad;$c++){
            
            echo "<p>";
            echo  "<form>";
            echo  "<label>Número ".$c. "</label>";
            echo  '<input type="number" name="numeros[]">';
            echo  "</p>";
            
           
        }
        echo '<button name="producto">Multiplicar</button></form>';


        }
        if(isset($_GET["producto"])){
            
        $lista = $_GET["numeros"];
        
        echo "El producto de los números es: ".productoNumeros($lista);
     
                
        }

        ?>
    </body>
</html>
