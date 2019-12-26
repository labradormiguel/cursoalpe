<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="texto">
            <button name="enviar">Enviar</button>
        </form>
        <?php
        if(isset($_POST['enviar'])){
        $texto = $_POST['texto'];
        $minusculas = mb_strtolower($texto);
        $minusculas=str_replace(['á','é','í','ó','ú'],['a','e','i','o','u'], $minusculas);
        $minusculas= str_split($minusculas);
        //var_dump($minusculas); 
        $vocales = ['a','e','i','o','u','á','é','í','ó','ú'];
        $salida=0;   

/*
        array_walk($vocales, function($v)use(&$salida){
            $salida+=count((array_keys(str_split("ejemplo") ,$v)));
        });
        
        
        var_dump($salida);
        $salida=0; */
        
        foreach($vocales as $v){
            $salida+=count((array_keys($minusculas ,$v)));
        }
        
        echo '<br />';
        echo $texto;
        echo '<br />';
        echo "Número de vocales: ".$salida;
        //var_dump($salida);
        
        //$texto=array_keys($texto,$vocales);
        
        
        // pasamos el texto a minúsculas
        
        //$texto = strtolower($texto);
        
        var_dump($minusculas);

        
       
         
        }
        ?>
    </body>
</html>
