<?php 


function hi(){


$args = func_get_args();

return $args;

}


var_dump(hi("Good Morning"));



 ?>