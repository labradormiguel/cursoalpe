<?php

$suma=0;
$numero=2;
$suma=$numero+$suma;

do{
    $numero=$numero+2;
    $suma=$numero+$suma;
}while($numero<=1000);

echo $suma;