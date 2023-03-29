<?php


    $arrayNum = array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10));
    echo var_dump($arrayNum),"<br>";
    $acumInt=0;
    $contador=0;
    foreach ($arrayNum as $value) {
        # code...
        $acumInt+=$value;
        $contador++;
    }

    $promedio = $acumInt/$contador;

    if ($promedio>6) {
        # code...
        echo "El promedio es mayor a 6";
    }else if ($promedio<6) {
        # code...
        echo "El ´promedio es menor a 6";
    }else{
        echo "El promedio es igual a 6";
    }
?>