<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
}); 

use clases\Vector;
use clases\Numeros;

$a=new Vector([1,1,1,2,2,2,3]);

$a->imprimirValores();
echo "El valor máximo es: " . $a->getMaximo();
echo "<br />";
echo "La moda es: " . $a->getModa();
echo "<br />";

$b= new Numeros([3,1,2,3,3,2,1,1,3,1,2,3,3,3]);
$b->getModa();

$b->imprimirValores();
echo "La media es: " . $b->getMedia();
echo "<br />";
echo "La moda es: " . $b->getModa();