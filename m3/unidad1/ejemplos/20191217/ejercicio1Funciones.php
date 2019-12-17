<?php
$texto="Éjémplo de clase";

function longitud($texto){
    return mb_strlen($texto);
}

function vocales($texto){
    $vocales=["a","e","i","o","u","á","é","í","ó","ú"];
    $salida=0;
        
    foreach ($vocales as $valor) {
        $salida+=substr_count(mb_strtolower($texto), $valor);
    }
    return $salida;
}

function noVocales($texto){
    return longitud($texto)-vocales($texto);
}

function repeticionVocales($texto){
    $texto=mb_strtolower($texto);
    $texto=str_replace(["á","é","í","ó","ú"],["a","e","i","o","u"], $texto);
    $vector= str_split($texto);
    $vocales=[
        "a"=>0,
        "e"=>0,
        "i"=>0,
        "o"=>0,
        "u"=>0,
        ];
    $salida= array_intersect_key(array_count_values($vector),$vocales);
    $salida= array_merge($vocales,$salida);
    
    return $salida;
}


