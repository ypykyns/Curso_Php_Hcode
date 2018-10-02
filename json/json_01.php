<?php

// exemplo 01 - Json

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

array_push($pessoas, array(
'nome'=>'Joana', 
'idade' => 87
));
array_push($pessoas, array(
'nome'=>'Aderbal', 
'idade' => 8
));
array_push($pessoas, array(
'nome'=>'Jeremias', 
'idade' => 64
));
array_push($pessoas, array(
'nome'=>'Enzo', 
'idade' => 95
));

//print_r($pessoas);

echo json_encode($pessoas);

// echo json_encode($carros);

  ?>