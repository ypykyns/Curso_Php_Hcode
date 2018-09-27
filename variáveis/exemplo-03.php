<?php 

#tipos básicos
$nome = "Hcode";
$site = 'ww.hode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado= false;
////////////////////////////////////////////

#tipos compostos

$frutas = array("abacaxi","laranja","manga");
$nomes = array("Eduardo","Luis","Maria","Julia");


echo $frutas[1]."<br>";

$i = count($nomes);
$c = 0;

while ($c < $i) 
      
       {
	    echo $nomes[$c]."<br>";
	    $c++;
       }

var_dump($bloqueado);
echo "<br>";

$nascimento = new DateTime();

//var_dump($nascimento);

///////////////////////////////////////////////////////////////////////////////

#tipos especiais
$arquivo =fopen("exemplo-03.php","r");
var_dump($arquivo);

$nulo=NULL;
echo "<br>";
var_dump($nulo);



/////////////////////////////////////////////////////


 ?>