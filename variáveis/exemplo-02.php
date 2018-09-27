<?php 

$anoNascimento = 1982;
$nomeCompleto = "Luis Eduardo de Sousa";

//cometário

/*
 comentários de mais linhas
*/

 #comentário de linha

// exemplo de variável reservada $this

echo $anoNascimento;  
echo "<br>";
echo $nomeCompleto;
echo "<br>";

$nome = "Luis";
$sobrenome = "Sousa";
$nomeConcatenado = $nome." ".$sobrenome."<br>";

echo $nomeConcatenado;


unset($anoNascimento,$nomeCompleto);

  $anoNascimento = "2016";

if (isset($anoNascimento)) {
 
     echo $anoNascimento; 
 }

 ?>