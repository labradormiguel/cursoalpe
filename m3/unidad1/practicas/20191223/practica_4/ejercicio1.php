<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <form method="get">
            <div>
                <label for="idnumero1">
                    Número 1:
                    <input type="number" name="numero1" id="idnumero1">
                </label>
            </div>
            <div>
                <label for="idnumero2">
                    Número 2:
                    <input type="number" name="numero2" id="idnumero2">
                </label>
            </div>
            <div>
                <label for="idnumero3">
                    Número 3:
                    <input type="number" name="numero3" id="idnumero3">
                </label>
            </div>
            <button name="enviar">
                Enviar
            </button>
        </form>
        
        <?php
        if(isset($_GET["enviar"])){
        
        $uno = $_GET['numero1'];
        $dos = $_GET['numero2'];
        $tres = $_GET['numero3'];
        
        $primero = 0;
        $segundo = 0;
        $tercero = 0;
        
        if ($uno > $dos)
        {
            if ($uno > $tres)
            {
                if ($tres > $dos)
                {
                    $primero = $uno;
                    $segundo = $tres;
                    $tercero = $dos;
                }
                else
                {
                    $primero = $uno;
                    $segundo = $dos;
                    $tercero = $tres;
                }
            }
        }
        elseif ($tres > $dos)
        {
            if ($uno > $dos)
            {
                $primero = $tres;
                $segundo = $uno;
                $tercero = $dos;
            }
            else
            {
                $primero = $tres;
                $segundo = $dos;
                $tercero = $uno;
            }
        }
        elseif ($dos > $tres)
        {
            if ($tres > $uno)
            {
                $primero = $dos;
                $segundo = $tres;
                $tercero = $uno;
            }
            else
            {
                $primero = $dos;
                $segundo = $uno;
                $tercero = $tres;
            }
        }
        
        echo $primero." ".$segundo." ".$tercero;
        
        }
        
        ?>
    </body>
</html>
