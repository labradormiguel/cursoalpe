<?php
$hora = 0;
$minuto = 0;
$seg = 0;

$hora = $_GET["h"];
$minuto = $_GET["m"];
$seg = $_GET["s"];

$seg = $seg + 1;
if($seg==60){
    $seg=0;
    $minuto=$minuto+1;
    if($minuto==60){
        $minuto=0;
        $hora=$hora+1;
        if($hora==24){
            $hora=0;  
        }
    }
}

echo "Son las ".$hora.":".$minuto.":".$seg;