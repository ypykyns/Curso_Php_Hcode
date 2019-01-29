<?php 

class Pessoa { 

public $nome; //Atributo

public function falar(){ //Método
   
   return "O meu nome é ".$this->nome;
   }

}

$luis = new Pessoa();
$luis->nome = "Luis Eduardo";
echo  $luis->falar();

 ?>