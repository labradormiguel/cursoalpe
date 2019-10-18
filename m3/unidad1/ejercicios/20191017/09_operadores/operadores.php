<?php

$num1 = 0;
$num2 = 0;
$suma = 0;
$resta = 0;
$producto = 0;
$division = 0;

$num1 = $_GET["n1"];
$num2 = $_GET["n2"];

$suma = $num1+$num2;
$resta = $num1-$num2;
$producto = $num1*$num2;
$division = $num1/$num2;

echo "<div>La suma de ".$num1." y ".$num2." es ".$suma.".</div>";
echo "<div>La resta de ".$num1." y ".$num2." es ".$resta.".</div>";
echo "<div>La multiplicación de ".$num1." y ".$num2." es ".$producto.".</div>";
echo "<div>La división de ".$num1." y ".$num2." es ".$division.".</div>";