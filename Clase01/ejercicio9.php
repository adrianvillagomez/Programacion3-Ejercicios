<?php

$lapicera = array("color"=>"naranja","marca"=>"Faber","trazo"=>1.5,"precio"=>500);
$lapicera1 = array("color"=>"Azul","marca"=>"Faber","trazo"=>1.5,"precio"=>800);
$lapicera2= array("color"=>"verde","marca"=>"Faber","trazo"=>1.5,"precio"=>900);
foreach ($lapicera as $key => $value) {
    # code...
    echo"$key - $value <br>";
}

foreach ($lapicera1 as $key => $value) {
    # code...
    echo"$key - $value <br>";
}

foreach ($lapicera2 as $key => $value) {
    # code...
    echo"$key - $value <br>";
}