<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
        
            echo $_POST['nombre'];
            echo $_REQUEST['nombre'];
/*            
            echo $HTTP_POST_VARS['nombre'];
            
            echo $nombre;

            import_request_variables('p', 'p_');
            echo $p_nombre; */
            
            echo $_POST['email'];
            echo $_REQUEST['email'];
            
        ?>
    </body>
</html>
