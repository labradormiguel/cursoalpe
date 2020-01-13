<?php

namespace clases;

class Media extends Numeros{
    
    private $media;

    public function getMedia() {
        return $this->media;
    }

    private function setMedia() {
        $this->media = array_sum($this->getValores())/count($this->getValores());
    }
    
    public function __construct($valores) {
        parent::__construct($valores);
        $this->setMedia();
    }

}
