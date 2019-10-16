<?php

    $numero1=0;
    $numero2=0;
    $salida=0;
    
    $numero1=$_REQUEST['uno'];
    $numero2=$_REQUEST['dos'];
    
    if($numero1 > $numero2){
        $salida = $numero1;
    }else{
        $salida = $numero2;
    }
    
    echo "El número mayor es el $salida";