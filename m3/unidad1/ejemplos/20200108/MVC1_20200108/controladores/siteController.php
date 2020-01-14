<?php
namespace controladores;

class siteController extends Controller{
    private $miPie;
    private $miMenu;
    
     public function __construct() {
         parent::__construct();
         $this->miPie="Ejemplo de clase - Alpe Formación";
         $this->miMenu=[
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Ejercicio 1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
            "Ejercicio 2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
            "Ejercicio 3"=>$this->crearRuta(["accion"=>"ejercicio3"])
        ];
     }
    
    public function indexAccion(){
      $this->render([
          "vista"=>"index",
          "pie"=> $this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Inicio"))->html()
    ]);
    }
    
    public function ejercicio1Accion($objeto){
        $v="";
        if(empty($objeto->getValores())){
            $vista="ejercicio1";
            $pie= $this->miPie;
        } else {
            // entro si llegan datos
            $pie="Estaban ordenados ascendentemente";
            $vista="resultadoEjercicio1";
            $v=$objeto->getValores()['numero'];
            sort($v);
            if($v===$objeto->getValores()['numero']){
                $pie="No estaban ordenados ascendentemente";
            }
            $v=join(", ", $v);
        }
        
        $this->render([
          "vista"=>$vista,
          "pie"=> $pie,
          "resultado"=>$v,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio 1"))->html()
    ]);
    }
    
    public function ejercicio2Accion($objeto){
        $vocales = 0;
        $vista = "ejercicio2";
        
        if(!empty($objeto->getValores())){
            $vista="resultadoEjercicio2";
            $texto=new \clases\Frase($objeto->getValores()['frase']);
            $vocales=$texto->getVocales();
        }
        
        $this->render([
          "vista"=>$vista,
          "pie"=> "Ejercicio 2 de práctica 4",
          "resultado"=>$vocales,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio 2"))->html()
    ]);
    }
    
    public function ejercicio3Accion($objeto){
      
        $media = 0;
        $mediana = 0;
        $moda = 0;
        $desviacion = 0;
        
        
        if(empty($objeto->getValores())){
            $this->render([
                "vista"=>"Ejercicio3",
                "pie"=> $this->miPie,
                "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio 3"))->html()
            ]);
        }else{
                    
            $media = new \clases\Media($_GET['numeros']);
            $mediana = new \clases\Mediana($_GET['numeros']);
            $moda = new \clases\Moda($_GET['numeros']);
            
            $this->render([
              "vista"=>"resultadoEjercicio3",
              "resultado1"=>$media->getMedia(),
              "resultado2"=>$mediana->getMediana(),
              "resultado3"=>$moda->getModa(),
              "resultado4"=>$media->getMedia(),
              "pie"=> $this->miPie,
              "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio 3"))->html()
            ]);
               
        }
    
    }
    
}
