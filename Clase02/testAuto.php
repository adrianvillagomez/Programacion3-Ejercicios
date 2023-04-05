<?php
include "ejercicio03.php";
$auto1= new Auto("Ford","Verde");
$auto2= new Auto("Ford","azul");

$auto3= new Auto("falcon","verde",500);
$auto4= new Auto("falcon","verde",600);
//$mi_fecha = new DateTime('2023-04-04 10:30:00');
$auto5= new Auto("Ferrari","naranja",200,new DateTime('2023-04-05'));

/*var_dump($auto1);
echo "<br>";
var_dump($auto2);
echo "<br>";
var_dump($auto3);
echo "<br>";
var_dump($auto4);
echo "<br>";
var_dump($auto5);
echo "<br>";*/


Mostrar($auto1,$auto2,$auto3,$auto4,$auto5);
$auto3->AgregarImpuesto(1500.00);
$auto4->AgregarImpuesto(1500.00);
$auto5->AgregarImpuesto(1500.00);
Mostrar($auto1,$auto2,$auto3,$auto4,$auto5);

echo "total suma: ",Auto::Add($auto3,$auto4);
echo "<br>";
echo "*********************************************";
echo "<br>";
if($auto1->Equals($auto1,$auto2)){
    echo "son iguales el auto 1 y el auto 2";
    echo "<br>";
}
if ($auto1->Equals($auto1,$auto5)) {
    echo "son iguales  el auto 1 y el auto 5";
    echo "<br>";
}


function Mostrar($auto1,$auto2,$auto3,$auto4,$auto5){
    Auto::MostrarAuto($auto1);
echo "<br>";
Auto::MostrarAuto($auto2);
echo "<br>";
Auto::MostrarAuto($auto3);
echo "<br>";
Auto::MostrarAuto($auto4);
echo "<br>";
Auto::MostrarAuto($auto5);
echo "<br>";
echo "*********************************************";
echo "<br>";
};