<?php

function suma_resta_producto_division($num1, $num2){
    $resultado = [
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'producto' => $num1 * $num2,
        'division' => $num1 / $num2,        
    ];
return $resultado;
}
    
    $resultado_total = suma_resta_producto_division(5, 7);
    
    foreach($resultado_total as $operacion => $valor){
        echo "<p>".$operacion.": ".$valor."</p>";
    }


