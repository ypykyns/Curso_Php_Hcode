<?php

for ($i = 0; $i <= 1000; $i+= 5){

// ignora esse intervalo
 if ($i > 200 && $i < 800) continue;

// === verifica também o tipo
 if ($i === 900) break;

	echo $i."<br>";
}
 
 


?>