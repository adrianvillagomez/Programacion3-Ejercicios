<?php
    //http://localhost/clase01/index.php
    echo "Hola mundo";

    $numero = 0;
    $suma=0;
    echo $suma;
  
        for ($i=0; $i<1000; $i++) { 
            if ($suma<1000) {
                # code...
                $suma+=$i;
                echo "<br/>","numero ",$i;
                echo "<br/>","suma ",$suma;     
            }
        }
       
?>