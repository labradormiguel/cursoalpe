<?php

$conexion= new mysqli("localhost","root","");
$conexion->select_db("videoteca");
$resultado=$conexion->query("show tables");
$resultado->data_seek($_GET["tabla"]);
$tabla=$resultado->fetch_array()[0];
$resultado=$conexion->query("select * from $tabla");
$salida=$resultado->fetch_all(MYSQLI_ASSOC);
var_dump($salida);