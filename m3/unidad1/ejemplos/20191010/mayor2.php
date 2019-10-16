<?php
	// Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
	// Es posible que el codigo generado no sea completamente correcto. Si encuentra
	// errores por favor reportelos en el foro (http://pseint.sourceforge.net).

	$stdin = fopen('php://stdin','r');
	// Introduzco dos números y me devuelve el mayor
	$num1 = 0;
	$num2 = 0;
	echo 'Escribe el primer número',PHP_EOL;
	fscanf($stdin,"%f",$num1);
	echo 'Escribe el segundo número',PHP_EOL;
	fscanf($stdin,"%f",$num2);
	if ($num1>$num2) {
		echo 'El primero es mayor',PHP_EOL;
	} else {
		echo 'El segundo es mayor',PHP_EOL;
	}
?>
