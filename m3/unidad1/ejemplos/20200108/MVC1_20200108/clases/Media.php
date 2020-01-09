<?php

namespace clases;

class Media {
    
    public function __construct($valores=[2,3,6,4,9,11,12,7,5,1,8]) {
        $this->setValores($valores);
    }
    
    public function getValores() {
        return $this->valores;
    
    }
        
    public function getMedia() {
        return array_sum($this->getValores()) / count($this->getValores());
    }
    
}
