<?php 

$condicao = true;

while ($condicao) {

	$numero = rand(1, 20);

	if ($numero === 3) {

		echo "3 !!!";
		$condicao = false;
		exit();		
	}

	echo $numero ." foi o número sorteado"."<br>";

}



?>