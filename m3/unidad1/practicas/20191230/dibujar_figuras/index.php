<?php

function circulo($px,$py,$crelleno){
    $salida='<svg width="1000" height="1000">';
    $salida.='<circle cx="' .$px . '" cy="'.$py .'" r="100" stroke-width="4" fill="'. $crelleno .'" />';
    $salida.='</svg>';

    return $salida;
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>20191230</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>    
            #idcentro{
                width: 50px;
            }
            h1{
                color: blue;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <form method="get">
            <h1>Círculo</h1>
            <label for="centro">Centro:
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">X</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Coordenada X" aria-label="Username" aria-describedby="basic-addon1" name="nx">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Y</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Coordenada Y" aria-label="Username" aria-describedby="basic-addon1" name="ny">
                </div>
                <br />
            </label>
            <label for="color">Color:
                <select id="idcolor" name="ncolor">
                    <option value="violet">Magenta</option>
                    <option value="darkslategrey">Cian</option>
                    <option value="olive">Amarillo</option>
                </select>
                <br />
            </label>
            <label for="fondo">Fondo:
                <select id="idfondo" name="nfondo">
                    <option value="white">Sin fondo</option>
                    <option value="violet">Magenta</option>
                    <option value="darkslategrey">Cian</option>
                    <option value="olive">Amarillo</option>
                </select>
            </label>
            <button name="dibujar" class="btn btn-primary">Dibujar</button>
        </form>
        </table>
        
        
        <?php
        
        if(isset($_GET["dibujar"])){
            
        $x = $_GET["nx"];
        $y = $_GET["ny"];
        $color = $_GET["ncolor"];
        $fondo = $_GET["nfondo"];
        
        echo circulo($x, $y, $color);
        echo '<body style="background-color:'. $fondo .'">';
        
        }
        
        ?>
    </body>
</html>
