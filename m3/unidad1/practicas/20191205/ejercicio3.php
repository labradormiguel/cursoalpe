<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <table width="100%" border="1">
            <tr>
                <?php
                    foreach ($_GET as $indice => $valor)
                    {
                        if ($indice == "enviar")
                        {
                            continue;
                        }
                        echo "<th>$indice</th>";
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach ($_GET as $indice => $valor)
                    {
                        if ($indice == "enviar")
                        {
                            continue;
                        }
                        echo "<th>$valor</th>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
