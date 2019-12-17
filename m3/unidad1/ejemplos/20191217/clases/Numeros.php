<?php

namespace clases;

class Numeros extends Vector {
    
    private $media;
    private function setModa() {
        $this->moda=10;
    }
    public function getMedia() {
        return $this->media;
    }

    private function setMedia() {
        $this->media = $media;
        return $this;
    }

    public function __construct($valores = []) {
        parent::__construct($valores);
        $this->setModa();
    }

}
