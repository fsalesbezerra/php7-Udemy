<?php
//session_start(); inicia sessão para o host.
//$_SESSION["nome"] = cria uma sessao e atribui um valor a ela.

session_start();
$_SESSION["key"] = date("H:i:s");

// echo $_SESSION["key"];
session_destroy(); 

?>