<?php

    function Ejercicio02($palabra,$max){

        $arrayPalabras = array("Recuperatoro","Parcial","Programacion");
        if (strlen($palabra) <= $max && in_array($palabra,$arrayPalabras)) {
            return 1 ;
        }else{
            return 0;
        }
    }

    echo Ejercicio02("Parcial",7);
