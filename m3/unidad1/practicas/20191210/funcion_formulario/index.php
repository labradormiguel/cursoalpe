<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Prueba formularios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        
        <?php
        
        include 'f.php';
        include 'array.php';
                             
        ?>
          
        <form action="">
        
        <?= crearInputs($datos); ?>
            
        <p>
            <button name="envio">
                Enviar
            </button>
        </p>
            
        </form>
        
    </body>
</html>
