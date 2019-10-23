<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
        <style type="text/css">
        <!--
        #Layer1 {
            position:absolute;
            left:62px;
            top:38px;
            width:264px;
            height:170px;
            z-index:1;
                }
        #Layer2 {
            position: absolute;
            left: 535px;
            top: 139px;
            width: 498px;
            height: 142px;
            z-index:2;
            background-color: #FFFFCC;
                }
        -->
        </style>
    </head>
    <body>
    <?php
        // Creo aquí las dos variables
        $numero1=10;
        $numero2=3;
    ?>
        <div id="Layer1">
            <p>Los numeros utilizados son:</p>
            <p><?php echo $numero1; ?></p>
            <p><?php echo $numero2; ?></p>
        </div>
        <div id="Layer2">
            <table width="100%" height="137" border="0">
                <tr>
                <td width="41%">Suma</td>
                <td width=59%"><?php echo $numero1 + $numero2; ?></td>
                </tr>
                <tr>
                <td>Resta</td>
                <td><?php echo $numero1 - $numero2; ?></td>
                </tr>
                <tr>
                <td>Producto</td>
                <td><?php echo $numero1 * $numero2; ?></td>
                </tr>
                <tr>
                <td>Cociente</td>
                <td><?php echo $numero1 / $numero2; ?></td>
                </tr>
                <tr>
                <td>Resto</td>
                <td><?php echo $numero1 % $numero2; ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>