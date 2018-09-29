<?php

// atribuindo valores ás variáveis
$a = 10;
$b = 2; 

// concatenando
echo $a+$b;

echo "<br>";

echo $a-$b."<br>";

echo "<br>";
echo "<br>";



// criando função
function reajuste(){
	/* 
	criando as variáveis dentro da função 
	devido ao escopo
    */
	$i = 1;
    $salario = 1100.00;

    // laço de repetição    
	while ($i <= 12){
    
    // aplicando 10% de acrécimo ao valor
    $salario *= 1.1;
    // incrementando o contador
    $i++;


    // exibindo valor formatado
    echo "R$ ".number_format($salario,2, ',', '.')."<br>";
   }

    echo "<br>";
	echo "<br>";

    echo "Salário Final: "."R$ ".number_format($salario,2, ',', '.')."<br>";
   
   //echo "Salário Final: ".$salario;
};

//executando a função
reajuste();

#echo "Salário Final: ".$salario;

// formatar casas decimais 
// print $number."->".number_format($number, 2, '.', ',')."<br>";


  ?>