<?php
//constante não altera
//define

define("min", 17); //Constante chamada de 'min' com valor '17'
define("max", 45); //Constante chamada de 'min' com valor '45'

$idade = 20; //variável idade
//-------------------------------

echo "MIN " . min . "<br/>";
echo "MIN " . max . "<br/>";
echo "Idade: " . $idade . "<br/><br/>";
//-------------------------------------
//Validação IDADE
if($idade >= min && $idade <= max){
    echo "Acesso liberado!"; //true
}else{
    echo "Acesso negado!"; //false
}

?>