<?php

$nome = "Fernando Sales";
echo substr($nome, 0, 5); // começa do 0 vai até 5
echo "<hr>";
echo strtolower($nome); 
echo "<hr>";
echo strtoupper($nome); 

// $msg = strip_tags("<h1>Bem Vindo</h1>, acesse o <a href=''>link</a>"); //remove todas formatação html
$msg = strip_tags("<h1>Bem Vindo</h1>, acesse o <a href=''>link</a>", "<a>"); //permissao de tag
echo "<hr>";

echo $msg;

echo "<hr>";

$comida = "Banana, Maçã, Pera, Uva";
$rep = str_replace("Banana", "Morango", $comida); //Banana por Morango
$irep = str_ireplace("banana", "Acerola", $comida); // ignora case sensitive

echo $comida."<br>";
echo $rep."<br>";
echo $irep;

echo "<hr>";


$texto = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$ex = explode(" ", $texto); 
echo $ex[0];

echo "<hr>";

$fulano = "Gabriel Silva";
echo strlen($fulano);
echo "<hr>";

if(strlen($fulano) <= 4){
    echo "yes";
}else {
    echo "no";
}

?>