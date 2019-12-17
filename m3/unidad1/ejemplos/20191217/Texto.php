<?php

class Texto {
    private $cadena;
    private $numeroVocales;
    private $numeroNoVocales;
    private $repeticionV=[];
    
    function __construct($cadena="") {
        $this->setCadena($cadena);
    }
                
    public function longitud(){
        return mb_strlen($this->cadena);
    }
    
    public function setCadena($cadena){
        $this->cadena=$cadena;
        $this->numeroVocales=$this->vocales();
        $this->numeroNoVocales=$this->noVocales();
        $this->repeticionV=$this->repeticionVocales();
        return $this;
    }
    
    public function getCadena($imprimir=0){
               
        return ($imprimir ? "La cadena es " . $this->cadena : $this->cadena);
        
        /*if($imprimir){
            return "La cadena es " . $this->cadena;
        }else{
            return $this->cadena;
        }*/
    }
    
    public function getNumeroVocales() {
        return $this->numeroVocales;
    }
    
    public function getNumeroNoVocales() {
        return $this->numeroNoVocales;
    }
    
    public function getRepeticionV(){
        return $this->repeticionV;
    }
            
    private function vocales(){
        $vocales=["a","e","i","o","u","á","é","í","ó","ú"];
        $salida=0;

        foreach ($vocales as $valor) {
            $salida+=substr_count(mb_strtolower($this->getCadena()), $valor);
        }
        return $salida;
    }
    
    private function noVocales(){
        return $this->longitud()-$this->numeroVocales;
    }
    
    private function repeticionVocales(){
        $texto=mb_strtolower($this->getCadena());
        $texto=str_replace(["á","é","í","ó","ú"],["a","e","i","o","u"], $texto);
        $vector= str_split($texto);
        $vocales=[
            "a"=>0,
            "e"=>0,
            "i"=>0,
            "o"=>0,
            "u"=>0,
            ];
        $salida= array_intersect_key(array_count_values($vector),$vocales);
        $salida= array_merge($vocales,$salida);

        return $salida;
    }
}