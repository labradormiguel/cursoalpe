<?php

namespace clases;

/**
 * Description of Persona
 *
 * @author ramon
 */
class Persona {
    private $nombre;
    public $edad;
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function estudios(){
        return "mis estudios son...";
    }
    
    public function mostrar(){
        echo "soy una persona y mi nombre es $this->nombre y mi edad es $this->edad";
    }
    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

}
