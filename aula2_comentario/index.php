<?php
//aprendendo sobre variáveis, não pode usar caracteres especiais, espaços e acentos
//comentario
/* comenta um bloco */

$nomeCompleto = "Fernando Sales"."<br/>";
$sexo = "M";
$idade = 25;
$salario = 3.500; 
$valido = true;
echo $nomeCompleto;
echo gettype($nomeCompleto); //identifca tipo da variável STRING
echo gettype($sexo); //string ou char
echo gettype($salario); // double
echo gettype($valido); //boolean
echo gettype($idade); //integer



?>