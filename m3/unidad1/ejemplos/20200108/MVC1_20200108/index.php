<?php

session_start();

spl_autoload_register(
  function ($pClassName) {
    spl_autoload(str_replace("\\", DIRECTORY_SEPARATOR, $pClassName));
  }
);


/*spl_autoload_register(function ($nombre_clase) {
    str_replace("\", , $subject)
    include $nombre_clase . '.php';
});
?>*/

?>

<?php
new clases\Aplicacion();
?>

