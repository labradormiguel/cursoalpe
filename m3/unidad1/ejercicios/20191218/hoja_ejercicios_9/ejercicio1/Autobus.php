<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autobus
 *
 * @author Miguel
 */
class Autobus extends Vehiculo {
    
    private $pasajeros;
    
    public function subir_pasajeros($cantidad_pasajeros) {
        $this->pasajeros = $cantidad_pasajeros;
        echo 'Se han subido '.$cantidad_pasajeros.' pasajeros <br />';
    }
    
    public function verificar_encendido() {
        if ($this->encendido == true) {
            echo 'Autobus encendido <br />';
        } else {
            echo 'Autobus apagado <br />';
        }
    }
    
}
