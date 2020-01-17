<?php

session_start();

/*

spl_autoload_register(
  function ($pClassName) {
    spl_autoload(str_replace("\\", DIRECTORY_SEPARATOR, $pClassName));
  }
); */


spl_autoload_register(
	function ($nombre_clase) {
		include str_replace("\\", DIRECTORY_SEPARATOR, $nombre_clase) . '.php';
	});


new clases\Aplicacion();