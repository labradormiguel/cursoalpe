<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <table width="100%" border="1">
            <tr>
                <?php
                    foreach ($_REQUEST as $key => $value)
                    {
                        if ($key == "enviar")
                        {
                            continue;
                        }
                        echo "<th>$key</th>";
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach ($_REQUEST as $key => $value)
                    {
                        if ($key == "enviar")
                        {
                            continue;
                        }
                        echo "<th>$value</th>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>
