<?php 

   $nome = "Genivaldo";

function teste(){
	global $nome;
	echo $nome."<br>";
}

function teste2(){
   $nome="Junqueira";
   echo $nome." - teste2";
}

teste();
teste2();

 ?>