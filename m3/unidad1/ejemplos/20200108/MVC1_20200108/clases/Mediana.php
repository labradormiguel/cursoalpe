<?php

namespace clases;

class Mediana extends Numeros {
    private $mediana;
    
    public function getMediana() {
        return $this->mediana;
    }

    public function setMediana($mediana) {
        $this->mediana = $mediana;
        return $this;
    }

    public function __construct($valores) {
        parent::__construct($valores);
        $this->setMediana;
    }

}
