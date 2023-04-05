<?php

include "ejercicio04.php";

$auto1= new Auto("Ford","Verde");
$auto2= new Auto("Ford","azul");

$auto3= new Auto("falcon","verde",500);
$auto4= new Auto("falcon","verde",600);

$auto5= new Auto("Ferrari","naranja",200,new DateTime('2023-04-05'));

$auto6= new Auto("Fiat","Rojo",700,new DateTime('2020-04-05'));
$arrayAuto=array($auto1,$auto2,$auto3,$auto4,$auto5);

var_dump($arrayAuto);
echo "<br>";
$miGarage = new Garage("Garage",500.00,$arrayAuto);
echo "<br>";
var_dump($miGarage);
echo "<br>";
echo "*****************************************************";
$miGarage->MostrarGarage();
echo "<br>";


if($miGarage->Equals($auto6,$miGarage)){
    echo "el auto existe en el garage";
}else{
    echo "No existe";
}
//Agregar Auto
/*echo "<br>";
echo $miGarage->Add($auto6,$miGarage);
echo "<br>";
$miGarage->MostrarGarage();*/

//Eliminar Auto
echo "<br>";
echo $miGarage->Remove($auto6,$miGarage);
echo "<br>";
$miGarage->MostrarGarage();