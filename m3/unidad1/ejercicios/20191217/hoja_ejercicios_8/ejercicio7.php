<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ejercicio7
 *
 * @author Miguel
 */
class Vehiculo {

    public $matricula;
    private $color;
    protected $encendido;
    
    function __construct($matricula, $color="blanco", $encendido=false) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = $encendido;
    }
    
    /*function __construct($matricula, $color) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = false;
    }
    
    function __construct($matricula) {
        $this->matricula = $matricula;
        $this->color = "blanco";
        $this->encendido = false;
    }*/
    
    public function encender() {
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }
    
    public function apagar() {
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
    
}

$prueba=new Vehiculo("123456");
var_dump($prueba);
