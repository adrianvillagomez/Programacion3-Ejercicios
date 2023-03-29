<?php

/*
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable
*/

$operador = "+";
$op1 = 3;
$op2 = 3;

switch ($operador) {
    case '+':
        echo "El resultado de la suma es ", $op1 + $op2;
        break;
    case '-':
        echo "El resultado de la suma es ", $op1 - $op2;
        break;
    case '*':
        echo "El resultado de la suma es ", $op1 * $op2;
        break;
    case '/':
        echo "El resultado de la suma es ", $op1 / $op2;
        break;
    default:
        # code...
        break;
}


?>

