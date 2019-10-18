<?php
    $numero = 0;
    $resto = 0;
    
    $numero = $_GET["n1"];
    $resto = $numero % 2;
     
    if($resto == 0){
       echo "El número es par";
    }else{
        echo "El número es impar";
    }

