<?php

function sumar(){
    
    $arg = [];
    $salida = 0;
    
    if (func_num_args() > 0){
        $arg = func_get_args();        
    }
    foreach ($arg as $v){
        $salida+=$v;
    }
    return $salida;
}

echo "<div>".sumar(5,3,5,7,2)."</div>";
echo "<div>".sumar(5,3,5)."</div>";
echo "<div>".sumar(1,2,8,9,7)."</div>";