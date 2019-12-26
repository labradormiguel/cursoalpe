<?php

namespace clases;

/**
 * Description of Estudiante
 *
 * @author Miguel
 */

class Estudiante extends Persona {

    private $carrera;
    public $notas=[];
    
    function getCarrera() {
        return $this->carrera;
    }

    /*
     * return devuelve las notas en string separadas por comas
     */
    
    function getNotas() {
        return join(",",$this->notas);
    }

    /*
     *  metodo sobreescrito
     */
    
    public function __toString() {
        return "Soy un estudiante";
    }
    
    function setCarrera(string $carrera) {
        $this->carrera = $carrera;
    }

    function setNotas(array $notas) {
        foreach ($notas as $v) {
            $this->notas[] = $v;
        }
        //array_push($this->notas,$notas);
    }

    public function __construct($nombre, $edad,Array $notas=[], string $carrera="") {
        $this->setCarrera($carrera);
        $this->setNotas($notas);
        parent::__construct($nombre, $edad);
    }
    
}
