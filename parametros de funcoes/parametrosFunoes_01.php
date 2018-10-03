<?php 

#function ola($texto, $texto2) => funciona também sem um valor pré definido
function ola($texto="bom", $texto2=" dia"){

return "Olá $texto $texto2<br>";

}
echo ola();
echo ola("mother fucker","voce memo");
echo ola("jão","jao");
echo ola("zé ruela","ela")


 ?>