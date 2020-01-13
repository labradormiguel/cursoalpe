<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Numeros
 *
 * @author Miguel
 */
class Numeros {
    public $valores;
    
    public function getValores() {
        return $this->valores;
    }

    public function setValores($valores) {
        $this->valores = $valores;
        return $this;
    }

    public function __construct($valores) {
        $this->valores = $valores;
    }

    
}
