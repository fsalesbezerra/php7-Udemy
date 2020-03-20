<?php 

$arrNotas = [
    "aluno1" => [
        "nome" => "Fernando",
        "nota" => 25
    ],
    "aluno2" => [
        "nome" => "Lobo",
        "nota" => 20
    ],
    "aluno3" => [
        "nome" => "Thales",
        "nota" => 15
    ],
    "aluno4" => [
        "nome" => "Gustavo",
        "nota" => 35
    ]
];

foreach($arrNotas as $aluno){
    foreach($aluno as $chave => $valor){
        echo "{$chave} = {$valor} <br>";
    }
    echo "<br>";
}



?>

