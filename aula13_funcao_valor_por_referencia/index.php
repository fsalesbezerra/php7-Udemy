<?php

$salario = 1567.76;
$valorAjuste = 0;

function AjustarSalario($sal, &$valorAjuste){ //
    $valorAjuste = 300.00;
    return ($sal + $valorAjuste);
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "O valor ajustado é de: R$ {$valorFinal}, com aumento de R$ {$valorAjuste}.";


?>