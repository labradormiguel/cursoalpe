<?php

$num1 = 0;
$num2 = 0;
$num3 = 0;

$num1 = $_GET["n1"];
$num2 = $_GET["n2"];
$num3 = $_GET["n3"];

if($num1<$num2){
    if($num1<$num3){
        echo "El menor es ".$num1;
    }else{
        if($num3<$num2){
            echo "El menor es ".$num3;
        }else{
            echo "El menor es ".$num2;
        }
    }
}else{
    if($num2<$num3){
        echo "El menor es ".$num2;
    }else{
        if($num3<$num1){
            echo "El menor es ".$num3;
        }else{
            echo "El menor es ".$num1;
        }
    }
}