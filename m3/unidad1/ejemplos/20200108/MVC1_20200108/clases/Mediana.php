<?php

namespace clases;

class Mediana extends Numeros {
    private $mediana;
    
    public function getMediana() {
        return $this->mediana;
    }

    public function setMediana() {
        sort($this->valores);
        $this->mediana = count($this->getValores());
        $this->mediana = $this->getValores()[floor(($this->mediana/2))];
    }
    
    public function __construct($valores) {
        parent::__construct($valores);
        $this->setMediana();
    }

}
