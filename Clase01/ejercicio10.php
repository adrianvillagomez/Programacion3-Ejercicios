<?php

$lapicera = array("color"=>"naranja","marca"=>"Faber","trazo"=>1.5,"precio"=>500);
$lapicera1 = array("color"=>"Azul","marca"=>"Faber","trazo"=>1.5,"precio"=>800);
$lapicera2= array("color"=>"verde","marca"=>"Faber","trazo"=>1.5,"precio"=>900);

$indexado = array($lapicera,$lapicera1,$lapicera2);
$asociativo = array("PrimerLapicera"=>$lapicera,"SegundaLapicera"=>$lapicera1,"TerceraLapicera"=>$lapicera2);

foreach ($indexado as $key => $value) {
    echo"Indice : $key <br>";
    foreach ($value as $valor =>$elemento) {
        # code...
        echo"$valor : $elemento <br>";
    }
    echo "<br>";
}
echo "<br>";

foreach ($asociativo as $key => $value) {
    echo"$key <br>";
    foreach ($value as $valor =>$elemento) {
        # code...
        echo"$valor : $elemento <br>";
    }
    echo "<br>";
}