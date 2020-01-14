<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $equipo = "127.0.0.1";
        $nombre_usuario = "root";
        $contrasena = "";
        $conexion;
        $basedatos = "videoteca";
        $resultado;
        $salidaArray;
        $tabla = "actor";
        $campos = "*";
        $consulta = "SELECT $campos FROM $tabla";
        
        // conectar a la db, mejor no poner el nombre directamente
        // como cuarto parametro porque no siempre lo permite
        
        $conexion = mysqli_connect($equipo, $nombre_usuario, $contrasena);
        var_dump($conexion);
        
        // seleccionar la db que vamos a usar
        
        $conexion->select_db($basedatos);
        var_dump($conexion);
        
        $resultado = $conexion->query($consulta);
        var_dump($resultado);
        
        $salidaArray = $resultado->fetch_all();
        var_dump($salidaArray);
        
        // volver al primer registro
        
        $resultado->data_seek(0);
        
        // listar con array asociativo
        
        $salidaArray = $resultado->fetch_all(MYSQLI_ASSOC);
        var_dump($salidaArray);
        
        $resultado->data_seek(0);
        $salidaArray = $resultado->fetch_assoc();
        var_dump($salidaArray);
        $salidaArray = $resultado->fetch_assoc();
        var_dump($salidaArray);        

        ?>
    </body>
</html>
