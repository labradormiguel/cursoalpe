<?php
echo "<title>Resultado</title>";
$uno = 0;
$dos = 0;
$tres = 0;
$salida = 0;

$uno = $_GET['num1'];
$dos = $_GET['num2'];
$tres = $_GET['num3'];
// mostrar tres números concatenando
//echo $uno . " ";
//echo $dos . " ";
//echo $tres;
// otra forma de mostrarlos
//echo "$uno $dos $tres";
//echo '$uno $dos $tres';
// el pre es para que el depurador salga bien en el navegador
//echo "<pre>";
//var_dump($_GET);
//echo "</pre>";
// probando si hace la suma bien porque en el depurador
// salian como strings en vez de integers
//$suma=$uno+$dos;
//echo $suma;

if($uno > $dos){
    if ($uno > $tres){
        $salida = $uno;
    }else{
        $salida = $tres;
    }
}else{
    if ($dos > $tres){
        $salida = $dos;
    }else{
        $salida = $tres;
    }
}

echo "El n&uacute;mero mayor es el $salida";