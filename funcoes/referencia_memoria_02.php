<?php 

$pessoa = array(
	             'nome' => 'Joao',
	             'idade'=> 20,
	             'profissão' => 'Pedreiro',
	             'Time' => 'Ponte Preta',
	             'Cidade' => 'Nazaré das Farinhas',
	             'Cor Predileta' => 'Roxo',
	             'Gay' => true,
	             'Drogado' => false

                 );


foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value +=10;
	if (gettype($value) === 'string') $value = $value." "."Pepeka";


	echo $value.'<br>';
}


print_r($pessoa);

 ?>