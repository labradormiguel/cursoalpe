<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03 - Selecci&oacute;n</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <form>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num1">
            </div>
            <button name="envio">Enviar</button>
        </form>
        <?php
        
        $numero = 0;
        $salida = '';
        
        if(isset($_GET["envio"])){

        $numero = $_GET["num1"];
        
        switch ($numero) {
            case 1:
                $salida = "Lunes";
                break;
            case 2:
                $salida = "Martes";
                break;
            case 3:
                $salida = "Miercoles";
                break;
            case 4:
                $salida = "Jueves";
                break;
            case 5:
                $salida = "Viernes";
                break;
            case 6:
                $salida = "Sabado";
                break;
            case 7:
                $salida = "Domingo";
                break;
            default:
                $salida = "No valido";
                break;
        }
        
        echo $salida;
        
        }
        ?>
    </body>
</html>
