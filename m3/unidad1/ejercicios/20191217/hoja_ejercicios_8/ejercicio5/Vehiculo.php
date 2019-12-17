<?php

/**
 * Description of vehiculo
 *
 * @author Miguel
 */
class Vehiculo {

    public $matricula;
    private $color;
    protected $encendido;
    
    function __construct($matricula, $color, $encendido) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = $encendido;
    }
    
    public function encender() {
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }
    
    public function apagar() {
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
    
}
