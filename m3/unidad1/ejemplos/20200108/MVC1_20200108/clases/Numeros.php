<?php

namespace clases;

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
