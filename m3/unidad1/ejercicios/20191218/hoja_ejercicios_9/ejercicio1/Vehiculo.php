<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehiculo
 *
 * @author Miguel
 */
class Vehiculo {
    
    public $matricula;
    private $color;
    protected $encendido;
    
    public function encender() {
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }
    
    public function apagar() {
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
    
}
