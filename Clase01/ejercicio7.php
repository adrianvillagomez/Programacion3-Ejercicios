<?php 
$impares= array();

for ($i=0; $i<10; $i++) { 
    if ($i%2!=0) {
       array_push($impares,$i);       
    }
}

for ($i=0; $i <count($impares); $i++) { 

    echo "$impares[$i] <br>";
}

echo "<br>";

foreach ($impares as $value) {

    echo "$value <br>";
}

echo "<br>";

$j=0;
while ($j==0 || $j <count($impares)) {

    echo "$impares[$j] <br>";
    $j++;

}

?>