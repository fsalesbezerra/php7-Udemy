<?php 
//ano
echo date("y");
echo "<br>";
//data
echo date("d/m/Y");
echo "<br>";

//data txt
echo date("D/m/Y");
echo "<br>";

//sem zero a esqerda
echo date("j/m/Y");
echo "<br>";


echo "<hr>";

//time
date_default_timezone_set('America/Sao_Paulo');
echo date("H:i:s");
echo "<br>";


$hora = date("H");
echo $hora;
echo "<br>";

if($hora > 0 && $hora <= 5){
    echo "boa madrugada";
}
elseif($hora > 5 && $hora <= 12){
    echo "bom dia";
}
elseif($hora > 12 && $hora < 18){
    echo "boa tarde";
}else{
    echo "Boa noite";
}
?>