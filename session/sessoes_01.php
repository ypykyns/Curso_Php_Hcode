<?php 

require_once("config.php");

// limpa as variáveis da sessão
session_unset($_SESSION['nome']);

// limpa a variável e remove o usuário
// session_destroy();


$_SESSION["nome"]= "Hcode2";

 ?>