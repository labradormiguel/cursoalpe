<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Camion
 *
 * @author Miguel
 */
class Camion extends Vehiculo {
    
    private $carga;
    
    public function cargar($cantidad_a_cargar) {
        $this->carga = $cantidad_a_cargar;
        echo 'Se ha cargado la cantidad: ' . $cantidad_a_cargar . ' <br />';
    }
    
    public function verificar_encendido() {
        if ($this->encendido == true) {
            echo 'Camion encendido <br />';
        } else {
            echo 'Camion apagado <br />';
        }
    }
    
}
