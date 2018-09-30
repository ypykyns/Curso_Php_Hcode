<?php

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camarro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";


#echo $carros[0][3];

// traz o ultimo registro da linha 0.
//echo end($carros[0]);


$pessoas = array();

array_push($pessoas, array(
'nome'=>'Glaucio', 
'idade' => 25
));

print_r($pessoas);

 
?>