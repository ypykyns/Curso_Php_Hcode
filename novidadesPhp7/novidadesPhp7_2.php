<?php 

function soma(float ...$valores):float{

	return array_sum($valores);
}

echo var_dump (soma(2,2,3,6));
echo "<br>";

echo soma(10252,2.66658,3.1,60000);
echo "<br>";

echo soma(22,20,3,6);
echo "<br>";

echo soma(2.9,1.9);
echo "<br>";

 ?>