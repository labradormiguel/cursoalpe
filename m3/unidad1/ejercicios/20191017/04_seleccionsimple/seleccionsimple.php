<?php

$letra = "a";

$letra = $_GET["v1"];

if($letra=="a"){
    echo "Es una A";
}else{
    if($letra=="b"){
        echo "Es una B";
    }else{
        echo "No es ni A ni B";
    }
}
