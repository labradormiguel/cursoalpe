<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ejercicio2
 *
 * @author Miguel
 */
class Usuario {
    
    var $nombre = "defecto";
    private $edad;
    protected $telefono;
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getEdad(){
        return $this->edad;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function setEdad($edad){
        $this->edad = $edad;
    }
    
    public function setTelefono($telefono){
        $this->edad = $telefono;
        
    }
    
}

$persona = new Usuario();
echo $persona->nombre;
$persona->setEdad(51);
$persona->setTelefono("232323");
var_dump($persona);
$persona->nombre = "Silvia";
// $persona->edad = 12; elemento privado
$persona->setEdad(12);
// $persona->telefono="202020";
$persona->setTelefono("202020");
var_dump($persona);