<?php 

$total = 150;
$desconto = 0.9;


// executa ao menos uma vez, mesmo a codição sendo falsa
do {
	# code...
	$total *= $desconto;

} while ( $total > 100);


echo $total;
?>