<?php 

require_once ("config.php");

// gera umn novo id de sessão
session_regenerate_id();

echo session_id();

var_dump($_SESSION);


 ?>