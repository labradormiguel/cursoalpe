<?php

$num1 = 0;
$num2 = 0;

$num1 = $_GET["n1"];
$num2 = $_GET["n2"];

if($num1==$num2){
    echo "Son iguales";
}else{
    if($num1>$num2){
        echo $num1." es mayor que ".$num2;
    }else{
        echo $num2." es mayor que ".$num1;
    }
}