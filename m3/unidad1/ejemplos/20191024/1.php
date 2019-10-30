<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        $c=0; //contador
//        $a=[1,4,66,39];
//        $a[30]=23;
//        for($c=0;$c< count($a);$c++){
//            echo $a[$c] . ",";
//        }
//        foreach ($a as $indice=>$valor){
//            echo "$indice: $valor ,";
//        }
//        while ($c< count($a)){
//            echo $a[$c] . ", ";
//            $c++;
//        }
//        do{
//            echo $a[$c] . ", ";
//            $c++;
//        }while($c<count($a));
        $op1 = 0;
        $op2 = 0;
        $x = 0;
        
        $op1 = $_GET["n1"];
        $op2 = $_GET["n2"];
        $x = $_GET["equis"];
        
        echo "$op1 $op2 $x";
        
        if($op1>$op2){
            $op2 = 0;
        }else{
            $op1 = 0;
        }
        
        while ($op1>$op2){
            $op2=$op2+1;
        }
        
        do{
            $op1=$op1+1;
        }while($op1>$op2);
        
        for($i=1;$i<10;$i++){
            $r=$i*5;
            echo "$i,$r";
        }
        switch ($x){
            case 1:
                $op1 = 0;
            case 2:
                $op2 = 0;
            case 3:
                echo $op1;
            default:
                echo $op2;
        }
        ?>
    </body>
</html>
