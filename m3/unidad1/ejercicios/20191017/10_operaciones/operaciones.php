<?php
$radio = 0;
$long = 0;
$area = 0;
$volumen = 0;
$valorpi = 3.14;

$radio = $_GET["n1"];

$long = ($valorpi*2)*$radio;
$area = $valorpi*($radio^2);
$volumen = (4/3)*($valorpi*($radio^3));

echo "<div>La longitud de la circunferencia es ".$long."</div>";
echo "<div>El área del círculo es ".$area."</div>";
echo "<div>El volumen de la esfera es ".$volumen."</div>";