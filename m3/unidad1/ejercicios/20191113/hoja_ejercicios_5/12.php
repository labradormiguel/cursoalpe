<?php

include 'funciones.php';

$texto="Prueba de impresion al reves";

$array = str_split($texto, $split_length=1);

echo $texto;
echo "<br>";
echo vueltaArray($array);