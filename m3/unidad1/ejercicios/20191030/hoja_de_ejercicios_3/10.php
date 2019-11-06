<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>10 - Bucles</title>
    </head>
    <body>
        <p>
        <a href="index.php">Men&uacute;</a>
        </p>
        <form>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num1">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num2">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num3">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num4">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num5">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num6">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num7">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num8">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num9">
            </div>
            <div>
            <label>Introduce un n&uacute;mero</label>
            <input type="number" name="num10">
            </div>            
            <button name="envio">Enviar</button>
        </form>
        <?php
//        $uno = 0;
//        $dos = 0;
//        $tres = 0;
//        $cuatro = 0;
//        $cinco = 0;
//        $seis = 0;
//        $siete = 0;
//        $ocho = 0;
//        $nueve = 0;
//        $diez = 0;
//        $suma = 0;
//        $resultado = 0;

//        
//        $uno = $_GET["num1"];
//        $dos = $_GET["num2"];
//        $tres = $_GET["num3"];
//        $cuatro = $_GET["num4"];
//        $cinco = $_GET["num5"];
//        $seis = $_GET["num6"];
//        $siete = $_GET["num7"];
//        $ocho = $_GET["num8"];
//        $nueve = $_GET["num9"];
//        $diez = $_GET["num10"];
//        
//        $suma = $uno + $dos + $tres + $cuatro +$cinco + $seis + $siete + $ocho + $nueve + $diez;
//        $resultado = $suma / 10;
//        echo "La nota media es ".$resultado;
        
//        $c = 1;
//        
//        do{
//            $numero = $_GET["num$c"];
//            echo $numero++;
//        }while($c<=10);
//        $suma = 0;
        
        if(isset($_GET["envio"])){
        
        $lista = [];
            
        for($c=1;$c<=10;$c++){
//            $lista = [
  //              'nota' => $_GET["num$c"],
//            ];
            $lista[] = $_GET["num$c"];
            //echo $suma;
            //var_dump($suma);
            //$suma = $numero + $numero;
            //echo $suma / 10;
        };
        var_dump($lista);
        
        $suma = array_sum($lista);
//        $notas = array_count_values($lista);
        
        echo "<div>suma de las notas ".$suma."</div>";
//        echo "numero de notas: ".$notas;
        
        $media = $suma / 10;
        
        echo "<div>La media es: ". $media ."</div>";
        
        }
        
        ?>
    </body>
</html>
