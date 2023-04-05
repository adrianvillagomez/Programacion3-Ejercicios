<?php

function InvertirPalabra(){
    $caracteres = array("h","o","l","a");
    //str_split
    $caracteresAlRevez= array_reverse($caracteres);

    print_r($caracteres);
    print_r($caracteresAlRevez);
};

InvertirPalabra();