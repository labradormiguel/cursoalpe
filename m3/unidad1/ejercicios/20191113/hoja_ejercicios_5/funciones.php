<?php

/*
 * Suma números de un array
 */

function sumarNumeros($arg){
        $salida = 0;
            foreach($arg as $v){
                $salida += $v;
            }
            return $salida;
        }

/*
 * Multiplica números de un array sin usar foreach
 */
        
function productoNumeros($arg){
        $salida = array_product($arg);
            return $salida;
        }
        
/*
 * Imprime un array de números
 */

function imprimirNumeros($arg){
        foreach($arg as $v){
            echo $v." ";
        }
    }
    
/*
 * Compara dos números e imprime si son iguales o no
 */
    
function compararImprimiendo($arg1,$arg2){
        if($arg1==$arg2){
            echo "Son iguales";
        }else{
            echo "Son distintos";
        }
    }
    
/*
 * Compara dos números y devuelve si son iguales o no
 */
    
function compararDevolviendo($arg1,$arg2){
        $salida="";
        if($arg1==$arg2){
            $salida="Son iguales";
        }else{
            $salida="Son distintos";
        }
        return $salida;
}

/*
 * Comprueba si hay números negativos
 */

function comprobarNegativos($arg){
    $negativo=0;
    $recuento=0;
    $salida="";
    foreach ($arg as $v) {
        if ($v < 0){
            $negativo = 1;
        }else{
            $negativo = 0;
        }
        $recuento+=$negativo;
        }
        
        if($recuento<>0){
            $salida="Hay negativos";
        }else{
            $salida="No hay negativos";
        }
        
        return $salida;
    }