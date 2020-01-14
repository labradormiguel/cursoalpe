<?php

namespace clases;

class Moda extends Numeros {
    
    private $moda;
    
    public function getModa() {
        return $this->moda;
    }

    public function setModa() {
        $salida = arsort(array_count_values($this->valores()));
        $repeticionesMaximas = max($salida);
        $this->moda=[];
        foreach ($salida as $numeros => $repes) {
            if($repes==$repeticionesMaximas){
                $this->moda[]=$numeros;
            }

        }
    }

    public function __construct($valores) {
        parent::__construct($valores);
        $this->setModa();
    }
    
}
