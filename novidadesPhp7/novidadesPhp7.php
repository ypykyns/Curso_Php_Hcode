<?php 

function soma(int ...$valores){

	return array_sum($valores);
}

echo soma(2,2,3,6);
echo "<br>";

echo soma(10252,2.66658,3.1,60000);
echo "<br>";

echo soma(22,20,3,6);
echo "<br>";

echo soma(2.9,1.9);
echo "<br>";

 ?>