<?php

namespace clases;

class Numeros extends Vector {
    
    private $media;
    
    private function setModa() {
        return sort($this->getValores());
        //$this->moda=10;
    }
    public function getMedia() {
        return array_sum($this->getValores()) / count($this->getValores());
    }

    private function setMedia() {
        $this->media = $media;
        return $this;
    }
    
    private function setModa() {
        $salida = arsort(array_count_values($this->getValores()));
        $repeticionesMaximas = max($salida);
        $this->moda=[];
        foreach ($salida as $$numeros => $$repes) {
            if($repes==$repeticionesMaximas){
                $this->moda[]=$numeros;
            }

        }
        //$this->moda=1;
    }
    
    public function setValores($valores) {
        parent::setValores($valores);
        $this->setModa();
        $this->media;
    }
    
    public function __construct($valores = []) {
        parent::__construct($valores);
        $this->setModa();
    }

}
