<?php

function crear_menu($menu){
    
    $salida=[];
    
    foreach ($menu as $nombre => $contenido) {
        $submenu = '<ul id="'.$nombre.'">';
        foreach ($contenido as $etiqueta => $url) {
        $submenu .='<li><a href="'.$url.'">'.$etiqueta.'</a></li>';
        }
        $submenu .= "</ul>";
        $salida[$nombre]=$submenu;
    }
    
    
    return $salida;
 
}

$a = crear_menu([
    "menu1"=>[
        "etiqueta" => "url",
        "etiqueta1" => "url1",
        ],
    "menu2"=>[
        "etiqueta" => "url",
        "etiqueta1" => "url1",
        ],
    ]
);

echo $a["menu1"];
echo $a["menu2"];