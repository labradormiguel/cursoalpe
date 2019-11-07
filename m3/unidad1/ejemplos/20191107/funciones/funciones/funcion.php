<?php

function miFuncion1(){
    $salida = "";
    $salida = "Yo soy";
    $salida.= "<br>";
    $salida.= "Tu eres yo";
    return $salida;
    
}

function miFuncion(){
    echo "lalala";
    echo "<br>";
    echo "lelele";
    echo "<br>";
    echo "lololo";
}

miFuncion();

echo miFuncion1();

?>