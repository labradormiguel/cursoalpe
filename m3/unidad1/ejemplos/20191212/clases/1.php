<!doctype html>
<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php



$texto="Ejemplo de clase";

/* longitud
cuantas vocales
cuantas novocales
cuantas se repiten */

function longitud($arg){

    return mb_strlen($arg);
     
}

function vocales($arg){
    
    $vocales=["a","e","i","o","u","á","é","í","ó","ú"];
    $salida=0;
    
    foreach($vocales as $valor){
        $salida+= substr_count(mb_strtolower($arg), $valor);
    }
    
    return $salida;
    
}

echo "<div>".$texto."</div>";
echo "<div>Longitud del texto: " . longitud($texto) . "</div>";
echo "Cantidad de vocales: " . vocales($texto);

?>
</body>
</html>