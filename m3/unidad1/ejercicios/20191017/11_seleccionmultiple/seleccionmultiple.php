<?php

$nota = 0;

$nota = $_GET["n1"];

if($nota>=5){
    // Aprobado
    if($nota<6){
        echo "Suficiente";
    }else{
        if($nota<7){
            echo "Bien";
        }else{
            if($nota<9){
                echo "Notable";
            }else{
                echo "Sobresaliente";
            }
        }
    }
}else{
    // Suspenso
    if($nota<3){
        echo "Muy deficiente";
    }else{
        echo "Suspenso";
    }
}

