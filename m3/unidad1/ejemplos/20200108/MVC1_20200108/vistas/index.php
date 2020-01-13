<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    
</style>

<div class="container-fluid">
    <div class="pl-3 pt-3 row">
        <div class="col-sm-1">
            <a class="badge badge-primary" href="<?= $this->crearRuta(["accion"=>"ejercicio1"])?>">Ejercicio 1</a>
        </div>
        <div class="col-sm-1">
            <a class="badge badge-primary" href="<?= $this->crearRuta(["accion"=>"ejercicio2"])?>">Ejercicio 2</a>
        </div>
        <div class="col-sm-1">
            <a class="badge badge-primary" href="<?= $this->crearRuta(["accion"=>"ejercicio3"])?>">Ejercicio 3</a>
        </div>
    </div>
</div>

<?php

//    echo $this->menu1;