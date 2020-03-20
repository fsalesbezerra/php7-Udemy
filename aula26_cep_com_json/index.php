<?php
// $cep = "13469572";
// $cep = "13469-572";
$cep = filter_input(INPUT_GET, "cep");
$cep = str_replace("-", "", $cep);


$str = file_get_contents('http://apps.widenet.com.br/busca-cep/api/cep.json?code='.$cep);


$arrCidade = json_decode($str);


if($arrCidade != null){

echo "<p>Endereço: <strong>".$arrCidade->address."</strong></p>";
echo "<p>Cidade: <strong>".$arrCidade->city."</strong></p>";
echo "<p>Estado: <strong>".$arrCidade->state."</strong></p>";

}

?>