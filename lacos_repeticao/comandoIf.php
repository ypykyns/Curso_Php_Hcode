<?php

$suaIdade = 3;
$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeVelho = 65;


if ($suaIdade < $idadeCrianca) {
	
    echo "É criança";
	
	} elseif ($suaIdade < $idadeAdulto) {
		
        echo "É adolescente";

	} elseif ($suaIdade < $idadeVelho) {
		
		echo "É adulto";

	} 

# o else vem por último
#elseif vem sempre antes de else
	
	else {

		echo "É idoso";
	}

	echo "<br>";

// if de forma simples - uma linha apenas
	echo ($suaIdade < 18)? "Menor de idade":"Maior de idade";

  ?>