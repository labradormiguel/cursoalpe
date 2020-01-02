<?php

// Crear una imagen en blanco.
$imagen = imagecreatetruecolor(400, 300);

// Seleccionar el color de fondo.
$fondo = imagecolorallocate($imagen, 0, 0, 0);

// Rellenar el fondo con el color seleccionado arriba.
imagefill($imagen, 0, 0, $fondo);

// Escoger un color para la elipse.
$col_ellipse = imagecolorallocate($imagen, 255, 255, 255);

// Dibujar la elipse
imageellipse($imagen, 200, 150, 300, 120, $col_ellipse);

// Imprimir la imagen
header("Content-type: image/png");
imagepng($imagen);