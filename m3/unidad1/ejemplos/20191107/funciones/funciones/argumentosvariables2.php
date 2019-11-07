<?php

function sumar(...$arg){
//function sumar($arg){
    
    $salida = 0;
    
    foreach ($arg as $v){
        $salida+=$v;
    }
    return $salida;
}

echo "<div>".sumar(5,3,5,7,2)."</div>";
echo "<div>".sumar(5,3,5)."</div>";
echo "<div>".sumar(1,2,8,9,7)."</div>";
//echo "<div>".sumar([5,3,5,7,2])."</div>";
//echo "<div>".sumar([5,3,5])."</div>";
//echo "<div>".sumar([1,2,8,9,7])."</div>";