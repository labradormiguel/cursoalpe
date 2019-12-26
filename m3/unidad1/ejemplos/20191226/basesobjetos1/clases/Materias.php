<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Materias
 *
 * @author Miguel
 */
class Materias {

    public $nombre;
    private $horas;
    
    function getNombre() {
        return $this->nombre;
    }

    function getHoras() {
        return $this->horas;
    }

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function setHoras(int $horas) {
        $this->horas = $horas;
    }

    public function __construct(string $nombre, int $horas) {
        $this->setHoras($horas);
        $this->setNombre($nombre);
    }
    
}
