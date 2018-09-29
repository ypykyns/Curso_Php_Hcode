<?php

$a = 10;
$b = 2; 

echo $a+$b;

echo "<br>";

echo $a-$b."<br>";

echo "<br>";
echo "<br>";




function reajuste(){
	$i = 1;
    $salario = 1100.00;

	while ($i <= 12){
    
    $salario *= 1.1;
    $i++;

    echo "R$ ".number_format($salario,2, ',', '.')."<br>";
   }

    echo "<br>";
	echo "<br>";

    echo "Salário Final: "."R$ ".number_format($salario,2, ',', '.')."<br>";
   
   //echo "Salário Final: ".$salario;
};

reajuste();

#echo "Salário Final: ".$salario;

// formatar casas decimais 
// print $number."->".number_format($number, 2, '.', ',')."<br>";


  ?>