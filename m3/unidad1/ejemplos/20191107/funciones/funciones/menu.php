<?php

function crear_menu(){
    
    $menu = [
        "etiqueta"=>"url",
        "etiqueta1"=>"url1",
        ];
    echo "<ul>";
        foreach ($menu as $key => $value) { ?>

        $salida.='<li><a href="'.$value.'">'.$key.'</a></li>'
        }
    echo "</ul>";
    return $salida;
   
}

