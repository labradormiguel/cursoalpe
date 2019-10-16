<?php

$num1 = 0;
$num2 = 0;
$num3 = 0;
$primero = 0;
$segundo = 0;
$tercero = 0;

$num1 = $_GET["n1"];
$num2 = $_GET["n2"];
$num3 = $_GET["n3"];

if($num1>$num2){
    if($num1>$num3){
        $primero = $num1;
        if($num3>$num2){
            $segundo = $num3;
            $tercero = $num2;
        }else{
            $segundo = $num2;
            $tercero = $num3;
        }
    }else{
        $primero = $num3;
        $segundo = $num1;
        $tercero = $num2;
    }
}else{
    if($num2>$num3){
        $primero = $num2;
        if($num3>$num1){
            $segundo = $num3;
            $tercero = $num1;
        }else{
            $segundo = $num1;
            $tercero = $num3;
        }
    }else{
        $primero = $num3;
        $segundo = $num2;
        $tercero = $num1;
    }
}

echo "De mayor a menor van ".$primero.", luego "."$segundo"." y despu&eacute;s ".$tercero;