<?php 


$a = 10;

// usando & altera a variável no emdereço de memória
function trocaValor(&$a){

$a += 50;

return $a;

}

// fora da função vale 10
echo $a;

echo "<br>"."<br>";

echo trocaValor($a);

echo "<br>"."<br>";

echo $a;



 ?>