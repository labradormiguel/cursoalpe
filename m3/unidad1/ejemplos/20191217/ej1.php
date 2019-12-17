<?php
require_once 'Texto.php'; // cargando la clase

$a=new Texto("ejemplo"); // estoy creando ub objeto
$b=new Texto();

echo $a->getCadena(true);
echo $b->getCadena(1);

echo $a->getNumeroVocales();
echo $b->setCadena("Texto para pruebas")->getNumeroVocales();
echo $b->getCadena(true);
echo $b->getNumeroVocales();
echo $b->getNumeroNoVocales();
var_dump($b->setCadena("Controloa")->getRepeticionV());
