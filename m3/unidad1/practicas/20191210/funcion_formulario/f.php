<?php

function crearInputs($arg){
    $salida="";
    
    foreach ($arg as $nombre => $resto) {
            if($resto["type"]=="radio"){
                $salida.='<div>' . $resto["label"] . '</div>';
                foreach ($resto["value"] as $v) {
                    $salida.= '<input type="radio" name="' . $nombre . '" value="' . $v["value"] . '" /> <label for="'.$v["id"] .'"> ' . $v["label"] .'</label>';
                }
                
            }else if($resto["type"]=="checkbox"){
            
                $salida.="";
            }else{

            $salida.='<p><label for="' . $resto["id"] . '">'.ucfirst($nombre).": ";
            $salida.='<input name="' . $nombre . '" id="' . $resto["id"] .'" type="' . $resto["type"] .'">';
            $salida.="</label></p>";
            
            }


    }
        
    return $salida;
    
}

?>