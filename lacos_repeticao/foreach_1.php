<?php
	


	$meses = array(
		"Janeiro","Fevereiro","Março",
		"Abril", "Maio","Junho","Julho",
		"Agosto","Setembro","Outubro",
		"Novrembro","Dezembro"
	);

	foreach ($meses as $index => $mes ) {
		
	    echo "Indice: ".($index + 1)."<br>";
		echo "O mês é ".$mes."<br><br>";
	}

 


  ?>