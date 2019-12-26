<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Profesor
 *
 * @author Miguel
 */
class Profesor extends Persona {
    private $materia;
    private $sueldo = [];
    
    function getMateria() {
        return $this->materia;
    }

    function getSueldo() {
        return $this->sueldo;
    }

    function setMateria(Materias $materia) {
        $this->materia = $materia;
    }

    function setSueldo(int $mes, float $sueldo) {
        $this->sueldo[$mes] = $sueldo;
    }

    public function __construct($nombre, $edad, Materias $materia, $mes=1, $sueldo=0) {
        $this->sueldo= array_fill(0, 12, 0);
        $this->setMateria($materia);
        $this->setSueldo($mes,$sueldo);
        parent::__construct($nombre, $edad);
    }
    
}
