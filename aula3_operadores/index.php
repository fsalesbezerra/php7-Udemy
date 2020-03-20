<?php

// $soma = 1 + 1;
// echo $soma;
//ou
// echo 1 + 1;
// echo (1 + 1) * 3;

$adicao = 2 + 5;
$subtracao = 5 - 3;
$multiplicacao = 5 * 2;
$divisao = 5 / 2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <p>2 + 5 = <?= $adicao ?></p>
    <p>5 - 3 = <?= $subtracao ?></p>
    <p>5 * 2 = <?= $multiplicacao ?></p>
    <p>5 / 2 = <?= $divisao ?></p>
    <hr>
    <p>Adição * Divisão <?= ($adicao * $divisao) ?></p>
</body>
</html>