<?php 

#operador de atribuição   = 
$nome = "Jacinto";

#operador de concatenação   . 
echo $nome . " Sobrenome"."<br>";

$nome2 = "Josimar";
$nome2 .= " "."Menezes";
echo $nome2."<br>";

$valorTotal=0;
$contador=0;

while ($contador < 25){
		$valorTotal += 10;
		echo $valorTotal."<br>";
		$contador++;
	} 	


 ?>

