<?php  
#primeiro exemplo constantes 
# ao definir a constante, determinar se é case sensitive ou não

/* 
   define("SERVIDOR", "127.0.0.1");
   echo SERVIDOR;
*/

define("DATABASE",[
     '127.0.0.1',
     'root',
     'password',
     'test'
]);

print_r(DATABASE); 

echo "<br>";
echo "<br>";


//  teste de commit
// PARA CASE INCENSITIVE usa true no final (não é uma prática usual)

/*
	define("BancoDeDados",[
     	'127.0.0.2',
     	'root2',
     	'password2',
    	 'test2'
	], true);

	print_r(bancodeDADOS);
*/

echo PHP_VERSION;

echo "<br>";
echo "<br>";

echo DIRECTORY_SEPARATOR;

?>







 